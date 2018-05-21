$(document).on('ready',function(){

    $('.contenido').hide();
    $('.contenido:first').show();

    $('.tabs-nav li').click(function(){

        $('.tab-nav li ').removeClass('active');
        $(this).addClass('active');

        $('.contenido').hide();

        var contenido_activo=$(this).find('a').attr('href');
        $(contenido_activo).fadein();
    })
})