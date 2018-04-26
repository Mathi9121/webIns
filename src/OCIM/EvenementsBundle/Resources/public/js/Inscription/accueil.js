$(document).ready(function(){

  $('#evenements table tbody tr, #inscriptions table tr').css('cursor', 'pointer');
    $('#evenements table tbody tr').on("mouseenter", function(e){
    $(this).find('a').first().toggleClass('active');
  }).on("mouseleave", function(e){
    $(this).find('a').first().toggleClass('active');
  });
  $('#evenements table tbody tr').on("click", function(e){
    window.location = $(this).find('a').first().attr('href');
  });

  $('#inscriptions table tr').on("mouseenter", function(){
    $(this).find('span.hide').toggle();
  }).on("mouseleave", function(){
    $(this).find('span.hide').toggle();
  }).on("click", function(e){
    window.location = $(this).attr('data-href');
  });

  //liens sur les indicateurs
  $('#indicateurs .unit-20').css("cursor", "pointer");
  $('#indicateurs .unit-20').find('a').hide();
  $('#indicateurs .unit-20').on("mouseenter",
      function(){
        var elem = $(this);
        $(elem).find('.count, .nomcount').stop().fadeOut(100);
        $(elem).find('a').fadeIn(300);
      }).on("mouseleave", 
      function(){
        var elem = $(this);
        $(elem).find('a').stop().fadeOut(100);
        $(elem).find('.count, .nomcount').fadeIn(300);
        // $(elem).find('.count, .nomcount').show();
        // $(elem).find('a').hide();
      }
  );

  $('#indicateurs .unit-20').on("click", function(){
    window.location = $(this).find('a').attr('href');
  });

});
