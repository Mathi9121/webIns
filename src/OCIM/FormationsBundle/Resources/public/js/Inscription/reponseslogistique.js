$(document).ready(function(){
	
	// rend le contenu des cases de type text editable
	$('td.logistique[data-type="text"]').attr('contenteditable', 'true');
	
	// on surveille le click sur les cases de type bool
	$('td.logistique[data-type="bool"]').click(function(){
		
		// les variables utiles à lenregistrement ajax
		var type = $(this).attr('data-type');
		var reponse = $(this).attr('data-reponse');
		var idmodele = $(this).attr('data-idmodele');
		var idinscription = $(this).parent('tr').attr('data-idinscription');
		var idreponse = $(this).attr('data-idreponse');
		
		// on met dans un tableau 
		var data = new Array();
		data.push({
			'type' : type,
			'reponse' : reponse,
			'idmodele' : idmodele,
		    'idinscription' : idinscription,
		    'idreponse' : idreponse,
			});
		
		// on met un icone dans la case pour montrer le chargement
		$(this).html('<i class="fa fa-refresh fa-spin"></i>');
		// on envoit pour enregistrement
		enregistre(data, this);
		
	});

	$('td.logistique[data-type="text"]').blur(function(){
		var data = new Array();
		data.push({
			'type' : $(this).attr('data-type'),
			'reponse' : $.trim($(this).text()),
			'idmodele' : $(this).attr('data-idmodele'),
			'idinscription' : $(this).parent('tr').attr('data-idinscription'),
			'idreponse' : $(this).attr('data-idreponse'),
		});
		
		enregistre(data, this);
	});
});



function enregistre(data, td){
	$.ajax({
		type: "POST",
		url: $('#majLogistique').text(),
		data: JSON.stringify(data),
	})
	.done(function( msg ) {
		
		//message succes
		$('#message-save').message({'delay': 1});
		
		msg = JSON.parse(msg);
		$(td).attr('data-idreponse', msg[0].idreponse);
		
		
		console.log(msg);
		console.log(td);
		
		if(msg[0].type == 'bool'){
			if(msg[0].reponse){
				$(td).attr('data-reponse', 1);
				$(td).html('<i class="fa fa-check fa-2x"></i>');
			}
			else{
				$(td).attr('data-reponse', 0);
				$(td).html('<i style="color: rgba(255,0,0,0.5)" class="fa fa-times fa-2x"></i>');
			}
		}
		else{
			$(td).attr('data-reponse', msg[0].reponse);
		}
	
	// update du total
	var index = $(td).index();
	var tableau = $(td).closest($('.tab'));
	var count = 0;
	$(tableau).find('tbody tr').each(function(i){
		count += parseInt($(this).find('td').eq(index).attr('data-reponse'));
	});
	
	$(tableau).find('tfoot tr').find('td').eq(index-1).html(count);
	
	
	})
	.error(function() {
		$('#message-error').message({'delay': 10});
	});
}
