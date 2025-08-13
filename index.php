<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Precio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center; /* Centrado horizontal */
            justify-content: center; /* Centrado vertical */
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            padding-top: 10px;
        }
        .container {
            display: flex; /* Flex para organizar el contenido */
            align-items: center; /* Centrar verticalmente */
            justify-content: space-between; /* Espacio entre los elementos */
            background-color: #ffffff; 
            padding: 20px;
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            width: 80%; /* Ancho del contenedor */
        }
        .form-container {
            flex: 1; /* Permitir que el formulario ocupe el espacio restante */
            text-align: center;
        }
        input[type="text"] {
            padding: 10px;
            width: 200px;
            margin-bottom: 10px;
            border: 1px solid #ccc; 
            border-radius: 5px; 
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none; 
            border-radius: 5px; 
            background-color: #007bff; 
            color: white; 
            cursor: pointer; 
        }
        input[type="submit"]:hover {
            background-color: #0056b3; 
        }
        .result {
            margin-top: 20px;
            color: #032c62;
            font-size: 50px; 
            font-weight: bold; 
        }
        .precio {
            color: #fb0509; 
            font-size: 70px; 
        }
        .button-container {
            display: flex;
            flex-direction: column; /* Alineación vertical */
            align-items: center; /* Alineación centrada */
            justify-content: center; /* Centrar verticalmente */
            height: 100%; /* Ajustar a la altura del contenedor */
        }
        .button {
            padding: 40px; /* Espacio interno */
            border: none;
            border-radius: 5px;
            background-color: gray; /* Color gris */
            color: white;
            cursor: pointer;
            width: 160px; /* Ancho fijo */
            height: 160px; /* Alto fijo para ser cuadrados */
            font-size: 18px; /* Tamaño de fuente para los botones */
            margin-bottom: 10px; /* Espacio entre botones */
            display: flex; /* Para centrar el texto */
            align-items: center; /* Alinear verticalmente */
            justify-content: center; /* Alinear horizontalmente */
        }
        .button:hover {
            background-color: #505050; /* Color más oscuro al pasar el mouse */
        }
    </style>
    <script>
        window.onload = function() {
            document.getElementById("codigo").focus();
        };
    </script>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Consulta de Precio</h1>
            <form action="consultas.php" method="post">
                <input type="text" id="codigo" name="codigo" placeholder="Introduce un código" required>
                <input type="submit" value="Consultar">
            </form>

            <!-- Mostrar el resultado si existe -->
            <?php
            if (isset($_GET['result'])) {
                $result = htmlspecialchars($_GET['result']);
                $partes = explode("|", $result); 
                
                echo '<div class="result">';
                echo $partes[0] . '<br>'; 
                echo '<span class="precio">$' . $partes[1] . '</span>'; 
                echo '</div>';
            }
            ?>
        </div>

        <div class="button-container">
            <button class="button" onclick="window.location.href='https://larosita.site/actualizarprecio/'">ACTUALIZAR PRECIO</button>
            <button class="button" onclick="window.location.href='https://larosita.site/addproductos/'">AGREGAR PRODUCTO</button>
        </div>
    </div>
</body>
</html>
