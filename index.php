<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Precio</title>
    <link rel="stylesheet" type="text/css" href="estilos1.css"    >
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
