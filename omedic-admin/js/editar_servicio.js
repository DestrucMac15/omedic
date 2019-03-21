$(document).ready(function(){

    /*======SELECCIONAR UNA IMAGEN=======*/
    $('#imagen_servicio').change(function(event){
        
        let file = $(this)[0].files[0]; //encontrar el archivo
        let nombre_imagen = file.name; //tomar el nombre del archivo
        let size_imagen = file.size; //tomar el tamaño de la imagen
        let mb = (size_imagen/1024).toFixed(2); //convertir el tamaño a megabytes
        let extension = nombre_imagen.substring(nombre_imagen.lastIndexOf('.')+1); //Extraer el tipo de extension de la imagen

        //que solo acepte jpg y png
        if(extension == 'jpg' || extension == 'png'){
            if(mb >= 2048){ //que la imagen no pese mas de 1gb
                swal('Incorrecto','El tamaño tiene que ser menor a 1mb','info');
                $(this).val('');
            }else{
                let reader = new FileReader();
                reader.onload = function(e){
                    $('.row-imagen').html(`<img src="${e.target.result}">`);
                }
                reader.readAsDataURL(file);
            }
        }else{
            $(this).val('');
            swal('Incorrecto','Solo puede subir imagenes formato png o jpg','info');
        }
    });

    /*========EDITAR SERVICIO=======*/
    $('#form_servicio').submit(function(event){
        event.preventDefault();
        let form = $(this);
        let boton = form.find(':submit');
        let id_servicio = $('.container').data('id_servicio');
        
        let datos = new FormData(this);
        datos.append('id_servicio',id_servicio);
        $.ajax({
            url: 'control/editar_servicio.php',
            method: 'POST',
            dataType: 'JSON',
            data: datos,
            contentType: false,
            cache: false,
            processData: false
        }).done(function(respuesta){
            if(respuesta.estatus == 'success'){
                swal(
                    'Correcto',
                    'Se ha publicado correctamente',
                    'success'
                );
                location.href = "servicios.php";
            }else{
                swal(
                    'Error',
                    'No se pudo publicar correctamente',
                    'error'
                );
            }
        }).always(function(){
            boton.prop('disabled',false);
        });

    });
});