
<?php
/*
    require 'ConexionBD/conexionsql.php';
    $BD=new Database();
    $conexion=$BD->conectar();
    
    $sql = $conexion->prepare("INSERT INTO `productos` (`id_produc`, `nombre_p`, `descripcion_p`, `precio_p`) 
    VALUES (NULL, 'Capitan America', 'tejido a crochet', '50.00');");
    $sql->execute();
    //$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    */
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

    <section id="product1" class="section-p1">
        <h2>Productos Destacados</h2>
        <p>Colección de Verano con Nuevos Diseños</p>
        <div class="pro-container">
            
            <div class="pro">
                <img src="img/products/1.jpg" alt="">
                <div class="des">
                    <span>100% Algodón</span>
                    <h5>Freddie Mercury</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 50.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/2.jpg" alt="">
                <div class="des">
                    <span>100% Algodón</span>
                    <h5>Gatitos Amigurumi"</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 130.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/3.jpg" alt="">
                <div class="des">
                    <span>Hipoalergénico</span>
                    <h5>LLavero Enfermera</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 20.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/4.jpg" alt="">
                <div class="des">
                    <span>Hipoalergénico</span>
                    <h5>LLavero Ranita</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 15.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/5.jpg" alt="">
                <div class="des">
                    <span>Hipoalergénico</span>
                    <h5>Elmo Amigurumi</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 45.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/6.jpg" alt="">
                <div class="des">
                    <span>Hipoalergénico</span>
                    <h5>Stich Amigurumi</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 70.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/7.jpg" alt="">
                <div class="des">
                    <span>100% Algodón</span>
                    <h5>Top Cuello "V"</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 70.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/8.jpg" alt="">
                <div class="des">
                    <span>100% Algodón</span>
                    <h5>Top Margarita</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 70.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off </span> - All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>Añadidos Recientemente</h2>
        <p>Colección de Verano con Nuevos Diseños</p>
        <div class="pro-container">
            
            <div class="pro">
                <img src="img/products/9.jpg" alt="">
                <div class="des">
                    <span>100% Algodón</span>
                    <h5>Happy Amigurumi</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 90.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/10.jpg" alt="">
                <div class="des">
                    <span>100% Algodón</span>
                    <h5>Muñeca Viviana</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 90.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/11.jpg" alt="">
                <div class="des">
                    <span>100% Algodón</span>
                    <h5>Sombrero Ranita</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 40.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/12.jpg" alt="">
                <div class="des">
                    <span>100% Algodón</span>
                    <h5>Muñeca Realista</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 120.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/13.jpg" alt="">
                <div class="des">
                    <span>100% Algodón</span>
                    <h5>Ranita Amigurumi</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 60.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/14.jpg" alt="">
                <div class="des">
                    <span>100% Algodón</span>
                    <h5>Arreglo Floral</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 50.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/15.jpg" alt="">
                <div class="des">
                    <span>100% Algodón</span>
                    <h5>Ramo Tulipanes</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 50.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="img/products/16.jpg" alt="">
                <div class="des">
                    <span>100% Algodón</span>
                    <h5>Capitán América</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>S/. 60.00</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

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


    <footer class="section-p1" style="background:#f5f5f5">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p> <strong>Dirección:</strong> Carretera Rompe olas Asociaciòn de Vivienda Oriòn; Pasaje San Juan Grande</p>
            <p><strong>Celular:</strong> +51 918 686 685</p>
            <p><strong>Horas:</strong>10:00 - 18:00, Lunes a Sabado</p>
            <div class="follow">
                <h4>Siguenos</h4>
                <div class="icon">
                    <ul>
                    <li><a href="https://www.facebook.com/DayanA.crochet?mibextid=ZbWKwL" class="fab fa-facebook-f"></a></li>
                    <li><a href="https://instagram.com/dayana.crochet?igshid=MWM2YjBjM2Q=" class="fab fa-instagram"></a></i>
                
                    <ul>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="http://localhost/Webside_Store_Poryect_Web/about.php">¿Quiénes somos?</a>
            <a href="http://localhost/Webside_Store_Poryect_Web/preguntas.php">Preguntas Frecuentes</a>
            <a href="http://localhost/Webside_Store_Poryect_Web/politica.php">Politicas de Privacidad</a>
            <a href="http://localhost/Webside_Store_Poryect_Web/terminos.php">Terminos & Condiciones</a>
            <a href="http://localhost/Webside_Store_Poryect_Web/contact.php">Contáctanos</a>


        <div class="col">
            <h4>Account</h4>
            <a href="http://localhost/Webside_Store_Poryect_Web/formulario/index.php?">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

      

        <div class="copyright">
            <p>© 2022, Crochet - HTML CSS Ecommerce Template</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>