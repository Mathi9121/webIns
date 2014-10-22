$(document).ready(function(){
	$('td.logistique[data-type="text"]').attr('contenteditable', 'true');

	$('td.logistique[data-type="bool"]').click(function(){
	
		if(!$(this).find('span').is(":empty")){
			$(this).html($('<span class="oi" data-glyph="check"></span>'));
		}
		else{
			$(this).find('span').remove();
		}
	});

	$('td.logistique[data-type="text"]').blur(function(){
		var data = new Array();
		data.push({'id': $(this).parent('tr').attr('data-idinscription'), 'date': $(this).attr('data-date'), 'reponse': $(this).html()});
		enregistre(data);
	});
});


function enregistre(data){
	$.ajax({
		type: "POST",
		url: $('#majLogistique').text(),
		//dataType: 'json',
		data: JSON.stringify(data),
	})
	.done(function( msg ) {
		console.log(msg);
	});
}