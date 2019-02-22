<?php 
$menu = 'blog';
if(isset($_GET['blog'])){
}else{
    header("location:blog.php");
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
    <link href="css/detalle_blog.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="container" data-id_blog="<?php echo $_GET['blog']?>">
        <?php include('menu.php'); ?>
        
        <main> 
            <div class="container_principal">
                <div class="container_publicaciones" id="container_publicaciones">
                    
                </div>
                
                <div class="container_entradas">
                    <div class="title">
                        Entradas recientes
                    </div>
                    <div class="entradas" id="container_entradas">
                        
                    </div>
                </div>
            </div>
        </main>

        <?php include('footer.php'); ?>

    </div>
   
    <?php include('scripts.php'); ?>
    <script src="js/detalle_blog.js"></script>
</body>
</html>