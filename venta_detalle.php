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
                    <div class="form">
                        <p class="texto">A continuación ingresa los siguientes
                        campos para completar el registro de compra.</p>
                        <form id="form_cliente">
                            <div class="form_group">
                                <label for="">Nombre (obligatorio):</label>
                                <input type="text" name="nombre_cliente" required>
                            </div>
                            <div class="form_group">
                                <label for="">Correo (obligatorio):</label>
                                <input type="email" name="correo_cliente" required >
                            </div>
                            <div class="form_group">
                                <label for="">Teléfono (obligatorio):</label>
                                <input type="phone" name="telefono_cliente" required>
                            </div>
                            <div class="form_group">
                                <label for="">Dirección (obligatorio):</label>
                                <textarea name="direccion_cliente" rows="5" required></textarea>
                            </div>
                            <div class="form_group">
                                <label for="">Edad (obligatorio):</label>
                                <input type="number" name="edad_cliente" required>
                            </div>
                            <div class="form-group">
                                <button type="submit">SIGUIENTE</button>
                            </div>
                        </form>
                    </div>
                    <div class="paypal oculto" id="contenido_paypal">
                        <button class="atras" id="regresar">REGRESAR</button>
                        <h2 class="title">FINALIZAR COMPRA</h2>
                        <input type="number" id="monto_total" style="display: none;">
                        <div class="list_servicios" id="list_servicios">
                            
                        </div>
                        <div class="servicio">
                            <p class="total" id="precio_total"></p>
                        </div>
                        <div class="pago_paypal">
                            <div id="paypal-button-container"></div>
                        </div>
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