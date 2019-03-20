<?php
	include("login/acceso_correcto.php");
    include('../control/conexi.php');
    $link = Conectarse();
    $menu = 'servicios';
?>
<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NUEVO SERVICIO - OMEDIC</title>
    <?php include('styles.php'); ?>
    <link href="css/nuevo_servicio.css" rel="stylesheet" type="text/css">
    <link href="css/formularios.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main_container">
        <?php include('menu.php'); ?>
        <div class="container">
            <div class="area">
                <div class="title">
                    <h3>NUEVO SERVICIO</h3>
                </div>
                <form id="form_servicio">
                    <div class="form-group">
                        <label for="">Nombre del servicio</label>
                        <input type="text" name="nombre_servicio" required>
                    </div>
                    <div class="form-group">
                        <label for="">Descripción del servicio</label>
                        <textarea name="descripcion_servicio" id="descripcion_servicio" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Duración del servicio (min)</label>
                        <input type="number" name="tiempo_servicio" required>
                    </div>
                    <div class="form-group">
                        <label for="">Precio del servicio</label>
                        <input type="number" name="precio_servicio" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tiempo de espera del servicio (min)</label>
                        <input type="number" name="espera_servicio" required>
                    </div>
                    <div class="form-group">
                        <label for="">Categoria</label>
                        <select name="id_categoria" id="id_categoria" required>
                            <option value="">Seleccione una categoria</option>
                            <?php 
                                $query = "SELECT * FROM categorias";
                                $execute = mysqli_query($link,$query);
                                while($row = mysqli_fetch_assoc($execute)){
                                    extract($row);
                            ?>
                                <option value="<?php echo $id_categoria?>"><?php echo $nombre_categoria; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group row-imagen">
                        <label for="">Imagen</label>
                        <img src="" alt="">
                    </div>
                    <div class="form-group">
                        
                        <input type="file" name="imagen_servicio" id="imagen_servicio" style="cursor: pointer;" required>
                    </div>
                    <div class="form-group" style="align-items: flex-end;">
                        <button type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include('scripts.php'); ?>
    <script src="js/nuevo_servicio.js"></script>
</body>
</html>
