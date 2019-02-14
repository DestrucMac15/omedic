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
    <link rel="stylesheet" href="css/servicios.css" type="text/css">
    
</head>
<body>

    <div class="container">
        <?php include('menu.php'); ?>
        
        <main>
            <section class="container_servicios">
                <div class="servicios">
                    <div class="servicio">
                        <div class="imagen">
                            <img src="imagenes/icon_serv_01.png" alt="">
                        </div>
                        <div class="titulo">
                            <p style="border-left: 5px solid var(--amarilloOmedic);">
                                Servicio a 
                                Domicilio
                            </p>
                        </div>
                        <div class="texto">
                            <ul>
                                <li>Laboratorios</li>
                                <li>Ultrasonidos Convenientes</li>
                                <li>Ultrasonidos Doppler</li>
                                <li>Cardiología</li>
                            </ul>
                        </div>
                    </div>
                    <div class="servicio">
                        <div class="imagen">
                            <img src="imagenes/icon_serv_02.png" alt="">
                        </div>
                        <div class="titulo">
                            <p style="border-left: 5px solid var(--rojoOmedic);">
                                Renta de 
                                Equipo Médico
                            </p>
                        </div>
                        <div class="texto">
                            <ul>
                                <li>
                                    Conoce nuestros equipos y
                                    planes de renta.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="servicio">
                        <div class="imagen">
                            <img src="imagenes/icon_serv_03.png" alt="">
                        </div>
                        <div class="titulo">
                            <p style="border-left: 5px solid var(--azulOmedic);">
                                Otros
                                Servicios
                            </p>
                        </div>
                        <div class="texto">
                            <ul>
                                <li>
                                    ¿Buscas campañas de 
                                    chequeos empresariales
                                    médicos, personal capacitado
                                    o soluciones de ingeniería
                                    biométrica?
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="servicio">
                        <div class="imagen">
                            <img src="imagenes/icon_serv_04.png" alt="">
                        </div>
                        <div class="titulo">
                            <p style="border-left: 5px solid var(--verdeOmedic);">
                                Médicos
                                Especialistas
                            </p>
                        </div>
                        <div class="texto">
                            <ul>
                                <li>
                                    Encuentre médico especialista
                                    en tu zona
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container_agendar">
                <div class="texto">
                    <div class="title">
                        Agende un servicio
                    </div>
                    <p class="text">
                        Para agendar un servicio y para conocer como podemos 
                        ayudarle, póngase en contacto con alguno de nuestros 
                        especialistas.
                    </p>
                    <button>AGENDAR</button>
                </div>
                <div class="imagen">
                    <img src="imagenes/photo_serr.jpg" alt="">
                </div>
            </section>

            <section class="container_descripcion">
                
            </section>
        </main>

        <?php include('footer.php'); ?>

    </div>
   
    <?php include('scripts.php'); ?>
</body>
</html>