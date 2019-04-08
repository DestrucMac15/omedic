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
                    <h2 class="title">LISTA DE SERVICIOS A COMPRAR</h2>
                    <div class="list_servicios">
                        <?php 
                            $lista = $_SESSION['servicios'];
                            $total = 0;
                            foreach($_SESSION['servicios'] as $clave => $valor){
                            $total += $valor['datos']['precio_servicio']; 
                        ?>
                            <div class="servicio">
                                <p class="nombre">
                                    <?php echo $valor['datos']['nombre_servicio']; ?>
                                </p>
                                <p class="descripcion">
                                    <?php echo $valor['datos']['descripcion_servicio']; ?>
                                </p>
                                <p class="precio">
                                    <?php echo '$'.$valor['datos']['precio_servicio'].'.00'; ?>
                                </p>
                            </div>
                        <?php 
                            }
                        ?>
                        <div class="servicio">
                            <p class="total" id="precio_total" data-total="<?php echo $total; ?>"><?php echo '$'.$total.'.00'; ?></p>
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
    <script src="https://www.paypal.com/sdk/js?client-id=AZVD7iSlGWaYs_6dvlkpctFPhUkXZa13p6FTDVUz2RpIh952Y09nil0mHxNuJxevZPHM3O4GNhYOkPSf"></script>
    <script src="js/reservaciones.js"></script>
    <script src="js/carrito.js"></script>
    <script>
        $(document).ready(function(){
            let precio = $('#precio_total').data('total');
            let newPrecio = String(precio)+'.00';
            realizarPago(newPrecio);
        });
    function realizarPago(precio){
    
    console.log(precio);
    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({
        // Set up the transaction
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: precio,
                        currency: 'MXN'
                    }
                }]
            });
        },
    
        // Finalize the transaction
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                // Show a success message to the buyer
                alert('Transaction completed by ' + details.payer.name.given_name + '!');
            });
        }
    
    
    }).render('#paypal-button-container');

}
    </script>
    
</body>
</html>