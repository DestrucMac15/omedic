
$(document).ready(function(){
        

    /*=========ABRIR Y CERRAR CARRITO========*/
    $('#cerrar_carrito').click(function(){
        let carrito = $('#container_carrito');
        carrito.toggleClass('oculto');
    });
    $('#abrir_carrito').click(function(){
        let carrito = $('#container_carrito');
        carrito.toggleClass('oculto');
    });
    $('#seguir_carrito').click(function(){
        location.href = 'reservaciones';
    });
    carrito('','list','');


    /*=====FINALIZAR COMPRA=====*/
    $('#finalizar_carrito').click(function(){
        swal({
            title: 'Atención',
            text: "¿Deseas finalizar tu compra?",
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            confirmButtonColor: '#165E79',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ir a PayPal'
          },function(){
            $.ajax({
                url: 'control/carrito.php',
                method: 'POST',
                dataType: 'JSON',
                data: {
                    accion: 'list'
                }
            }).done(function(respuesta){
                if(respuesta == 'error'){
                    alert('Por favor ingresar un servicio');
                }else{
                    location.href = 'venta_detalle';
                }
            });
            
        });    
    });
});

//========ACTUALIZAR CARRITO DE COMPRAS=======
function actualizarCarrito(servicios){
    let contenido = '';
    if(servicios == 'error'){
        contenido = `
            <h3 style="text-align:center;">No hay Articulos</h3>
        `;
        $('#abrir_carrito').html(``);
        $('#carrito_total').text(`$0.00`);
        $('#costo_total').val(0);
    }else{
        let num_rows = servicios.length;
        let precio = 0;
        $.each(servicios,function(index,element){
            precio += parseInt(element.datos.precio_servicio);
            contenido += `
            <div class="servicio" data-indice="${index}">
                <div class="nombre_servicio">
                    ${element.datos.nombre_servicio}
                    <br>
                    <span class="fecha">Para el día: ${obtenerFecha(element.datos.fecha_reserva)}</span>
                </div>
                <div class="precio">
                    <span class="precio">$${element.datos.precio_servicio}.00</span>
                    <button class="eliminar_servicio">QUITAR</button>
                </div>
            </div>
            `;
            $('#abrir_carrito').html(`<span id="num_carrito">${num_rows}</span>`);
        });
        $('#carrito_total').text(`$${precio}.00`);
        $('#costo_total').val(precio);
    }
    return contenido;
}

function carrito(id_servicio,accion,fecha){
    $.ajax({
        url: 'control/carrito.php',
        method: 'POST',
        dataType: 'JSON',
        data: {
            id_servicio: id_servicio,
            accion: accion,
            fecha: fecha
        }
    }).done(function(respuesta){
        let contenido = actualizarCarrito(respuesta);
        $('#list_cart').html(contenido);

        $('.eliminar_servicio').click(function(){
            let boton = $(this);
            let servicio = boton.closest('.servicio');
            let indice = servicio.data('indice');
            swal({
                title: 'Atención',
                text: "¿Deseas eliminar este servicio del carrito?",
                type: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#165E79',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Quitar'
              },function(){
                swal('Correcto','Se ha removido el servicio con éxito','success');
                let respuesta = carrito(indice,'delete');
                actualizarCarrito(respuesta);
            });    
        });
    });
}

//=====TE DA EL FORMATO DE FECHA========
function obtenerFecha(fecha){
    let meses = ['Enero','Febrero','Marzo','Abril',
    'Mayo','Junio','Julio','Agosto','Septiembre',
    'Octubre','Noviembre','Diciembre'];
    let newFecha = new Date(fecha);
    let ano = newFecha.getFullYear();
    let mes = newFecha.getMonth();
    let dia = newFecha.getDate()+1;
    
        return dia+' de '+meses[mes]+' del '+ano;
}

