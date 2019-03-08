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
                    <div class="servicio servicio_link" data-servicio="estudios-a-domicilio.php">
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
                                <li>Ultrasonidos Convencionales</li>
                                <li>Ultrasonidos Doppler</li>
                                <li>Cardiología</li>
                            </ul>
                        </div>
                    </div>
                    <div class="servicio servicio_link" data-servicio="servicios-compartidos.php">
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
                    <div class="servicio servicio_link" data-servicio="otros-servicios.php">
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
                                    biomédica?
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="servicio servicio_link" data-servicio="https://www.doctoralia.com.mx/centro-medico/omedic-2544576">
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
                    <button class="servicio_link" data-servicio="contactanos.php">AGENDAR</button>
                </div>
                <div class="imagen">
                    <img src="imagenes/photo_serr.jpg" alt="">
                </div>
            </section>

            <section class="container_descripcion">
                <div class="servicios">
                    <div class="servicio">
                        <img src="imagenes/icon_serv_05.png" alt="">
                        <h3 class="title">Servicios a Domicilio</h3>
                        <div class="texto">
                            <p>
                                Realización e interpretación de 
                                Estudios de Ultrasonido
                            </p>
                            <ul>
                                <li>Convencionales</li>
                                <li>Doppler</li>
                                <li>Cardiacos</li>
                                <li>Especiales</li>
                            </ul>
                            <p>
                                Electrocardiogramas en Reposo (ECG)
                                Estudios de laboratorio
                                Hemodiálisis
                            </p>
                        </div>
                    </div>
                    <div class="servicio">
                        <img src="imagenes/icon_serv_06.png" alt="">
                        <h3 class="title">Servicios Compartidos</h3>
                        <div class="texto">
                            <p>
                                Renta de ultrasonido (desde 1 hora y planes mensuales).
                                Procedimientos por Médicos Radiólogos
                                Intervencionistas
                            </p>
                            <ul>
                                <li>Biopsias, patología, drenajes de abscesos, entre otros</li>
                            </ul>
                            <p>
                                Realización e Interpretación de Estudios de Ultrasonido
                            </p>
                            <ul>
                                <li>Convencionales, doppler, cardiacos y especiales</li>
                            </ul>
                            <p>
                                Electrocardiogramas en Reposo (ECG) Toma y maquila de estudios de laboratorio 
                            </p>
                        </div>
                    </div>
                    <div class="servicio">
                        <img src="imagenes/icon_serv_07.png" alt="">
                        <h3 class="title">Servicios Especiales</h3>
                        <div class="texto">
                            <p>
                            Checkup's para empresas<br> 
                            Campañas de salud<br>
                            Checkup's personales por especialidad
                            </p>
                            <ul>
                                <li>Nefrología, Cardiología, Vasculares, Hernia, etc.</li>
                            </ul>
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