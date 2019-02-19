<nav>
    <div class="logo">
        <img src="imagenes/logoOmedic.png" alt="Icono de Omedic">
    </div>
    <div class="menu oculto">
        <ul class="wrap-menu">
            <li class="item">
                <a href="./" class="<?php echo ($menu == 'principal') ? 'active' : '' ?>">INICIO</a>
            </li>
            <li class="item item-menu">
                <a href="servicios.php" class="<?php echo ($menu == 'servicios') ? 'active' : '' ?>">SERVICIOS</span></a> 
                    <ul class="sub-menu">
                        <li class="sub-item">
                            <a href="estudios-a-domicilio.php">Estudios a Domicilio</a>    
                        </li>
                        <li class="sub-item">
                            <a href="servicios-compartidos.php">Servicios Compartidos</a>    
                        </li>
                        <li class="sub-item">
                            <a href="otros-servicios.php">Otros Servicios</a>    
                        </li>
                    </ul>
            </li>
            <li class="item">
                <a href="nosotros.php" class="<?php echo ($menu == 'nosotros') ? 'active' : '' ?>">NOSOTROS</a>    
            </li>
            <li class="item">
                <a href="blog.php" class="<?php echo ($menu == 'blog') ? 'active' : '' ?>">BLOG</a>    
            </li>
            <li class="item">
                <a href="contactanos.php" class="<?php echo ($menu == 'contactanos') ? 'active' : '' ?>">CONTACTO</a>    
            </li>
        </ul>
    </div>
    <div class="tarjetas">
        <div class="imagenes">
            <img src="imagenes/mastercard.png" alt="">
            <img src="imagenes/visa.png" alt="">
        </div>
        <p>Cobertura en CDMX y Área metropolitana</p>
    </div>
    <div class="telefono">
        <div class="texto">Oficinas 24hrs <br> (55) 4170 8797</div>
        <div class="icono"><i class="fas fa-phone"></i></div>
    </div>
    <div class="bar">
        <i class="fas fa-bars" id="btn_menu"></i>
    </div>
</nav>