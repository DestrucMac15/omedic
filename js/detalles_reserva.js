$(document).ready(function(){
    /*====DELIZAR DE OPCIONES===*/
    $('#reservar').click(function(event){
        event.preventDefault();
        $('#id_servicio').toggleClass('ocultar-servicio');
        $('#calendario').toggleClass('mostrar-calendario');
    });
    $('#atras').click(function(event){
        event.preventDefault();
        $('#id_servicio').toggleClass('ocultar-servicio');
        $('#calendario').toggleClass('mostrar-calendario');
    });


    let id_categoria = $('#categoria').data('id_categoria');
    $.when(buscarDisponibilidad(id_categoria,'')).done(function(disponibilidad){
        
        let calendarEl = document.getElementById('calendar');

            let calendar = new FullCalendar.Calendar(calendarEl, {
              plugins: [ 'dayGrid','interaction'],
              defaultView: 'dayGridMonth',
              timeZone: 'UTC',
              locale: 'es',
          
              //Header
              header: {
                  left: 'prev,next today',
                  right: 'title'
              },
              //Ocultar fines de Semana
              hiddenDays: [6,0],
          
              //Dar click en un dia
              dateClick: function(info) {
                  let id_categoria = $('#categoria').data('id_categoria');
                  //console.log(moment(new Date()).format("YYYY-MM-DD"));
                  let fecha = info.dateStr; //Saber la fecha del dia seleccionado
                  let dias = getDias(fecha);
                  if(dias >= 0){
                    swal('Lo siento','Solo puedes elegir fechas mayores','info');
                  }else{
                    buscarDisponibilidad(id_categoria,fecha).done(function(respuesta){
                        if(respuesta.num_rows > 0){
                            swal('Lo siento','Solo puedes elegir fechas disponibles','info');
                        }else{
                            $('#fecha_seleccionada').text(obtenerFecha(fecha));
                            $('#fecha').val(fecha);
                            $('#modal_horario').toggleClass('modal-show');
                            
                        }
                    });
                  }
                    
                  
              },
              //Cuando da click en un evento
              eventClick: function(info) {
                swal('Lo siento','Sólo puedes elegir fechas disponibles','info');
              }
          
            });
            if(disponibilidad.num_rows > 0){
                
                $.each(disponibilidad.datos,function(index,element){
                    let evento = {};
                    evento = {
                        title: 'No disponible',
                        start: `${element.fecha_desreservacion}`,
                        color: '#666'
                    };
                    calendar.addEvent(evento);
                });
            }
            
            calendar.render();
    });
    
    $('#form-servicio').submit(function(event){
        event.preventDefault();
        let fecha = $('#fecha').val();
        let hora = $('#hora').val();
        swal({
            title: 'Atención',
            text: "¿Deseas agregar este producto con esa fecha?",
            type: 'success',
            showCancelButton: true,
            cancelButtonText: 'Cancelar',
            confirmButtonColor: '#165E79',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Agregar'
            //},function(){
                /*swal('Correcto','Se ha agregado con éxito a tu carrito','success');
                let id_servicio = $('#id_servicio').data('id_servicio');
                let respuesta = carrito(id_servicio,'add',fecha,hora);
                let modal = $(this).closest('.modal');
                modal.toggleClass('modal-show');
                //location.href = 'detalles_reserva.php?id_servicio='+id_servicio;
                actualizarCarrito(respuesta);*/
                
        },
        function(isConfirm) {
          if (isConfirm) {
            swal('Correcto','Se ha agregado con éxito a tu carrito','success');
                let id_servicio = $('#id_servicio').data('id_servicio');
                let respuesta = carrito(id_servicio,'add',fecha,hora);
                $('#id_servicio').toggleClass('ocultar-servicio');
                $('#calendario').toggleClass('mostrar-calendario');
                $('#modal_horario').toggleClass('modal-show');
                $('#form-servicio')[0].reset();
                actualizarCarrito(respuesta);
            }
        });   
    });
});

function buscarDisponibilidad(id_categoria,fecha){
     return $.ajax({
        url: 'control/buscar_disponibilidad.php',
        method: 'POST',
        dataType: 'JSON',
        data: {
            id_categoria: id_categoria,
            fecha: fecha
        }
    }).done(function(respuesta){
    });
}

//=======OBETENER LA DIFERENCIA DE DIAS=======
function getDias(fecha){
    let fechaAnterior = new Date(fecha);
    let fechaActual = new Date();
    var diasdif= fechaActual.getTime()-fechaAnterior.getTime();
	var diferencia = Math.round(diasdif/(1000*60*60*24))-1;
    return diferencia;
}

