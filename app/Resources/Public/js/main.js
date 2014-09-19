$(document).ready(function(){
	setSidebarSize();
	window.onresize = setSidebarSize;
});

function setSidebarSize(){
	$("#sidebar").css('height', $("#content").innerHeight());
}