<?php
    session_start();
        require './conexionPDO.php';
        $db = new Database();
        $connection = $db->connect();

    if(isset($_POST['usuario'])){
        $id = htmlentities($_POST['id']);
        $nombre = htmlentities($_POST['nombre']);
        $apelildo = htmlentities($_POST['apellido']);
        $sexo = htmlentities($_POST['sexo']);
        $usuario = htmlentities($_POST['usuario']);
        $correo = htmlentities($_POST['correo']);
        $contra = htmlentities($_POST['contra']);

        $query = $connection->prepare("UPDATE registro SET id=:id, Nombre=:Nombre, Apellido=:Apellido, Sexo=:Sexo, usuario=:usuario, Correo=:Correo, Contrasena=:Contrasena WHERE usuario=:usuario");
        $resultado = $query->execute(['id'=>$id,
        'Nombre'=>$nombre,
        'Apellido'=>$apelildo,
        'Sexo'=>$sexo,
        'usuario'=>$usuario,
        'Correo'=>$correo,
        'Contrasena'=>$contra]);
            if($resultado === FALSE){
            }else{
                header("Location: ../higia/configuracion.php");
            }
    }