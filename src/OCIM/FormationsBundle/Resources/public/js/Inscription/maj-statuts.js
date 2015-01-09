$(document).ready(function(){

  //event listener
  $("a.majstatuts").on('click',function(e){
    e.preventDefault();

    var idinscription = $(this).attr('data-idinscription');
    var statutinscription = $(this).attr('data-statut');
    var statutconvention = $(this).attr('data-statutconvention');
    statutconvention = (statutconvention == "")? "null" : statutconvention;
    var popup = $('<div class="white-popup"><h2>Statut de l&apos;inscription</h2><hr/><p class="text-centered choix inscription"><span class="annule" data-statut="3"><i class="fa fa-times fa-fw"></i>Annulé</span><span class="attente" data-statut="2"><i class="fa fa-question fa-fw"></i>En attente</span><span class="valide" data-statut="1"><i class="fa fa-check fa-fw"></i>Validé</span></p></div>');
    popup.find('[data-statut='+statutinscription+']').addClass('selected');

    popup.append('<br/><h2>Statut de la Convention</h2><hr/>');
    popup.append('<p class="text-centered choix convention"><span class="non" data-statutconvention="0"><i class="fa fa-times fa-fw"></i>Non</span><span class="saispas" data-statutconvention="null"><i class="fa fa-question fa-fw"></i>Ne sais pas</span><span class="oui" data-statutconvention="1"><i class="fa fa-check fa-fw"></i>Confirmé</span></p>');

    popup.find('[data-statutconvention='+statutconvention+']').addClass('selected');

    popup.find('.choix.inscription span').on('click', function(){
      popup.find('.choix.inscription span').removeClass('selected');
      $(this).addClass('selected');
      var nouveauStatut = $(this).attr('data-statut');
      var data = new Array({'idinscription': idinscription, 'statut': nouveauStatut});

      changeStatutInscription(data);


    });

    popup.find('.choix.convention span').on('click', function(){
      popup.find('.choix.convention span').removeClass('selected');
      $(this).addClass('selected');
      var nouveauStatut = $(this).attr('data-statutconvention');
      var data = new Array({'idinscription': idinscription, 'statut': nouveauStatut});
      changeStatutConvention(data);
    })

    $.magnificPopup.open({
      items: {
        src: popup,
        type: 'inline',
      }
    });

  });

});

function changeStatutInscription(data){
  $.ajax({
    url: $.trim($('#updateinscription').text()),
    type: "POST",
    data: JSON.stringify(data)
  }).done(function(statut){
    var classStatut = '';

    if(statut == 1){
      classStatut = "valide";
    }
    else if(statut == 2){
      classStatut = "attente";
    }else if(statut == 3){
      classStatut = "annule";
    }

    $("tr[data-idinscription="+data['0']['idinscription']+"]").removeClass('attente').removeClass('valide').removeClass('annule').addClass(classStatut);

  }).fail(function(){
    alert("Erreur pendant l'enregistrement ! Rechargez la page.");
  });

}
function changeStatutConvention(data){
  $.ajax({
    url: $.trim($('#updateconvention').text()),
    type: "POST",
    data: JSON.stringify(data)
  }).done(function(statut){
    console.log(statut);

    var statutsConvention = new Array({'1' : '<span class="label label-outline label-green" title="Demande de convention confirmée"><i class="fa fa-check"></i></span>', '0' : '<span class="label label-outline label-red" title="Non"><i class="fa fa-times"></i></span>', 'null': '<span class="label label-outline label-yellow" title="Ne sais pas"><i class="fa fa-question"></i></span>'});

    $("#general tr[data-idinscription="+data['0']['idinscription']+"] .tdconvention").html(statutsConvention['0'][statut]);

  }).fail(function(){
    alert("Erreur pendant l'enregistrement ! Rechargez la page.");
  });

}
