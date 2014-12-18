$(document).ready(function(){

  //ecouteur
  $(".export").on("click", function(e){
    e.preventDefault();
    var idinscription = $(this).attr('data-idinscription');

    $.ajax({
      type: 'POST',
      url: $.trim($("#liensExport").text()),
      data: idinscription,
    }).done(function(data){
        data = JSON.parse(data);

        console.log(data);

        // construction du select html
        var select = $('<select class="width-100"></select>');
        for(var i = 0; i < data.length; i++){
          select.append($('<option value="'+data[i]['uri']+'">'+data[i]['nom']+'</option>'));
        }

        var popupExport = $('<div class="white-popup"><h2>Export d&apos;un document</h2><hr/></div>');
        popupExport.append(select);
        popupExport.append("<br/><br/><div class='group'><a href='#' class='btn btn-green right'><i class='fa fa-download fa-fw'></i>Exporter</a></div>");
        $.magnificPopup.open({
          items: {
            src: popupExport,
            type: 'inline',
          }
        });
    }).fail(function(msg){
      console.log(msg);
    });



  })

})
