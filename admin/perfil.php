<?php
require_once "conexion.php";

if (isset($_GET)) {
    if (!empty($_GET['accion']) && !empty($_GET['id'])) {
        require_once "conexion.php";
        $id = $_GET['id'];
        $consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id='$id'");
        foreach($consulta as $cons){
            $usuario = $cons['usuario'];
            $nombre = $cons['nombre'];
            $img = $cons['imagen'];
        }
        if ($_GET['accion'] == 'pro') {
            if (isset($_POST)) {
                if (!empty($_POST)) {
                    $nombre = $_POST['nombre'];
                    $img = $_FILES['foto'];
                    $name = $img['name'];
                    $tmpname = $img['tmp_name'];
                    $fecha = date("YmdHis");
                    $foto = $fecha . ".jpg";
                    $destino = "../../images/usuario/" . $foto;
                    if (move_uploaded_file($tmpname, $destino)) {
                        $query = mysqli_query($conexion, "UPDATE usuarios SET nombre='$nombre', imagen='$foto' WHERE id=$id");
                        header('Location: productos.php');
                    }else{
                        $query = mysqli_query($conexion, "UPDATE usuarios SET nombre='$nombre' WHERE id=$id");
                        header('Location: productos.php');
                    }                      
                }
            }
        }
    }
}
include("includes/header.php"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Editar Mi perfil</h1>
    <a href="productos.php" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm" id="abrirProducto"><i class="fas fa-plus fa-sm text-white-50"></i> Volver Atras</a>
</div>
<form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre Usuario</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" value="<?php echo $nombre; ?>" required>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="imagen">Foto</label>
                                <input type="file" class="form-control" name="foto" >
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Guardar Cambios</button>
</form>