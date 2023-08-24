<?php
session_start();
error_reporting(0);
$varsesion = $_SESSION['usuario'];

if ($varsesion == null || $varsesion = '') {
    header('location: ../pages/login-page.php');
    die();
}
?>

<?php include '../includes/conn.php' ?>
<?php include '../templates/head.php' ?>

<header class="header">

    <?php include '../templates/navbar.php' ?>


    <div id="hero" class="header-content container">
        <div class="header-txt">
            <h1>Ofertas especiales</h1>
            <p>
                <b><u>Ofertas de temporada</u></b>
            </p>
            <a href="#" class="btn-1">Informacion</a>
        </div>
        <div class="header-img">
            <img src="../img/img2.png" alt="" />
        </div>
    </div>

    <!-- REGISTRO Y LOGIN -->
    <!-- <div class="formularios">
        <span class="icon_close">
            <icon-icon name="close-outline"></icon-icon>
        </span>
        


    </div> -->
</header>


<section class="oferts container" id="lista-1">
    <div class="descri">
        <h2>Productos En Oferta</h2>
        <p>¡Ahorra y lleva los mejores beneficios a tu hogar!</p>
    </div>


    <div class="oferts-content">
        <div class="ofert-1">
            <img src="../img/tala.png" alt="" />
            <div class="product-txt">
                <h3>Taladro Electrico</h3>
                <p>Precio: $. 500</p>

                <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar</a>
            </div>
        </div>

        <div class="ofert-1">
            <img src="../img/decoracion.png" alt="" />
            <div class="product-txt">
                <h3>Sofa Amarillo</h3>
                <p>calidad premium</p>
                <p>Precio: $.700</p>
                <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar</a>
            </div>
        </div>
        <div class="logan-1">
            <h3>Muebles</h3>
            <p>calidad premium</p>
        </div>
    </div>

    <div class="oferts-content">
        <div class="logan-1">
            <h3>Baños y espejos</h3>
            <p>calidad premium</p>
        </div>
        <div class="ofert-1">
            <img src="../img/habitacion.png" alt="" />
            <div class="product-txt">
                <h3>Espejo Para Habitación</h3>
                <p>Precio: $70</p>
                <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar</a>
            </div>
        </div>

        <div class="ofert-1">
            <img src="../img/amola.png" alt="" />
            <div class="product-txt">
                <h3>Amoladora</h3>
                <p>Precio: $.300</p>
                <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar</a>
            </div>
        </div>
    </div>
</section>

<section class="promotion">
    <div class="promotion-content container">
        <div class="promotion-txt">
            <h2>Las mejores Promociones</h2>
            <p>
                ¡Descubre nuestras increíbles promociones en la ferretería que te brindarán la oportunidad perfecta para equiparte con las herramientas y productos que necesitas!
            </p>
            <a href="#" class="btn-1">Informacion</a>
        </div>

        <div class="promotion-img">
            <img src="../img/percu.png" alt="" />
        </div>
    </div>
</section>

<?php include '../templates/productos.php' ?>

<section class="blog container" id="noticias">
    <div class="descri">
        <h2>Nuevas Noticias</h2>
        <p>
            ¿Estás listo para ahorrar mientras te equipas con las mejores herramientas y productos? ¡No busques más! En nuestra ferretería, hemos lanzado una serie de promociones emocionantes que te ayudarán a lograr tus proyectos con facilidad y economía.
        </p>
    </div>


    <div class="blog-content">
        <div class="blog-1">
            <img src="../img/perchero.jpg" alt="" />
            <div class="blog-txt">
                <p>
                    Los estantes modulares son versátiles y pueden adaptarse a diferentes espacios y necesidades. Puedes ofrecer estantes de diferentes tamaños y configuraciones para que los usuarios puedan personalizar su organizador según sus preferencias.
                </p>
                <a href="#" class="btn-4">Leer mas</a>
            </div>
        </div>

        <div class="blog-1">
            <img src="../img/sillas.jpg" alt="" />
            <div class="blog-txt">
                <p>
                    Estas sillas son versátiles y se adaptan a una variedad de estilos de decoración. Puedes optar por sillas de madera sólida con respaldos elegantes y asientos acolchados para un aspecto atemporal.
                </p>
                <a href="#" class="btn-4">Leer mas</a>
            </div>
        </div>

        <div class="blog-1">
            <img src="../img/mueble.jpg" alt="" />
            <div class="blog-txt">
                <p>
                    Colores de muebles para sala clásicos, Muebles en color madera para salones clásicos, Muebles en color blanco para salas clásicas, Muebles en color negro para salas clásicas, Muebles color chocolate para salas clásicas, Colores de muebles para salas modernas, Muebles para salas modernas color dorado, Muebles para salas color rosa gold, Muebles color caoba para salas modernas, Muebles blancos para salas modernas, Muebles en color plateado para salas modernas.

                </p>
                <a href="#" class="btn-4">Leer mas</a>
            </div>
        </div>
    </div>
</section>

<?php include '../pages/chatbot.php' ?>
<?php include '../templates/scripts.php' ?>
<?php include '../templates/footer.php' ?>