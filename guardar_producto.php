<?php

include('db.php');

if(isset($_POST['save'])){

    $nombre = $_POST['nombre'];
    $precio_venta = $_POST['precio_venta'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "INSERT INTO producto(nombre, precio_venta, imagen)
        VALUES('$nombre', '$precio_venta', '$imagen')";

    $result = mysqli_query($conn, $query);

    // if(!$result){
    //     $_SESSION['mensaje'] = 'No se pudo guardar';
    //     $_SESSION['tipo_mensaje'] = 'danger';    
    // }else{
    //     $_SESSION['mensaje'] = 'Usuario guardado';
    //     $_SESSION['tipo_mensaje'] = 'success';    
    // }

    header("Location: index.php");

}