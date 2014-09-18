$(document).ready(function(){

var place = $('form[name="ocim_formationsbundle_formationformule"]');
var modele = "<div><ul id='ocim_formationsbundle_formationformule_modeles___name__' class='forms-inline-list'><li><input type='text' id='ocim_formationsbundle_formationformule_modeles___name___date' name='ocim_formationsbundle_formationformule[modeles][__name__][date]' required='required' /></li><li><input type='text' id='ocim_formationsbundle_formationformule_modeles___name___description' name='ocim_formationsbundle_formationformule[modeles][__name__][description]' required='required' maxlength='255' /></li><li><select id='ocim_formationsbundle_formationformule_modeles___name___typeReponse' name='ocim_formationsbundle_formationformule[modeles][__name__][typeReponse]'><option value='text'>Texte</option><option value='bool'>Oui/Non</option></select></li><li></li></ul></div>";


	$('a.ajoutPrototype').on('click', function(e){
		var form = modele.replace(/__name__/g, place.children('div').length);
		place.find('div').last().after(form);
		addTagFormDeleteLink(place.find('div').last().find('li').last());
	});

	place.find('div').each(function() {
        addTagFormDeleteLink($(this).find('li').last());
    });
	
	function addTagFormDeleteLink($endroit) {
    var $removeFormA = $('<a href="#" class=""><span class="oi" data-glyph="delete"></span></a>');
    $endroit.append($removeFormA);

    $removeFormA.on('click', function(e) {
        e.preventDefault();
        $endroit.parent().remove();
		});
	}
});