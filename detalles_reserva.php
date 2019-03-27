<?php
include('control/conexi.php'); 
$link = Conectarse();
$menu = 'reservaciones';
if(isset($_GET['id_servicio'])){
    $id_servicio = $_GET['id_servicio'];
    $query = "SELECT * FROM servicios LEFT JOIN categorias USING (id_categoria) WHERE id_servicio='$id_servicio'";
    $execute = mysqli_query($link,$query);
    if($execute){   
        $row = mysqli_fetch_assoc($execute);
    }else{
        echo 'Algo mal';
    }
}else{
    header('Location:reservaciones.php');
}

SESSION_START();
?>
<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMEDIC | Ciudad de México | Ultrasonidos a Domicilio</title>
    <?php include('styles.php'); ?>
    <link rel="stylesheet" href="css/detalles_reservaciones.css" type="text/css">
    <link rel="stylesheet" href="css/carrito.css" type="text/css">
    
    
    
</head>
<body>

    <div class="container">
        <?php include('menu.php'); ?>
        
        <main>
            <section class="container">
                <div class="content">
                    <div class="servicio">
                        <div class="imagen">
                            <img src="imagenes/servicios/<?php echo $row['foto_servicio']; ?>" alt="">
                        </div>
                        <div class="descripcion">
                            <h2 class="nombre"><?php echo $row['nombre_servicio']; ?></h2>
                            <p class="desc"><?php echo $row['descripcion_servicio']; ?></p>
                            <p class="duracion">Duracion de la sesión: <?php echo $row['tiempo_servicio']; ?> min</p>
                            <p class="categoria" id="categoria" data-id_categoria="<?php echo $row['id_categoria']; ?>">Categoria: <?php echo $row['nombre_categoria']; ?></p>
                            <p class="precio">Precio: $<?php echo $row['precio_servicio']; ?>.00</p>
                        </div>
                        <div class="calendario">
                            <h3 class="mensaje_disponibilidad" style="text-align: center;">Buscando fechas...</h3>
                        </div>
                    </div>
                    
                </div>

                <i id="abrir_carrito" class="fas fa-shopping-cart"></i>

                <?php include('carrito.php'); ?>
            </section>
        </main>
        

        <?php include('footer.php'); ?>


    </div>
    
    <?php include('scripts.php'); ?>
    <script src="js/carrito.js"></script>
    <script src="js/detalles_reserva.js"></script>
    <script>

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
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
        console.log('Clicked on: ' + info.dateStr);
        // change the day's background color just for fun
        info.dayEl.style.backgroundColor = 'red';
    },

    //Dando eventos
    events: [
    {
      title: 'No disponible',
      start: '2019-03-01',
      color: '#666'
    }
  ]

  });

  

  calendar.render();
});

</script>
</body>
</html>