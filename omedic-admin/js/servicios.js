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
    $('#lista_servicios').html(`
        <h3 style="margin: 20px 0px;">CARGANDO..</h3>
    `);
    let datos = {
            clave: clave,
            valor: valor,
            tipo_busqueda : tipo_busqueda
        }
    $.ajax({
        url: 'control/listar_servicios.php',
        method: 'POST',
        dataType: 'JSON',
        data: datos 
    }).done(function(respuesta){
        if(respuesta.estatus == 'success'){
            let contenido = '';
            if(respuesta.num_rows > 0){
                $.each(respuesta.datos,function(index,element){
                    contenido += `
                    <div class="servicio" data-id_servicio="${element.id_servicio}">
                        <i class="fas fa-pencil-alt editar_servicio"></i>
                        <div class="foto">
                            <img src="../imagenes/servicios/${element.foto_servicio}" alt="">
                        </div>
                        <div class="cuerpo">
                            <p class="nombre" style="text-align:center;">${element.nombre_servicio}</p>
                            <p class="duracion">Duración: ${element.tiempo_servicio} min.</p>
                            <p class="espera">Espera: ${element.espera_servicio} min.</p>
                            <button>$${element.precio_servicio}</button>
                        </div>
                        <div class="descripcion">
                            ${element.descripcion_servicio}
                        </div>
                    </div>
                    `;
                });
                $('#lista_servicios').html(contenido);

                //eliminar la busqueda
                $('#eliminar_busqueda').click(function(){
                    listarServicios('','','exacta');
                    $('#mensaje_busqueda').html(``);
                });

                //Editar servicio
                $('.editar_servicio').click(function(){
                    let boton = $(this);
                    let id_servicio = boton.closest('.servicio').data('id_servicio');
                    location.href = `editar_servicio.php?id_servicio=${id_servicio}`;
                });
            }else{
                $('#lista_servicios').html(`
                    <h3 style="margin: 20px 0px;">NO HAY SERVICIOS AÚN</h3>
                `);

                //eliminar la busqueda
                $('#eliminar_busqueda').click(function(){
                    listarServicios('','','exacta');
                    $('#mensaje_busqueda').html(``);
                });
            }
        }else{
            //console.log(respuesta.erno);
        }
       
    });       
}

function listarCategorias(){
    $.ajax({
        url: 'control/listar_categorias.php',
        method: 'POST',
        dataType: 'JSON'
    }).done(function(respuesta){
        console.log(respuesta);
        if(respuesta.estatus == 'success'){
            if(respuesta.num_rows > 0){
                let contenido = '';               
                $.each(respuesta.datos,function(index,element){
                    contenido += `
                        <li class="categoria" data-nombre_categoria="${element.nombre_categoria}" data-id_categoria="${element.id_categoria}">${element.nombre_categoria}</li>
                    `;
                });
                $('#lista_categorias').html(contenido);
            }
        }else{
            //console.log(respuesta.erno);
        }

        /*======FILTAR POR CATEGORIAS=====*/
        $('.categoria').click(function(){
            let id_categoria = $(this).data('id_categoria');
            let nombre_categoria = $(this).data('nombre_categoria');
            $('#mensaje_busqueda').html(`<span class="buscador"><i class="fas fa-times" id="eliminar_busqueda"></i> ${nombre_categoria}</span>`);
            let clave = 'id_categoria';
            listarServicios(clave,id_categoria,'exacta');
        });
    });
}