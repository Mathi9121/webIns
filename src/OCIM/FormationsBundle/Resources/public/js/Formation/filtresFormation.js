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
var dateMin = parseInt($("tbody>tr:first-child").attr("data-debutstamp")) * 1000;
var dateMax = parseInt($("tbody>tr:last-child").attr("data-finstamp")) * 1000;

	$("#datefilter").noUiSlider({
// Create two timestamps to define a range.
    range: {
        min: (dateMin - 86400000),
        max: (dateMax + 86400000)
    },
	
// Steps of one week
    step: 7 * 24 * 60 * 60 * 1000,
	
// Two more timestamps indicate the handle starting positions.
    start: [ dateMin-3600, dateMax+3600 ],
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
		$("tbody tr").css("display", "table-row");
		$('.filtres select option').eq(0).prop('selected', true);
		$("tbody tr").filter(function(index){
			return ($("#datefilter").val()[0] > $(this).attr("data-debutstamp")*1000) || ($("#datefilter").val()[1] < $(this).attr("data-debutstamp")*1000)
		}).css("display", "none");
	});

	// filtre par type de formation
	$('.filtres select').on('change', function(){
		$("tbody tr").css("display", "none");
			$( ".filtres select option:selected" ).each(function() {
				var typeId = $(this).attr('value');
					if(typeId != "tous"){
						$("tbody tr").filter(function(){
							return typeId == $(this).attr('data-typeformation');
						}).css("display", "table-row");
					}
					else {$("tbody tr").css("display", "table-row");}
			});
	});
});