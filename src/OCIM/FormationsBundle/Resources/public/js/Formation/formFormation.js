$(document).ready(function(){

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
    var $removeFormA = $('<span class="input-append"><a href="#" class=""><span class="oi" data-glyph="delete"></span></a></span>');
    $endroit.after($removeFormA);
	$endroit.parent().addClass('input-groups');

    $removeFormA.on('click', function(e) {
        e.preventDefault();
        $endroit.parent().remove();
		});
	}
});