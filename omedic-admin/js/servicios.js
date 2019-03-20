$(document).ready(function(){
    listarServicios();
});

function listarServicios(clave,valor){
    let datos = {};
    if(clave == undefined && valor == undefined){
        datos = {
            clave: '',
            valor: ''
        }
    }else{
        datos = {
            clave: clave,
            valor: valor
        }
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
                        <div class="foto">
                            <img src="../imagenes/servicios/${element.foto_servicio}" alt="">
                        </div>
                        <div class="cuerpo">
                            <p class="nombre">${element.nombre_servicio}</p>
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
            }else{

            }
            $('#lista_servicios').html(contenido);
        }else{
            //console.log(respuesta.erno);
        }
    });       
}

function listarCategorias(){
    $.ajax({
        url: 'control/listar_servicio.php',
        method: 'POST',
        dataType: 'JSON'
    }).done(function(respuesta){
        if(respuesta.estatus == 'success'){
            if(respuesta.num_rows > 0){
                let contenido = '';
                $.each(respuesta.datos,function(index,element){
                    
                });
            }
        }else{
            //console.log(respuesta.erno);
        }
    });
}