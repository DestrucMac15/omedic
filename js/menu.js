$(document).ready(function(){
    $('#btn_menu').click(function(){
        $('.menu').toggleClass('oculto');
    });

    $('.servicio_link').click(function(){
        let link = $(this).data('servicio');
        location.href = link;
    });
});