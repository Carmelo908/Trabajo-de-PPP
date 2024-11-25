<?php

$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$nombreBaseDeDatos = 'novedades';

$conn = new mysqli($host, $usuario, $contrasena);

$sql = "CREATE DATABASE IF NOT EXISTS $nombreBaseDeDatos";
$conn->query($sql);
$conn->select_db($nombreBaseDeDatos);

$sql = "CREATE TABLE IF NOT EXISTS novedades (" .
"titulo varchar(255) NOT NULL, contenido varchar(1024) NOT NULL, " .
"img_path varchar(255), ID int " .
");";
$conn->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS admins (" .
"username varchar(255), password varchar(1024)" .
");";  
$conn->query($sql);

return $conn;