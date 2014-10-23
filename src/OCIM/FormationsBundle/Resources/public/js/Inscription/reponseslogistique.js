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
		
		// on envoit pour enregistrement
		enregistre(data, this);
		
	});

	$('td.logistique[data-type="text"]').blur(function(){
		var data = new Array();
		data.push({'id': $(this).parent('tr').attr('data-idinscription'), 'date': $(this).attr('data-date'), 'reponse': $(this).html()});
		enregistre(data);
	});
});


function enregistre(data, td){
	$.ajax({
		type: "POST",
		url: $('#majLogistique').text(),
		data: JSON.stringify(data),
	})
	.done(function( msg ) {
		console.log(msg);
	});
}

function updateTotaux(){

}

function updateValues(){

}