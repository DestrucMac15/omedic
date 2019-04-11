$(document).ready(function(){
    let respuesta = carrito('','verificar','');

    $('#form_cliente').submit(function(event){
        event.preventDefault();
        let form = $(this);
        let boton = form.find(':button');
        boton.prop('disabled',true);

        let datosForm = form.serialize()+'&accion=save';

        $.ajax({
            url: 'control/carrito.php',
            method: 'POST',
            dataType: 'JSON',
            data: datosForm
        }).done(function(respuesta){
            if(respuesta.estatus == 'success'){
                swal('Correcto','Gracias por contratar nuestros servicios, a continuación uno de nuestros agentes de OMEDIC se pondrán en contacto contigo para confirmar la reservación','success');
                setTimeout(function(){
                    location.href = 'index.php';
                },6000);
            }else{

            }
        });
    });
});