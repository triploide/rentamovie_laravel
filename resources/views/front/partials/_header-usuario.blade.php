<div class="header-dropdown-buttons hidden-xs">
    <div class="btn-group dropdown">
        <a href="#" class="dropdown-user" data-toggle="dropdown">
            <span><?php echo($_SESSION['usuario']['nombre']); ?></span> 
            <img class="avatar" src="/content/usuarios/<?php echo($_SESSION['usuario']['avatar']); ?>">
        </a>
        <ul class="dropdown-menu dropdown-menu-right dropdown-animation" style="padding: 0">
            <li>
                <a href="/perfil.php"><i class="fa fa-user"></i> Pefil</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-youtube-play"></i> Listas guardadas</a>
            </li>
            <li>
                <a href="/php/controllers/logout.controller.php"><i class="fa fa-sign-out"></i> Logout</a>
            </li>
        </ul>
    </div>
</div>