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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="shop.php">Tienda</a></li>
                <li><a href="about.php">Nosotros</a></li>
                <li><a href="contact.php">Contacto</a></li>
                <li id="lg-bag"><a class="active" href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#Let's_talk</h2>

        <p>LEAVE A MESSAGE, We love to hear from you!</p>
    </section>

    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Eliminar</td>
                    <td>Imagen</td>
                    <td>Producto</td>
                    <td>Cantidad</td>
                    <td>Precio</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody id="rows-cart-storage">
                <!-- <tr>
                    <td><i class="far fa-times-circle"><a href="#"></a></i></td>
                    <td><img src="img/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirts</td>
                    <td>$118.19</td>
                    <td>$118.19</td>
                </tr> -->
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply Coupon</h3>
            <div>
                <input type="text" placeholder="Enter Your Coupun">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$ 335</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td><strong>$ 335</strong></td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
        </div>
    </section>

<?php include('footer.php');?>

    <script src="getItems.js"></script>
    <script src="script.js"></script>
</body>
</html>