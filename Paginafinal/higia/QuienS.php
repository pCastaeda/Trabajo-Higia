<?php
    session_start();
    
    if (!empty($_SESSION['usuario']) && !empty($_SESSION['contra'])) {
    }else{
        echo "<h1>Inicia sesión Primero</h1>"."<br>";
        die("<h1><a href='./iniciar.php'>Iniciar</a></h1>");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./detalles/Quien.css">
    <title>Higia</title>
</head>
<body id="quien">
    <?php include_once "./Header.php" ?>
    <div class="container">
        <div class="row">
            <h1>¿Quienes somos?</h1>
            <div class="col-sm-12 col-md-6">
                <video autoplay controls src="./video/hola.mp4" width="400" height="400"></video>
            </div>

            <div class="col-sm-12 col-md-6">
                <img   src="./img/vale.jpg" alt="" width="400" height="500">
                <p >🌱Marca colombiana, consciente, ecológica, natural, diversa y libre de crueldad🐾. ✨Al por mayor y detal. </p>
            </div>

        </div>
    </div>
    <?php include_once "./footer.php" ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js " integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3 " crossorigin="anonymous "></script>

</body>
</html>