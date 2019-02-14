<?php 
$menu = 'principal';
?>
<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMEDIC | Ciudad de México | Ultrasonidos a Domicilio</title>
    <?php include('styles.php'); ?>
    <link href="css/principal.css" rel="stylesheet" type="text/css">
    <link href="css/slider.css" rel="stylesheet" type="text/css">
    <link href="css/formulario.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="container">
        <?php include('menu.php'); ?>
        <header>
            <h3 class="textoInicial">Especialistas en Pacientes Geriátricos y Tomas Difíciles</h3>
            <div id="slider">
                <figure>
                    <img src="imagenes/slider2.jpg" alt>
                    <img src="imagenes/slider3.jpg" alt>
                    <img src="imagenes/slider4.jpg" alt>
                </figure>
            </div>
        </header>
        
        <main>
            <section class="container_parrafos">
                <div class="parrafos">
                    <div class="parrafo">
                        <div class="icono">
                            <img src="imagenes/parrafo1.png" alt="">
                        </div>
                        <div class="texto">
                            <h3 class="title">
                                Conoce Nuestros servicios
                            </h3>
                            <p class="txt">
                                Los servicios diagnósticos integrales de 
                                OMEDIC fueron creados para atender las 
                                necesidades de pacientes, doctores y hospitales.
                                <br><br>
                                Con cobertura en la CDMX y el área 
                                metropolitana en OMEDIC nos preocupamos
                                por otorgar el mejor servicio a nuestros 
                                clientes en la comodidad de su hogar.
                            </p>
                        </div>
                    </div>
                    <div class="parrafo">
                        <div class="icono">
                            <img src="imagenes/parrafo2.png" alt="">
                        </div>
                        <div class="texto">
                            <h3 class="title">
                                Acerca de nosotros
                            </h3>
                            <p class="txt">
                                OMEDIC es una empresa innovadora en el ramo de servicios 
                                médicos diagnósticos, fundada en 2015 por un grupo de 
                                ingenieros biomédicos, químicos y médicos especialistas 
                                que busca generar accesibilidad a la tecnología médica 
                                para mejorar los servicios de salud, ofreciendo alternativas 
                                a pacientes, profesionales de la salud y centros médicos.
                            </p>
                        </div>
                    </div>
                    <div class="parrafo">
                        <div class="icono">
                            <img src="imagenes/parrafo3.png" alt="">
                        </div>
                        <div class="texto">
                            <h3 class="title">
                                Servicio de Primera Calidad
                            </h3>
                            <p class="txt">
                                Especilistas en pacientes gediátricos, oncológicos y baríatricos.
                                Con trato personalizado, buscamos la comodidad y seguridad del 
                                paciente, en servicios de rápida respuesta.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container_doctoralia">
                <div class="conocemas">
                    <div class="texto">
                        <h3 class="title">
                            Servicios para Centros de Salud
                        </h3>
                        <p class="txt">
                            Ofrecemos nuestros servicios a centros de cirugía de 
                            corta estancia, clínicas de homodiálisis  y otros 
                            proveedores de servicios de salud.
                        </p>
                        <button class="btn_conoceMas">
                            CONOCE MÁS
                        </button>
                    </div>
                    <div class="imagen">
                        <img src="imagenes/foto1.jpg" alt="">
                    </div>
                </div>
                <div class="imagen_doctoralia">
                    <img src="imagenes/doctoralia.jpg" alt="">
                    <div class="texto">
                        <h3 class="title">
                            Estamos en Doctoralia
                        </h3>
                        <p class="txt">
                            Para agendar un servicio y para conocer como ayudarte
                        </p>
                        <button class="btn_visitanos">
                            VISITANOS
                        </button>
                    </div>
                </div>
            </section>
            
           <!--=========FORMULARIO DE CONTACTO=======-->
           <?php include('forms/formulario.php'); ?> 

           <section class="container_suscripcion">
                <h3 class="title">
                    Sucríbete a Nuestras Noticias
                </h3>
                <p class="text">
                    Únete a nuestra lista de correo y recibe nuestras promociones
                </p>
                <form action="">
                    <div class="row">
                        <input type="email" placeholder="nombre@correo.com">
                        <button type="submit">SUSCRIBETE</button>
                    </div>
                </form>
           </section>
        </main>

        <?php include('footer.php'); ?>

    </div>
   
    <?php include('scripts.php'); ?>
</body>
</html>