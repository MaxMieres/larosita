<?php
// Configuración de conexión a la base de datos
$servername = "localhost:3306";  // usualmente "localhost" en la mayoría de los hosting
$username = "larosita";
$password = "Argos3596*";
$dbname = "larosita_inventario";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos!";
}

// Cerrar la conexión
$conn->close();
?>
