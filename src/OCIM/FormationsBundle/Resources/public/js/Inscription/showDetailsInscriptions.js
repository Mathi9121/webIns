$(document).ready(function(){
	
	// initialisation
	$('td.insc.actions').hide();
	
	//quand on change d'onglet, on ferme les détails s'il y en a
	$('.nav-tabs').on('show.tools.tabs', function(tab, hash)
	{
		$(".details-inscription").remove();
		$('.tab').switchClass('unit-80', "unit-100");
	});
	
	
	//ecouteur devenement : clique sur une ligne, sauf premiere case
	$('.tab:not(#logistique, #convention) table tr td').not(':first-of-type').css('cursor', 'pointer').click(function(){
	
		var idinscription = $(this).closest('tr').attr('data-idinscription');
		var nom = $(this).closest('tr').children().eq(1).text();
		var prenom = $(this).closest('tr').children().eq(2).text();
		
		var formule = $("#general table tbody tr[data-idinscription='"+idinscription+"']").children().eq(3).find("abbr").attr('title');
		var formuleId = $("#general table tbody tr[data-idinscription='"+idinscription+"']").children().eq(3).text();
		console.log(formule);
		
		// fermeture des détails
		if( $(this).closest('.tab').is('.unit-80') ){
		
			$(this).closest('.tab').switchClass('unit-80', "unit-100", 300, "easeInOutCubic");
			$(".details-inscription").remove();
		}
		// on affiche les détails d'une inscription
		else {
			$(this).closest('.tab').switchClass('unit-100', "unit-80", 300, "easeInOutCubic", function(){
				
				//animation finie
				//on crée la boite
				
				var details = $("<div class='unit-20 details-inscription'></div>");
				$("<h2>"+ nom + prenom +"</h2>").appendTo(details);
				$(this).closest('.tab').after(details);
				
			});

		}
		
	});
	
	
});