$(document).ready(function(){

	var place = $('#place');
	var modele = "<ul id='ocim_formationsbundle_formationformule_modeles___name__' class='forms-inline-list'><li></li> <li><input type='text' id='ocim_formationsbundle_formationformule_modeles___name___date' placeholder='jj/mm/aaaa' name='ocim_formationsbundle_formationformule[modeles][__name__][date]' required='required' /></li> <li><input type='text' id='ocim_formationsbundle_formationformule_modeles___name___description'  placeholder='description' name='ocim_formationsbundle_formationformule[modeles][__name__][description]' required='required' maxlength='255' /></li> <li><select id='ocim_formationsbundle_formationformule_modeles___name___typeReponse' name='ocim_formationsbundle_formationformule[modeles][__name__][typeReponse]'><option value='text'>Texte</option><option value='bool'>Oui/Non</option></select></li> <li></li></ul>";

	setOrdreUl();
	$('#place').sortable({
		stop: setOrdreUl,
		axis: 'y'
	});

	$('a.ajoutPrototype').on('click', function(e){
		var form = modele.replace(/__name__/g, place.children('ul').length);
		place.append(form);
		addTagFormDeleteLink(place.find('ul').last().find('li').last());
		setOrdreUl();
	});

	$("ul").each(function() {
        addTagFormDeleteLink($(this).find('li').last());
    });
	
	function addTagFormDeleteLink($endroit) {
    var $removeFormA = $('<a href="#" class="btn btn-smaller"><span class="oi" data-glyph="trash"></span></a>');
    $endroit.append($removeFormA);

    $removeFormA.on('click', function(e) {
        e.preventDefault();
        $endroit.parent().remove();
		});
	}
	
	function setOrdreUl(){
		$.each($('#place ul'), function(i, n){
			$(this).find('li').first().html("<span class='oi' data-glyph='move'></span>&nbsp;&nbsp;&nbsp;"+i);
			$(this).html().replace(/[0-9]+/g, '['+i+']');
			$(this).find('input, select').each(function(){
				$(this).attr('name', $(this).attr('name').replace(/[[0-9]+]/g, '['+i+']'));
				});
		})
	}

});