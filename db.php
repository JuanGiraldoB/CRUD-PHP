<?php

session_start();

$conn = mysqli_connect(
    'localhost', # ubicacion del servidor de base de datos
    'root', # usuario
    '', # clave
    'taller6crud-php' # nombre base de datos
);
?>