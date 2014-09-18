$(document).ready(function(){
	hidecols(['.contact','.convention','.attentes']);
	
	$('.showcols').on('click', function(){
		showcols($(this).attr('data-classe'));
	});
	$('.hidecols').on('click', function(){
		console.log($(this).attr('data-classe'));
		hidecols($(this).attr('data-classe'));
	});
	
});

function hidecols(classes){
	$.each(classes, function(i, n){
		$(n).children('span').css({'display':'none'});
		$(n).css({'padding':'0px','min-width':'inherit'});
		$('th').filter(n).css({'display':'none'});
		$('th').filter(n).first().css({'display':'table-cell','padding':'auto'}).attr('colspan', $('th').filter(n).length).prepend("<a href='#' data-classe="+n+" class='showcols "+n.substr(1)+" btn btn-smaller btn-outline btn-white'><span class='oi' data-glyph='plus'></span>");
	})
}

function showcols(classe){
	$(classe).children("span").css('display','inline');
	$(classe).css({'padding':'auto','min-width':'inherit'});
	$('th').filter(classe).css({'display':'table-cell'});
	var scrollpos = $('th').filter(classe).first().offset().left-$('.table-container').offset().left;
	$('th').filter(classe).first().css({'display':'table-cell','padding':'auto'}).attr('colspan', '0');
	$("a.showcols").filter($(classe)).remove();
	$('.table-container').animate({scrollLeft:scrollpos}, 500);
	var nom = classe.substr(1).charAt(0).toUpperCase()+classe.substr(2);
	$('thead tr:first-child th:contains("'+nom+'")').append("  <a href='#' class='hidecols' data-classe='"+classe+"'><span class='oi' data-glyph='minus'></span></a>");
}