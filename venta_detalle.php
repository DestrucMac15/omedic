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
    <link rel="stylesheet" href="css/venta_detalle.css" type="text/css">
    
</head>
<body>

    <div class="container">
        <?php include('menu.php'); ?>
        
        <main>
            <section class="container">
                <div class="content">
                    <h2 class="title">FINALIZAR COMPRA</h2>
                    <div class="list_servicios" id="list_servicios">
                        
                    </div>
                    <div class="servicio">
                        <p class="total" id="precio_total"></p>
                    </div>
                    <div class="pago_paypal">
                        <div id="paypal-button-container"></div>
                    </div>
                </div>

            </section>
        </main>

        <?php include('footer.php'); ?>


    </div>
   
    <?php include('scripts.php'); ?>
    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AZVD7iSlGWaYs_6dvlkpctFPhUkXZa13p6FTDVUz2RpIh952Y09nil0mHxNuJxevZPHM3O4GNhYOkPSf&currency=MXN"></script>
    <script src="js/pagoPaypal.js"></script>
    
</body>
</html>