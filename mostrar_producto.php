<div class="col-md-8">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Imagen</th>
                <?php if (isset($_SESSION['usuario'])) { ?>
                    <th>Acciones</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM producto";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['precio_venta'] ?></td>
                    <td>
                        <div class="card" style="width: 18rem;">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" class="card-img-top" alt="...">
                        </div>
                    </td>
                    <?php if (isset($_SESSION['usuario'])) { ?>
                        <td>
                            <a href="editar_producto_vista.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <a href="eliminar_producto.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>