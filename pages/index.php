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


    <div class="header-content container">
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
        <h2>Nuestros productos</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>


    <div class="oferts-content">
        <div class="ofert-1">
            <img src="../img/tala.png" alt="" />
            <div class="product-txt">
                <h3>Herramientas Electricas</h3>
                <p>calidad premium</p>
                <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar</a>
            </div>
        </div>

        <div class="ofert-1">
            <img src="../img/sierra.png" alt="" />
            <div class="product-txt">
                <h3>Decohogar</h3>
                <p>calidad premium</p>
                <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar</a>
            </div>
        </div>
        <div class="logan-1">
            <h3>Herramientas</h3>
            <p>calidad premium</p>
        </div>
    </div>

    <div class="oferts-content">
        <div class="logan-1">
            <h3>Baños y cocinas</h3>
            <p>calidad premium</p>
        </div>
        <div class="ofert-1">
            <img src="../img/lija.png" alt="" />
            <div class="product-txt">
                <h3>Construccion y Ferretería</h3>
                <p>calidad premium</p>
                <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar</a>
            </div>
        </div>

        <div class="ofert-1">
            <img src="../img/amola.png" alt="" />
            <div class="product-txt">
                <h3>Tecnología</h3>
                <p>calidad premium</p>
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
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi esse
                quidem quam vitae eveniet? Voluptate est voluptatem, molestias
                voluptatibus culpa cumque minima optio, quia, quas dolor incidunt
                tempore temporibus aspernatur.
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Id vero animi
            exercitationem! Libero repellat, saepe dolore ea ratione voluptatem!
            Veritatis velit at incidunt aliquam nobis quaerat ducimus iure beatae
            dolorem.
        </p>
    </div>


    <div class="blog-content">
        <div class="blog-1">
            <img src="../img/images1.jpg" alt="" />
            <div class="blog-txt">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae
                    nihil corrupti voluptatum consectetur ex id. Consequatur
                    repudiandae sit nostrum ullam veritatis tenetur possimus ex, fugit
                    molestiae error cumque molestias est.
                </p>
                <a href="#" class="btn-4">Leer mas</a>
            </div>
        </div>

        <div class="blog-1">
            <img src="../img/images2.jpg" alt="" />
            <div class="blog-txt">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex iusto
                    dolorum excepturi non eveniet esse similique sint eius. Dolorem
                    quidem odit illo aliquid. Ipsum quos, inventore nobis voluptatibus
                    sed aspernatur..
                </p>
                <a href="#" class="btn-4">Leer mas</a>
            </div>
        </div>

        <div class="blog-1">
            <img src="../img/images3.jpg" alt="" />
            <div class="blog-txt">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora
                    ipsam fugiat sed tenetur reprehenderit et soluta fuga voluptate
                    distinctio velit animi, minus earum sit, iste eius? Veniam
                    possimus et nisi!.
                </p>
                <a href="#" class="btn-4">Leer mas</a>
            </div>
        </div>
    </div>
</section>

<?php include '../pages/chatbot.php' ?>
<?php include '../templates/scripts.php' ?>
<?php include '../templates/footer.php' ?>