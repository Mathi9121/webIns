$(document).ready(function(){

  //ecouteur
  $(".export").on("click", function(e){
    e.preventDefault();

    var linkslist = $.ajax({
      type: 'POST',
      url: $("#liensExport").text(),
    }).done(function(msg){
      
    });

    var popupExport = $('<div class="white-popup"><h2>Export d&apos;un document</h2><hr/></div>');

    $.magnificPopup.open({
      items: {
        src: popupExport,
        type: 'inline',
      }
    });
  })
})
