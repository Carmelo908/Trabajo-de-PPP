<?php

$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$nombreBaseDeDatos = 'novedades';

$conexion = new mysqli($host, $usuario, $contrasena);

$sql = "CREATE DATABASE IF NOT EXISTS $nombreBaseDeDatos";
$conn->query($sql);

$result = $conn->query("SHOW TABLES LIKE `novedades`");
if (!$result->num_rows > 0) {
  $sql = "CREATE TABLE novedades (" .
  "titulo varchar(255) NOT NULL, contenido varchar(1024) NOT NULL, " .
  "img_path varchar(255), ID int " .
  ");";
  $conn->query($sql);
}

$result = $conn->query("SHOW TABLES LIKE `novedades`");
if (!$result->num_rows > 0) {
  $sql = "CREATE TABLE admins (" .
  "username varchar(255), password varchar(1024)" .
  ");";  
  $conn->query($sql);
}

return $conexion;