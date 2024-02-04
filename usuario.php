<?php


// Configuración de la conexión a la base de datos
$server = "localhost";
$usuario_bd = "root"; // nombre de usuario
$clave_bd = ""; // sin contraseña en el local host
$base_datos = "jamacy";

// Crear conexión
$conexion = new mysqli($server, $usuario_bd, $clave_bd, $base_datos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
	header("location:incorrecto.html");
}
?>

