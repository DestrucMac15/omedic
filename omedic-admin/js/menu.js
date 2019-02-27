$(document).ready(function(){
    $('.item-options').click(function(){
        let options = $(this).find('.container_options');
        options.fadeToggle(100);
    });

    $('#salir_app').click(function(){
        swal({
            title: 'Cerrar Sesion',
            text: "¿Deseas salir?",
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            confirmButtonColor: '#c9302c',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Salir'
          },function(){
            location.href = 'login/cerrar_session.php'; 
        });
    });
});