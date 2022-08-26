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

	<!-- Boostrap 5.1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- title -->
	<title>Viña Tumuñan Lodge | Inicio </title>

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
								<li><a href="./">
									<img src="./images/traduccion/espana.png" class="logo-idioma">
									</a>
								</li>
								<li><a href="./en/index.php">
									<img src="./images/traduccion/reino-unido.png" class="logo-idioma">
									</a>
								</li>
								<li>
								<li><a href="./po/index.php">
									<img src="./images/traduccion/portugal.png" class="logo-idioma">
									</a>
								</li>
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
		<!--Carrusel-->
		<section>
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active overflow carrusel-full">
                        <img src="./images/43672428.jpg" class="d-block w-100 carrusel-full">
                    </div>
                    <div class="carousel-item overflow  carrusel-full">
                        <img src="./images/bed/chalet2020/DSC_0595.jpg" class="d-block w-100  carrusel-full" alt="Nuestros Vinhas">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="carruselParrafo">Relajate en una estadia comoda y placentera</p>
                        </div>
                    </div>
                    <div class="carousel-item overflow carrusel-full">
                        <img src="./images/food_Wine/cheese.jpg" class="d-block w-100 carrusel-full">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="carruselParrafo">Disfruta de lo mejor de nuestra Viña</p>
                        </div>
                    </div>
                    <div class="carousel-item overflow carrusel-full">
                        <img src="./images/Activities/Hiking/1.jpg" class="d-block w-100 carrusel-full">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="carruselParrafo"> Explora en las zona, y disfruta los que nuestro entrono tiene para ti</p>
                        </div>
                    </div>
                    <div class="carousel-item overflow  carrusel-full">
                        <img src="./images/Activities/Wine Tours/1.jpg" class="d-block w-100 carrusel-full">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="carruselParrafo"> Disfruta de nuestros excelentes vinos, que el valle de San Fernando tiene para ti</p>
                        </div>
                    </div>
                    <div class="carousel-item overflow  carrusel-full">
                        <img src="./images/Activities/Wine Tours/2.jpg" class="d-block w-100 carrusel-full">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="carruselParrafo">Únete a los tours que preparamos para tí y conoce el proceso de nuestros vinos</p>
                        </div>
                    </div>
                    <div class="carousel-item overflow  carrusel-full">
                        <img src="./images/Activities/Hiking/2.jpg" class="d-block w-100 carrusel-full">
                        <div class="carousel-caption d-none d-md-block">
                            <p class="carruselParrafo">Nutrete con la energia de la naturaleza</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
            </div>
        </section>
        <!--Tarjetas-->
        <section class="new_info">
            <div>
                <div class="title">
                    <h1>Disfruta de nuestros servicios</h1> 
                </div>
                <div class="informacion">
                    <div class="box-col">
                        <div class="text-info">
                            <div class="logo" style="text-align:center;">
                                <img src="images/logo-svg.svg" style="width:15vW; padding: 5px 0px 0px 0px">
                            </div>
                            <br>
                            <div>
                                <p class="servicios">Arriendo de cabañas en los Andes de Colchagua. Disfrute de un buen vino rodeado de montañas nevadas y bosques nativos.</p>
                            </div>
                        </div>
                        <div class="direccion">
                            <img class="picture" src="images/activities/Wine Tours/wine tasting.png">
                            <div class="middle">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                    <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                                    <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
                                </svg>
								<h4 class="enunciado-tarjeta">Galeria</h4>
								<div class="text"><a class="boton" href="galeria.php">Ver Mas</a>
								</div>
                            </div>
                        </div>
                    </div>

                    <div class="box-col">
                        <div class="direccion">
                            <img class="picture" src="images/food_Wine/TLwinelabel.jpg">
                            <div class="middle">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                                </svg>
                                <h4 class="enunciado-tarjeta ">Tienda</h4><br>
                                
                                <div class="text"><a class="boton" href="tienda.php">Ver mas</a></div>
                            </div>
                        </div>
                        <div class="direccion">
                            <img class="picture" src="images/bed/Chalet/Website Only/King Suite 4.jpg" style="height: 100%;">
                            <div class="middle">
                                <div class="text">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                                	</svg>
                                	<h4 class="enunciado-tarjeta ">Alojamiento</h4>
									<br>
									<a class="boton" href="alojamientos.php">Ver mas</a>
								</div>
                            </div>
                        </div>
                    </div>

                    <div class="box-col">
                        <div class="direccion">
                            <img class="picture" src="images/activities/Hiking/3_enhanced__M8R1476.jpg">
                            <div class="middle">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-battery-charging" viewBox="0 0 16 16">
                                    <path d="M9.585 2.568a.5.5 0 0 1 .226.58L8.677 6.832h1.99a.5.5 0 0 1 .364.843l-5.334 5.667a.5.5 0 0 1-.842-.49L5.99 9.167H4a.5.5 0 0 1-.364-.843l5.333-5.667a.5.5 0 0 1 .616-.09z"/>
                                    <path d="M2 4h4.332l-.94 1H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h2.38l-.308 1H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/>
                                    <path d="M2 6h2.45L2.908 7.639A1.5 1.5 0 0 0 3.313 10H2V6zm8.595-2-.308 1H12a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H9.276l-.942 1H12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.405z"/>
                                    <path d="M12 10h-1.783l1.542-1.639c.097-.103.178-.218.241-.34V10zm0-3.354V6h-.646a1.5 1.5 0 0 1 .646.646zM16 8a1.5 1.5 0 0 1-1.5 1.5v-3A1.5 1.5 0 0 1 16 8z"/>
                                </svg>
                                <h4 class="enunciado-tarjeta ">Excursiones</h4><br>
                                <div class="text"><a class="boton" href="galeria.php#senderismo">Ver mas</a></div>
                            </div>
                        </div>
                        
                        <div class="direccion">
                            <img class="picture" src="images/food_Wine/finedining1.png">
                            <div class="middle">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16">
                                    <path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
                                    <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                </svg>
                                <h4 class="enunciado-tarjeta ">Comidas y Vinos</h4>
                                <br>
                                <div class="text"><a class="boton" href="galeria.php#comida_y_vinos">Ver mas</a></div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Video-->
        <section>
            <div class="ratio ratio-21x9 alto-completo">
                <iframe width="100%" height="100%" src="images/video_vina.mp4" title="Viña Tumuñan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!--<iframe src="https://www.youtube.com/embed/_Y9afSciAAM?autoplay=1&mute=1 " title="YouTube video player " frameborder="0 " allowfullscreen></iframe>-->
            </div>
        </section>
    </main>
	<!-- end main section -->
	<script src="assets/js/index.js"></script>
    <?php  include("includes/footer.php");?>
