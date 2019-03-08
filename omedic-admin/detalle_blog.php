<?php
	include("login/acceso_correcto.php");
    include('../control/conexi.php');
    $link = Conectarse();
    $menu = 'blog';
    if(isset($_GET['id_blog'])){
        $id_blog = $_GET['id_blog'];
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
    <title>BLOG - OMEDIC</title>
    <?php include('styles.php'); ?>
    <link href="css/detalleBlog.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main_container">
        <?php include('menu.php'); ?>

        <div class="container">
            
        </div>
    </div>


    <?php include('scripts.php'); ?>
</body>
</html>