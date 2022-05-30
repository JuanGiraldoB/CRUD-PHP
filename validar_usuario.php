<?php
include('db.php');

if (isset($_POST['save'])) {

    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM usuario
            WHERE nombre = '$nombre' AND contrasena = '$contrasena'";

    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);

    if($row == NULL){
        $_SESSION['usuario'] = NULL;
        $_SESSION['mensaje'] = 'Usuario no existe';
        $_SESSION['tipo_mensaje'] = 'danger';  
    }else{
        $_SESSION['usuario'] = $nombre;
        $_SESSION['mensaje'] = 'Sesión iniciada';
        $_SESSION['tipo_mensaje'] = 'success';  
    }

    // echo $_SESSION['usuario'];

    // while ($row = mysqli_fetch_array($result)) {
    //     echo $row['nombre'] . "<br>";
    //     echo $row['contrasena'] . "<br>";
    // }

    header("Location: index.php");

}
