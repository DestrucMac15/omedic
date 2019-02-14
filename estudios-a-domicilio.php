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
    <link rel="stylesheet" href="css/estudiosDomicilio.css" type="text/css">
    
</head>
<body>

    <div class="container">
        <?php include('menu.php'); ?>
        
        <main>
            <section class="container_estudios">
                <div class="texto">
                    <h3 class="title">
                        ESTUDIOS A <br>DOMICILIO
                    </h3>
                    <p>
                        Servicio dirigido a pacientes geriátricos 
                        (tercera edad),  con problemas de movilidad 
                        o salud delicada. <br><br>
                        Asistimos a casa del paciente para realizar 
                        cualquier estudio de laboratorio o ultrasonido, 
                        con interpretación al momento y precios 
                        competitivos. <br><br>
                        El doctor te dará instrucciones sobre cómo 
                        prepararte, incluyendo si debes abstenerte 
                        de comer o beber unas horas antes del estudio.
                    </p>
                </div>
                <div class="imagen">
                    <img src="imagenes/photo_estudios.jpg" alt="">
                </div>
            </section>

            <section class="container_servicios">
                <div class="servicios">
                    <article class="servicio">
                        <h3 class="title">
                            Ultrasonidos Convencionales
                        </h3>
                        <div class="list">
                            <ul>
                                <li>Vías Urinarias</li>
                                <li>Transfontanelar</li>
                                <li>Torax</li>
                                <li>Tiroides</li>
                                <li>Testículos</li>
                                <li>Riñones</li>
                                <li>Próstata suprapúbico</li>
                                <li>Pelvis</li>
                                <li>Partes Blandas</li>
                                <li>Pared Abdominal</li>
                                <li>Obsterico</li>
                                <li>Mama</li>
                                <li>Ingle</li>
                                <li>Hígado, Vesícula y vías Biliares</li>
                                <li>Abdomen Superior</li>
                                <li>Estructural</li>
                                <li>Ginecológico</li>
                            </ul>
                        </div>
                    </article>
                    <article class="servicio">
                        <h3 class="title">
                            Ultrasonidos Doppler y Avanzados
                        </h3>
                        <div class="list">
                            <ul>
                                <li>Abdomen</li>
                                <li>Aorta</li>
                                <li>Carotidas</li>
                                <li>Hígado</li>
                                <li>Injerto</li>
                                <li>Músculo Esquelético</li>
                                <li>Pelvis</li>
                                <li>Plexo Branquial</li>
                                <li>Riñones</li>
                                <li>Seguimiento Folicular</li>
                                <li>Testículos</li>
                                <li>Vasculares Arteriales y Venosos por miembro</li>
                            </ul>
                        </div>
                    </article>
                    <article class="servicio">
                        <h3 class="title">
                            Laboratorio a domicilio
                        </h3>
                        <div class="list">
                            <ul>
                                <li>Biometría Hematica</li>
                                <li>Bicarbonato en Orina</li>
                                <li>Creatina</li>
                                <li>Glucosa en Sangre</li>
                                <li>Exámen General de Orina</li>
                                <li>Química Sanguínea de 12 a 35 elementos</li>
                                <li>Urea</li>
                                <li>VIH 1 Y 2 Presuntiva</li>
                                <li>VIH 1 y 2 Confirmatoría</li>
                                <li>Sangre en Heces</li>
                                <li>Entre muchos otros</li>
                            </ul>
                        </div>
                    </article>
                    <article class="servicio">
                        <h3 class="title">
                            Cardiología
                        </h3>
                        <div class="list">
                            <ul>
                                <li>Holter</li>
                                <li>Mapa</li>
                                <li>Ecocardiograma</li>
                                <li>Ecocardiograma(ECG)</li>
                                <li>Doppler Vasculares</li>
                                <li>Arteriales Venosos por miembro</li>
                            </ul>
                        </div>
                    </article>
                    <article class="servicio">
                        <h3 class="title">
                            Microbiología
                        </h3>
                        <div class="list">
                            <ul>
                                <li>Urocultivo</li>
                                <li>Hemocultivo anaeróbico</li>
                                <li>Hemocultivo aeróbico</li>
                                <li>Cultivo de Expectoración</li>
                            </ul>
                        </div>
                    </article>
                    <article class="servicio">
                        <h3 class="title">
                            Otros Servicios
                        </h3>
                        <div class="list">
                            <ul>
                                <li>Espirometría</li>
                                <li>Rayos X</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </section>
        </main>

        <?php include('footer.php'); ?>

    </div>
   
    <?php include('scripts.php'); ?>
</body>
</html>