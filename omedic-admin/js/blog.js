$(document).ready(function(){
    listarBlogs();

    //=======BUSCAR POR NOMBRE=====
    $('#form_blog').submit(function(event){
        event.preventDefault();
        let filtro = $('#busqueda_blog').val().toUpperCase();
        let contenedor = $('#list_blogs');
        let num_rows = buscar(contenedor,filtro);
        if(num_rows > 0){
            $('#mensaje').html('');
        }else{
            $('#mensaje').html(`
                <div style="margin: 15px 0px;">
                    <h3 style="text-align:center;">No se encontro la entrada</h3>
                </div>
            `);
        }
    });
});

function listarBlogs(){
    $.ajax({
        url: 'control/listarBlogs.php',
        method: 'POST',
        dataType: 'JSON',
    }).done(function(respuesta){
        if(respuesta.estatus == 'success'){
            let contenido = '';
            if(respuesta.num_rows > 0){
                $.each(respuesta.datos,function(index,element){
                    let formatFecha = obtenerFecha(element.fecha_blog);
                    contenido += `
                        <div class="blog" data-id_blog='${element.id_blog}'>
                            <div class="nombre_blog">
                                <a href="detalle_blog.php?id_blog=${element.id_blog}" class="name_blog">
                                    ${element.titulo_blog} <i class="fas fa-edit"></i>
                                </a>
                            </div>
                            <div class="usuario">
                                ${element.nombre_usuario}
                            </div>
                            <div class="comentario_blog">
                                <a href="detalle_blog.php?id_blog=${element.id_blog}" class="coment_blog">
                                    <i class="fas fa-comment-alt"></i> ${element.num_comentarios}    
                                </a>
                            </div>
                            <div class="fecha_blog">                                
                                    ${formatFecha}
                            </div>
                        </div>
                    `;
                });
                
            }else{
                contenido = `
                    <h2 style="text-align: center">
                        No hay entradas
                    </h2>
                `;
            }
            $('#list_blogs').html(contenido);
        }else{
            console.log(respuesta.erno);
        }
    });
}

function buscar(contenedor,filtro){
    let filtroBusqueda = filtro;
    let contenedorPadre = contenedor;
    let nombre_blog, usuario;
    let hijos = contenedorPadre.find('.blog');
    hijos.each(function(){
        nombre_blog = $(this).find('.name_blog').text().toUpperCase();
        usuario = $(this).find('.usuario').text().toUpperCase();

        if(nombre_blog.indexOf(filtroBusqueda)>-1 || usuario.indexOf(filtroBusqueda)>-1){
            $(this).css({display:''});
        }else{
            $(this).css({display:'none'});
        }
    }); 
    var num_rows = contenedorPadre.find('.blog:visible').length;
    return num_rows;
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