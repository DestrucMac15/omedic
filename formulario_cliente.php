<?php 
$menu = 'reservaciones';
SESSION_START();
echo var_dump($_SESSION['servicios']);
foreach($_SESSION['servicios'] as $clave => $valor){
    echo var_dump($valor);
}
if($_SESSION['verificacion'] == 'success'){

}else{
    header('Location:reservaciones.php');
}
?>
<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OMEDIC | Ciudad de México | Ultrasonidos a Domicilio</title>
    <?php include('styles.php'); ?>
    <link rel="stylesheet" href="css/formulario_cliente.css" type="text/css">
    
</head>
<body>

    <div class="container">
        <?php include('menu.php'); ?>
        
        <main>
            <section class="container">
                <div class="content">
                    <h2 class="title">DATOS DEL CLIENTE</h2>
                    <p class="texto">Gracias por contratar nuestros servicios, a continuación ingresa los siguientes
                    campos para completar el registro de compra.</p>
                    <form id="form_cliente">
                        <div class="form_group">
                            <label for="">Nombre:</label>
                            <input type="text" name="nombre_cliente" required>
                        </div>
                        <div class="form_group">
                            <label for="">Correo:</label>
                            <input type="email" name="correo_cliente" required >
                        </div>
                        <div class="form_group">
                            <label for="">Télefono:</label>
                            <input type="phone" name="telefono_cliente" required>
                        </div>
                        <div class="form_group">
                            <label for="">Dirección</label>
                            <textarea name="direccion_cliente" rows="5" required></textarea>
                        </div>
                        <div class="form_group">
                            <label for="">Edad</label>
                            <input type="number" name="edad_cliente" required>
                        </div>
                        <div class="form-group">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </div>

            </section>
        </main>

        <?php include('footer.php'); ?>


    </div>
   
    <?php include('scripts.php'); ?>
    <script src="js/carrito.js"></script>
    <script src="js/formulario_cliente.js"></script>

</body>
</html>