<?php
//error_reporting(0);
/*session_start();
if (isset($_SESSION['cliente_id'])) {
} else {
    header("location: ./bloqueo.html");
    die();
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>
</head>
<body>
    <section id="header">
        <a href="#"><img src="img/logo.png" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Inicio</a></li>
                <li><a href="shop.php">Tienda</a></li>
                <li><a href="about.php">Nosotros</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
                <li><a href="./admi/php/cerrar-sesion.php">Cerrar</a></li>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Grandes Ofertas</h2>
        <h1>En todos Nuestros</h1>
        <h1>Productos</h1>
        <p>¡Ahorra mas con cupones hasta un 70% de descuento!</p>
        <button>Compra Ahora</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/1.png" alt="">
            <h6>Envío Gratis </h6>
        </div>
        <div class="fe-box">
            <img src="img/features/2.png" alt="">
            <h6>Pedido en Linea </h6>
        </div>
        <div class="fe-box">
            <img src="img/features/3.png" alt="">
            <h6>Ahorra Dinero </h6>
        </div>
        <div class="fe-box">
            <img src="img/features/4.png" alt="">
            <h6>Promociones </h6>
        </div>
        <div class="fe-box">
            <img src="img/features/5.png" alt="">
            <h6>Venta Feliz </h6>
        </div>
        <div class="fe-box">
            <img src="img/features/6.png" alt="">
            <h6>Soporte F24/7 </h6>
        </div>
    </section>

<?php require('query/products/list-prod-destacados.php'); ?>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off </span> - All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>


<?php require('query/products/recently-added-product.php'); ?>


    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Spring/Summer</h4>
            <h2>upcoming season</h2>
            <span>The best classic dress is on sale at cara</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
           <h2>SEASONAL SALE</h2>
           <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring / Summer 2022</h3>
         </div>
         <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
         </div>
    </section>

<?php require('footer.php'); ?>

    <script src="script.js"></script>
</body>
</html>