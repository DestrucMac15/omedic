<nav>
    <ul class="wrap-menu">
        <a href="index.php">
            <li class="item <?php echo ($menu == 'principal') ? 'active': '';?>"><i class="fas fa-home"></i> Inicio</li>
        </a>
        <a href="blog.php">
            <li class="item <?php echo ($menu == 'blog') ? 'active': '';?>"><i class="fab fa-blogger"></i> Blog</li>
        </a>
        <a href="agenda.php">
            <li class="item <?php echo ($menu == 'agenda') ? 'active': '';?>"><i class="fas fa-calendar-alt"></i> Agenda</li>
        </a>
    </ul>
    <ul class="options">
        <li class="item" id="id_usuario" data-id_usuario="<?php echo $_SESSION['id_usuario']; ?>">
            <i class="fas fa-user"></i> <?php echo $_SESSION['nombre_usuario']; ?>
        </li>
        <li class="item item-options">
            <i class="fas fa-ellipsis-v"></i>
            <ul class="container_options">
                <a href="ajustes.php">
                    <li class="sub-item"><i class="fas fa-cog"></i> Ajustes</li>
                </a>
                <li class="sub-item" id="salir_app"><i class="fas fa-sign-out-alt"></i> Salir</li>
            </ul>
        </li>
        </ul>
</nav>