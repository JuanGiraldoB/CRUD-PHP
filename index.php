<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>CRUD-PHP</title>
</head>

<body>
    <!-- Nav -->
    <?php include("nav.php"); ?>

    <!-- Agregar productos -->

    <div>
        <?php if (isset($_SESSION['usuario'])) { ?>
            <div class="container p-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <?php if (isset($_SESSION['mensaje'])) { ?>
                                <div class="alert alert-<?= $_SESSION['tipo_mensaje']; ?> alert-dismissible fade show" role="alert">
                                    <?php echo $_SESSION['mensaje']; ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
                                </div>
                            <?php
                            } ?>
                            <?php include("formulario_producto.php"); ?>
                        </div>
                    </div>
                    <?php include("mostrar_producto.php"); ?>
                </div>
            </div>
        <?php
        } else { 
            include("mostrar_producto.php"); 
        }?>
</body>

</html>