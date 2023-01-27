<!--MUESTRA INDEX-->
<?php 
require '../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="Tourist lodge in the foothills of the Colchagua Valley">
	<meta name="description" content="Visit Tumuñan Lodge nested in the foothills of the Andes Mountains on the doorstep of the Colchagua Valley. Learn about us here.">

	<!-- title -->
	<title>Tumuñan Lodge | About us</title>

	<!--Style-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
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
	<link rel="stylesheet" href="bootstrap.bundle.min.js">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
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
	<!-- js -->
	<link rel="stylesheet" href="../assets/css/displayjs.css">

</head>

<body style="background-color: #e7ece6;">

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
								<img src="../images/Logo.png" width="120em">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="./">About us</a></li>
								<li><a href="alojamientos.php">Lodging</a></li>
								<li><a href="events.php">Events</a></li>
								<li><a href="galeria.php">Gallery</a></li>
								<li><a href="formReservas.php">Bookings</a>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="tienda.php">Store</a></li>
								
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

								<li>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Language
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="../index.php" style="color:black;">
												<img src="../images/traduccion/espana.png" class="logo-idioma">ES
											</a>
											<a class="dropdown-item" href="../en/index.php" style="color:black;">
												<img src="../images/traduccion/reino-unido.png" class="logo-idioma">EN
											</a>
											<a class="dropdown-item" href="../po/index.php" style="color:black;">
												<img src="../images/traduccion/portugal.png" class="logo-idioma">PO
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
	<style>

    @media only screen and (min-width: 600px) {
        #hero{
            background-image: url(../images/activities/Wine\ Tours/image2.jpg);
        }
    }
    @media only screen and (max-width: 600px) {
        #hero{
            display: none;
        }

        main{
            margin-top: 9em;
        }
    }
	</style>										

	<!-- hero area -->
	<div class="hero-area hero-bg" id="hero">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Learn about us</p>
							<h1>Tumuñan Lodge</h1>
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
					<h2 class="titulo">Who We Are:</h2>
					
					<p class="displayjs" style="font-size: 19px">Tumuñan Lodge and Winery were founded in 2006 by William Evelyn, an Englishman who came to explore Chile in 1988, working as a flyfishing guide in the Patagonian wilderness and surfing the central coast, falling in love with Chile, it’s outstanding scenery, charming people, culture and fine wines.</p>
				</div>
				<div class="fotografia-info col-4 col-lg-2 my-5">
					<img src="../images\cap1.png" alt="">
				</div>
				<div class="fotografia-info col-7 col-lg-4 my-5">
					<img src="../images\activities\Fishing\_M8R0624.jpg" alt="">
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="../images\bed\IMG_5676 (1).jpg" alt="">
				</div>
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">The Lodge:</h2>
					<p class="displayjs" style="font-size: 19px">Located in the Andes, surrounded by beautiful forested hills and clear streams, Tumuñan Lodge offers a fully equipped house and cabin available for rental with a pool, hot tub and dining options. There are abundant trails for the guest’s exclusive use, wine tours and other activities available.<a href="./formReservas.php"> Book through Form</a> or via WhatsApp.</p>
					<div class="fotografia-info col-3 col-lg-4 my-5">
						<a href="https://wa.me/56996301152"><span class="text"><img src="../images\WhatsApp_icon.png"></span></a>
					</div>
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">The Vineyard:</h2>
					<p class="displayjs" style="font-size: 19px">The highest known vineyard for Cabernet Sauvignon in Colchagua Valley. Nestled 720m above sea level, it is at the very limit of where grapes can be successfully produced. Organic and bio-dynamic viticultural practices are used to carefully protect the eco-system that surrounds the vineyard. The wines produced here have been internationally recognised as some of Chile’s best and can be purchased from our <a href="./tienda.php">Online Store</a>.</p>
				</div>
				<div class="fotografia-info col-8 col-lg-4 my-5">
					<img src="../images\cap2.png" alt="">
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="../images/activities/Hiking/ridingview.jpg" alt="">
				</div>
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Horse Riding</h2>
					<p class="displayjs" style="font-size: 19px">Take a relaxing horseback ride to explore the beautiful views of the Tumuñan Valley from the
                    property and its surroundings. We will gladly put you in contact with the locals who can
                    help you plan your day trip.</p>
                    <p class="displayjs" style="font-size: 19px">To view the image gallery <a href="./galeria.php">Click here.</a></p>
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Hiking</h2>
					<p class="displayjs" style="font-size: 19px">In the area there are self-guided hiking trails from up to 10 km long through picturesque mountain landscapes.</p>
                    <p class="displayjs" style="font-size: 19px">To view the image gallery <a href="./galeria.php">Click here.</a></p>
				</div>
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="../images\Homepage Picture Roll\To Keep\40529940.jpg" alt="">
				</div>
			</div>
			

		</section>
		<!--Presentacion-->
		<section>
			<div style="position: relative; width: 100%; height: 0; padding-top: 75.4530%;
	padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
	border-radius: 8px; will-change: transform;">
				<iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
		src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFJzVTHX7Q&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
				</iframe>
		</div>
		<a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFJzVTHX7Q&#x2F;view?utm_content=DAFJzVTHX7Q&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">Tumunan Wine Presentation V2 English</a> de Kat Sorbello
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
	<!-- Script -->
	<script src="../assets/js/effects.js"></script>

	<?php  include("../includes/en/footer.php");?>
</body>
