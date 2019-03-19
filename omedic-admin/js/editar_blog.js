$(document).ready(function(){

     /*=======GUARDAR COMENTARIOS DEL BLOG========*/
     $('#form_comentario').submit(function(event){
        event.preventDefault();
        $('.mensaje').html(`
            <span>Enviando</span>
        `);
        let id_blog = $('.container').data('id_blog');
        let nombre = $('#id_usuario').data('nombre_usuario');
        let correo = $('#id_usuario').data('correo_usuario');
        let datos = $(this).serialize()+'&id_blog='+id_blog+'&nombre_usuario='+nombre+'&correo_usuario='+correo;
        let boton = $(this).find('submit');
        boton.prop('disabled',true);
        $.ajax({
            url: 'control/guardar_comentarios.php',
            method: 'POST',
            dataType: 'JSON',
            data: datos
        }).done(function(respuesta){
            if(respuesta.estatus == 'success'){
                $('.mensaje').html(`
                    <span style="color: green;"><i class="far fa-check-circle"></i> Mensaje enviado correctamente</span>
                `);
                let id_blog = $('.container').data('id_blog');
                cargarComentarios(id_blog);
                $('#form_comentario')[0].reset();
            }else{
                //console.log(respuesta.erno);
                $('.mensaje').html(`
                    <span style="color: red;"><i class="fas fa-exclamation-circle"></i> Mensaje enviado correctamente</span>
                `);
            }
        }).always(function(){
            boton.prop('disabled',false);
        });
    });

    /*====COLOCAR SALTOS DE LINEA====*/
    $('#cont_blog').keyup(function(e){
        let text = $(this).val();
        if(e.which === 13){
            text += "\n";
        }
    });

    /*======SELECCIONAR UNA IMAGEN=======*/
    $('#imagen_blog').change(function(event){
        
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

    let id_blog = $('.container').data('id_blog');
    cargarComentarios(id_blog); 
});

/*======CARGAR COMENTARIOS=======*/
function cargarComentarios(id_blog){
    $.ajax({
        url: '../control/obtenerComentarios.php',
        method: 'POST',
        dataType: 'JSON',
        data: {
            id_blog: id_blog
        }
    }).done(function(respuesta){
        if(respuesta.estatus == 'success'){
            
            let contenido = '';
            if(respuesta.num_rows > 0){
                $.each(respuesta.datos,function(index,element){
                    let fecha = obtenerFecha(element.fecha_comentario);
                    contenido += `
                    <div class="comentario" data-id_comentario="${element.id_comentario}">
                        <div class="imagen">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="datos">
                            <p class="nombre">${element.nombre_comentario} ${element.tipo_usuario == 'admin' ? '<i class="fas fa-star" style="color: yellow;"></i>' : ''}</p>
                            <p class="fecha">${fecha}</p>   
                        </div>
                        <div class="texto">
                            ${element.texto_comentario}
                        </div>
                        <div class="button">
                            <button class="btn_responderComentario">Responder</button>
                        </div>
                    </div>
                    `;
                });
            }else{
                contenido = `
                    <div class="no_comentarios">
                        <h3>No hay Comentarios</h3>
                    </div>
                `;
            }
            $('#comentarios').html(contenido);

            /*======BOTON DE RESPONDER COMENTARIOS======*/
            $('.btn_responderComentario').click(function(){
                $('html,body').animate({
                    scrollTop: $("#contenido_comentario").offset().top
                }, 1000);
            });
        }else{
            console.log(respuesta.erno);
        }
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

    let fechaActual = new Date();
    var diasdif= fechaActual.getTime()-newFecha.getTime();
	var diferencia = Math.round(diasdif/(1000*60*60*24))-1;
    if(diferencia == 0){
        return 'Hoy';
    }else if(diferencia == 1){
        return 'Ayer';
    }else{
        return dia+' de '+meses[mes]+' del '+ano;
    }
}