<?php
require_once "conexion.php";
include("includes/header.php"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Productos</h1>
    <a href="añadir_producto.php" class="d-none d-sm-inline-block btn btn-sm btn-primary" ><i class="fas fa-plus fa-sm text-white-50"></i> Nuevo</a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Descuento</th>
                        <th>Stock</th>
                        <th>Categoria</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria ORDER BY p.id DESC");
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><img class="img-thumbnail" src="../images/productos/<?php echo $data['imagen']; ?>" width="50"></td>
                            <td><?php echo $data['nombre']; ?></td>
                            <td><?php echo $data['descripcion']; ?></td>
                            <td>$<?php echo number_format($data['precio'], 0, ',', '.'); ?></td>
                            <td><?php echo $data['descuento']; ?>%</td>
                            <td><?php echo $data['stock']; ?></td>
                            <td><?php echo $data['categoria']; ?></td>
                            <td><?php if($data['activo']==1){ echo 'Activo';}else{ echo 'Desactivado';}?></td>
                            <td class="d-flex align-self-center">
                                <form method="post" action="eliminar.php?accion=pro&id=<?php echo $data['id']; ?>" class="eliminar">
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                                <form method="post" action="actualizar.php?accion=pro&id=<?php echo $data['id']; ?>" class="">
                                    <button class="btn btn-warning" type="submit">Actualizar</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>