<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "documentos_pagos";

// Establecer la conexión a la base de datos
$conexion = mysqli_connect($host, $user, $password, $database);

// Verificar la conexión
if (mysqli_connect_error()) {
    echo 'Error de conexión a la base de datos: ' . mysqli_connect_error();
    exit();
}