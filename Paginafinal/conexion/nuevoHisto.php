<?php
    session_start();
    error_reporting(0);
    $_SESSION['producto'] = htmlentities($_POST['ID']);
    $_SESSION['cantidad'] = htmlentities($_POST['cantidad']);
    require './conexionPDO.php';
    $db = new Database();
    $connection = $db->connect();
    
 
    $insertar = $connection->prepare("INSERT INTO historial SELECT NULL,:usuario,Producto,PrecioUnitario,:Cantidad,:PrecioTotal FROM productos WHERE ID= :ID ");
    $resultado = $insertar->execute([
    'ID' => $_SESSION['producto'],
    'usuario' => $_SESSION['usuario'],
    'Cantidad'=>$_SESSION['cantidad'],
    'PrecioTotal'=> $_SESSION['producto']
    ]);
    header("Location: ../higia/historialC.php");