$(document).ready(function(){
/*    var ong = $('ul.onglet li').first().addClass('active');
    var url = window.location.href;
    console.log(url);
    console.log($('ul.onglet li a[href^="'+ url +'#"]'));
    $('ul.onglet li a[href^="'+ url +'#"]').on('click', function(){
        var ong = $(this).attr("href");
        var url = window.location.href;
        console.log('hello' + $(this));
        console.log(url.split('#'));
        var dec = url.split('#');
        console.log(dec);
        if(ong === '#')
        {
           return;
        }
        $('html, body').animate({
            scrollTop:$(ong).offset().top
        }, 'slow');
        $('ul.onglet li').removeClass('active');
        $(this).parent().addClass('active');
        console.log($(this));
        return false;
        var ong = $(this);
    });
    console.log(ong);
    $(ong).addClass('active');
*/


    var onglet = ['general', 'contact', 'champPerso', 'convention', 'financement', 'attentes', 'intervenants'];
    //parcours les liens
    $('ul.onglet').find('li').each(function(i){
        var href = onglet[i];
        console.log(href);
        $(this).on('click', function(){
            console.log('lien : ' + href);
            return href;
        });

    });

});
