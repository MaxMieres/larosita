<?php
// Incluir el archivo de conexión a la base de datos
require_once 'db_connection.php';

// Verificar si el formulario envió un código
if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];

    // Preparar la consulta SQL para buscar el nombre y precio según el código
    $sql = $conn->prepare("SELECT nombre, precio FROM productos WHERE codigo = ?");
    $sql->bind_param('s', $codigo); // 's' indica que es una cadena de texto
    $sql->execute();
    $sql->bind_result($nombre, $precio);

    $resultado = '';
    if ($sql->fetch()) {
        // Separar el nombre y el precio con el símbolo "|" para facilitar el formateo en index.php
        $resultado = htmlspecialchars($nombre) . "|" . htmlspecialchars($precio);
    } else {
        $resultado = "No se encontró ningún producto con el código ingresado.";
    }

    // Cerrar la consulta
    $sql->close();

    // Redirigir de vuelta a index.php con el resultado
    header("Location: index.php?result=" . urlencode($resultado));
    exit();
} else {
    // Si no se ingresó un código, redirigir de nuevo a index.php
    header("Location: index.php?result=" . urlencode("No se ingresó un código."));
    exit();
}
?>
