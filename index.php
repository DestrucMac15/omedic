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
            <?php include('slider.php'); ?>
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
                                Especilistas en pacientes geriátricos, oncológicos y bariátricos.
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
                        <button class="btn_conoceMas servicio_link" data-servicio="servicios-compartidos.php">
                            CONOCE MÁS
                        </button>
                    </div>
                    <div class="imagen">
                        <img src="imagenes/foto1.jpg" alt="">
                    </div>
                </div>
                <div class="imagen_doctoralia">
                    <img src="imagenes/Doctoralia.jpg" alt="">
                    <div class="texto">
                        <h3 class="title">
                            Estamos en Doctoralia
                        </h3>
                        <p class="txt">
                            Para agendar un servicio y para conocer como ayudarte
                        </p>
                        <button class="btn_visitanos servicio_link" data-servicio="https://www.doctoralia.com.mx/centro-medico/omedic-2544576">
                            VISÍTANOS
                        </button>
                    </div>
                </div>
            </section>
            <section class="container_comentarios">
                <h2 class="subtitle">TESTIMONIOS</h2>
                <div class="comentarios">
                    <div class="comentario">
                        <i class="fas fa-user-circle"></i>
                        <p class="nombre">Ofelia Márquez</p>
                        <p class="tipo">Paciente</p>
                        <p class="texto">
                            "Me ha parecido un buen servicio y trato amable"
                        </p>
                    </div>
                    <div class="comentario">
                        <i class="fas fa-user-circle"></i>
                        <p class="nombre">Antonio Helue Mena</p>
                        <p class="tipo">Doctor</p>
                        <p class="texto">
                            "En dos ocasiones solicitamos su servicio, quedando conformes"
                        </p>
                    </div>
                    <div class="comentario">
                        <i class="fas fa-user-circle"></i>
                        <p class="nombre">Carlos Miranda</p>
                        <p class="tipo">Paciente</p>
                        <p class="texto">
                            "La principal fortaleza de Omedic es su trato profesional y 
                            disposición para ajustarse a las necesidades del cliente."
                        </p>
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
                <form id="form_suscribete">
                    <div class="row">
                        <input type="email" placeholder="nombre@correo.com" required>
                        <button type="submit">SUSCRIBETE</button>
                    </div>
                </form>
           </section>
        </main>

        <?php include('footer.php'); ?>

    </div>
   
    <?php include('scripts.php'); ?>
    <script src="js/links.js"></script>
</body>
</html>