$(document).ready(function(){

//input date
$('input.datepicker').wrap('<div class="input-groups"></div>').before('<span class="input-prepend"><i class="fa fa-calendar"></i></span>');

var place = $('#ocim_formationsbundle_formation_formationFormule');
var modele = place.attr('data-prototype');


	$('a.ajouterFormule').on('click', function(e){
		var form = modele.replace(/__name__/g, place.children().length);
		place.append(form);
		addTagFormDeleteLink(place.find('select').last());
	});

	place.find('select').each(function() {
        addTagFormDeleteLink($(this));
    });
	
	function addTagFormDeleteLink($endroit) {
    var $removeFormA = $('<span class="input-append"><a href="#" class="" title="Supprimer cette formule"><i class="fa fa-times"></i></a></span>');
    $endroit.after($removeFormA);
	$endroit.parent().addClass('input-groups');

    $removeFormA.on('click', function(e) {
        e.preventDefault();
        $endroit.parent().remove();
		});
	}
});  