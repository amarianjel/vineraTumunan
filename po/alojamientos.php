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

    <title>Vinhedo Tumuñan Lodge | Alojamento</title>

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
								<li><a href="./">Sobre nós</a></li>
								<li class="current-list-item"><a href="alojamientos.php">Alojamento</a></li>
								<li><a href="galeria.php">Galeria</a></li>
								<li><a href="formReservas.php">Reservas</a>
								<li><a href="contact.php">Contacto</a></li>
								<li><a href="tienda.php">Armazenar</a></li>
								<li><a href="../alojamientos.php">
									<img src="../images/traduccion/espana.png" class="logo-idioma">
									</a>
								</li>
								<li><a href="../en/alojamientos.php">
									<img src="../images/traduccion/reino-unido.png" class="logo-idioma">
									</a>
								</li>
								<li>
								<li><a href="alojamientos.php">
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
	<div class="hero-area hero-bg" style="background-image: url(../images/bed/aloja.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Nossas opções de hospedagem</p>
							<h1>Alojamento</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

    <main>
        <section>
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                    <h2><i>Desconecte em Alto Colchagua</i></h2>
                    <div>
                        <p class="justificar-inicio">Temos trabalhado arduamente para reconfigurar o Tumuñan Lodge para poder receber os hóspedes de forma higiênica e segura. Aluguéis mensais são apenas uma maneira de alugar uma de nossas 3 cabines totalmente equipadas.
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
                            <input type="radio" name="slider" id="s1" checked>
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
                        <h1 class="titulo">Chalet</h1>
                        <p class="justificar-parrafo">
                        Espaçosa casa de 4 quartos com cozinha totalmente equipada, pátio privativo, jardim, fogueira, churrasqueira e vistas espetaculares da montanha.
                        </p>
                        <h4>Preço</h4>
                        <p class="costos">
                            CLP$410,000 por fim-de-semana (2 noites/ 3 dias, prova de vinhos e 1 dia de uso do jacuzzi incluído).
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section>
            <div class="container .container2">
                <div class="row">
                    <div class="col-md-4">
                        <h1 class="titulo">Chalet para Casais</h1>
                        <p class="justificar-parrafo">
                        Cabana moderna que tem 1 quarto com jardins privativos, fogueira, churrasqueira e uma pequena cozinha. Perto do rio e com vista serra.
                        </p>
                        <h4>Preços</h4>
                        <p class="costos">
                            CLP$240,000 por fim-de-semana (2 noites/ 3 dias, prova de vinhos e 1 dia de uso do jacuzzi incluído).
                        </p>
                        <hr>
                        <p class="costos">
                            CLP$510,000 por semana (5 noites / 6 dias, passeio e prova de vinhos e 2 dias de uso do jacuzzi incluídos).
                        </p>
                    </div>
                    <div class="col-md-7 offset-md-1">
                        <div id="slider2">
                            <input type="radio" name="slider" id="s6">
                            <input type="radio" name="slider" id="s7">
                            <input type="radio" name="slider" id="s8">
                            <input type="radio" name="slider" id="s9">
                            <input type="radio" name="slider" id="s10">

                            <label for="s6" id="slide6">
                        <img class="carrusel" src="../images/bed/Chalet/King Suite 4.jpg">
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
        <hr>
        <section>
            <div class="container container2">
                <div class="row">
                    <div class="col-md-7">
                        <div id="slider3">
                            <input type="radio" name="slider" id="s11">
                            <input type="radio" name="slider" id="s12">
                            <input type="radio" name="slider" id="s13">
                            <input type="radio" name="slider" id="s14">
                            <input type="radio" name="slider" id="s15">
            
                            <label for="s11" id="slide11">
                            <img class="carrusel" src="../images/bed/casa_montana/1.jpg">
                        </label>
                            <label for="s12" id="slide12">
                            <img class="carrusel" src="../images/bed/casa_montana/2.jpg">
                        </label>
                            <label for="s13" id="slide13">
                            <img class="carrusel" src="../images/bed/casa_montana/3.jpg">
                        </label>
                            <label for="s14" id="slide14">
                            <img class="carrusel" src="../images/bed/casa_montana/4.jpg">
                        </label>
                            <label for="s15" id="slide15">
                            <img class="carrusel" src="../images/bed/casa_montana/5.jpg">
                        </label>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-1">
                        <h1 class="titulo">Casa da Montanha</h1>
                        <p class="justificar-parrafo">
                        Cabine moderna e aconchegante com 2 quartos, 2 banheiros, fogueira, churrasqueira e cozinha compacta. Perto do rio com vista para a montanha.
                        </p>
                        <h4>Preços</h4>
                        <p class="costos">
                            CLP$360,000 por fim-de-semana (2 noites/ 3 dias, prova de vinhos e 1 dia de utilização do jacuzzi incluídos).
                        </p>
                        <hr>
                        <p class="costos">
                            CLP$720,000 por semana (5 noites / 6 dias, tour e prova de vinhos e 2 dias de uso do jacuzzi incluídos).
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="center espacio">
            <h3><i>Reserve agora</i></h3>
            <div>
                <p>Para reservar um quarto, envie um email para  <a href="./formReservas.php">Clique aqui</a></p>
                <p>O que está incluído: Acesso à piscina e jacuzzi, trilhas, Wi-Fi, lençóis e travesseiros (TV direta na casa da montanha).</p>
                <p> O que não está incluso: serviço de limpeza diário, limpeza, café da manhã, restaurante A tarifa também inclui: Toalhas de banho e de mão (1 por pessoa) Produtos básicos de cozinha (Lavalozas, sacos de lixo, Sal).</p>
            </div>
        </section>
    </main>

    <?php  include("../includes/po/footer.php");?>
</body>
</html>