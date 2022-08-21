<!--MUESTRA INDEX-->
<?php 
require 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Viña Tumuñan Lodge| Inicio </title>

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
    <link rel="stylesheet" href="assets/css/prototipe.css">
</head>
<body>
	
	<!--PreLoader-->
    <!-- <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div> -->
    <!--PreLoader Ends-->
	
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
								<li class="current-list-item"><a href="./">Inicio</a>
								</li>
								<li><a href="about.php">Sobre nosotros</a></li>
                                <li><a href="alojamientos.php">Alojamientos</a></li>
                                <li><a href="galeria.php">Galeria</a></li>
								<li><a href="formReservas.php">Reservas</a>
								<li><a href="contact.php">Contacto</a></li>
								<li><a href="tienda.php">Tienda</a></li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="checkout.php">
                                            <?php if($num_cart==0){ ?>
                                                <i class="fas fa-shopping-cart fa-lg"></i> Carrito
                                            <?php }else{ ?>
											    <i class="fas fa-shopping-cart fa-lg"> <sup><?php echo $num_cart; ?></sup></i> Carrito 
                                            <?php } ?> 
										</a>
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
	<div class="hero-area hero-bg" style="background-image: url(images/bigstock-Vineyards-At-Sunset-37822447.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Los mejores vinos de la zona centro</p>
							<h1>Viña Tumuñan Lodge</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- main section -->
    <main>
        <!--Tarjetas-->
        <section class="new_info">
            <div>
                <div class="title">
                    <h1>Disfruta de nuestros servicios</h1> 
                </div>
                <div class="informacion">
                    <div>
                        <div class="text-info">
                            <div style="text-align:center;">
                                <img src="images/logo-svg.svg" style="width:15vW;">
                            </div>
                            <br>
                            <div>
                                <p class="servicios">Arriendo de cabañas en los Andes de Colchagua. Disfrute de un buen vino rodeado de montañas nevadas y bosques nativos.</p>
                            </div>
                        </div>
                        <div class="direccion">
                            <img class="picture" src="images/activities/Wine Tours/wine tasting.png">
                            <div class="middle">
                                <div class="text"><a class="boton" href="galeria.php">Galeria</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="venta">
                        <div class="direccion">
                            <img class="picture" src="images/food_Wine/TLwinelabel.jpg">
                            <div class="middle">
                                <div class="text"><a class="boton" href="tienda.php">Tienda</a></div>
                            </div>
                        </div>
                        <div class="direccion">
                            <img class="picture" src="images/bed/Chalet/Website Only/King Suite 4.jpg" >
                            <div class="middle">
                                <div class="text"><a class="boton" href="alojamientos.php">Alojamiento</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="actividades">
                        <div class="direccion">
                            <img class="picture" src="images/activities/Hiking/3_enhanced__M8R1476.jpg">
                            <div class="middle">
                                <div class="text"><a class="boton" href="galeria.php#senderismo">Excursiones</a></div>
                            </div>
                        </div>
                        
                        <div class="direccion">
                            <img class="picture" src="images/food_Wine/finedining1.png">
                            <div class="middle">
                                <div class="text"><a class="boton" href="galeria.php#comida_y_vinos">Comidas y Vino</a></div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


















        </section>
        <!--Video-->
        <section>
            <div class="ratio ratio-21x9 alto-completo">
                <iframe width="100%" height="100%" src="images/viña_tumuñan.mp4" title="Viña Tumuñan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!--<iframe src="https://www.youtube.com/embed/_Y9afSciAAM?autoplay=1&mute=1 " title="YouTube video player " frameborder="0 " allowfullscreen></iframe>-->
            </div>
        </section>
    </main>
	<!-- end main section -->

    <?php  include("includes/footer.php");?>
