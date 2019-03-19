<?php
include('control/conexi.php');
$link = Conectarse(); 
$menu = 'blog';
if(isset($_GET['blog'])){
    $id_blog = $_GET['blog'];
    $query = "SELECT * FROM blogs LEFT JOIN usuarios USING(id_usuario) WHERE id_blog='$id_blog'";
    $execute = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($execute);
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
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="container" data-id_blog="<?php echo $_GET['blog']?>">
        <?php include('menu.php'); ?>
        
        <main> 
            <div class="container_principal">
                <div class="container_publicaciones" id="container_publicaciones">
                    <article itemscope class="publicacion" data-id_publicacion='<?php echo $row['id_blog'];?>'>
                        <link itemprop="audience" href="http://schema.org/Clinician"/>
                        <meta itemprop="publicationType" content="Meta-Analysis"/>
                        <div class="public_header">
                            <h1 itemprop="name" class="title descripcion_blog" data-id_blog="<?php echo $row['id_blog'];?>">
                                <?php echo $row['titulo_blog'];?>
                            </h1>
                            <p class="date" itemprop="autor">
                                <?php echo $row['nombre_usuario'];?>
                            </p>
                        </div>
                        <div class="texto">
                            <div class="imagen">
                                <img itemprop="image" alt="<?php echo $row['titulo_blog'];?>" src="imagenes/blog/<?php echo $row['imagen_blog'];;?>" alt="">
                            </div>
                            <div class="container" itemprop="description">
                                <?php echo $row['contenido_blog'];?>
                            </div>
                        </div>
                    </article> 
                </div>
                
                <div class="container_comentarios">
                    <h3 class="title">
                        Comentarios
                    </h3>
                    <div class="comentarios" id="comentarios">
                        
                    </div>
                    <div class="form_comentario" id="contenido_comentario">
                        <div class="title">Deja tu comentario</div>
                        <form id="form_comentario">
                            <div class="form-group">
                                <label for="">* Nombre:</label>
                                <input type="text" required name="nombre_comentario">
                            </div>
                            <div class="form-group">
                                <label for="">* Correo:</label>
                                <input type="email" required name="correo_comentario">
                            </div>
                            <div class="form-group">
                                <label for="">* Mensaje:</label>
                                <textarea required name="texto_comentario"></textarea>
                            </div>
                            <div class="form-group button">
                                <button type="submit">Comentar</button>
                            </div>
                            <div class="mensaje" style="padding: 0px 50px;">
                                
                            </div>
                        </form>
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