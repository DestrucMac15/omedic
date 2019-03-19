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
    <title>SERVICIOS - OMEDIC</title>
    <?php include('styles.php'); ?>
    <link href="css/servicios.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main_container">
        <?php include('menu.php'); ?>
        <div class="container">
            <div class="area">
                <div class="container_servicios">
                    <div class="servicios">
                        <div class="title">
                            <h3>SERVICIOS</h3>
                            <form action="" id="form_blog">
                                <input type="text" id="busqueda_servicio" placeholder="Buscar servicio">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div> 
                        <div class="lista-servicios" id="lista_servicios">
                            
                        </div>
                    </div>
                    <div class="categorias">
                        <div class="title">
                            <h3>CATEGORIAS</h3>
                        </div>
                        <div class="lista-categorias" id="lista_categorias">
                            <ul>
                                <li>Motosierra</li>
                                <li>Taladro</li>
                                <li>Rayos X</li>
                                <li>Otra cosa</li>
                            </ul>
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
    </div>

    <?php include('scripts.php'); ?>
    <script src="js/servicios.js"></script>
</body>
</html>

<!--
    <a id="go" rel="leanModal"  href="#test">Modal1 </a>
<a id="go2" rel="leanModal" name="test" href="#test02">Modal2</a>

<div id="test">
  <a class='modal_close' href="javascript:void(0);" onclick="$('#lean_overlay').click();">X</a>
  Modal 1 with text closing x
</div>


<div id="test02">
   <a class='modal_close' href="javascript:void(0);" onclick="$('#lean_overlay').click();"> <i class='fa fa-times'></i> </a>
  Modal2 with font awesome closing icon
</div>
-->