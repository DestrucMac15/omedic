<?php 
$menu = 'contactanos';
?>
<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMEDIC | Ciudad de México | Ultrasonidos a Domicilio</title>
    <?php include('styles.php'); ?>
    <link rel="stylesheet" href="css/contactanos.css" type="text/css">
    <link href="css/formulario.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="container">
        <?php include('menu.php'); ?>
        
        <main>
            <div class="container_imagen">
                <img src="imagenes/contact_icon4.jpg" alt="">
            </div>
            <?php include('forms/formulario.php'); ?>
            <div class="container_bolsa">
                <div class="imagen"><img src="imagenes/join_img.jpg" alt=""></div>
                <div class="texto">
                    <h3 class="title">¿Te interesa trabajar con nosotros?</h3>
                    <h4 class="subtitle">
                        OMEDIC siempre tiene las puertas abiertas a personas proactivas y con ganas de trabajar.
                    </h4>
                    <p>
                        Manda un correo o envianos tu curriculum y un breve parrafo donde expliques
                        tu interes de formar parte del equido de OMEDIC.
                    </p>
                </div>
            </div>
        </main> 

        <?php include('footer.php'); ?>

    </div>
   
    <?php include('scripts.php'); ?>
</body>
</html>