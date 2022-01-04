<?php
    //Generar un Token Random para la base de ventas
    $data = random_bytes(5);
    $data = bin2hex($data);
    $data = sha1($data);
    $data = strtoupper($data);
    $data = substr($data,0,10);
    echo($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Shipping Tag</title>
    <link rel="stylesheet" href="./css/ship_tags.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header-container">
                <h1 class="header-container-title">Generador de Etiquetas de Envio</h1>
            </div>
        </header>
        <main class="main">
            <div class="main-container">
                <form action="./verification.php" method="post" class="formulario">
                    <h2>Ingrese el ID de Compra para buscar tu informacion</h2>
                    <label>ID de Compra: </label>
                    <input type="text" name="token" id="token">
                    <input type="submit" value="Generar">
                </form>
            </div>
        </main>
        <footer class="footer">
            <div class="footer-container">
                <h3 class="footer-container-info">
                    Developed by ©MrRX
                </h3>
            </div>
        </footer>
    </div>
</body>
</html>