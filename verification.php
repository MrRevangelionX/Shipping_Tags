<?php
    $token = $_POST['token'];

    $token = strtoupper($token);

    if($token == ''){
        include('ship_tags.php');
        ?>
            <br><center><h3 class='msg_error'>Acceso No Permitido<br>Favor Ingrese un ID de Compra</h3></center>
        <?php
        exit;
    }else{
        include('db.php');

        $query = ("select * from tag_info where token = '" . $token . "'");

        #'A162CAFFCB6897220F4D1CF28164D73CB91993A8'

        $consulta = mysqli_query($conexion, $query);

        $resultado = mysqli_num_rows($consulta);

        if($resultado > 0){
            session_start();

            $datos = mysqli_fetch_array($consulta);

            $_SESSION['token'] = $datos['token'];
            $_SESSION['nombre'] = $datos['nombre'];
            $_SESSION['direccion'] = $datos['direccion'];
            $_SESSION['telefono'] = $datos['telefono'];

            header('location: print_tag.php');

        }else{
            include('ship_tags.php');
            ?>
                <br><center><h3 class='msg_error'>Compra No Encontrada<br>Favor Revise ID de Compra</h3></center>
            <?php
            exit;
        }
    }
?>