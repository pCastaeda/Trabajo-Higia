<?php
    session_start();
    require './conexionPDO.php';
    $db = new Database();
    $connection = $db->connect();

    // $id = $_GET['id'];
    $usuario = $_SESSION['usuario'];

    $consulta = $connection->prepare("DELETE FROM registro WHERE usuario=?");
    $result= $consulta->execute([$usuario]);

    if($result){
        header("Location: ../higia/registro.php");
    }else{
        echo "<h2>Error al eliminar</h2>";
    }
?>