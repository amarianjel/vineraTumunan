<!--MUESTRA SOBRE NOSOTROS-->
<?php 
require '../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- title -->
	<title>Vineyard Tumuñan Lodge | About us</title>

	<!--Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/botones-idioma.css">
	<!--Style-->
	<!-- index css -->
	<link rel="stylesheet" href="./assets/css/index.css">
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
								<li class="current-list-item"><a href="./">About us</a></li>
								<li><a href="alojamientos.php">Lodging</a></li>
								<li><a href="galeria.php">Gallery</a></li>
								<li><a href="formReservas.php">Bookings</a>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="tienda.php">Store</a></li>
								<li><a href="../about.php">
									<img src="../images/traduccion/espana.png" class="logo-idioma">
									</a>
								</li>
								<li><a href="./">
									<img src="../images/traduccion/reino-unido.png" class="logo-idioma">
									</a>
								</li>
								<li>
								<li><a href="../po/about.php">
									<img src="../images/traduccion/portugal.png" class="logo-idioma">
									</a>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="checkout.php">
											<?php if($num_cart==0){ ?>
												<i class="fas fa-shopping-cart fa-lg"></i> Shopping
											<?php }else{ ?>
												<i class="fas fa-shopping-cart fa-lg"> <sup><?php echo $num_cart; ?></sup></i> Shopping
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
	<div class="hero-area hero-bg" style="background-image: url(../images/food_Wine/cheese.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Learn about us</p>
							<h1>Vineyard Tumuñan Lodge</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<style>/*********Sobre Nosotros***********/
		.titulo{
			color: #051922;
		}	




	</style>
	<!-- main section -->
	<main>
		<section class="center espacio mx-5 my-5">
			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">About us</h2>
					
					<p style="font-size: 19px">Just a 2 hour drive south from Santiago that takes you through vineyards and spectacular views of the central Andes, 
                        this family-friendly mountain retreat caters to those in need of rest and relaxation,
                        and more adventurous travelers who can enjoy unique days of hiking, horseback riding and fly fishing in the incomparable Chilean Andes.</p>
				</div>
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="../images\activities\Wine Tours\wine tasting.jpg" alt="">
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="../images\activities\Wine Tours\55923167.jpg" alt="">
				</div>
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Store</h2>
					<p style="font-size: 19px">Tumuñan produces world class wines from its unique mountain terroir. You can also buy our wines and honey in our online store. To access the online store <a href="./tienda.php">Click here. </a>You can buy your favorite products by going to our vineyard located in <a href="https://goo.gl/maps/NgVFDaCbyTaGf2XXA" class="dato"> I-325, Las Peñas, O'Higgins, Chile </a>where we additionally offer tours and tastings. </p>
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Reserve now</h2>
					<p style="font-size: 19px">To reserve a room, <a href="./formReservas.php">Click Here</a> and fill out the form. We will contact you shortly.</p>
			        <p style="font-size: 19px">INCLUDES: Access to pool and jacuzzi, trails, Wi-Fi, sheets and pillows, Direct TV in the house
                        mountains, bath and hand towels (1 per person) basic kitchen products (lavalozas, bags of
                        garbage, Salt).</p>
			        <p style="font-size: 19px">NOT INCLUDED: daily maid service, cleaning, breakfast, restaurant.</p>
				</div>
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="../images\Homepage Picture Roll\To Keep\55921897.jpg" alt="">
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="../images\Homepage Picture Roll\To Keep\55922826.jpg" alt="">
				</div>
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Scenery</h2>
					<p style="font-size: 19px">On our property there are 3km of self-guided hiking trails long through picturesque forests and mountain landscapes.</p>
                    <p style="font-size: 19px">To see the landscapes of the area <a href="./galeria.php">Click here.</a></p>
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Hiking</h2>
					<p style="font-size: 19px">In the area there are self-guided hiking trails from up to 10 km long through picturesque mountain landscapes.</p>
                    <p style="font-size: 19px">To view the image gallery <a href="./galeria.php">Click here.</a></p>
				</div>
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="../images\Homepage Picture Roll\To Keep\40529940.jpg" alt="">
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="../images/activities/Hiking/ridingview.jpg" alt="">
				</div>
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">To ride a horse</h2>
					<p style="font-size: 19px">Take a relaxing horseback ride to explore the beautiful views of the Tumuñan Valley from the
                    property and its surroundings. We will gladly put you in contact with the locals who can
                    help you plan your day trip.</p>
                    <p style="font-size: 19px">To view the image gallery <a href="./galeria.php">Click here.</a></p>
				</div>
			</div>
			<hr>
			
		</section>
		<h3 class="titulo" style="display: flex; justify-content: center; margin:1em; background-color: #000000e7; color: #fff;">Location</h3>
		<div class="mapa" style="display: flex; justify-content: center; margin:1em;">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21963.498815824205!2d-70.79943981194643!3d-34.7499001301102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9664c1b33eefd169%3A0x7c7f01fc0de1ef70!2sTumu%C3%B1an%20Lodge!5e0!3m2!1ses-419!2scl!4v1659462547925!5m2!1ses-419!2scl"
				width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<!--Video-->
		<section>
			<div class="ratio ratio-21x9 alto-completo">
				<iframe width="100%" height="100%" src="../images/video_vina.mp4" title="Viña Tumuñan" frameborder="0"
					allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
					allowfullscreen></iframe>
				<!--<iframe src="https://www.youtube.com/embed/_Y9afSciAAM?autoplay=1&mute=1 " title="YouTube video player " frameborder="0 " allowfullscreen></iframe>-->
			</div>
		</section>
	</main>
	<!-- end main section -->

	<?php  include("../includes/en/footer.php");?>