<?php
	include("login/acceso_correcto.php");
    include('../control/conexi.php');
    $link = Conectarse();
    $menu = 'blog';
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
            <div class="container_blog">
                <div class="title">
                    <h3>EDITAR BLOG</h3>
                </div>
                <div class="edition_blog">
                    <form id="form_blog">
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" name="titulo_blog">
                        </div>
                        <div class="form-group">
                            <label for="">Resumen</label>
                            <textarea style="height: 100px;" name="resumen_blog"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Contenido</label>
                            <textarea style="height: 200px;" name="contenido_blog" id="cont_blog"></textarea>
                        </div>
                        <div class="form-group row-imagen">
                            <label for="">Imagen</label>
                            <img src="" alt="">
                        </div>
                        <div class="form-group">
                            
                            <input type="file" name="imagen_blog" id="imagen_blog" style="cursor: pointer;">
                        </div>
                        <div class="form-group" style="align-items: flex-end;">
                            <button type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php include('scripts.php'); ?>
    <script src="js/nuevo_blog.js"></script>
</body>
</html>