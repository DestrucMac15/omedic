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
    <link rel="stylesheet" href="css/serviciosCompartidos.css" type="text/css">
    
</head>
<body>

    <div class="container">
        <?php include('menu.php'); ?>
        
        <main>
            <section class="container_renta">
                <div class="texto">
                    <p>
                        Renta de equipo
                        médico desde 1 hora
                        sin plazos forzosos
                    </p>
                </div>
                <div class="imagen">
                    <img src="imagenes/photo_compar_01.jpg" alt="">
                </div>
            </section>

            <section class="container_animacion">
                <div class="animaciones">
                    <div class="animacion" style="background: url('imagenes/Comps_01_Compartidos_OMD_06.jpg');">
                        <div class="contenido_animacion">
                            <h3 class="title">
                                Nuestros equipos
                            </h3>
                            <div class="texto">
                                <ul>
                                    <li>Ultrasonidos</li>
                                    <li>Transductores covexo, lineal y sectorial.</li>
                                    <li>Latiguillos ECG</li>
                                    <li>Sin restricciones de software (Todos los doppplers disponibles).</li>
                                    <li>Conexión a monitor externo e impresora</li>
                                    <li>Asistencia de Ingenierio Biomédico para 
                                    procesamiento de mejoramiento  de imagen</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="animacion" style="background: url('imagenes/Comps_01_Compartidos_OMD_07.jpg');">
                        <div class="contenido_animacion">
                            <h3 class="title">
                                Ventajas
                            </h3>
                            <div class="texto">
                                <ul>
                                    <li>Facturable</li>
                                    <li>Garantía de funcionamiento</li>
                                    <li>Más rentable que la compra del equipo</li>
                                    <li>Sin plazos forzosos</li>
                                    <li>Tiempo de respuesta inmediata </li>
                                    <li>Capacitación al usuario final (opcional)</li>
                                    <li>Mantenimientos preventivos al día</li>
                                    <li>Equipo de última generación </li>
                                    <li>Evita la depreciación del equipo</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="animacion" style="background: url('imagenes/Comps_01_Compartidos_OMD_09.jpg');"> 
                        <div class="contenido_animacion">
                            <h3 class="title">
                                Planes de Renta
                            </h3>
                            <div class="texto">
                                <ul>
                                    <li>1 a 8 horas (Descuento a clientes frecuentes)</li>
                                    <li>10 a 15 hrs mensuales (Hasta 60% de descuento)</li>
                                    <li>+15 hrs mensuales (Hasta 80% de descuento)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="animacion" style="background: url('imagenes/Comps_01_Compartidos_OMD_10.jpg');">
                        <div class="contenido_animacion">
                            <h3 class="title">
                                Otros Equipos
                            </h3>
                            <div class="texto">
                                <ul>
                                    <li>Electrocardiograma</li>
                                    <li>Toma maquila de muestras de laboratorio</li>
                                    <li>Personal médico especializado</li>
                                    <li>Entre otros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container_cotizacion">
                <p class="texto">
                    OMEDIC sólo trabaja con las mejores marcas del 
                    mercado. Pregunta por nuestro servicio y 
                    averigua por qué los servicios compartidos son 
                    la opción más confiable del mercado. 
                </p>
                <button>REALIZAR COTIZACION</button>
            </section>
        </main>

        <?php include('footer.php'); ?>

    </div>
   
    <?php include('scripts.php'); ?>
</body>
</html>