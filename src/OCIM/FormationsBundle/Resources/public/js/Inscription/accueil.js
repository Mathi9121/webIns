$(document).ready(function(){

  $('#formations table tbody tr, #inscriptions table tr').css('cursor', 'pointer');
  $('#formations table tbody tr').hover(function(e){
    $(this).find('a').first().toggleClass('active');
  });
  $('#formations table tbody tr').click(function(e){
    window.location = $(this).find('a').first().attr('href');
  });

  $('#inscriptions table tr').hover(function(){
    $(this).find('span.hide').toggle();
  }).click(function(e){
    window.location = $(this).attr('data-href');
  });
});
