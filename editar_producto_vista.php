<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Productos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <a class="btn btn-outline-success" href="iniciar_sesion.php">Iniciar Sesión</a>
            </div>
        </div>
    </nav>
    <?php if (isset($_SESSION['usuario'])) { ?>
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4">
                    <center><div>
                        <p>Editar Producto</p>
                    </div></center>
                    <div class="card card-body">
                    <?php
                    $id = $_REQUEST['id'];
                    $query = "SELECT * FROM producto WHERE id=$id";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($result) ?>
                        <form action="editar_producto.php?id=<?php echo $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="precio_venta" class="form-label">Precio</label>
                                <input type="text" class="form-control" id="precio_venta" name="precio_venta" value="<?php echo $row['precio_venta']; ?>" require>
                            </div>
                            <div class="mb-3">
                                <label for="imagen" class="form-label">Imagen</label>
                                <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" />
                                <input type="file" class="form-control" id="imagen" name="imagen" require>
                            </div>
                            <input type="submit" class="btn btn-success btn-block" name="edit" value="Guardar"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } ?>
</body>

</html>