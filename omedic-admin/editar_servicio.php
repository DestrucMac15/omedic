<?php
	include("login/acceso_correcto.php");
    include('../control/conexi.php');
    $link = Conectarse();
    $menu = 'servicios';
    if(isset($_GET['id_servicio'])){
        $id_servicio = $_GET['id_servicio'];
        $query = "SELECT * FROM servicios WHERE id_servicio='$id_servicio'";
        $execute = mysqli_query($link,$query);
        if($execute){
            $row = mysqli_fetch_assoc($execute);
            extract($row);
        }else{
            header('location:blog.php');
        }
    }else{
        header('location:blog.php');
    }
?>
<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDITAR SERVICIO - OMEDIC</title>
    <?php include('styles.php'); ?>
    <link href="css/detalleBlog.css" rel="stylesheet" type="text/css">
    <link href="css/formularios.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main_container">
        <?php include('menu.php'); ?>

        <div class="container" data-id_servicio="<?php echo $id_servicio; ?>">
            <div class="area">
                <div class="title">
                    <h3>EDITAR BLOG</h3>
                </div>
                <form id="form_servicio">
                    <div class="form-group">
                        <label for="">Nombre del servicio</label>
                        <input type="text" name="nombre_servicio" required value="<?php echo $nombre_servicio; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Descripción del servicio</label>
                        <textarea name="descripcion_servicio" id="descripcion_servicio" required><?php echo str_replace( "<br>", ' ', $descripcion_servicio ); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Duración del servicio (min)</label>
                        <input type="number" name="tiempo_servicio" required value="<?php echo $tiempo_servicio; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Precio del servicio</label>
                        <input type="number" name="precio_servicio" required value="<?php echo $precio_servicio; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tiempo de espera del servicio (min)</label>
                        <input type="number" name="espera_servicio" required value="<?php echo $espera_servicio; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Categoria</label>
                        <select name="id_categoria" id="id_categoria" required>
                            <option value="">Seleccione una categoria</option>
                            <?php 
                                $query = "SELECT * FROM categorias";
                                $execute = mysqli_query($link,$query);
                                while($row_categorias = mysqli_fetch_assoc($execute)){
                                    
                            ?>
                                <option <?php echo ($id_categoria == $row_categorias['id_categoria']) ? 'selected' : ''?> value="<?php echo $row_categorias['id_categoria']; ?>"><?php echo $row_categorias['nombre_categoria']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group row-imagen">
                        <label for="">Imagen</label>
                        <img src="../imagenes/servicios/<?php echo $foto_servicio; ?>" alt="">
                    </div>
                    <div class="form-group">
                        <input type="file" name="imagen_servicio" id="imagen_servicio" style="cursor: pointer;">
                    </div>
                    <div class="form-group" style="align-items: flex-end;">
                        <button type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php include('scripts.php'); ?>
    <script src="js/editar_servicio.js"></script>
</body>
</html>