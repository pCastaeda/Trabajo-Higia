<?php
    session_start();
    $_SESSION['usuario'] = htmlentities($_POST['usuarios']);
    $_SESSION['contra'] = htmlentities($_POST['contra']);
    require "./conexionPDO.php";
    $db = new Database();
    $connection = $db->connect();

    $usuario = htmlentities($_POST['usuarios']);
    $contra = htmlentities($_POST['contra']);
    $consulta = "SELECT Nombre, Apellido, Sexo, usuario, Correo, Contrasena FROM registro WHERE usuario = :usuario OR Correo = :Correo AND Contrasena = :Contrasena";
    $stmt = $connection->prepare($consulta);
    $result  = $stmt->execute(array('usuario' => $usuario, 'Correo' =>$usuario, 'Contrasena' => $contra));
    $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
    if(count($rows)){
        header('Location: ../higia/Inicio.php');
    }else{
        echo"El usuario o contraseña esta erroneas";
    }














