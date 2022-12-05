<?php
    session_start();
    error_reporting(0);
    if (!empty($_SESSION['usuario']) && !empty($_SESSION['contra'])) {
    }else{
        echo "<h1>Inicia sesión Primero</h1>"."<br>";
        die("<h1><a href='./iniciar.php'>Iniciar</a></h1>");
    }

    require '../conexion/conexionPDO.php';

    $db = new Database();
    $connection = $db->connect();

    $query=$connection->prepare("SELECT * FROM historial WHERE usuario=:usuario");
    $query->execute(['usuario'=>$_SESSION['usuario']]);
    $historial=$query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./detalles/historia.css">
    <title>Higia</title>
</head>
<body id="historial">
    <?php include_once "./Header.php" ?>
    <table>
        <thead>
            <tr>
                <td>ID compra</td>
                <td>Producto</td>
                <td>Precio Unitario</td>
                <td>Cantidad</td>
                <td>Precio Total</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($historial as $key=>$Compras){ ?>
                <tr>
                    <td><?php echo $key+1;?></td>
                    <td><?php echo $Compras["Producto"];?></td>
                    <td><?php echo number_format($Compras["PrecioUnitario"]);?></td>
                    <td><?php echo $Compras['Cantidad'];?></td>
                    <td><?php echo number_format($Compras["PrecioUnitario"]*$Compras["Cantidad"]);?></td> 
                </tr> 
        <?php } ?>  
        </tbody>
    </table>
    <?php include_once "./footer.php" ?>
</body>
</html>