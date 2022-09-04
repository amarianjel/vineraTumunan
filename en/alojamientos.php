<?php 
require '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
    
    <link rel="stylesheet" href="../assets/css/alojamientos.css">

    <title>Vineyard Tumuñan Lodge | Lodging</title>

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
								<img src="../images/logo-svg.svg" width="120em">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="./">About us</a></li>
								<li class="current-list-item"><a href="alojamientos.php">Lodging</a></li>
								<li><a href="galeria.php">Gallery</a></li>
								<li><a href="formReservas.php">Bookings</a>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="tienda.php">Store</a></li>
								<li><a href="../alojamientos.php">
									<img src="../images/traduccion/espana.png" class="logo-idioma">
									</a>
								</li>
								<li><a href="alojamientos.php">
									<img src="../images/traduccion/reino-unido.png" class="logo-idioma">
									</a>
								</li>
								<li>
								<li><a href="../po/alojamientos.php">
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
	<div class="hero-area hero-bg" style="background-image: url(../images/bed/IMG_5562.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Our accommodation options</p>
							<h1>Lodge</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

    <main>
        <h1 class="portada">Lodging</h1>
        <section>
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                    <h2><i>Disconnect in Alto Colchagua</i></h2>
                    <div>
                        <p class="justificar-inicio">We have been working hard to reconfigure Tumuñan Lodge to be able to welcome guests in a hygienic and safe manner. Monthly rentals are just one way to rent one of our 3 fully self-catering cabins
                            equipped.
                            <br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tumuñan Lodge offers the Chalet and Mountain House for monthly rentals, please contact us via email with the dates you are interested in and we will contact you
                            you with a quote and what is included.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container container2">
                <div class="row">
                    <div class="col-md-7">
                        <div id="slider">
                            <input type="radio" name="slider" id="s1" checked id="ch">
                            <input type="radio" name="slider" id="s2">
                            <input type="radio" name="slider" id="s3">
                            <input type="radio" name="slider" id="s4">
                            <input type="radio" name="slider" id="s5">
            
                            <label for="s1" id="slide1">
                            <img class="carrusel" src="../images/bed/Rooms Website/casa/IMG-20200519-WA0000.jpg">
                        </label>
                            <label for="s2" id="slide2">
                            <img class="carrusel" src="../images/bed/Rooms Website/casa/IMG-20200519-WA0001.jpg">
                        </label>
                            <label for="s3" id="slide3">
                            <img class="carrusel" src="../images/bed/Rooms Website/casa/IMG-20200519-WA0003.jpg">
                        </label>
                            <label for="s4" id="slide4">
                            <img class="carrusel" src="../images/bed/Rooms Website/casa/IMG-20200519-WA0005.jpg">
                        </label>
                            <label for="s5" id="slide5">
                            <img class="carrusel" src="../images/bed/IMG_4327.jpg">
                        </label>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <h1 class="titulo">House on the Mountain</h1>
                        <p class="justificar-parrafo">
                        Spacious 4-bedroom home with a fully equipped kitchen, private patio, garden, fire pit, grill, and spectacular mountain views.
                        </p>
                        <h4>Costs</h4>
                        <p class="costos">
                        CLP$410,000 per weekend (2 nights/ 3 days, a wine tasting and 1 day of use of the jacuzzi included).
                        </p>
                        <hr>
                        <p class="costos">
                        CLP$410,000 per weekend (2 nights/ 3 days, a wine tasting and 1 day of use of the jacuzzi included).
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="center espacio">
            <h3><i>Reserve now</i></h3>
            <div>
                <p>To reserve a room, send us an email tour tumunanlodge@gmail.com. </p>
                <p>What is included: Access to pool and jacuzzi, trails, Wi-Fi, sheets and pillows (Direct TV in the mountain house).</p>
                <p> What is not included: daily maid service, cleaning, breakfast, restaurant The rate also includes: Bath and hand towels (1 per person) Basic kitchen products (Lavalozas, garbage bags, Salt).</p>
            </div>
        </section>
        <section>
            <div class="container .container2">
                <div class="row">
                    <div class="col-md-4">
                        <h1 class="titulo">Mountain Chalet for Couples</h1>
                        <p class="justificar-parrafo">
                        Modern cabin that has 1 bedroom with private gardens, a fire pit, a grill and a small kitchen. Near the river and with mountain views.
                        </p>
                        <h4>Costs</h4>
                        <p class="costos">
                        CLP$240,000 per weekend (2 nights/ 3 days, a wine tasting and 1 day of use of the jacuzzi included).
                        </p>
                        <hr>
                        <p class="costos">
                        CLP$510,000 per week (5 nights / 6 days, a tour and wine tasting and 2 days of use of the jacuzzi included).
                        </p>
                    </div>
                    <div class="col-md-7 offset-md-1">
                        <div id="slider2">
                            <input type="radio" name="slider" id="s6" checked>
                            <input type="radio" name="slider" id="s7">
                            <input type="radio" name="slider" id="s8">
                            <input type="radio" name="slider" id="s9">
                            <input type="radio" name="slider" id="s10">

                            <label for="s6" id="slide6">
                        <img class="carrusel" src="../images/bed/Chalet/Website Only/King Suite 4.jpg">
                    </label>
                            <label for="s7" id="slide7">
                                <img class="carrusel" src="../images/bed/chalet2020/DSC_0606.jpg">
                    </label>
                            <label for="s8" id="slide8">
                        <img src="../images/bed/chalet2020/DSC_0595.jpg">
                    </label>
                            <label for="s9" id="slide9">
                        <img class="carrusel" src="../images/bed/chalet2020/DSC_0679.jpg">
                    </label>
                            <label for="s10" id="slide10">
                                <img class="carrusel" src="../images/bed/chalet2020/DSC_0666.jpg">
                    </label>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="center espacio">
                <h3>Monthly Rates</h3>
                <p>We have been working hard to reconfigure Tumuñan Lodge to be able to welcome guests in a hygienic and safe manner.</p>
                <p>Monthly rentals are just one way to rent one of our 3 fully equipped self-catering cabins.</p>
                <p class="centrar-parrafo">Contact us for more details and to discuss a rate.</p>
            </div>
        </section>
    </main>

    <?php  include("../includes/en/footer.php");?>
</body>
</html>