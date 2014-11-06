var
	weekdays = [
		"Dimanche", "Lundi", "Mardi",
		"Mercredi", "Jeudi", "Vendredi",
		"Samedi"
	],
	months = [
		"Janv", "F&eacute;v", "Mars",
		"Avril", "Mai", "Juin", "Juil",
		"Ao&ucirc;t", "Sept", "Oct",
		"Nov", "D&eacute;c"
	];

// Create a string representation of the date.
function formatDate ( date ) {
    return /*weekdays[date.getDay()] + ", " + */date.getDate() + " " +
        months[date.getMonth()] + " " +
        date.getFullYear();
}

// Write a date as a pretty value.
function setDate( value ){
    $(this).html(formatDate(new Date(+value)));   
}



$(document).ready(function(){
var dateMin = parseInt($("tbody>tr.titre-formation:first-child").attr("data-debutstamp")) * 1000;
var dateMax = parseInt($("tbody>tr.titre-formation").last().attr("data-finstamp")) * 1000;

	$("#datefilter").noUiSlider({
// Create two timestamps to define a range.
    range: {
        min: (dateMin - 86400000),
        max: (dateMax + 86400000)
    },
	
// Steps of one week
//Ici j'ai supprimé le *10 (pour step par tranche d'une semaine)
    step: 24 * 60 * 60 * 1000,
	
// Two more timestamps indicate the handle starting positions.
    start: [ dateMin - 86400000, dateMax + 86400000],
	connect: true,
// The setDate function will display the current values.
    serialization: {
        lower: [
            $.Link({
                target: $("#event-start"),
                method: setDate
            })
        ],
		upper: [
            $.Link({
                target: $("#event-end"),
                method: setDate
            })
        ],
        format: {
            decimals: 0   
        }
    }
	});
	
	// filtre par date
	$("#datefilter").change(function(){
		$("tbody tr.titre-formation").css("display", "table-row");
		$('.filtres select option').eq(0).prop('selected', true);
		$("tbody tr.titre-formation").filter(function(index){
			return ($("#datefilter").val()[0] > $(this).attr("data-debutstamp")*1000) || ($("#datefilter").val()[1] < $(this).attr("data-debutstamp")*1000)
		}).css("display", "none");
	});

	// filtre par type de formation
	$('#selectfilter').on('change', function(){
		$("tbody tr").css("display", "none");
			$( ".filtres select option:selected" ).each(function() {
				var typeId = $(this).attr('value');
					if(typeId != "tous"){
						$("tbody tr").filter(function(){
							return typeId == $(this).attr('data-typeformation');
						}).css("display", "table-row");
					}
					else {
						$("tbody tr.titre-formation").css("display", "table-row");
					}
			});
	});

$.expr[":"].contains = $.expr.createPseudo(function(arg) {
    return function( elem ) {
        return $(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
});

		
	// filtre par mot clé
	$('#recherche').on('keyup', function(){
		var recherche = $(this).val();
		$("tbody tr").css("display", "none");
		$('tbody tr td:contains("'+recherche+'")').parent("tr").css("display", "table-row");
	});
	
	//rendre les filtres visibles
	$('.panel .controls a.toggleFiltres').on('click', function(e){
		e.preventDefault();
		$(this).toggleClass('active');
		$('.filtres').slideToggle();
	});
	
	
	// affichage des infos quand click sur une ligne (tr)
	$('tbody tr.titre-formation').hover(function(){
		$(this).children('td').first().find('i.fa.fa-angle-right').toggleClass("hide");
	}).click(function(){

		$('tbody tr td').css("border-bottom", '');
		$('tbody tr.details-formation').hide();
		$('tbody tr.titre-formation').not(this).removeClass('selected');
		$("tbody tr").css("background-color", '');
		
		
		if( $(this).is('.selected') == false){
			$(this).next('tr.details-formation').slideToggle();
			$(this).addClass('selected');
			$(this).find("td").css("border-bottom","0");
			$(this).add($(this).next('tr.details-formation')).css("background-color", '#F4F4F4');
		}
		else{
			$('tbody tr.titre-formation').removeClass('selected');
		}
	});
	
	
});