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
                                <p class="btn-mas">Conoce más</p>
                            </div>
                            <div class="descripcion">
                                <div class="cerrar">
                                    <i class="fas fa-times"></i>
                                </div>
                                <h3 class="title">Check up por especialidad</h3>
                                <ul class="list">
                                    <li>Check up Cardíaco Básico</li>
                                    <li>Check up Cardíaco Completo</li>
                                    <li>Check up General</li>
                                    <li>Check up Deportivo</li>
                                    <li>Check up Riñón e Hígado</li>
                                    <li>Check up Personalizado</li>
                                    <li>Paquete Prenatal</li>
                                </ul>
                                <ul class="notas">
                                    <li class="title-notas">Todos nuestros paquetes incluyen:</li>
                                    <li>Valoración pro médico especialista</li>
                                    <li>Laboratorios</li>
                                    <li>Ultrasonido</li>
                                </ul>
                            </div>
                        </div>
                        <div class="servicio">
                            <img src="imagenes/photo_other_02.png" alt="">
                            <div class="texto">
                                <h3 class="title">Campañas de salud</h3>
                                <p>Una población sana es una población productiva</p>
                                <p class="btn-mas">Conoce más</p>
                            </div>
                            <div class="descripcion">
                                <div class="cerrar">
                                    <i class="fas fa-times"></i>
                                </div>
                                <h3 class="title">Clinicas a Empresas y Campañas de Salud</h3>
                                <ul class="list">
                                    <li>Check up General</li>
                                    <li>Clínica de Cardio</li>
                                    <li>Clínica de Cardio por etapas</li>
                                    <li>Clínica de Hernia</li>
                                    <li>Clínica Vascular por etapas</li>
                                    <li>Clínicas Quistes en Ovarios</li>
                                    <li>Clínica Renal y Hepático</li>
                                    <li>Clínica Nutrición y Estrés</li>
                                </ul>
                                <ul class="notas">
                                    <li class="title-notas">Hechos a la medida.<br>Contando con servicios de:</li>
                                    <li>Médicos especialistas</li>
                                    <li>Ing. Biomédicos</li>
                                    <li>Químicos (para realizar pruebas de laboratorio)</li>
                                    <li>Personal de logística</li>
                                </ul>
                            </div>
                        </div>
                        <div class="servicio">
                            <img src="imagenes/photo_other_03.png" alt="">
                            <div class="texto">
                                <h3 class="title">Personal por honorario</h3>
                                <p>Técnicos Radiologos<br> 
                                Ing. Biomédicos<br>
                                Médicos especialistas</p>
                                <p class="btn-mas">Conoce más</p>
                            </div>
                            <div class="descripcion">
                                <div class="cerrar">
                                    <i class="fas fa-times"></i>
                                </div>
                                <h3 class="title">Personal por honorarios</h3>
                                <ul class="list">
                                    <li>Técnico Radiólogo</li>
                                    <li>Ingeniero Biomédico</li>
                                    <li>Médico Radiólogo con subespecialidad</li>
                                    <li>Químico</li>
                                    <li>Patólogo</li>
                                </ul>
                                <ul class="notas">
                                    <li class="title-notas">Los servicios de personal médico pueden ser contratados
                                        por procedimiento o por unidad de tiempo, siendo esta la más corta de 2 horas:</li>
                                </ul>
                            </div>
                        </div>
                        <div class="servicio">
                            <img src="imagenes/photo_other_04.png" alt="">
                            <div class="texto">
                                <h3 class="title">Sociedad Comercial</h3>
                                <p>Una población sana es una población productiva</p>
                                <p class="btn-mas">Conoce más</p>
                            </div>
                            <div class="descripcion">
                                <div class="cerrar">
                                    <i class="fas fa-times"></i>
                                </div>
                                <h3 class="title">Clinicas a Empresas y Campañas de Salud</h3>
                                <ul class="list">
                                    <li>Toma y maquila de muestras de laboratorio</li>
                                    <li>Realización e Interpretación</li>
                                    <li>Personal médico por honorarios</li>
                                    <li>Procedimientos de radiología intervencionista
                                        <ul><li>Biopsias, Drenajes, entre otros</li></ul>
                                    </li>
                                    <li>Renta de equipo médico</li>
                                </ul>
                                <ul class="notas">
                                    <li class="title-notas">Planes de sociedad hechos a la medida según las 
                                        necesidades de la clínica:</li>
                                    <li class="title-notas">Esquema de trabajo con 0 inversión de nuestros clientes
                                        y percibiendo ganancias desde el primer día:</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include('footer.php'); ?>

    </div>
   
    <?php include('scripts.php'); ?>
    <script src="js/otros-servicio.js"></script>
</body>
</html>