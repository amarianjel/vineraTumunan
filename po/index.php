<!--MUESTRA SOBRE NOSTROS-->
<?php 
require '../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="Vinhedo na porta do Vale de Colchagua">
	<meta name="description" content="Visite Tumuñan Vineyard aninhado no sopé da Cordilheira dos Andes na porta do Vale de Colchagua. Saiba mais sobre nós aqui.">

	<!-- title -->
	<title>Vinhedo Tumuñan Lodge | Sobre nós</title>

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
								<li class="current-list-item"><a href="./">Sobre nós</a></li>
								<li><a href="alojamientos.php">Alojamento</a></li>
								<li><a href="events.php">Eventos</a></li>
								<li><a href="galeria.php">Galeria</a></li>
								<li><a href="formReservas.php">Reservas</a>
								<li><a href="contact.php">Contacto</a></li>
								<li><a href="tienda.php">Armazenar</a></li>
								
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

								<li>
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											idioma
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
							<p class="subtitle">Aprenda sobre nós</p>
							<h1>Vinhedo Tumuñan Lodge</h1>
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
					<h2 class="titulo">Quem nós somos:</h2>
					
					<p class="displayjs" style="font-size: 19px">Tumuñan Lodge and Winery foi fundado em 2006 por William Evelyn, um inglês que veio explorar o Chile em 1988, trabalhando como guia de pesca com mosca no deserto da Patagônia e surfando na costa central, apaixonando-se pelo Chile, suas paisagens deslumbrantes, pessoas encantadoras, cultura e vinhos finos.
                    </p>
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
				<h2 class="titulo">Lodge:</h2>
					<p class="displayjs" style="font-size: 19px">Localizado nos Andes, cercado por belas colinas arborizadas e riachos claros, o Tumuñan Lodge oferece uma casa e cabana totalmente equipadas disponíveis para aluguel com piscina, banheira de hidromassagem e opções gastronômicas. Há abundantes trilhas para uso exclusivo dos hóspedes, passeios de vinho e outras atividades disponíveis.<a href="./formReservas.php"> Reserve pelo formulário</a> o via WhatsApp.</p>
					<div class="fotografia-info col-3 col-lg-4 my-5">
						<a href="https://wa.me/56987875048" target="_blank"><span class="text"><img src="../images\WhatsApp_icon.png"></span></a>
					</div>
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">A vinha:</h2>
					<p class="displayjs" style="font-size: 19px">O vinhedo mais alto conhecido para Cabernet Sauvignon no Vale de Colchagua. Aninhado 720m acima do nível do mar, é o limite de onde as uvas podem ser produzidas com sucesso. As práticas vitícolas orgânicas e biodinâmicas são usadas para proteger cuidadosamente o ecossistema que envolve a vinha. Os vinhos aqui produzidos foram reconhecidos internacionalmente como alguns dos melhores do Chile e podem ser adquiridos em nossos <a href="./tienda.php">Loja online</a>.</p>
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
					<h2 class="titulo">Andar a cavalo</h2>
					<p class="displayjs" style="font-size: 19px">Faça um relaxante passeio a cavalo para explorar as belas vistas do Vale Tumuñan a partir do propriedade e seu entorno. Teremos o prazer de colocá-lo em contato com os locais que podem ajudá-lo a planejar sua viagem de um dia..</p>
                    <p class="displayjs" style="font-size: 19px">Para ver a galeria de imagens <a href="./galeria.php">Clique aqui.</a></p>
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Caminhada</h2>
					<p class="displayjs" style="font-size: 19px">Na área existem trilhas autoguiadas de 1 km a 10 km de comprimento por pitorescas paisagens de montanha.</p>
                    <p class="displayjs" style="font-size: 19px">Para ver a galeria de imagens <a href="./galeria.php">Clique aqui.</a></p>
				</div>
				<div class="fotografia-info col-12 col-lg-6 my-5">
					<img src="../images\Homepage Picture Roll\To Keep\40529940.jpg" alt="">
				</div>
			</div>
			<hr>

		<!-- Presentacion -->
		<section>
			<div style="position: relative; width: 100%; height: 0; padding-top: 75.4530%;
	padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
	border-radius: 8px; will-change: transform;">
				<iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
			src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFJxox_LMk&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
				</iframe>
			</div>
			<a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFJxox_LMk&#x2F;view?utm_content=DAFJxox_LMk&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">Tumunan Wine Presentation V2 Portuguese</a> de Kat Sorbello
		</section>
	
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
	<?php  include("../includes/po/footer.php");?>
</body>