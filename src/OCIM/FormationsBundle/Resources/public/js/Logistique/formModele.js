$(document).ready(function(){

	var place = $('#place');
	var modele = $('.forms-inline-list').attr('data-prototype');
	setOrdreUl();
	$('#place').sortable({
		stop: setOrdreUl,
		axis: 'y'
	});

	$('a.ajoutPrototype').on('click', function(e){
		if(place.children('ul').length == 0)
		{
			var form = modele.replace(/__name__/g, 0);
		}
		else 
		{
			var form = modele.replace(/__name__/g, place.children('ul').length);
		}
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
			$(this).find('li').first().html("<span class='oi' data-glyph='move'></span>");
			$(this).find('input.ordreModeles').val(i);
		})
	}

});