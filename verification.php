<?php
    //Obtener el Token de la ventana anterior
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
        //Token de pruebas que ha sido ingresado en la base:
        //'40C25F6524'
        $consulta = mysqli_query($conexion, $query);
        $resultado = mysqli_num_rows($consulta);
        if($resultado > 0){
            session_start();
            $datos = mysqli_fetch_array($consulta);
            $_SESSION['token'] = $datos['token'];
            $_SESSION['nombre'] = $datos['nombre'];
            $_SESSION['direccion'] = $datos['direccion'];
            $_SESSION['telefono'] = $datos['telefono'];
            
            $query="select * from info_tienda";
            $consulta = mysqli_query($conexion, $query);
            $datos = mysqli_fetch_array($consulta);

            $_SESSION['shop_name'] = $datos['shop_name'];
            $_SESSION['shop_location'] = $datos['shop_location'];
            $_SESSION['shop_phone'] = $datos['shop_phone'];

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