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

    let contenido = actualizarCarrito('');
    $('#list_cart').html(contenido);
});

//========ACTUALIZAR CARRITO DE COMPRAS=======
function actualizarCarrito(servicios){
    let contenido = '';
    $.each(servicios,function(index,element){
        contenido += `
        <div class="servicio" data-indice="${index}">
            <div class="nombre_servicio">
                ${element.datos.nombre_servicio}
            </div>
            <div class="precio">
                <span class="precio">$${element.datos.precio_servicio}.00</span>
                <button class="eliminar_servicio">QUITAR</button>
            </div>
        </div>
        `;
    });
    return contenido;
}