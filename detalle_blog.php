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
    
    
    <meta name="description" 				content="<?php echo $row['titulo_blog'];?>">
    <meta name="author" 					content="<?php echo $row['nombre_usuario']; ?>">
    <meta property="og:locale" 				content="en_EN"/>
    <meta property="og:type" 				content="article"/>
    <meta property="og:title" 				content="<?php echo $row['titulo_blog'];?>"/>
    <meta property="og:description" 		content="<?php echo $row['resumen_blog'];?>"/>
    <meta property="og:url" 				content="http://localhost/colibri/omedic/detalle_blog.php?blog=<?php echo $row['id_blog']; ?>"/>
    <meta property="og:site_name" 			content="localhost"/>
    <meta property="article:publisher" 		content="https://www.facebook.com/ejemplo"/>
    <meta property="article:published_time" content="2015-12-10T02:05:30Z"/>
    <meta property="og:image" 				content="http://mahcode.com/share_article/teaser-jon-snow.jpg"/>
    

    <meta name="twitter:title" 				content="Game of Thrones Season 6: Tease"/>
    <meta name="twitter:description" 		content="The first thing Game Of Thrones released to tease its upcoming sixth season was a poster featuring Jon Snow."/>
    <meta name="twitter:image" 				content="http://mahcode.com/share_article/teaser-jon-snow.jpg"/>
    <meta name="twitter:site" 				content="@itsmahcode"/>
    <meta name="twitter:creator" 			content="@itsmahcode"/>
    <meta name="twitter:via" 				content="itsmahcode"/>
    <meta name="twitter:card" 				content="photo"/>
    <meta name="twitter:url" 				content="http://mahcode.com/share_article/"/>

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
                    <section class="publicacion" data-id_publicacion='<?php echo $row['id_blog'];?>'>
                        <div class="public_header">
                            <h3 class="title descripcion_blog" data-id_blog="<?php echo $row['id_blog'];?>">
                                <?php echo $row['titulo_blog'];?>
                            </h3>
                            <p class="date">
                                <?php echo $row['nombre_usuario'];?>
                            </p>
                        </div>
                        <div class="texto">
                            <div class="imagen">
                                <img src="imagenes/<?php echo $row['imagen_blog'];;?>" alt="">
                            </div>
                            <div class="container">
                                <?php echo $row['contenido_blog'];?>
                            </div>
                        </div>
                    </section> 
                </div>
                
                <div class="container_entradas">
                    <div class="title">
                        Entradas recientes
                    </div>
                    <div class="entradas" id="container_entradas">
                        
                    </div>
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
                            <!-- Buttons, Copy this to your Page Article -->
                            <div class="share-buttons-row" style="padding: 0px 50px; display: flex; justify-content: center;">
                                <!--Facebook's Button -->
                                <div class="share-fb"></div>
                                <!--Twitter's Button -->
                                <div class="share-twitter"></div>
                                <!--Linkedin's Button -->
                                <div class="share-linkedin"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php include('footer.php'); ?>

    </div>
   
    <?php include('scripts.php'); ?>
    <script src="libs/functions.js"></script>
    <script src="js/detalle_blog.js"></script>
</body>
</html>