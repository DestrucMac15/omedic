$(document).ready(function(){

    /*====COLOCAR SALTOS DE LINEA====*/
    $('#cont_blog').keyup(function(e){
        let text = $(this).val();
        if(e.which === 13){
            text += "\n";
        }
    });

    /*======SELECCIONAR UNA IMAGEN=======*/
    $('#imagen_blog').change(function(event){
        let foto = $(this);
        let file = $(this)[0].files[0]; //encontrar el archivo
        let nombre_imagen = file.name; //tomar el nombre del archivo
        let size_imagen = file.size; //tomar el tamaño de la imagen
        let mb = (size_imagen/1024).toFixed(2); //convertir el tamaño a megabytes
        console.log(mb);
        let extension = nombre_imagen.substring(nombre_imagen.lastIndexOf('.')+1); //Extraer el tipo de extension de la imagen

        //que solo acepte jpg y png
        if(extension == 'jpg' || extension == 'png'){
            if(mb >= 2048){ //que la imagen no pese mas de 1gb
                swal('Incorrecto','El tamaño tiene que ser menor a 1mb','info');
                $(this).val('');
            }else{
                alert('si pasa');
                $('.row-imagen').html(`<img src="${foto}"`);
            }
        }else{
            $(this).val('');
            swal('Incorrecto','Solo puede subir imagenes formato png o jpg','info');
        }
    });


    /*======GUARDAR NUEVO BLOG=====*/
    $('#form_blog').submit(function(event){
        event.preventDefault();
        let form = $(this);
        let boton = form.find(':submit');
        let id_usuario = $('#id_usuario').data('id_usuario');
        let id_blog = $('.container').data('id_blog');
        
        let datos = new FormData(this);
        datos.append('id_usuario',id_usuario);
        datos.append('id_blog',id_blog);
        $.ajax({
            url: 'control/editar_blog.php',
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
                location.href = "blog.php";
            }else{
                swal(
                    'Error',
                    'No se pudo publicar correctamente',
                    'error'
                );
            }
        }).always(function(){
            boton.prop('disabled',false);
        });;
    });
});