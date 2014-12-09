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
  $(document).on("click", ".etape-convention:not(.disabled), .edition-convention:not(.disabled), .num-convention:not(.disabled)", function(){
    var td = $(this);
    td.addClass('disabled');
    var contenu = td.html();

    td.html('<i class="fa fa-refresh fa-spin"></i>');
    var data = new Array();

    var idconvention = td.parent('tr').attr('data-idconvention');
    var etape = td.attr('data-etape');

    var dateedition = "";
    var numconvention = "";

    if(td.is('.edition-convention')){
      dateedition = prompt("Modifier la date d'édition de la convention", $.trim(td.text()));
    }
    if(td.is('.num-convention')){
      numconvention = prompt("Modifier le numéro de la convention", $.trim(td.find('span').text()));
    }

    if(((td.is('.edition-convention')||td.is('.num-convention'))&&(dateedition||numconvention))||
      (td.is('.etape-convention'))){
      data.push({
        'idconvention' : idconvention,
        'numetape' : (etape)? etape : null,
        'edition' : (dateedition)? dateedition : null,
        'numconvention' : (numconvention)? numconvention : null,
      });

      updateConvention(data, td);
    }
    else{
      td.html(contenu);
    }
    td.removeClass('disabled');
  });


  function updateConvention(data, td){

    $.ajax({
      url: $("#href-updateConvention").attr('data-href'),
      type: "POST",
      data: JSON.stringify(data)
      // réussite ajax
    }).done(function(msg){
      // on trouve le type de réponse
      // si c'est le numéro
      if(td.is('.num-convention')){
        var edition = $.trim(td.parent('tr').find('.edition-convention').html());
        var tdcontent = edition.substr(6, 10)+"/"+ edition.substr(3,2)+"/<span>"+ msg +"</span>";
        td.html(tdcontent);
      }
      // date edition
      else if(td.is('.edition-convention')){
        td.html(msg);
        var num = $.trim(td.parent('tr').find('.num-convention').text());
        num = num.substr(8, num.length);
        var edition = msg.substr(6, 10)+"/"+msg.substr(3, 2)+"/<span>"+num+"</span>";
        td.parent('tr').find('.num-convention').html(edition);
      }
      else if(td.is('.etape-convention')){
        if(msg){
          td.addClass("valide");
          td.html(msg)
        }
        else{
          td.removeClass("valide");
          td.html("");
        }
      }


    }).fail(function(){
      alert("L'enregistrement a échoué, veuillez recharger la page");
    });
  }

});
