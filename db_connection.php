<?php
// Configuración de la conexión a la base de datos
$host = 'localhost:3306';
$dbname = 'larosita_inventario'; // Nombre de la base de datos
$user = 'larosita'; // Cambia a tu nombre de usuario de MySQL
$pass = 'Argos3596*'; // Cambia a tu contraseña de MySQL

// Crear la conexión
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
