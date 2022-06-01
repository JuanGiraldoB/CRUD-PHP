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
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Productos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <a class="btn btn-outline-success" href="registro.php">Registrarse</a>
            </div>
        </div>
    </nav>

    <!-- Formulario inicio sesión -->
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-body">
                    <form action="validar_usuario.php" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contrasena" name="contrasena" require>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="save" value="Iniciar"></input>
                    </form>
                    <p class="small fw-bold mt-2 pt-1 mb-0">No tiene una cuenta? <a href="registro.php" class="link-danger">Registrarse</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>