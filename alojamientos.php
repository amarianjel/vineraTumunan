<!--ALOJAMIENTOS-->
<?php
require 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Desconexión en Alto Colchagua">
	<meta name="description" content="Desconecta del ruido de la ciudad en uno de nuestros chalets completamente equipados. Explore la naturaleza, pruebe nuestros vinos y pruebe nuestra miel local. Reservar ahora.">

    	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    
    <link rel="stylesheet" href="assets/css/alojamientos.css">

    <title>Viña Tumuñan Lodge | Alojamientos</title>

    <!--Style-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/botones-idioma.css">
    <!--Style-->
    <!-- index css -->
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.bundle.min.js">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!--Icon-Font-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

</head>
<body style="background-color: #f5e1ce;">
    <a href="https://wa.me/56987875048" class="btn-wsp" target="_blank">
        <i class="fa fa-whatsapp icono"></i>
    </a>
    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="./">
                                <img src="images/logo-svg.svg" width="120em">
                            </a>
                        </div>
                        <!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="./">Sobre nosotros</a></li>
								<li class="current-list-item"><a href="../alojamientos.php">Alojamientos</a>
                                <li><a href="./events.php">Eventos</a></li>
								<li><a href="./galeria.php">Galeria</a>
								<li><a href="./formReservas.php">Reservas</a>
								<li><a href="./contact.php">Contacto</a></li>
								<li><a href="./tienda.php">Tienda</a></li>

                                <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="checkout.php">
                                            <?php if ($num_cart == 0) { ?>
                                                <i class="fas fa-shopping-cart fa-lg"></i> Carrito
                                            <?php } else { ?>
                                                <i class="fas fa-shopping-cart fa-lg">
                                                    <sup><?php echo $num_cart; ?></sup></i> Carrito
                                            <?php } ?>
                                        </a>
                                    </div>
                                </li>
                                <li>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Lenguaje
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="./alojamientos.php" style="color:black;">
												<img src="images/traduccion/espana.png" class="logo-idioma">ES
											</a>
											<a class="dropdown-item" href="./en/alojamientos.php" style="color:black;">
												<img src="./images/traduccion/reino-unido.png" class="logo-idioma">EN
											</a>
											<a class="dropdown-item" href="./po/alojamientos.php" style="color:black;">
												<img src="./images/traduccion/portugal.png" class="logo-idioma">PO
											</a>
										</div>
									</div>
								</li>
                            </ul>
                        </nav>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->


    <!-- hero area -->
    <div class="hero-area hero-bg" style="background-image: url(images/bed/aloja.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Nuestras opciones de Alojamiento</p>
                            <h1>Lodge</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <style>
        /*********Alojamientos***********/
        .titulo {
            color: #051922;
        }
        .otrosPrecios{
            font-weight: 600;
        }

        @media only screen and (max-width: 959px) {
            body:before {
                content: "";
                background-image: url('your background url goes here');
                background-size: cover;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
        }
    </style>
    <!-- main section -->
    <main>
        <section class="center espacio mx-0 my-5">
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-10">
                    <h2 class="titulo">Desconectarse en el Alto Colchagua</h2>
                    <br><br>
                    <div>
                        <p class="justificar-inicio">Hemos estado trabajando arduamente para reconfigurar Tumuñan Lodge para poder recibir a los huéspedes de manera higiénica y segura. Los alquileres mensuales son solo una forma de alquilar una de nuestras 3 cabañas completamente equipadas.
                        </p>
                    </div>
                    <br><br>
                </div>
            </div>
            <br>
            <hr><br>
            <div class="row align-items-center">
                <div class="fotografia-info col-12 col-lg-6 my-5">
                    <div class="row">
                        <div id="slider2">
                            <input type="radio" name="slider" id="s6">
                            <input type="radio" name="slider" id="s7">
                            <input type="radio" name="slider" id="s8">
                            <input type="radio" name="slider" id="s9">
                            <input type="radio" name="slider" id="s10">

                            <label for="s6" id="slide6">
                                <img class="carrusel" src="images/bed/chalet_parejas/1.jpeg">
                            </label>
                            <label for="s7" id="slide7">
                                <img class="carrusel" src="images/bed/chalet_parejas/2.jpeg">
                            </label>
                            <label for="s8" id="slide8">
                                <img class="carrusel" src="images/bed/chalet_parejas/3.jpeg">
                            </label>
                            <label for="s9" id="slide9">
                                <img class="carrusel" src="images/bed/chalet_parejas/4.jpeg">
                            </label>
                            <label for="s10" id="slide10">
                                <img class="carrusel" src="images/bed/chalet_parejas/6.jpeg">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="info col-12 col-lg-6">
                    <h1 class="titulo">Chalet para Parejas</h1>
                    <p style="font-size: 19px">
                        Cabaña moderna que tiene 1 dormitorio con jardines privados, un fogon, una parrilla y una cocina pequeña. Cerca del río y con vistas a la montaña con una habitación.
                    </p>
                    <h4>Precios</h4>
                    <p style="font-size: 19px">
                        CLP$120,000 por noche (Desayuno e IVA incluido).
                    </p>
                    <hr>
                    <p style="font-size: 19px">
                        CLP$190,000  2 noches/ 3 días, 1 día de uso del jacuzzi incluido (-20%)(Desayuno e IVA incluido).
                    </p>
                    <hr>
                    <p style="font-size: 15px">
                        <span class="otrosPrecios">Desayuno: </span>CLP$7,000.
                    </p>
                    <p style="font-size: 15px">
                        <span class="otrosPrecios">Almuerzo/Cena: </span>CLP$18,000.
                    </p>
                    <p style="font-size: 15px">
                        <span class="otrosPrecios">Degustacion de Vino: </span>CLP$12,000 por persona.
                    </p>
                    <p style="font-size: 15px">
                        <span class="otrosPrecios">Tour de la viña con degustación: </span>CLP$18,000 por persona.
                    </p>
                </div>
            </div>
            <br>

            <hr>
            <br>

            <div class="row align-items-center">
                <div class="info col-12 col-lg-6">
                    <h2 class="titulo">Chalet para familia</h2>
                    <p style="font-size: 19px">Amplia casa de 4 dormitorios con una cocina completamente equipada, patio privado, jardín, un fogon, una parrilla y espectaculares vistas a las montañas.</p>
                    <h4>Precio</h4>
                    <p style="font-size: 19px">
                        CLP$135,000 por noche (Desayuno e IVA incluido).
                    </p>
                    <hr>
                    <p style="font-size: 19px">
                        CLP$240,000  2 noches/ 3 días, 1 día de uso del jacuzzi incluido (-20%) (Desayuno e IVA incluido).
                    </p>
                    <hr>
                    <p style="font-size: 15px">
                        <span class="otrosPrecios">Desayuno: </span>CLP$7,000.
                    </p>
                    <p style="font-size: 15px">
                        <span class="otrosPrecios">Almuerzo/Cena: </span>CLP$18,000.
                    </p>
                    <p style="font-size: 15px">
                        <span class="otrosPrecios">Degustacion de Vino: </span>CLP$12,000 por persona.
                    </p>
                    <p style="font-size: 15px">
                        <span class="otrosPrecios">Tour de la viña con degustación: </span>CLP$18,000 por persona.
                    </p>
                </div>
                <div class="fotografia-info col-12 col-lg-6 my-5">
                    <div class="row">
                        <div id="slider">
                            <input type="radio" name="slider" id="s1" checked>
                            <input type="radio" name="slider" id="s2">
                            <input type="radio" name="slider" id="s3">
                            <input type="radio" name="slider" id="s4">
                            <input type="radio" name="slider" id="s5">

                            <label for="s1" id="slide1">
                                <img class="carrusel" src="images/bed/chalet2020/DSC_0394.jpg">
                                
                            </label>
                            <label for="s2" id="slide2">
                                <img class="carrusel" src="images/bed/chalet2020/DSC_0598.jpg">
                            </label>
                            <label for="s3" id="slide3">
                                <img class="carrusel" src="images/bed/chalet2020/DSC_9921.jpg">
                            </label>
                            <label for="s4" id="slide4">
                                <img class="carrusel" src="images/bed/chalet2020/DSC_0666.jpg">
                            </label>
                            <label for="s5" id="slide5">
                                <img class="carrusel" src="images/bed/chalet2020/DSC_0109.jpg">
                            </label>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <hr>
            <br>

            <div class="row align-items-center">
                <div class="fotografia-info col-12 col-lg-6 my-5">
                    <div class="row">
                        <div id="slider3">
                            <input type="radio" name="slider" id="s11">
                            <input type="radio" name="slider" id="s12">
                            <input type="radio" name="slider" id="s13">
                            <input type="radio" name="slider" id="s14">
                            <input type="radio" name="slider" id="s15">

                            <label for="s11" id="slide11">
                                <img class="carrusel" src="images/bed/casa_montana/6.jpg">
                            </label>
                            <label for="s12" id="slide12">
                                <img class="carrusel" src="images/bed/casa_montana/2.jpg">
                            </label>
                            <label for="s13" id="slide13">
                                <img class="carrusel" src="images/bed/casa_montana/3.jpg">
                            </label>
                            <label for="s14" id="slide14">
                                <img class="carrusel" src="images/bed/casa_montana/4.jpg">
                            </label>
                            <label for="s15" id="slide15">
                                <img class="carrusel" src="images/bed/casa_montana/1.jpg">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="info col-12 col-lg-6">
                    <h1 class="titulo">Casa de Montaña</h1>
                    <p style="font-size: 19px">
                        Acogedora cabaña moderna con 2 dormitorios, 2 baños, fogata, asador y pequeña cocina. Cerca del río con vistas a la montaña.
                    </p>
                    <h4>Precio</h4>
                    <p style="font-size: 19px">
                        CLP$150,000 por noche (Desayuno e IVA incluido).
                    </p>
                    <hr>
                    <p style="font-size: 19px">
                        CLP$270,000  2 noches/ 3 días, 1 día de uso del jacuzzi incluido (-20%) (Desayuno e IVA incluido).
                    </p>
                    <hr>
                    <p style="font-size: 15px">
                        <span class="otrosPrecios">Desayuno: </span>CLP$7,000.
                    </p>
                    <p style="font-size: 15px">
                        <span class="otrosPrecios">Almuerzo/Cena: </span>CLP$18,000.
                    </p>
                    <p style="font-size: 15px">
                        <span class="otrosPrecios">Degustacion de Vino: </span>CLP$12,000 por persona.
                    </p>
                    <p style="font-size: 15px">
                        <span class="otrosPrecios">Tour de la viña con degustación: </span>CLP$18,000 por persona.
                    </p>
                </div>
        </section>
        <hr>
        <br>
        <h2 class="titulo" style="display: flex; justify-content: center;  background-color: #000000e7; color: #fff;">Ubicación</h2>
        <div class="mapa" style="display: flex; justify-content: center; margin:1em;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21963.498815824205!2d-70.79943981194643!3d-34.7499001301102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9664c1b33eefd169%3A0x7c7f01fc0de1ef70!2sTumu%C3%B1an%20Lodge!5e0!3m2!1ses-419!2scl!4v1659462547925!5m2!1ses-419!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!--Video-->
        <section>
            <div class="ratio ratio-21x9 alto-completo">
                <iframe width="100%" height="100%" src="images/video_vina.mp4" title="Viña Tumuñan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!--<iframe src="https://www.youtube.com/embed/_Y9afSciAAM?autoplay=1&mute=1 " title="YouTube video player " frameborder="0 " allowfullscreen></iframe>-->
            </div>
        </section>
    </main>
    <!-- end main section -->

    <?php include("includes/footer.php"); ?>
</body>
</html>