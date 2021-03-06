$(document).ready(function(){
    let id_blog = $('.container').data('id_blog');
    obtenerBlogs();
    cargarComentarios(id_blog); 

    /*=======GUARDAR COMENTARIOS DEL BLOG========*/
    $('#form_comentario').submit(function(event){
        event.preventDefault();
        $('.mensaje').html(`
            <span>Enviando</span>
        `);
        let id_blog = $('.container').data('id_blog');
        let datos = $(this).serialize()+'&id_blog='+id_blog;
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
});


/*======CARGAR COMENTARIOS=======*/
function cargarComentarios(id_blog){
    $.ajax({
        url: 'control/obtenerComentarios.php',
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

/*=======FUNCTION DE OBTENER BLOGS========*/
function obtenerBlogs(){
    alert();
    $.ajax({
        url: 'control/obtenerBlogs.php',
        method: 'POST',
        dataType: 'JSON'
    }).done(function(respuesta){
        if(respuesta.estatus == 'success'){
            let contenido = '';
            let entradas = '';
            $.each(respuesta.datos,function(index,element){
                let formatFecha = obtenerFecha(element.fecha_blog);
                entradas += `
                <section class="entrada descripcion_blog" data-id_blog="${element.id_blog}">
                    <div class="imagen">
                        <img src="imagenes/blog/${element.imagen_blog}" alt="">
                    </div>
                    <div class="texto">
                        ${element.titulo_blog}
                        <br><span class="fecha">${formatFecha}</span>
                    </div>
                </section>
                `;
            });
            $('#container_entradas').html(entradas);
        }else{
            console.log(respuesta.erno);
        }

        /*=====ENVIAR A DESCRIPCION DE BLOG====*/
        $('.descripcion_blog').click(function(){
            let id_blog = $(this).data('id_blog');
            location.href = "detalle_blog.php?blog="+id_blog;
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