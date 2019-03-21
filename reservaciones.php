<?php 
$menu = 'reservaciones';
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
            <section class="container">
                <div class="content">
                    <h2 class="title">NUESTROS SERVICIOS</h2>
                    <div class="container_servicios">
                        <div class="categorias">
                            <div class="subtitle">
                                <h3>CATEGORIAS</h3>
                            </div>
                            <ul class="lista-categorias">
                                <li>PRUEBAS</li>
                                <li>LABORATORIO</li>
                            </ul>
                        </div>
                        <div class="servicios">
                            <div class="subtitle">
                                <div class="mensaje"></div>
                                <form action="" id="form_servicios">
                                    <input type="text" id="busqueda_servicio" placeholder="Buscar servicio">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="lista_servicios">
                                <div class="servicio">
                                    <div class="imagen">
                                        <img src="imagenes/servicios/1.png" alt="">
                                    </div>
                                    <div class="texto">
                                        <ul>
                                            <li class="nombre">
                                                Taladro
                                            </li>
                                            <li class="nombre">
                                                Duracion: 60 min.
                                            </li>
                                            <li class="nombre">
                                                $350.°°
                                            </li>
                                        </ul>
                                        <button>
                                            Reservar
                                        </button>
                                    </div>
                                </div>
                                <div class="servicio">
                                    
                                </div>
                                <div class="servicio">
                                    
                                </div>
                                <div class="servicio">
                                    
                                </div>
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