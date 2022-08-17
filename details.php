<?php
require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$comando = $con->prepare("SELECT id, nombre, precio, stock, descuento, imagen FROM productos WHERE activo=1");
$comando->execute();
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if ($id == '' || $token == '') {
    echo 'Error al procesar la petición';
    exit;
} else {

    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

    if ($token == $token_tmp) {

        $sql = $con->prepare("SELECT count(id) FROM productos WHERE id=? AND activo=1");
        $sql->execute([$id]);
        if ($sql->fetchColumn() > 0) {

            $sql = $con->prepare("SELECT p.id, p.nombre, p.precio, p.stock, p.descuento, p.descripcion, p.imagen, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria WHERE p.id=? AND p.activo=1");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $id = $row['id'];
            $descuento = $row['descuento'];
            $descripcion = $row['descripcion'];
            $stock = $row['stock'];
            $precio = $row['precio'];
            $cat = $row['categoria'];
            $img = $row['imagen'];
            $precio_desc = $precio - (($precio * $descuento) / 100);
            $dir_images = 'images/productos/';

            $rutaImg = $dir_images . $img;

            if (!file_exists($rutaImg)) {
                $rutaImg = 'images/no-photo.jpg';
            }

            $imagenes = array();
            $dirint = dir($dir_images);

            while (($archivo = $dirint->read()) != false) {
                if ($archivo != 'principal.jpg' && (strpos($archivo, 'jpg') || strpos($archivo, 'jpeg'))) {
                    $image = $dir_images . $archivo;
                    $imagenes[] = $image;
                }
            }
            $dirint->close();
        }
    } else {
        echo 'Error al procesar la petición';
        exit;
    }
}


?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Viña Tumuñan Lodge</title>

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
								<li><a href="./">Inicio</a>
								</li>
								<li><a href="about.php">Sobre nosotros</a></li>
								<li><a href="services.php">Reservas</a>
								<li><a href="news.html">Noticias</a>
									<ul class="sub-menu">
										<li><a href="news.html">News</a></li>
										<li><a href="single-news.html">Single News</a></li>
									</ul>
								</li>
								<li><a href="contact.php">Contacto</a></li>
								<li class="current-list-item"><a href="tienda.php">Tienda</a></li>
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
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg" style="background-image: url(images/bg_2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Todo tipo vinos y mas productos</p>
						<h1><?php echo $row['nombre']; ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->
    
    <!-- main section -->
    <main> 
        <!-- single product -->
        <div class="single-product mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="single-product-img">
                            <img src="<?php echo $rutaImg; ?>"alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="single-product-content">
                            <h3><?php echo $row['nombre']; ?></h3>
                            <p class="single-product-pricing">
                                <?php if ($descuento > 0) { 
                                $precio_desc = $row['precio'] - (($row['precio'] * $descuento) / 100);
                                ?>
                                <p><del><?php echo MONEDA; ?> <?php echo number_format($row['precio'],'0',',','.'); ?></del></p>
                                <p class="single-product-pricing"><?php echo MONEDA; ?> <?php echo number_format($precio_desc,'0',',','.'); ?> <small class=" text-success"><?php echo $descuento; ?>% descuento</small></p>

                                <?php } else { ?>

                                <h2><?php echo MONEDA . ' ' . number_format($row['precio'],'0',',','.'); ?></h2>

                                <?php } ?></p>
                            <p><?php echo $row['descripcion']; ?></p>
                            <div class="single-product-form">
                                <form action="index.html">
                                    <input type="number" id="cantidad" name="cantidad" type="number" min="1" max="<?php echo $stock; ?>" value="1">
                                </form>
                                <a href="checkout.php" class="cart-btn" onClick="addProducto(<?php echo $id; ?>, cantidad.value, '<?php echo $token_tmp; ?>')"><i class="fas fa-shopping-cart"></i> Agregar al carrito</a>
                                <p><strong>Categorias: </strong><?php echo $cat; ?></p>
                            </div>
                            <h4>Compartir:</h4>
                            <ul class="product-share">
                                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end single product -->

        <!-- more products -->
        <div class="more-products mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">	
                            <h3><span class="orange-text">Productos</span> Relacionados</h3>
                            <p>Estos son algunos de los productos que creemos podrían interesarte</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <?php $i = 0; foreach ($resultado as $row) { ?>
                            <?php
                                $ima = $row['imagen'];
                                $imagen = "images/productos/$ima";
                                if (!file_exists($imagen)) {
                                    $imagen = "images/no-photo.jpg";
                                }
                            ?>
                            <?php if($i<3){?>
                            <div class="col-lg-4 col-md-6 text-center strawberry">
                                <div class="single-product-item">
                                    <div class="product-image">
                                        <a href="details.php?id=<?php echo $row['id']; ?>&token=<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>">
                                            <img src="<?php echo $imagen; ?>" >
                                        </a>
                                    </div>
                                    <h3><?php echo $row['nombre']; ?></h3>
                                    <?php if($row['descuento'] > 0){
								        $precio_desc = $row['precio'] - (($row['precio'] * $row['descuento']) / 100);
                                    ?>
                                    <p class="product-price"><span>Precio</span><?php echo MONEDA . ' ' . number_format($precio_desc,'0',',','.'); ?></p>
                                    <?php }else{?>
                                    <p class="product-price"><span>Precio</span><?php echo MONEDA . ' ' . number_format($row['precio'],'0',',','.'); ?></p>
                                    <?php }?>
                                    <a href="" class="cart-btn" onClick="addProducto_2(<?php echo $row['id']; ?>, '<?php echo hash_hmac('sha1', $row['id'], KEY_TOKEN); ?>')">
                                        <i class="fas fa-shopping-cart"></i> Agregar al carrito</a>
                                </div>
                            </div>
                            <?php } $i++?>
                        <?php } ?>
                </div>
            </div>
        </div>
        <!-- end more products -->
    <main> 
    <!-- main section -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        function addProducto(id, cantidad, token) {
            if(<?php echo $stock; ?>>=cantidad){
                var url = 'clases/carrito.php';
                var formData = new FormData();
                formData.append('id', id);
                formData.append('cantidad', cantidad);
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
                    location.reload()  
            }
        }
    </script>
    <script>
        function addProducto_2(id, token) {
            var url = 'clases/carrito.php';
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
<?php  include("includes/footer.php");?>