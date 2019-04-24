<?php
include('control/conexi.php'); 
$link = Conectarse();
$menu = 'reservaciones';
SESSION_START();
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
                    <div class="container-deslizar">
                        <div class="servicio" id="id_servicio" data-id_servicio="<?php echo $row['id_servicio']; ?>">
                            <div class="imagen">
                                <img src="imagenes/servicios/<?php echo $row['foto_servicio']; ?>" alt="">
                            </div>
                            <div class="descripcion">
                                <h2 class="nombre"><?php echo $row['nombre_servicio']; ?></h2>
                                <p class="desc"><?php echo $row['descripcion_servicio']; ?></p>
                                <p class="duracion">Duración de la sesión: <?php echo $row['tiempo_servicio']; ?> min</p>
                                <p class="categoria" id="categoria" data-id_categoria="<?php echo $row['id_categoria']; ?>">Categoría: <?php echo $row['nombre_categoria']; ?></p>
                                <p class="precio">Precio: $<?php echo $row['precio_servicio']; ?>.00</p>
                                <a href="" id="reservar">RESERVAR</a> 
                                <a href="reservaciones.php">VOLVER A CATÁLOGO</a>
                            </div>
                        </div>
                        <div class="calendario" id="calendario">
                            <div id="calendar"></div>
                            <p>* Todas las reservaciones están sujetas a disponibilidad de horario, a continuación 
                                has clic en una fecha para hacer tu reservación.
                            </p>
                            <a href="" id="atras">ATRAS</a> 
                        </div>
                    </div>
                </div>

                <i id="abrir_carrito" class="fas fa-shopping-cart"></i>

                <?php include('carrito.php'); ?>
            </section>
        </main>

    <!-- The Modal -->
    <div id="modal_horario" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Elije una hora</h3>
                <span class="close-modal">&times;</span>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    Fecha: <span id="fecha_seleccionada">30 de Mayo del 2018</span>
                </div>
                <form class="form-group" id="form-servicio">
                    <label for="">Hora:</label>
                    <input type="text" style="display: none;" id="fecha" required>
                    <input type="time" id="hora" required>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn-modal" form="form-servicio" id="agregar_servicio">AGREGAR</button>
            </div>
        </div>

    </div>
        

        <?php include('footer.php'); ?>


    </div>
    
    <?php include('scripts.php'); ?>
    <script src="js/carrito.js"></script>
    <script src="js/detalles_reserva.js"></script>
</body>
</html>