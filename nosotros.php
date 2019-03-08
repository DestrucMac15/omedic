<?php 
$menu = 'nosotros';
?>
<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMEDIC | Ciudad de México | Ultrasonidos a Domicilio</title>
    <?php include('styles.php'); ?>
    <link rel="stylesheet" href="css/nosotros.css" type="text/css">
    
</head>
<body>

    <div class="container">
        <?php include('menu.php'); ?>
        
        <main>
            <section class="container_omedic">
                <div class="texto">
                    <div class="title">OMEDIC</div>
                    <p class="text">Empresa innovadora en las áreas de homecare e ingeniería biomédica.</p>
                </div>
                <div class="imagen">
                    <img src="imagenes/photo_nos_01.jpg" alt="">
                </div>
            </section>

            <section class="container_acerca">
                <div class="texto">
                    <div class="title">
                        <h3>Acerca de nosotros</h3>
                        <p>Servicios Médicos Diagnósticos</p>
                    </div>
                    <div class="imagen">
                        <img src="imagenes/OAIID80.jpg" alt="">
                    </div>
                    <div class="text">
                        <div class="subtitle">Servicios a Domicilio</div>
                        <p>
                            OMEDIC es una empresa innovadora en el ramo de 
                            servicios médicos diagnósticos, fundada en 2015 
                            por un grupo de ingenieros biomédicos, químicos y 
                            médicos especialistas que busca generar 
                            accesibilidad a la tecnología médica para mejorar 
                            los servicios de salud, ofreciendo alternativas a 
                            pacientes, profesionales de la salud y centros 
                            médicos.
                            <br>
                            Pensando en las necesidades de los prestadores y 
                            usuarios de servicios médicos, creamos los servicios 
                            integrales de ingeniería biomédica. Nuestros 
                            servicios integrales son hechos a la medida según 
                            las necesidades de nuestros clientes. Pudiendo 
                            atender las necesidades desde un consultorio 
                            particular hasta hospitales.
                        </p>
                        <p class="mas_servicios servicio_link" data-servicio="servicios.php">
                            Conoce nuestros servicios
                        </p>
                    </div>
                </div>
            </section>
        </main>

        <?php include('footer.php'); ?>

    </div>
   
    <?php include('scripts.php'); ?>
</body>
</html>