<?php
require_once "conexion.php";

if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $stock = $_POST['stock'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $descuento = $_POST['descuento'];
        $categoria = $_POST['categoria'];
        $activo = $_POST['activo'];
        $img = $_FILES['foto'];
        $name = $img['name'];
        $tmpname = $img['tmp_name'];
        $fecha = date("YmdHis");
        $foto = $fecha . ".jpg";
        $destino = "../images/productos/" . $foto;
        $query = mysqli_query($conexion, "INSERT INTO productos(nombre, descripcion, precio, descuento, stock, imagen, id_categoria) VALUES ('$nombre', '$descripcion', '$precio', '$descuento', $stock, '$foto', $categoria)");
        if ($query) {
            if (move_uploaded_file($tmpname, $destino)) {
                header('Location: productos.php');
            }
        }
    }
}
include("includes/header.php"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Añadir Producto</h1>
    <a href="productos.php" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm" id="abrirProducto"><i class="fas fa-plus fa-sm text-white-50"></i> Volver Atras</a>
</div>
<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stock">stock</label>
                                <input id="stock" class="form-control" type="text" name="stock" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="precio">Precio Normal</label>
                                <input id="precio" class="form-control" type="text" name="precio" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="descuento">Precio Rebajado</label>
                                <input id="descuento" class="form-control" type="text" name="descuento"  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <select id="categoria" class="form-control" name="categoria" required>
                                    <?php $categorias = mysqli_query($conexion, "SELECT * FROM categorias");
                                     foreach ($categorias as $cat) { ?>
                                        <option value="<?php echo $cat['id']; ?>"><?php echo $cat['categoria']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagen">Foto</label>
                                <input type="file" class="form-control" name="foto" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="activo">Activo / Desactivo</label>
                                <select id="activo" class="form-control" name="activo" required>
                                    <option value="<?php echo 1; ?>"><?php echo 1; ?></option>
                                    <option value="<?php echo 0; ?>"><?php echo 0; ?></option>        
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea id="descripcion" class="form-control" name="descripcion" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Registrar</button>
                </form>
<?php include("includes/footer.php"); ?>