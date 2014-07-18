$(document).ready(function(){

	var place = $('#ocim_formationsbundle_formation_formationFormule');
	var modele = place.attr('data-prototype');
	
	$('a.ajouterFormule').on('click', function(){
		place.append(
			modele.replace(/__name__/g, place.children().length)
		);
	});

});