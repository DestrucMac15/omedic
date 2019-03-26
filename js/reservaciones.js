$(document).ready(function(){

    listarServicios('','','exacta');
    listarCategorias();

    $('#form_servicios').submit(function(event){
        event.preventDefault();
        let nombre_servicio = $('#busqueda_servicio').val();
        listarServicios('nombre_servicio',nombre_servicio,'relacionada');
        $('#mensaje_busqueda').html(`<span class="buscador"><i class="fas fa-times" id="eliminar_busqueda"></i> ${nombre_servicio}</span>`);
        $(this)[0].reset();
    });
});

function listarServicios(clave,valor,tipo_busqueda){
    let datos = {
        clave: clave,
        valor: valor,
        tipo_busqueda: tipo_busqueda
    }
    $.ajax({
        url: 'control/listar_servicios.php',
        method: 'POST',
        dataType: 'JSON',
        data: datos
    }).done(function(respuesta){
        if(respuesta.estatus == 'success'){
            if(respuesta.num_rows > 0){
                let contenido = '';
                $.each(respuesta.datos,function(index,element){
                    contenido += `
                    <div class="servicio" data-id_servicio="${element.id_servicio}">
                        <div class="contenido">
                            <div class="imagen">
                                <img src="imagenes/servicios/${element.foto_servicio}" alt="">
                            </div>
                            <div class="texto">
                                <ul>
                                    <li class="nombre">
                                        ${element.nombre_servicio}
                                    </li>
                                    <li class="duracion">
                                        Duracion: ${element.tiempo_servicio} min.
                                    </li>
                                    <li class="precio">
                                        $${element.precio_servicio}.°°
                                    </li>
                                </ul>
                                <button class="reservar">
                                    Reservar 
                                </button>
                                <span class="mas">Ver más</span>
                            </div>
                        </div>
                        <div class="descripcion">
                            <div class="texto">
                                ${element.descripcion_servicio}
                            </div>
                            <div class="cerrar">
                                <i class="fas fa-sort-down cerrar_descripcion"></i>
                            </div>
                        </div>
                    </div>
                    `;
                });
                $('#listar_servicios').html(contenido);
                
                //ver la descripcion
                $('.mas').click(function(){
                    let boton = $(this);
                    let contenido = boton.closest('.contenido');
                    let descripcion = contenido.siblings('.descripcion');
                    contenido.toggleClass('arriba');
                    descripcion.toggleClass('arriba');
                });
                $('.cerrar_descripcion').click(function(){
                    let boton = $(this);
                    let descripcion = boton.closest('.descripcion');
                    let contenido = descripcion.siblings('.contenido');
                    contenido.toggleClass('arriba');
                    descripcion.toggleClass('arriba');
                });

                //eliminar busqueda
                $('#eliminar_busqueda').click(function(){
                    listarServicios('','','exacta');
                    $('#mensaje_busqueda').html(``);
                });

                //Agregar al carrito
                $('.reservar').click(function(){
                    let boton = $(this);
                    let servicio = boton.closest('.servicio');
                    let id_servicio = servicio.data('id_servicio');
                    $.ajax({
                        url: 'control/carrito.php',
                        method: 'POST',
                        dataType: 'JSON',
                        data: {
                            id_servicio: id_servicio
                        }
                    }).done(function(respuesta){
                        console.log(respuesta);
                    });

                });
            }else{
                $('#listar_servicios').html(`
                    <h3 class="sibtitle">NO HAY SERVICIOS</h3>
                `);
                //eliminar busqueda
                $('#eliminar_busqueda').click(function(){
                    listarServicios('','','exacta');
                    $('#mensaje_busqueda').html(``);
                });
            }
        }else{
            console.log(respuesta.erno);
        }
    });
}

function listarCategorias(){
    $.ajax({
        url: 'control/listar_categorias.php',
        method: 'POST',
        dataType: 'JSON'
    }).done(function(respuesta){
        if(respuesta.estatus == 'success'){
            if(respuesta.num_rows > 0){
                let categorias = '';
                $.each(respuesta.datos,function(index,element){
                    categorias += `
                        <li class="categoria" data-nombre_categoria="${element.nombre_categoria}" data-id_categoria="${element.id_categoria}">${element.nombre_categoria}</li>
                    `;
                });
                $('#lista_categorias').html(categorias);

                $('.categoria').click(function(){
                    let id_categoria = $(this).data('id_categoria');
                    let nombre_categoria = $(this).data('nombre_categoria');
                    $('#mensaje_busqueda').html(`<span class="buscador"><i class="fas fa-times" id="eliminar_busqueda"></i> ${nombre_categoria}</span>`);
                    listarServicios('id_categoria', id_categoria,'exacta');
                });
            }
        }else{

        }
    });
}