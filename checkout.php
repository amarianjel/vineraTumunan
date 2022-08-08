<?php
require 'config/config.php';
require 'config/database.php';

$productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

$db = new Database();
$con = $db->conectar();

$lista_carrito = array();

if ($productos != null) {
    foreach ($productos as $clave => $producto) {
        $sql = $con->prepare("SELECT id, nombre, precio, descuento, stock, imagen, $producto AS cantidad FROM productos WHERE id=? AND activo=1");
        $sql->execute([$clave]);
        $lista_carrito[] = $sql->fetch(PDO::FETCH_ASSOC);
    }
}
?>
<!DOCTYPE html>
<html lang="es">

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
						<p>Añade tus productos favoritos al carrito</i></p>
						<h1>Carrito de compras</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    <main>
        <!-- cart -->
        <?php 
        if ($lista_carrito != null) {
        ?>
        <div class="cart-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="cart-table-wrap">
                            <table class="cart-table">
                                <thead class="cart-table-head">
                                    <tr class="table-head-row">
                                        <th class="product-remove"></th>
                                        <th class="product-image">Imagen producto</th>
                                        <th class="product-name">Nombre</th>
                                        <th class="product-price">Precio</th>
                                        <th class="product-quantity">Cantidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $total = 0;
                                        foreach ($lista_carrito as $producto) {
                                            $_id = $producto['id'];
                                            $img = $producto['imagen'];
                                            $imagen = "images/productos/".$img;
                                            $descuento = $producto['descuento'];
                                            $precio = $producto['precio'];
                                            $stock = $producto['stock'];
                                            $cantidad = $producto['cantidad'];
                                            $precio_desc = $precio - (($precio * $descuento) / 100);
                                            $subtotal = $cantidad * $precio_desc;
                                            $total += $subtotal;
                                    ?>
                                    <tr class="table-body-row">
                                        <td class="product-remove"><a id="eliminar" class="btn btn-danger btn-sm" data-bs-id="<?php echo $_id; ?>" data-bs-toggle="modal" data-bs-target="#eliminaModal"><i class="fas fa-trash-alt"></i></a></td>
                                        <td class="product-image"><img src="<?php echo $imagen?>"  alt=""></td>
                                        <td class="product-name"><?php echo $producto['nombre']; ?></td>
                                        <td class="product-price"><?php echo MONEDA . number_format($precio_desc, 0, ',', '.'); ?></td>
                                        <td class="product-quantity"><input type="number" id="cantidad" name="cantidad" type="number" min="1" max="<?php echo $stock; ?>" value="<?php echo $cantidad;?>" onchange="actualizaCantidad(this.value,<?php echo $_id; ?>,<?php echo $stock; ?>)" ></td>
                                    </tr>
                                        <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="total-section">
                            <table class="total-table">
                                <thead class="total-table-head">
                                    <tr class="table-total-row">
                                        <th>Total</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <tr class="total-data">
                                        <td><strong>Subtotal: </strong></td>
                                        <td><?php echo MONEDA . number_format($subtotal, 0, ',', '.'); ?></td>
                                    </tr> -->
                                    <!-- <tr class="total-data">
                                        <td><strong>Envio: </strong></td>
                                        <td>$4.500</td>
                                    </tr> -->
                                    <tr class="total-data">
                                        <td><strong>Total: </strong></td>
                                        <td><?php echo MONEDA . number_format($total, 0, ',', '.'); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="cart-buttons">
                                <a href="checkout.php" class="boxed-btn">Actualizar carrito</a>
                                <a href="datos_envio.php" class="boxed-btn black">Pagar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- empty cart -->
        <?php } else { ?>
            <div class="full-height-section error-section" style="margin-top: 5vw;margin-bottom:5vw">
                <div class="full-height-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 text-center">
                                <div class="error-text">
                                    <i class="far fa-sad-cry"></i>
                                    <h1>Oops! No existen productos en este carrito</h1>
                                    <p>Busca en la tienda productos para agregar productos</p>
                                    <a href="tienda.php" class="boxed-btn">Ir a la tienda</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
        <?php } ?>
        <!-- end empty cart -->
        <div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alerta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Desea eliminar el producto de la lista?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button id="btn-elimina" class="btn btn-danger" onclick="elimina()">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end cart -->
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script>
        let eliminaModal = document.getElementById('eliminaModal')
        eliminaModal.addEventListener('show.bs.modal', function(event) {
            // Button that triggered the modal
            let button = event.relatedTarget
            // Extract info from data-bs-* attributes
            let recipient = button.getAttribute('data-bs-id')
            let botonElimina = eliminaModal.querySelector('.modal-footer #btn-elimina')
            botonElimina.value = recipient
        })

        function actualizaCantidad(cantidad, id,stock) {

            if(stock >= cantidad){
                let url = 'clases/actualizar_carrito.php';
                let formData = new FormData();
                formData.append('action', 'agregar');
                formData.append('id', id);
                formData.append('cantidad', cantidad);

                fetch(url, {
                        method: 'POST',
                        body: formData,
                        mode: 'cors',
                    }).then(response => response.json())
                    .then(data => {
                        if (data.ok) {
                            let divSubtotal = document.getElementById('subtotal_' + id)
                            divSubtotal.innerHTML = data.sub

                            let total = 0.00
                            let list = document.getElementsByName('subtotal[]')

                            for (var i = 0; i < list.length; ++i) {
                                total += parseFloat(list[i].innerHTML.replace(/[$,]/g, ''))
                            }

                            total = new Intl.NumberFormat('en-US', {
                                minimumFractionDigits: 2
                            }).format(total)
                            document.getElementById("total").innerHTML = '<?php echo MONEDA ?>' + total
                        }
                    })
                }
        }

        function elimina() {
            let botonElimina = document.getElementById('btn-elimina')
            let recipient = botonElimina.value

            let url = 'clases/actualizar_carrito.php';
            let formData = new FormData();
            formData.append('action', 'eliminar');
            formData.append('id', recipient);

            fetch(url, {
                    method: 'POST',
                    body: formData,
                    mode: 'cors',
                }).then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        location.reload();
                    }
                })
            $('#eliminaModal').modal('hide')
        }
    </script>
<?php  include("includes/footer.php");?>