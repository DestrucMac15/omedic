$(document).ready(function(){
    /*=========ABRIR Y CERRAR CARRITO========*/
    $('#cerrar_carrito').click(function(){
        let carrito = $('#container_carrito');
        carrito.toggleClass('oculto');
    });
    $('#abrir_carrito').click(function(){
        let carrito = $('#container_carrito');
        console.log(carrito);
        carrito.toggleClass('oculto');
    });

    
});