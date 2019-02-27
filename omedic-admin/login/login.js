$(document).ready(function(){
    $('.login-input').focus(function(){
        let input = $(this);
        let label = input.siblings('.fas');
        input.css({'border-bottom': '1px solid var(--verdeOmedic)'});
        label.css({'color': 'var(--verdeOmedic)'});
    });
    $('.login-input').blur(function(){
        let input = $(this);
        let label = input.siblings('.fas');
        input.css({'border-bottom': '1px solid var(--azulOmedic)'});
        label.css({'color': 'var(--azulOmedic)'});
    });

    $('#form_login').submit(function(event){
        event.preventDefault();
        $('.mensaje').text('Cargando..');
        let form = $(this);
        let datos = form.serialize();
        let boton = form.find(':submit');
        $.ajax({
            url: 'validar.php',
            method: 'POST',
            dataType: 'JSON',
            data: datos
        }).done(function(respuesta){
            if(respuesta.estatus == 'success'){
                if(respuesta.num_rows > 0){
                    sweetAlert("Correcto","Bienvenido","success");
                    location.href = '../index.php'; 
                }else{
                    sweetAlert("Error","Usuario y/o contraseña invalido","error");
                }
            }else{
                console.log(respuesta.erno);
            }
        }).always(function(){
            $('.mensaje').text('');
        });
    });
});