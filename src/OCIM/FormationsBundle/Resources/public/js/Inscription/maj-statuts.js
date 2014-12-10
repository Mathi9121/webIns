$(document).ready(function(){

  //event listener
  $("a.majstatuts").on('click',function(e){
    e.preventDefault();

    var idinscription = $(this).attr('data-idinscription');
    var statutinscription = $(this).attr('data-statut');
    var statutconvention = $(this).attr('data-statutconvention');
    statutconvention = (statutconvention == "")? "null" : statutconvention;
    console.log(statutconvention);
    var popup = $('<div class="white-popup"><h2>Statut de l&apos;inscription</h2><hr/><p class="text-centered choix inscription"><span class="attente" data-statut="2">En attente</span><span class="valide" data-statut="1">Validé</span><span class="annule" data-statut="3">Annulé</span></p></div>');
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
      var nouveauStatut = $(this).attr('data-statut');

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
  console.table(data);

}
function changeStatutConvention(data){
  console.table(data);

}
