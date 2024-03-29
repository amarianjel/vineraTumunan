<?php 
require '../config/config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="Reserve your Tumuñan Stay">
	<meta name="description" content="Relax at Tumuñan in one of our fully equipped Chalets. Enjoy spectacular mountain views and unwind from the noisy city. Reserve now.">

	<!-- title -->
	<title>Tumuñan Lodge | Booking</title>

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
								<img src="../images/Logo.png" width="120em">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
						<ul>
								<li><a href="./">About us</a></li>
								<li><a href="alojamientos.php">Lodging</a></li>
								<li><a href="events.php">Events</a></li>
								<li><a href="galeria.php">Gallery</a></li>
								<li class="current-list-item"><a href="formReservas.php">Bookings</a>
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
											<a class="dropdown-item" href="../formReservas.php" style="color:black;">
												<img src="../images/traduccion/espana.png" class="logo-idioma">ES
											</a>
											<a class="dropdown-item" href="../en/formReservas.php" style="color:black;">
												<img src="../images/traduccion/reino-unido.png" class="logo-idioma">EN
											</a>
											<a class="dropdown-item" href="../po/formReservas.php" style="color:black;">
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
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg" style="background-image: url(../images/bg_2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Make your reservation request and come and live the Tumuñan Lodge experience</i></p>
						<h1>Reservation request</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    <!-- reservas section -->
    <main>
        <div class="checkout-section mt-80 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg">
                        <div class="checkout-accordion-wrap">
                            <div class="accordion" id="accordionExample">
                                <div class="card single-accordion">
                                    <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Reservation request
                                        </button>
                                    </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="billing-address-form">
                                            <form action="../clases/captura_datos_rs.php" method="POST">
                                                <p><b>Name</b></p>
                                                <p><input type="text" placeholder="Ex: John" id="nombre" name="nombre" required></p>
                                                <p><b>Last name</b></p>
                                                <p><input type="text" placeholder="Ex: Smith" id="apellido" name="apellido" required></p>
                                                <p><b>Number of passaport</b></p>
                                                <p><input type="text" placeholder="Ex: AA-012345678" id="rut" name="rut" required></p>
                                                <p><b>Email</b></p>
                                                <p><input type="email" placeholder="EX: john@mail.com" id="email" name="email" required></p>
                                                <p><b>Cellphone number</b></p>
                                                <p><input type="tel" placeholder="Ex: (020) XXXXXXXX" id="fono" name="fono" required></p>
												<p><b>Arrival date</b></p>
                                                <p><input type="date" min="<?php echo $fechaActual;?>" id="fecha_ing" name="fecha_ing"required></p>
                                                <p><b>Departure date </b></p>
                                                <p><input type="date" min="<?php echo $fechaActual;?>" id="fecha_sal" name="fecha_sal"required></p>
                                                <p><b>Amount of people</b></p>
                                                <p><input type="number" placeholder="Cantidad de personas" value="1" min="1" id="c_personas" name="c_personas" required></p>
                                                <p><b>Number of adults</b></p>
                                                <p><input type="number" placeholder="Cantidad de adultos" value="1" min="1" id="c_adultos" name="c_adultos" required></p>
                                                <p><b>Number of children (optional)</b></p>
                                                <p><input type="number" placeholder="Cantidad de niños" value="0" min="0" id="c_niños" name="c_niños"></p>
												<input type="submit" class="boxed-btn black" value="Send request">
                                            </form>
                                            
                                        </div>
                                    </div>
                                    </div>
                                </div>
 
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
	<!-- end reservas section -->

<?php  include("../includes/en/footer.php");?>