$(document).ready(function(){
	
	initTotaux();
	
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
				$(td).html('<span class="logistique ok">1</span>');
			}
			else{
				$(td).attr('data-reponse', 0);
				$(td).html('<span class="logistique zero">0</span>');
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

function initTotaux(){
		var count = new Array();
		$("#logistique").find('tbody tr:first-child td').each(function(i){
			var to = 0;
			var index = i;
			
			$("#logistique").find('tbody tr').each(function(j){
				to += parseInt($(this).find('td').eq(index).attr('data-reponse'));
			});
			count.push(to);
		});
		
		for(var i = 3 ; i <= (count.length+1) ; i++){
			$("#logistique").find('tfoot tr td').eq(i-1).text(count[i]);
		}

	}
