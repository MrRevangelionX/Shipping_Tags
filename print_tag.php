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
</head>
<body>
    <header class="container-header">
        <h1><?php echo('Impresion ID de Compras: '.$_SESSION['nombre']) ?></h1>
    </header>
    <a href="./ship_tags.php">HOME</a>
</body>
</html>