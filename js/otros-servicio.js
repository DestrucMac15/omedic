$(document).ready(function(){

    $('.btn-mas').click(function(){
        let boton = $(this);
        let texto = boton.closest('.texto');
        let desc = texto.siblings('.descripcion');
        desc.toggleClass('mostrar');
    });

    $('.cerrar').click(function(){
        let boton = $(this);
        let desc = boton.closest('.descripcion');
        desc.toggleClass('mostrar');
    });
});