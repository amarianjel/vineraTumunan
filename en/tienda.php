<?php
require '../config/config.php';
require '../config/database.php';

$db = new Database();
$con = $db->conectar();

$comando = $con->prepare("SELECT p.id, p.nombre, p.descuento, p.precio, p.stock,p.imagen, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria WHERE p.activo=1 ORDER BY p.id ASC");
$comando->execute();
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);


$comando = $con->prepare("SELECT categoria FROM categorias");
$comando->execute();
$resultadoCat = $comando->fetchAll(PDO::FETCH_ASSOC);
?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="Tumuñan Wine Store">
	<meta name="description" content="Ready for your next box of wine? You can now order your favourite Tumuñan wine directly online on our online store. Order wine and other local products here.">

	<!-- title -->
	<title>Viña Tumuñan Lodge | Tienda</title>

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
								<li><a href="formReservas.php">Bookings</a>
								<li><a href="contact.php">Contact</a></li>
								<li class="current-list-item"><a href="tienda.php">Store</a></li>
								
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
											<a class="dropdown-item" href="../tienda.php" style="color:black;">
												<img src="../images/traduccion/espana.png" class="logo-idioma">ES
											</a>
											<a class="dropdown-item" href="../en/tienda.php" style="color:black;">
												<img src="../images/traduccion/reino-unido.png" class="logo-idioma">EN
											</a>
											<a class="dropdown-item" href="../po/tienda.php" style="color:black;">
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
						<p>All kinds of wines and more products</p>
						<h1>Store</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->



    <!-- Contenido -->
    <main>    
        <!-- products -->
	    <div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <!-- problema con los botones -->
                            <li class="active" data-filter="*">All the products</li>
                            <?php foreach ($resultadoCat as $row) { ?>
                                <li data-filter=".<?php echo $row['categoria']; ?>"><?php echo $row['categoria']; ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row product-lists">
                <?php foreach ($resultado as $row) { ?>
                    <?php
                        $img = $row['imagen'];
                        $imagen = "../images/productos/$img";
                        if (!file_exists($imagen)) {
                            $imagen = "../images/no-photo.jpg";
                        }
                    ?>
                    <div class="col-lg-4 col-md-6 text-center <?php echo $row['categoria']; ?>">
                        <div class="single-product-item">
                            <div class="product-image">
                                <!-- aqui -->
                                <a href="details.php?id=<?php echo $row['id']; ?>&token=<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>">
                                    <img src="<?php echo $imagen; ?>" >
                                </a>
                            </div>
                            <h3><?php echo $row['nombre']; ?></h3>
							<?php if($row['descuento'] > 0){
								$precio_desc = $row['precio'] - (($row['precio'] * $row['descuento']) / 100);
							?>
                            <p class="product-price"><span>Price</span><?php echo MONEDA . ' ' . number_format($precio_desc,'0',',','.'); ?></p>
							<?php }else{?>
							<p class="product-price"><span>Precio</span><?php echo MONEDA . ' ' . number_format($row['precio'],'0',',','.'); ?></p>
							<?php }?>
                            <a href="" class="cart-btn" onClick="addProducto(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>')">
                                <i class="fas fa-shopping-cart"></i> Add to cart</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>

		</div>
	</div>
	<!-- end products -->
    </main>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function addProducto(id, token) {
            var url = '../clases/carrito.php';
            var formData = new FormData();
            formData.append('id', id);
            formData.append('token', token);

            fetch(url, {
                    method: 'POST',
                    body: formData,
                    mode: 'cors',
                }).then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        let elemento = document.getElementById("num_cart")
                        elemento.innerHTML = data.numero;
                    }
                })
                location.reload();
        }
    </script>
 <?php  include("../includes/en/footer.php");?>