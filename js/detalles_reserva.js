$(document).ready(function(){
    //<div id="calendar" style="width: 500px; height: 400px;"></div>

});

function buscarDisponibilidad(id_categoria){
    $.ajax({
        url: 'control/buscar_disponibilidad.php',
        method: 'POST',
        dataType: 'JSON',
        data: {
            id_categoria: id_categoria
        }
    }).done(function(respuesta){
        if(respuesta.estatus == 'success'){
            
        }
    });
}