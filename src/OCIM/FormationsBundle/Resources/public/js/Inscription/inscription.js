$(document).ready(function(){
	$('table tbody').sortable({
		axis: 'y',
		items: "> tr.attente",
		stop: function( event, ui ){
			var ordreActuel = ui.item.attr('data-ordre');
			var idInscription = ui.item.attr('data-idinscription');
			
			var idPrec =  ui.item.prev().attr('data-idinscription');
			var idSuiv =  ui.item.next().attr('data-idinscription');
			
			var ordrePrec =  ui.item.prev().attr('data-ordre');
			var ordreSuiv =  ui.item.next().attr('data-ordre');
			
			console.log("idprev : "+idPrec+"   idsuiv : "+idSuiv);
			console.log("ordreprec : "+ordrePrec+"   ordresuiv : "+ordreSuiv);
			
		}
	});

});