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
	<meta name="title" content="Lodge na porta do Vale de Colchagua">
	<meta name="description" content="Visite Tumuñan Vineyard aninhado no sopé da Cordilheira dos Andes na porta do Vale de Colchagua. Saiba mais sobre nós aqui.">

	<!-- title -->
	<title>Tumuñan Lodge | Sobre nós</title>

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
								<li class="current-list-item"><a href="./">Sobre nós</a></li>
								<li><a href="alojamientos.php">Alojamento</a></li>
								<li><a href="galeria.php">Galeria</a></li>
								<li><a href="formReservas.php">Reservas</a>
								<li><a href="contact.php">Contacto</a></li>
								<li><a href="tienda.php">Armazenar</a></li>
								<li><a href="../about.php">
									<img src="../images/traduccion/espana.png" class="logo-idioma">
									</a>
								</li>
								<li><a href="../en/about.php">
									<img src="../images/traduccion/reino-unido.png" class="logo-idioma">
									</a>
								</li>
								<li>
								<li><a href="about.php">
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
	<div class="hero-area hero-bg" style="background-image: url(../images/food_Wine/cheese.jpg);">
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
					<h2 class="titulo">Sobre nós</h2>
					
					<p style="font-size: 19px">Apenas a 2 horas de carro ao sul
                    de Santiago que leva você por vinhedos e vistas espetaculares dos Andes centrais,
                    este refúgio de montanha familiar atende aos que precisam de descanso e relaxamento, aqueles
                    viajantes mais aventureiros que podem desfrutar
                    dias únicos de caminhadas, cavalgadas e pesca com mosca na incomparável cordilheira chilena.
                    </p>
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
					<h2 class="titulo">Loja</h2>
					<p style="font-size: 19px">Tumuñan produz vinhos de classe mundial graças ao seu terreno montanhoso. Além disso, você pode comprar nossos vinhos e leites em nossa loja online. Para acessar a loja online <a href="./tienda.php">Clique aqui. </a>Você pode comprar seus produtos favoritos perto de nosso vinhedo localizado em <a href="https://goo.gl/maps/NgVFDaCbyTaGf2XXA" class="dato"> I-325, Las Peñas, O'Higgins, Chile </a>onde também oferecemos visitas guiadas e degustações.</p>
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Reserve agora</h2>
					<p style="font-size: 19px">Para reservar um quarto, <a href="./formReservas.php">Clique aqui</a> e preencha o formulário. Entraremos em contato em breve.</p>
                    <p style="font-size: 19px">INCLUI: Acesso a piscina e jacuzzi, trilhas, Wi-Fi, lençóis e travesseiros, TV direta na casa
                    montanhas, toalhas de banho e de mão (1 por pessoa) produtos básicos de cozinha (lavalozas, sacos de
                    lixo, sal).</p>
                    <p style="font-size: 19px">NÃO INCLUI: serviço de limpeza diário, limpeza, café da manhã, restaurante.</p>
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
					<h2 class="titulo">Cenário</h2>
					<p style="font-size: 19px">Em nossa propriedade há 3 km de trilhas autoguiadas por florestas pitorescas
                    e paisa gens de montanha.</p>
                    <p style="font-size: 19px">Para ver as paisagens da região <a href="./galeria.php">Clique aqui.</a></p>
				</div>
			</div>
			<hr>

			<div class="row align-items-center">
				<div class="info col-12 col-lg-6">
					<h2 class="titulo">Caminhada</h2>
					<p style="font-size: 19px">Na área existem trilhas autoguiadas de 1 km a 10 km de comprimento por pitorescas paisagens de montanha.</p>
                    <p style="font-size: 19px">Para ver a galeria de imagens <a href="./galeria.php">Clique aqui.</a></p>
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
					<h2 class="titulo">Andar a cavalo</h2>
					<p style="font-size: 19px">Faça um relaxante passeio a cavalo para explorar as belas vistas do Vale Tumuñan a partir do propriedade e seu entorno. Teremos o prazer de colocá-lo em contato com os locais que podem ajudá-lo a planejar sua viagem de um dia..</p>
                    <p style="font-size: 19px">Para ver a galeria de imagens <a href="./galeria.php">Clique aqui.</a></p>
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

	<?php  include("../includes/po/footer.php");?>