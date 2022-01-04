<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo('ID de Compras: '.$_SESSION['token']) ?></title>
    <link rel="stylesheet" href="./css/print_tags.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Barcode+39+Extended+Text&display=swap" rel="stylesheet">
</head>
<body>
    <div class="limites">
        <header class="container-header">
            <h1><?php echo('Impresion ID de Compras: '.$_SESSION['nombre']) ?></h1>
        </header>
        <main class="main-container">
            <div id="labels" class="label-container">
                <div class="label">
                    <div class="label-text">
                        <p class="label-titulo">PRIORITY MAIL</p>
                    </div>
                    <div class="label-header">
                        <div class="label-header_address">
                            <p>
                                <b>SHIP FROM:</b><br>
                                <?php echo($_SESSION['shop_name']) ?><br>
                                <?php echo($_SESSION['shop_location']) ?><br>
                                <?php echo($_SESSION['shop_phone']) ?><br>
                            </p>
                        </div>
                        <div class="label-header_address">
                            <p>
                                <b>SHIP TO:</b><br>
                                <?php echo($_SESSION['nombre']) ?><br>
                                <?php echo($_SESSION['direccion']) ?><br>
                                <?php echo($_SESSION['telefono']) ?><br>
                            </p>
                        </div>
                    </div>
                    <div class="label-barcode">
                        <p class="barcode"><?php echo($_SESSION['token']) ?></<p>
                    </div>
                    <div class="label-logo">
                        <center><img src="./images/logo-animado.png" class="logo"></center>
                    </div>
                </div>
                <div class="label">
                    <div class="label-text">
                        <p class="label-titulo">PRIORITY MAIL</p>
                    </div>
                    <div class="label-header">
                        <div class="label-header_address">
                            <p>
                                <b>SHIP FROM:</b><br>
                                <?php echo($_SESSION['shop_name']) ?><br>
                                <?php echo($_SESSION['shop_location']) ?><br>
                                <?php echo($_SESSION['shop_phone']) ?><br>
                            </p>
                        </div>
                        <div class="label-header_address">
                            <p>
                                <b>SHIP TO:</b><br>
                                <?php echo($_SESSION['nombre']) ?><br>
                                <?php echo($_SESSION['direccion']) ?><br>
                                <?php echo($_SESSION['telefono']) ?><br>
                            </p>
                        </div>
                    </div>
                    <div class="label-barcode">
                        <p class="barcode"><?php echo($_SESSION['token']) ?></<p>
                    </div>
                    <div class="label-logo">
                        <center><img src="./images/logo-animado.png" class="logo"></center>
                    </div>
                </div>
            </div>
            <center><button onclick="window.print();">IMPRIMIR</button></center>
        </main>
        <footer class="footer-container">
            <a href="./ship_tags.php" class="link">HOME</a>
        </footer>
    </div>
</body>
</html>