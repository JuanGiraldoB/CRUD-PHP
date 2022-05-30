<?php

include('db.php');

if(isset($_POST['save'])){

    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuario(nombre, contrasena)
        VALUES('$nombre', '$contrasena')";

    $result = mysqli_query($conn, $query);

    if(!$result){
        $_SESSION['mensaje'] = 'No se pudo guardar';
        $_SESSION['tipo_mensaje'] = 'danger';    
    }else{
        $_SESSION['mensaje'] = 'Usuario guardado';
        $_SESSION['tipo_mensaje'] = 'success';    
    }

    header("Location: index.php");

}
