<?php 
$menu = 'servicios';
?>
<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMEDIC | Ciudad de México | Ultrasonidos a Domicilio</title>
    <?php include('styles.php'); ?>
    <link rel="stylesheet" href="css/otrosServicios.css" type="text/css">
    
</head>
<body>

    <div class="container">
        <?php include('menu.php'); ?>
        
        <main>
            <section class="container_otros">
                <div class="content">
                    <h2 class="title">Otros Servicios</h2>
                    <div class="servicios">
                        <div class="servicio">
                            <img src="imagenes/photo_other_01.png" alt="">
                            <div class="texto">
                                <h3 class="title">Check up</h3>
                                <p>El valor de un diagnóstico oportuno</p>
                                <p>Conoce más</p>
                            </div>
                        </div>
                        <div class="servicio">
                            <img src="imagenes/photo_other_02.png" alt="">
                            <div class="texto">
                                <h3 class="title">Campañas de salud</h3>
                                <p>Una población sana es una población productiva</p>
                                <p>Conoce más</p>
                            </div>
                        </div>
                        <div class="servicio">
                            <img src="imagenes/photo_other_03.png" alt="">
                            <div class="texto">
                                <h3 class="title">Personal por honorario</h3>
                                <p>Técnicos Radiologos Ing. Biomédicos Médicos especialistas</p>
                                <p>Conoce más</p>
                            </div>
                        </div>
                        <div class="servicio">
                            <img src="imagenes/photo_other_04.png" alt="">
                            <div class="texto">
                                <h3 class="title">Sociedad Comercial</h3>
                                <p>Una población sana es una población productiva</p>
                                <p>Conoce más</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include('footer.php'); ?>

    </div>
   
    <?php include('scripts.php'); ?>
</body>
</html>