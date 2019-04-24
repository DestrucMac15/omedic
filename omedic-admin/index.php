<?php
	include("login/acceso_correcto.php");
    include('../control/conexi.php');
    $link = Conectarse();
    $menu = 'principal';
?>
<!DOCTYPE html>
<html lang="es_mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME - OMEDIC</title>
    <?php include('styles.php'); ?>
    <link href="css/principal.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main_container">
        <?php include('menu.php'); ?>
        <div class="container">
            <div class="area">
                <div class="title">
                    <h3>INICIO</h3>
                </div>
                <div class="main-content">
                    <div class="container-cards">
                        <div class="card">
                            <div class="body-card">
                                <div class="title">
                                    <i class="fas fa-user-plus"></i>
                                    <h4>NUEVAS RESERVACIONES</h4>
                                </div>
                                <div class="cant">
                                    <h4>23</h4>
                                </div>
                            </div>
                            <div class="footer-card">
                                <a href="">Ver detalles <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body-card">
                                <div class="title">
                                    <i class="fas fa-user-check"></i>
                                    <h4>RESERVACIONES AGENDADAS</h4>
                                </div>
                                <div class="cant">
                                    <h4>56</h4>
                                </div>
                            </div>
                            <div class="footer-card">
                                <a href="">Ver detalles <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="container-dash">
                        <div class="messages">
                            <h3>BANDEJA DE ENTRADA</h3>
                            <div class="container-messages">
                                <div class="message">
                                    <div class="logo-user">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                    <div class="datos">
                                        Marco Antonio Medina Ortega
                                        <p class="correo">joungmac4@gmail.com</p>
                                    </div>
                                    <div class="mensaje">
                                        <p class="asunto">Asunto: Es que no se</p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore velit illum sequi alias explicabo enim quis, recusandae suscipit. Perspiciatis ex in labore corporis. Incidunt delectus hic recusandae quis vero nam!
                                    </div>
                                </div>
                                <div class="message">
                                    <div class="logo-user">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                    <div class="datos">
                                        Marco Antonio Medina Ortega
                                        <p class="correo">joungmac4@gmail.com</p>
                                    </div>
                                    <div class="mensaje">
                                        <p class="asunto">Asunto: Es que no se</p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore velit illum sequi alias explicabo enim quis, recusandae suscipit. Perspiciatis ex in labore corporis. Incidunt delectus hic recusandae quis vero nam!
                                    </div>
                                </div>
                                <div class="message">
                                    <div class="logo-user">
                                        <i class="fas fa-user-circle"></i>
                                    </div>
                                    <div class="datos">
                                        Marco Antonio Medina Ortega
                                        <p class="correo">joungmac4@gmail.com</p>
                                    </div>
                                    <div class="mensaje">
                                        <p class="asunto">Asunto: Es que no se</p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore velit illum sequi alias explicabo enim quis, recusandae suscipit. Perspiciatis ex in labore corporis. Incidunt delectus hic recusandae quis vero nam!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="reservacion">
                            <h3>PROXIMAS CITAS</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include('scripts.php'); ?>
</body>
</html>