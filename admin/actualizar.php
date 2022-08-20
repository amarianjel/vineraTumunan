<?php
require_once "conexion.php";

if (isset($_GET)) {
    if (!empty($_GET['accion']) && !empty($_GET['id'])) {
        require_once "conexion.php";
        $id = $_GET['id'];
        $consulta = mysqli_query($conexion, "SELECT * FROM productos as p INNER JOIN categorias c ON c.id=id_categoria WHERE p.id='$id'");
        foreach($consulta as $cons){
            $nombre = $cons['nombre'];
            $stock = $cons['stock'];
            $descripcion = $cons['descripcion'];
            $precio = $cons['precio'];
            $descuento= $cons['descuento'];
            $activo= $cons['activo'];
            $categoria = $cons['id_categoria'];
            $n_categoria = $cons['categoria'];
            $img = $cons['imagen'];
        }
        if ($_GET['accion'] == 'pro') {
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
                    if (move_uploaded_file($tmpname, $destino)) {
                        $query = mysqli_query($conexion, "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio', descuento='$descuento', stock=$stock, imagen='$foto', id_categoria=$categoria, activo='$activo' WHERE id=$id");
                        header('Location: productos.php');
                    }else{
                        $query = mysqli_query($conexion, "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio', descuento='$descuento', stock=$stock, id_categoria=$categoria, activo='$activo' WHERE id=$id");
                        header('Location: productos.php');
                    } 
                }
            }
        }
    }
}
include("includes/header.php"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $nombre; ?></h1>
    <a href="productos.php" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm" id="abrirProducto"><i class="fas fa-plus fa-sm text-white-50"></i> Volver Atras</a>
</div>
<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" value="<?php echo $nombre; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="stock">stock</label>
                                <input id="stock" class="form-control" type="text" name="stock" value="<?php echo $stock; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="precio">Precio Normal</label>
                                <input id="precio" class="form-control" type="text" name="precio" value="<?php echo $precio; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="descuento">Precio Rebajado</label>
                                <input id="descuento" class="form-control" type="text" name="descuento" value="<?php echo $descuento; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <select id="categoria" class="form-control" name="categoria" required>
                                    <option value="<?php echo $categoria; ?>"><?php echo $n_categoria; ?></option>
                                    <?php
                                    $categorias = mysqli_query($conexion, "SELECT * FROM categorias"); ?>
                                    <?php foreach ($categorias as $cat) { ?>
                                        <?php if ($cat['id']!=$categoria) { ?>
                                            <option value="<?php echo $cat['id']; ?>"><?php echo $cat['categoria']; ?></option>
                                        <?php } ?>
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
                                        <?php if ($activo==1) { ?>
                                            <option value="<?php echo $activo; ?>"><?php echo 'Activo'; ?></option>
                                            <option value="<?php echo 0; ?>"><?php echo 'Desactivado'; ?></option>
                                        <?php } else{?>
                                            <option value="<?php echo 0; ?>"><?php echo 'Desactivado'; ?></option>
                                            <option value="<?php echo 1; ?>"><?php echo 'Activo'; ?></option>
                                        <?php } ?>         
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea id="descripcion" class="form-control" name="descripcion" rows="3" required><?php echo $descripcion; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </form>