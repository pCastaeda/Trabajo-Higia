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
    <title>Higia</title>
</head>
<body>
    <?php include_once "./Header.php" ?>
    
            <section class="inicioo" id="inicioo">
                <div class="contentt">
                    <h3>MONSTER ABC <span>Natural</span></h3>
                    <p>Jabones Higia protege tu dulce piel de esos residuos de piel muerta que a diario la cara genera. Sirve para todo tipo de piel. Higía se encarga de absorber los aceites que salen por nuestros poros.Por lo tanto es muy adecuado para aquellas personas que padezcan acné.
                    </p>
                    <a href="" class="btnn">Mas detalles</a>
                </div>
                <div class="imagee">
                    <img src="img/producto4.avif" alt="">
                </div>
            </section>
    
    <?php include_once "./footer.php" ?>

</body>
</html>