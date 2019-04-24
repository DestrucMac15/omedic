$(document).ready(function(){
    carrito('','list','');
    
    $('#form_cliente').submit(function(event){
        event.preventDefault();
        let form = $(this);
        let boton = form.find(':button');
        $('#contenido_paypal').toggleClass('oculto');
    });
    $('#regresar').click(function(){
        $('#contenido_paypal').toggleClass('oculto');
    });
});



/*========REALIZAR PAGO========*/
function realizarPago(precio){
    //Creamos el boton de pago a paypal
    paypal.Buttons({
    // Configuracion de transaccion 
    createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: precio,
                    currency: 'MXN'
                }
            }]
        });
    },
    //Al finalizar la transaccion
    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {

            let datos = $('#form_cliente').serialize();
            $.ajax({
                url: 'control/carrito.php',
                method: 'POST',
                dataType: 'JSON',
                data: datos+'&accion=save'
            }).done(function(respuesta){
                if(respuesta.estatus == 'success'){
                    swal('Correcto','Gracias por contratar nuestros servicios, a continuaci贸n uno de nuestros agentes de OMEDIC se pondr谩 en contacto contigo para confirmar la reservaci贸n','success');
                    setTimeout(function(){
                        location.href = 'destruir_carrito.php';
                    },6000);
                }else{
                    //console.log(respuesta.erno);
                }
            });
        });
    }
    }).render('#paypal-button-container');
}



//========ACTUALIZAR CARRITO DE COMPRAS=======
function actualizarCarrito(servicios){
    let contenido = '';
    if(servicios == 'error'){
        location.href = 'reservaciones.php';
    }else{
        let precio = 0;
        $.each(servicios,function(index,element){
            precio += parseInt(element.datos.precio_servicio);
            contenido += `
                <div class="servicio" data-indice="${index}">
                    <p class="nombre">
                    ${element.datos.nombre_servicio}
                    </p>
                    <p class="descripcion">
                        Para el día: ${obtenerFecha(element.datos.fecha_reserva)}
                    </p>
                    <p class="precio">
                        $${element.datos.precio_servicio}.00
                    </p>
                    <button class="eliminar_servicio">QUITAR</button>
                </div>
            `;
        });
        $('#monto_total').val(precio);
        $('#precio_total').text(`TOTAL MXN $${precio}.00`);
        realizarPago(`${precio}.00`);
        
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
        $('#list_servicios').html(contenido);

        $('.eliminar_servicio').click(function(){
            let boton = $(this);
            let servicio = boton.closest('.servicio');
            let indice = servicio.data('indice');
            swal({
                title: 'Atencion',
                text: "¿Deseas eliminar este servicio del carrito?",
                type: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
                confirmButtonColor: '#165E79',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Quitar'
              },function(){
                swal('Correcto','Se a removido el servicio con exito','success');
                let respuesta = carrito(indice,'delete');
                location.reload();
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

