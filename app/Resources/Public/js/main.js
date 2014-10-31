$(document).ready(function(){
	
	$('#user a').click(function(){
		$(this).next('ul').animate({ height: "toggle"}, 300);
	});
	
	$("#nav-toggle").click(function(){
	var state = parseInt($('#content').css('margin-left')) > 200;
	console.log(state);
		$("#sidebar").animate({
			"left": (state ? -215 : 0)
		});
		$("#content").animate({
			"margin-left": (state ? 0 : 215)
		});
	});
	
});
