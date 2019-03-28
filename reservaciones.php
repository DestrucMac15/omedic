<?php 
$menu = 'reservaciones';
SESSION_START();
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
    <link rel="stylesheet" href="css/carrito.css" type="text/css">
    
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
                            <ul class="lista-categorias" id="lista_categorias">
                            </ul>
                        </div>
                        <div class="servicios">
                            <div class="subtitle">
                                <div class="mensaje" id="mensaje_busqueda"></div>
                                <form action="" id="form_servicios">
                                    <input type="text" id="busqueda_servicio" placeholder="Buscar servicio">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <div class="lista_servicios" id="listar_servicios">
                                <h3 class="subtitle">CARGANDO...</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <i id="abrir_carrito" class="fas fa-shopping-cart"><span id="num_carrito">1</span></i>

                <?php include('carrito.php'); ?>
            </section>
        </main>

        <?php include('footer.php'); ?>


    </div>
   
    <?php include('scripts.php'); ?>
    <script src="js/reservaciones.js"></script>
    <script src="js/carrito.js"></script>
</body>
</html>