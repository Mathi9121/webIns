$(document).ready(function(){
	
	$('#user a').click(function(){
		$(this).next('nav').animate({ height: "toggle"}, 300);
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
		if(state){
			$("#sidebar nav").addClass("disparu");
		}
		else{
			$("#sidebar nav").removeClass("disparu");
		}
		
	});
	
	//eventlistener plein ecran
	$("#fullscreen-btn").click(toggleFullScreen);
	
	//plein ecran
	function toggleFullScreen() {
		if (!document.fullscreenElement &&    // alternative standard method
				!document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
			if (document.documentElement.requestFullscreen) {
				document.documentElement.requestFullscreen();
			} else if (document.documentElement.mozRequestFullScreen) {
				document.documentElement.mozRequestFullScreen();
			} else if (document.documentElement.webkitRequestFullscreen) {
				document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
			}
		} else {
			if (document.cancelFullScreen) {
				document.cancelFullScreen();
			} else if (document.mozCancelFullScreen) {
			document.mozCancelFullScreen();
			} else if (document.webkitCancelFullScreen) {
				document.webkitCancelFullScreen();
			}
		}
	}
	
});
