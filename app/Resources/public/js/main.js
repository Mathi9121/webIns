window.onresize = resizeDiv;
function resizeDiv(){
	$("#titre").css('width', $("#content").width());
	$('#titre').wrap("<div id='titre-wrap'></div>");
	$('#titre-wrap').css('height', $('#titre').height());
	$('#titre-wrap').css('margin-bottom', $('#titre').css('margin-bottom'));
}


$(document).ready(function(){

	resizeDiv();

	$('#user a').click(function(){
		$(this).next('nav').animate({ height: "toggle"}, 300);
	});

	$("#nav-toggle").click(function(){
	var state = parseInt($('#content').css('margin-left')) > 200;

		$("#sidebar").animate({
			"left": (state ? -215 : 0)
		}, function(){
			titreFixed();
		});
		$("#content").animate({
			"margin-left": (state ? 0 : 215)
		}, function(){
			titreFixed();
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

	// datepicker init
	// sur les element contenant data-tool='datepicker'
	$("input[data-tool='datepicker']").datetimepicker({
		lang:'fr',
		timepicker:false,
		format:'d/m/Y',
		i18n:{
			fr:{
				months:[
				'Janvier','Fevrier','Mars','Avril',
				'Mai','Juin','Juillet','Août',
				'Septembre','Octobre','Novembre','Décembre',
				],
				dayOfWeek:[
				"Di", "Lu", "Ma", "Me",
				"Je", "Ve", "Sa",
				]
			}
		},
	});


	//flash message
	

});
