<nav>
    <div class="logo">
        <img src="imagenes/logoOmedic.png" alt="Icono de Omedic">
    </div>
    <div class="menu">
        <ul class="wrap-menu">
            <li class="item">
                <a href="./" class="<?php echo ($menu == 'principal') ? 'active' : '' ?>">INICIO</a>
            </li>
            <li class="item item-menu">
                <a href="servicios.php" class="<?php echo ($menu == 'servicios') ? 'active' : '' ?>">SERVICIOS</a> 
                    <ul class="sub-menu">
                        <li class="sub-item">
                            <a href="">Estudios a Domicilio</a>    
                        </li>
                        <li class="sub-item">
                            <a href="">Servicios Compartidos</a>    
                        </li>
                        <li class="sub-item">
                            <a href="">Otros Servicios</a>    
                        </li>
                    </ul>
            </li>
            <li class="item">
                <a href="nosotros.php">NOSOTROS</a>    
            </li>
            <li class="item">
                <a href="">BLOG</a>    
            </li>
            <li class="item">
                <a href="">CONTACTO</a>    
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
</nav>