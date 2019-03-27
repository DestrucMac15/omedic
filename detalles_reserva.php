<?php
include('control/conexi.php'); 
$link = Conectarse();
$menu = 'reservaciones';
if(isset($_GET['id_servicio'])){
    $id_servicio = $_GET['id_servicio'];
    $query = "SELECT * FROM servicios WHERE id_servicio='$id_servicio'";
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
                        <div class="descripcion"></div>
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
</body>
</html>