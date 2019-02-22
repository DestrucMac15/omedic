$(document).ready(function(){
    let id_blog = $('.container').data('id_blog');
    cargarDetalles(id_blog);
    obtenerBlogs();
});


function cargarDetalles(id_blog){
    $.ajax({
        url: 'control/detalleBlog.php',
        method: 'POST',
        dataType: 'JSON',
        data: {id_blog:id_blog}
    }).done(function(respuesta){
        if(respuesta.estatus == 'success'){
            let fecha = obtenerFecha(respuesta.dato.fecha_blog);
            let contenido_publicacion = `
            <div class="publicacion" data-id_publicacion='${respuesta.dato.id_blog}'>
                <div class="public_header">
                    <h3 class="title descripcion_blog" data-id_blog="${respuesta.dato.id_blog}">
                        ${respuesta.dato.titulo_blog}
                    </h3>
                    <p class="date">
                        ${fecha} | ${respuesta.dato.nombre_usuario}
                    </p>
                </div>
                <div class="texto">
                    <div class="imagen">
                        <img src="imagenes/${respuesta.dato.imagen_blog}" alt="">
                    </div>
                    <div class="container">
                        ${respuesta.dato.contenido_blog}
                    </div>
                </div>
            </div> 
            `;
            $('.container_publicaciones').html(contenido_publicacion);
        }else{

        }
    });
}

function obtenerBlogs(){
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
                <div class="entrada descripcion_blog" data-id_blog="${element.id_blog}">
                    <div class="imagen">
                        <img src="imagenes/${element.imagen_blog}" alt="">
                    </div>
                    <div class="texto">
                        ${element.titulo_blog}
                        <br><span class="fecha">${formatFecha}</span>
                    </div>
                </div>
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