<?php 
require 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="title" content="Vive la Experiencia Tumuñan">
	    <meta name="description" content="Recorra nuestro viñedo y pruebe nuestros vinos, explore el bosque nativo, ríos y montañas a través de numerosos senderos exclusivos. Explora ahora.">

        <!-- favicon -->
        <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
        <link rel="stylesheet" href="assets/css/galeria.css">
        
        <title>Viña Tumuñan Lodge | Galeria</title>

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
    </head>
    <body>
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
								<li><a href="./alojamientos.php">Alojamientos</a></li>
								<li><a href="./events.php">Eventos</a></li>
								<li  class="current-list-item"><a href="./galeria.php">Galeria</a></li>
								<li><a href="./formReservas.php">Reservas</a></li>
								<li><a href="./contact.php">Contacto</a></li>
								<li><a href="./tienda.php">Tienda</a></li>

								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="checkout.php">
											<?php if($num_cart==0){ ?>
											<i class="fas fa-shopping-cart fa-lg"></i> Carrito
											<?php }else{ ?>
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
											<a class="dropdown-item" href="./galeria.php" style="color:black;">
												<img src="images/traduccion/espana.png" class="logo-idioma">ES
											</a>
											<a class="dropdown-item" href="./en/galeria.php" style="color:black;">
												<img src="./images/traduccion/reino-unido.png" class="logo-idioma">EN
											</a>
											<a class="dropdown-item" href="./po/galeria.php" style="color:black;">
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
        
        <!-- images/bigstock-Vineyards-At-Sunset-37822447.jpg -->
        <!-- hero area -->
        <div class="hero-area hero-bg" style="background-image: url(images/activities/Hiking/1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 offset-lg-2 text-center">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">Vive la experiencia Tumuñan</p>
                                <h1>Viña Tumuñan Lodge</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end hero area -->
        <section class="body">
            <div class="gallery">
                <div class="product-filters">
                    <ul>
                        <li class="active buttons" data-filter="all">Todas</li>
                        <li class="buttons" data-filter="alojamientos">Alojamientos</li>
                        <li class="buttons" data-filter="tours">Tours de Vinos</li>
                        <li class="buttons" data-filter="comida_y_vino">Comida y Vino</li>
                        <li class="buttons" data-filter="vinos">Vinos</li>
                        <li class="buttons" data-filter="senderismo">Senderismo</li>
                        <li class="buttons" data-filter="pesca">Pesca</li>
                    </ul>
                </div>

                <div class="image-container">
                    <!-- Alojamientos -->
                    <section class="parallax-completo">
                        <a href="images/bed/IMG_4291.jpg" class="image alojamientos">
                            <img src="images/bed/IMG_4291.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/IMG_5546.jpg" class="image alojamientos">
                            <img src="images/bed/IMG_5546.jpg" alt="Alojamientos">
                        </a>
                        
                        <a href="images/bed/IMG_5637.jpg" class="image alojamientos">
                            <img src="images/bed/IMG_5637.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/IMG_5639.jpg" class="image alojamientos">
                            <img src="images/bed/IMG_5639.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/IMG_5676 (1).jpg" class="image alojamientos">
                            <img src="images/bed/IMG_5676 (1).jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/WINE_Enhanced_IMG_0519.jpg" class="image alojamientos">
                            <img src="images/bed/WINE_Enhanced_IMG_0519.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/Chalet/King Suite 3.jpg" class="image alojamientos">
                            <img src="images/bed/Chalet/King Suite 3.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/Chalet/King Suite 5.jpg" class="image alojamientos">
                            <img src="images/bed/Chalet/King Suite 5.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/Chalet/King Suite 6.jpg" class="image alojamientos">
                            <img src="images/bed/Chalet/King Suite 6.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/chalet2020/DSC_0595.jpg" class="image alojamientos">
                            <img src="images/bed/chalet2020/DSC_0595.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/chalet2020/DSC_0606.jpg" class="image alojamientos">
                            <img src="images/bed/chalet2020/DSC_0606.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/chalet2020/DSC_0638.jpg" class="image alojamientos">
                            <img src="images/bed/chalet2020/DSC_0638.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/chalet2020/DSC_0666.jpg" class="image alojamientos">
                            <img src="images/bed/chalet2020/DSC_0666.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/Rooms Website/casa/IMG-20200519-WA0002.jpg" class="image alojamientos">
                            <img src="images/bed/Rooms Website/casa/IMG-20200519-WA0002.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/Rooms Website/casa/IMG-20200519-WA0003.jpg" class="image alojamientos">
                            <img src="images/bed/Rooms Website/casa/IMG-20200519-WA0003.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/Rooms Website/casa/IMG-20200519-WA0005.jpg" class="image alojamientos">
                            <img src="images/bed/Rooms Website/casa/IMG-20200519-WA0005.jpg" alt="Alojamientos">
                        </a>
                        <a href="images/bed/Rooms Website/casa/IMG-20200519-WA0006.jpg" class="image alojamientos">
                            <img src="images/bed/Rooms Website/casa/IMG-20200519-WA0006.jpg" alt="Alojamientos">
                        </a>
                    </section>

                    <!-- Tours -->
                    <section class="parallax-completo">
                        <a href="images/activities/Wine Tours/10.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/10.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/11.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/11.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/12.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/12.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/13.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/13.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/14.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/14.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/15.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/15.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/16.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/16.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/17.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/17.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/18.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/18.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/128.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/128.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/40528855.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/40528855.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/55923167.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/55923167.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/bigstock-Vineyards-At-Sunset-37822447.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/bigstock-Vineyards-At-Sunset-37822447.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/casa-silva-winery-1.jpg.1024x0.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/casa-silva-winery-1.jpg.1024x0.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/Colchagua 7.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/Colchagua 7.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/image2.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/image2.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/IMG_5036.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/IMG_5036.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/IMG_5044.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/IMG_5044.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/IMG_5102.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/IMG_5102.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/riding campfire.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/riding campfire.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/Tumunan Lodge - Wine Tasting.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/Tumunan Lodge - Wine Tasting.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/wine tasting.jpg" class="image tours">
                            <img src="images/activities/Wine Tours/wine tasting.jpg" alt="Tours de Vinos">
                        </a>
                        <a href="images/activities/Wine Tours/wine tasting.png" class="image tours">
                            <img src="images/activities/Wine Tours/wine tasting.png" alt="Tours de Vinos">
                        </a>
                    </section>

                    <!-- Comida y Vino -->
                    <section class="parallax-completo" id="comida_y_vinos">
                        <a href="images/food_Wine/3.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/3.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/4.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/4.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/5.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/5.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/6.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/6.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/7.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/7.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/8.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/8.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/_AAA0170.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/_AAA0170.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/steak.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/steak.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/asadoclose.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/asadoclose.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/asado-enhanced-img-2403-11.JPG.1024x0.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/asado-enhanced-img-2403-11.JPG.1024x0.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/breadclose.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/breadclose.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/Breakfast.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/Breakfast.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/breakfastpancakeclose.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/breakfastpancakeclose.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/cheese.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/cheese.jpg" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/Dinner.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/Dinner.jpg" alt="Comidas y Vino">
                        </a>
                        
                        <a href="images/food_Wine/finedining2.png" class="image comida_y_vino">
                            <img src="images/food_Wine/finedining2.png" alt="Comidas y Vino">
                        </a>
                        <a href="images/food_Wine/homemade pie.jpg" class="image comida_y_vino">
                            <img src="images/food_Wine/homemade pie.jpg" alt="Comidas y Vino">
                        </a>
                        
                    </section>

                    <!-- Vinos -->
                    <section class="parallax-completo">
                        <a href="images/vinos/rose2019.jpeg" class="image vinos">
                            <img src="images/vinos/rose2019.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/rose-2019.jpeg" class="image vinos">
                            <img src="images/vinos/rose-2019.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/rose---2019.jpeg" class="image vinos">
                            <img src="images/vinos/rose---2019.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/rose2020.jpeg" class="image vinos">
                            <img src="images/vinos/rose2020.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/rose-2020.jpeg" class="image vinos">
                            <img src="images/vinos/rose-2020.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/sauvignon2018.jpeg" class="image vinos">
                            <img src="images/vinos/sauvignon2018.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/sauvignon-2018.jpeg" class="image vinos">
                            <img src="images/vinos/sauvignon-2018.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/sauvignon-2018.jpeg" class="image vinos">
                            <img src="images/vinos/sauvignon-2018.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/sauvignon--2018.jpeg" class="image vinos">
                            <img src="images/vinos/sauvignon--2018.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/syrah2017.jpeg" class="image vinos">
                            <img src="images/vinos/syrah2017.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/syrah-2017.jpeg" class="image vinos">
                            <img src="images/vinos/syrah-2017.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/syrah--2017.jpeg" class="image vinos">
                            <img src="images/vinos/syrah--2017.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/syrah2018.jpeg" class="image vinos">
                            <img src="images/vinos/syrah2018.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/syrah-2018.jpeg" class="image vinos">
                            <img src="images/vinos/syrah-2018.jpeg" alt="Vinos de Cosecha">
                        </a>
                        <a href="images/vinos/syrah--2018.jpeg" class="image vinos">
                            <img src="images/vinos/syrah--2018.jpeg" alt="Vinos de Cosecha">
                        </a>
                    </section>

                    <!-- Senderismo -->
                    <section class="parallax-completo" id="senderismo">
                        <!-- <a href="images/activities/Hiking/_AT_9508.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_AT_9508.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/_AT_9521.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_AT_9521.jpg" alt="Senderismo">
                        </a> -->
                        <a href="images/activities/Hiking/_AT_9619.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_AT_9619.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/_AT_9634.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_AT_9634.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/_AT_9689.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_AT_9689.jpg" alt="Senderismo">
                        </a>
                        <!-- <a href="images/activities/Hiking/_AT_9694.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_AT_9694.jpg" alt="Senderismo">
                        </a> -->
                        <a href="images/activities/Hiking/_AT_9751.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_AT_9751.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/_AT_9759.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_AT_9759.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/_AT_9787.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_AT_9787.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/_AT_9837.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_AT_9837.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/_AT_9852.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_AT_9852.jpg" alt="Senderismo">
                        </a>
                        <!-- <a href="images/activities/Hiking/_AT_9907.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_AT_9907.jpg" alt="Senderismo">
                        </a> -->
                        <!-- <a href="images/activities/Hiking/_M8R0919.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_M8R0919.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/_M8R0922.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_M8R0922.jpg" alt="Senderismo">
                        </a> -->
                        <a href="images/activities/Hiking/_M8R0956.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_M8R0956.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/_M8R0991.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_M8R0991.jpg" alt="Senderismo">
                        </a>
                        <!-- <a href="images/activities/Hiking/_M8R1008.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/_M8R1008.jpg" alt="Senderismo">
                        </a> -->
                        <a href="images/activities/Hiking/1_enhanced_el nuco 2011 052.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/1_enhanced_el nuco 2011 052.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/1_enhanced_Picheira trip 2012 march 180.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/1_enhanced_Picheira trip 2012 march 180.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/3_enhanced__M8R1476.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/3_enhanced__M8R1476.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/115.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/115.jpg" alt="Senderismo">
                        </a>
                        <!-- <a href="images/activities/Hiking/133.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/133.jpg" alt="Senderismo">
                        </a> -->
                        <!-- <a href="images/activities/Hiking/20140920-Horse Ride 102.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/20140920-Horse Ride 102.jpg" alt="Senderismo">
                        </a> -->
                        <a href="images/activities/Hiking/hiking view.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/hiking view.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/hikingfog.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/hikingfog.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/IMG_0248.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/IMG_0248.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/IMG_4226.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/IMG_4226.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/ridingview.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/ridingview.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/multi-day-andean-trek-4.jpg.1024x0.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/multi-day-andean-trek-4.jpg.1024x0.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/riding gaucho.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/riding gaucho.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/ridingcactus.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/ridingcactus.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/ridingforest.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/ridingforest.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/ridingview.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/ridingview.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/trekking snow.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/trekking snow.jpg" alt="Senderismo">
                        </a>
                        <a href="images/activities/Hiking/waterfall shoes.jpg" class="image senderismo">
                            <img src="images/activities/Hiking/waterfall shoes.jpg" alt="Senderismo">
                        </a>
                    </section>

                    <!-- Pesca -->
                    <section class="parallax-completo">
                        <!-- <a href="images/activities/Fishing/_M8R0583.jpg" class="image pesca">
                            <img src="images/activities/Fishing/_M8R0583.jpg" alt="Pesca">
                        </a> -->
                        <a href="images/activities/Fishing/_M8R0624.jpg" class="image pesca">
                            <img src="images/activities/Fishing/_M8R0624.jpg" alt="Pesca">
                        </a>
                        <a href="images/activities/Fishing/_M8R0735.jpg" class="image pesca">
                            <img src="images/activities/Fishing/_M8R0735.jpg" alt="Pesca">
                        </a>
                        <!-- <a href="images/activities/Fishing/4_enhanced__embassy claro 006.jpg" class="image pesca">
                            <img src="images/activities/Fishing/4_enhanced__embassy claro 006.jpg" alt="Pesca">
                        </a> -->
                        <a href="images/activities/Fishing/134.jpg" class="image pesca">
                            <img src="images/activities/Fishing/134.jpg" alt="Pesca">
                        </a>
                        <a href="images/activities/Fishing/flyfishing.jpg.1024x0.jpg" class="image pesca">
                            <img src="images/activities/Fishing/flyfishing.jpg.1024x0.jpg" alt="Pesca">
                        </a>
                        <!-- <a href="images/activities/Fishing/fly-fishing-2.JPG.1024x0.jpg" class="image pesca">
                            <img src="images/activities/Fishing/fly-fishing-2.JPG.1024x0.jpg" alt="Pesca">
                        </a> -->
                        <a href="images/activities/Fishing/IMG_0272.jpg" class="image pesca">
                            <img src="images/activities/Fishing/IMG_0272.jpg" alt="Pesca">
                        </a>
                        <!-- <a href="images/activities/Fishing/IMG_1397.jpg" class="image pesca">
                            <img src="images/activities/Fishing/IMG_1397.jpg" alt="Pesca">
                        </a> -->
                        <!-- <a href="images/activities/Fishing/IMG_2450.jpg" class="image pesca">
                            <img src="images/activities/Fishing/IMG_2450.jpg" alt="Pesca">
                        </a> -->
                        <a href="images/activities/Fishing/juemul per 029.jpg" class="image pesca">
                            <img src="images/activities/Fishing/juemul per 029.jpg" alt="Pesca">
                        </a>
                    </section>

                </div>
            </div>


        </section>
        <footer>
            <?php  include("includes/footer.php");?>
        </footer>
        
        
        <!-- jquery cdn link  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- magnific popup js cdn link  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <script src="./assets/js/galeria.js"></script>

    </body>
</html>
