$(document).ready(function(){
	$('table tbody').sortable({
		axis: 'y',
		items: "> tr.attente",
		stop: function( event, ui ){
		
			var ordre = ui.item.attr('data-ordre');
			var id = ui.item.attr('data-idinscription');
			var idPrec =  ui.item.prev().attr('data-idinscription');
			var idSuiv =  ui.item.next().attr('data-idinscription');
			var ordrePrec =  ui.item.prev().attr('data-ordre');
			var ordreSuiv =  ui.item.next().attr('data-ordre');			
			var data = new Array();
			
			//rien au dessus
			if((typeof ordrePrec == 'undefined')|(typeof idPrec == 'undefined')){
				// si la valeur de lordre du suivant est egale a 0
				if(ordreSuiv == 0){
					var nouvelOrdre = 0;
					var ordreSuiv = parseInt((ui.item.next().next().attr('data-ordre') - ordreSuiv)/2);
					changeOrdre(id, nouvelOrdre);
					changeOrdre(idSuiv, ordreSuiv);
					data.push({id:nouvelOrdre});
					data.push({idSuiv:ordreSuiv});
				}
				// Sinon on /2 la valeur de lordre suivant
				else{
					var nouvelOrdre = parseInt(ordreSuiv/2);
					changeOrdre(id, nouvelOrdre);
					data.push({id:nouvelOrdre});
				}
			}
			
			else if((typeof ordreSuiv == 'undefined')|(typeof idSuiv == 'undefined')){
				var nouvelOrdre = (parseInt(ordrePrec)+1000);
				changeOrdre(id, nouvelOrdre);
				data.push({id:nouvelOrdre});
			}
			
			//à la même place
			else if((ordrePrec < ordre)&&(ordreSuiv > ordre)){
				
			}
			
			else if((ordrePrec > ordre)&&(ordreSuiv > ordre)){
				var nouvelOrdre = parseInt(ordrePrec)+parseInt((ordreSuiv - ordrePrec) /2)
				changeOrdre(id, nouvelOrdre);
				data.push({id:nouvelOrdre});
			}
			
			//entre deux ordre, le suivant moins élevé
			else if((ordrePrec < ordre)&&(ordreSuiv < ordre)){
				var nouvelOrdre = parseInt(ordrePrec)+parseInt((ordreSuiv - ordrePrec) /2);
				changeOrdre(id, nouvelOrdre);
				data.push({id:nouvelOrdre});
			}
			
			if(data.length != 0){
				$.ajax(function(){
					
				});
			}
			
		}
	});

});

function changeOrdre(id, ordre){
	$('table tbody tr').filter('[data-idinscription="'+id+'"]').attr('data-ordre', ordre);
}