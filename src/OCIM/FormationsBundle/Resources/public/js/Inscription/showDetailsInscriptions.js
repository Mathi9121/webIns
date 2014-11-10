$(document).ready(function(){
	
	//ecouteur devenement : clique sur une ligne, sauf premiere case
	$('.tab table tr td').not(':first-of-type').click(function(){
	
		if( $(this).closest('.tab').is('.unit-80') ){
			$(this).closest('.tab').switchClass('unit-80', "unit-100");
		}
		else $(this).closest('.tab').switchClass('unit-100', "unit-80");
		
	});
	
});