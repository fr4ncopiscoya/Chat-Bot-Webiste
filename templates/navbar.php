<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
    header('location: ../pages/login-page.php');
    die();
}
?>

<div class="menu" id="inicio">
    <a href="#" class="logo">El tornillo feliz</a>
    <input type="checkbox" id="menu" />
    <label for="menu">
        <img class="svg-menu" src="../svg/menu.svg" alt="menu" />
    </label>
    <nav class="navbar">
        <ul>
            <li>
                <a href="../pages/index.php#hero"><i>Inicio</i></a>
            </li>
            <li>
                <a href="../pages/index.php#lista-1"><i>Productos</i></a>
            </li>
            <li>
                <a href="#noticias"><i>Noticias</i></a>
            </li>
            <li>
                <a href="#contacto"><i>Contacto</i></a>
            </li>
            <li>
                <h6 style="margin-top: 1rem;padding-left: 10px;"> <?php echo $_SESSION['usuario'] ?></h6>
            </li>
            <li>
                <a href="../includes/close.php"><button class="btn_login">Cerrar Sesión</button></a>
            </li>
        </ul>
    </nav>
    <div>
        <ul>
            <li class="submenu">
                <img src="../svg/car.svg" id="img-carrito" alt="" />
                <div id="carrito">
                    <table id="lista-carrito">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <a href="#" id="vaciar-carrito" class="btn-2">vaciar carrito</a>
                </div>
            </li>
        </ul>
    </div>
</div>