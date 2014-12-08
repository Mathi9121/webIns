$(document).ready(function(){

  //Nouvelle Convention
  $("table tbody .no-convention").hover(function(){
    $(this).html("<i class='fa fa-plus'></i> Nouvelle Convention");
  },
  function(){
    $(this).html("");
  });

  // Nouvelle Convention Click
  $("table tbody").on("click", ".no-convention:not(.disabled)", function(){

    var place = $(this);
    // disabled
    place.addClass("disabled");
    place.html('<i class="fa fa-refresh fa-spin"></i>');

    //recupération des données
      data = new Array();
      data.push({'idinscription' : $(this).parent('tr').attr('data-idinscription')});

      // sauvegarde du $this


      var request = $.ajax({
        url: $("#href-derniernumero").attr('data-href'),
        type: "POST",
      });

      request.done(function(msg){
        var conv;
        if(msg == ""){
          conv = prompt("Nouveau numéro de Convention (la première ?)", 0);
        }
        else{
          conv = prompt("Nouveau numéro de Convention (La dernière convention portait le numéro "+msg+")", (parseInt(msg)+1));
        }

        if(conv){
          data.push({'numconvention': conv});
          var request = $.ajax({
            url: $("#href-createConvention").attr('data-href'),
            type: "POST",
            data: JSON.stringify(data)
            // réussite ajax
          }).done(function(msg){
            msg = JSON.parse(msg);
            var numconvention = msg.numconvention;
            var edition = msg.edition;
            var idconvention = msg.idconvention;


            var replace = '<td class="num-convention text-centered"></td><td class="edition-convention text-centered"></td><td data-etape="1" class="etape-convention text-centered"></td><td data-etape="2" class="etape-convention text-centered"></td><td data-etape="3" class="etape-convention text-centered"></td><td data-etape="4" class="etape-convention text-centered"></td>';
            place = place.parent('tr');

            place.attr('data-idconvention', idconvention);

            $(place).find(".no-convention").replaceWith(replace);

            var dateedition = edition.substr(6, 10)+"/"+ edition.substr(3,2);
            $(place).find('.num-convention').html(dateedition+"/<span>"+numconvention+"</span>");
            $(place).find('.edition-convention').html(edition);

          });
        }

      });

      place.removeClass('disabled');

  });


  //ecouteur d events update etape convention validation
  $(document).on("click", ".etape-convention:not(.disabled)", function(){
    var td = $(this);
    td.addClass('disabled').delay(1000).removeClass('disabled');
  });

function getDernierNumeroConvention(){


}





});
