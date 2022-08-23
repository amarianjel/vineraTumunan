<?php
require_once("conexion.php");
if (isset($_POST['agregar'])) {
        $nombre_p = $_POST['nombre'];
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
        if (move_uploaded_file($tmpname, $destino)) {
            $sql="INSERT INTO productos(nombre, descripcion, precio, descuento, stock, imagen, id_categoria, activo) VALUES ('$nombre_p', '$descripcion', '$precio', '$descuento', $stock, '$foto', $categoria,$activo)";
            $query = mysqli_query($conexion, $sql );
            header('Location: productos.php');
        }else{
            $sql="INSERT INTO productos(nombre, descripcion, precio, descuento, stock, id_categoria, activo) VALUES ('$nombre_p', '$descripcion', '$precio', '$descuento', $stock, $categoria,0)";
            $query = mysqli_query($conexion, $sql );
            header('Location: productos.php');
        }
        
}
include("includes/header.php"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Añadir Producto</h1>
    <a href="productos.php" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm" id="abrirProducto"><i class="fas fa-plus fa-sm text-white-50"></i> Volver Atras</a>
</div>
<form action="añadir_producto.php" method="POST" enctype="multipart/form-data" autocomplete="off">
<div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input id="stock" class="form-control" type="text" name="stock" value="0" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input id="precio" class="form-control" type="text" name="precio" value="0" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="descuento">Descuento (0-100)</label>
                                <input id="descuento" class="form-control" type="text" name="descuento" value="0" required>
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
                                <label for="activo">Activo / Desactivo (Activo = Se muestra en la página web, Desactivado=No se encuentra en la página web)</label>
                                <select id="activo" class="form-control" name="activo" required>
                                        <option value="1">Activo</option>
                                        <option value="0">Desactivado</option>  
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
                    <button class="btn btn-primary" type="submit" name="agregar">Registrar</button>
                </form>
<?php include("includes/footer.php"); ?>