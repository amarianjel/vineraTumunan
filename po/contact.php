<!--MUESTRA CONTACTO-->
<?php 
require '../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Vinhedo Tumuñan Lodge | Contacto</title>

	<!--Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/botones-idioma.css">
	<!--Style-->
	<!-- index css -->
	<link rel="stylesheet" href="../assets/css/index.css">
	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="../assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="../assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="../assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="../assets/css/responsive.css">

</head>
<style>
	.dato{
		padding-left: 3rem;
	}	
</style>
<body style="background-color: #f5e1ce;">
	
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
								<img src="../images/logo-svg.svg" width="120em">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="./">Começar</a>
								</li>
								<li><a href="about.php">Sobre nós</a></li>
								<li><a href="alojamientos.php">Alojamento</a></li>
								<li><a href="galeria.php">Galeria</a></li>
								<li><a href="formReservas.php">Reservas</a>
								<li class="current-list-item"><a href="contact.php">Contacto</a></li>
								<li><a href="tienda.php">Armazenar</a></li>
								<li><a href="../contact.php">
									<img src="../images/traduccion/espana.png" class="logo-idioma">
									</a>
								</li>
								<li><a href="../en/contact.php">
									<img src="../images/traduccion/reino-unido.png" class="logo-idioma">
									</a>
								</li>
								<li>
								<li><a href="contact.php">
									<img src="../images/traduccion/portugal.png" class="logo-idioma">
									</a>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="checkout.php">
											<?php if($num_cart==0){ ?>
												<i class="fas fa-shopping-cart fa-lg"></i> Carrinho
											<?php }else{ ?>
												<i class="fas fa-shopping-cart fa-lg"> <sup><?php echo $num_cart; ?></sup></i> Carrinho
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
	<div class="hero-area hero-bg" style="background-image: url(../images/activities/Hiking/115.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Contacte-nos para mais informações sobre os nossos serviços</p>
							<h1>Vinhedo Tumuñan Lodge</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- main section -->
	<main>
		<h2 class="titulo" style="margin: 5rem; text-align: center;">Informações de Contato</h2>
    <section class="center espacio mx-5 my-5">
			<div class="row align-items-center">
				<div class="info col-12 col-lg-6" style="padding-right: 5rem;padding-left: 15rem; text-align: center;">
					<div style="margin: 5rem; text-align: left;">
						<hr>
						<h4 class="titulo">Nome</h4>
						<a href="#" class="dato">Will Evelyn </p>
						<hr>
                    	<h4 class="titulo" >E-mail</h4>
                    	<a href="mailto:tumunanlodge@gmail.com" class="dato">tumunanlodge@gmail.com</a>
						<hr>
                    	<h4 class="titulo">Telefone</h4>
                    	<a href="https://wa.me/56996301152" class="dato"> +56 9 9630 1152</<<<<a>
						<hr>
                    	<h4 class="titulo">Endereço</h4>
                    	<a href="https://goo.gl/maps/NgVFDaCbyTaGf2XXA" class="dato"> I-325, Las Peñas, O'Higgins, Chile </a>	
					</div>	
				</div>
				<div class="fotografia-info col-12 col-lg-4 my-6">
					<img src="../images\activities\Wine Tours\IMG_5044.JPG" style=" border: 2px solid rgb(37, 19, 52);">
				</div>
			</div>
		</section>   
  
    
    <!--Video-->
        <section>
            <div class="ratio ratio-21x9 alto-completo">
                <iframe width="100%" height="100%" src="../images/video_vina.mp4" title="Viña Tumuñan" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!--<iframe src="https://www.youtube.com/embed/_Y9afSciAAM?autoplay=1&mute=1 " title="YouTube video player " frameborder="0 " allowfullscreen></iframe>-->
            </div>
        </section>
    </main>
	<!-- end main section -->

    <?php  include("../includes/po/footer.php");?>
