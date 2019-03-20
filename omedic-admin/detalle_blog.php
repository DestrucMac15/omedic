<?php
	include("login/acceso_correcto.php");
    include('../control/conexi.php');
    $link = Conectarse();
    $menu = 'blog';
    if(isset($_GET['id_blog'])){
        $id_blog = $_GET['id_blog'];
        $query = "SELECT * FROM blogs WHERE id_blog='$id_blog'";
        $execute = mysqli_query($link,$query);
        if($execute){
            $row = mysqli_fetch_assoc($execute);
            extract($row);
        }else{
            header("location:blog.php");    
        }
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
    <link href="css/formularios.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main_container">
        <?php include('menu.php'); ?>

        <div class="container" data-id_blog="<?php echo $id_blog; ?>">
            <div class="area">
                <div class="title">
                    <h3>EDITAR BLOG</h3>
                </div>
                <div class="edition_blog">
                    <form id="form_blog">
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" name="titulo_blog" value="<?php echo $titulo_blog; ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Resumen</label>
                            <textarea style="height: 100px;" name="resumen_blog"><?php echo $resumen_blog; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Contenido</label>
                            <textarea style="height: 200px;" name="contenido_blog" id="cont_blog"><?php echo str_replace( "<br>", ' ', $contenido_blog ); ?></textarea>
                        </div>
                        <div class="form-group row-imagen">
                            <label for="">Imagen</label>
                            <img src="../imagenes/blog/<?php echo $imagen_blog; ?>" alt="">
                        </div>
                        <div class="form-group">
                            
                            <input type="file" value="<?php echo $imagen_blog; ?>" name="imagen_blog" id="imagen_blog" style="cursor: pointer;">
                        </div>
                        <div class="form-group" style="align-items: flex-end;">
                            <button type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
                <div class="container_comentarios">
                    <div class="title">
                        <h3>COMENTARIOS DE ESTE POST</h3>
                    </div>
                </div>
                <div class="container_comentarios">
                    <h3 class="title">
                        Comentarios
                    </h3>
                    <div class="comentarios" id="comentarios">
                        
                    </div> 
                    <div class="form_comentario" id="contenido_comentario">
                        <div class="title">Responder comentario</div>
                        <form id="form_comentario">
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
        </div>
    </div>


    <?php include('scripts.php'); ?>
    <script src="js/editar_blog.js"></script>
</body>
</html>