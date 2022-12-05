<?php
    session_start();
    
    if (!empty($_SESSION['usuario']) && !empty($_SESSION['contra'])) {
    }else{
        echo "<h1>Inicia sesión Primero</h1>"."<br>";
        die("<h1><a href='./iniciar.php'>Iniciar</a></h1>");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./detalles/style.css">
    <link rel="stylesheet" href="./detalles/foo.css">
    <title>Higia</title>
</head>
<body id="confi">
    <?php include_once "./Header.php" ?>
            <div class="col-md-6" id="con">
            <a href="editar.php" class="btnn">Editar Perfil</a>   
            </div> <br>
            <div class="col-md-6" id="con">
            <a href="../conexion/eliminar.php" class="btnn">Eliminar Perfi</a> 
            </div> <br> 
            <div class="col-md-6" id="con">
            <a href="Cerrar.php" class="btnn">Cerrar Sesión</a>                
            </div>
    <?php include_once "./footer.php" ?>
</body>
</html>