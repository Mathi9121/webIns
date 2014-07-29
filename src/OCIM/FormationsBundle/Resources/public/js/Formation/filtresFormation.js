function timestamp(str){
    return new Date(str).getTime();   
}
// Create a list of day and monthnames.
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

// Append a suffix to dates.
// Example: 23 => 23rd, 1 => 1st.
function nth (d) {
  if(d>3 && d<21) return 'th';
  switch (d % 10) {
        case 1:  return "st";
        case 2:  return "nd";
        case 3:  return "rd";
        default: return "th";
    }
}

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
	$("#datefilter").noUiSlider({
// Create two timestamps to define a range.
    range: {
        min: timestamp('2010'),
        max: timestamp('2016')
    },
	
// Steps of one week
    step: 7 * 24 * 60 * 60 * 1000,
	
// Two more timestamps indicate the handle starting positions.
    start: [ timestamp('2011'), timestamp('2015') ],
	
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
});