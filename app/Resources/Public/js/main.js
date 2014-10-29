$(document).ready(function(){
	setSidebarSize();
	window.onresize = setSidebarSize;
	
	$('#sidebar #user a').click(function(){
		$(this).next('ul').animate({ height: "toggle"}, 300);
	});
	
});

function setSidebarSize(){
	$("#sidebar").css('height', $(document).innerHeight());
}