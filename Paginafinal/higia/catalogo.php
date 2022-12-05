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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./detalles/style.css">
    <link rel="stylesheet" href="./detalles/catalogo.css">
    <title>Higia</title>
</head>
<body id="catalogo">
    <?php include_once "./Header.php" ?>

    <section class="detalles" id="detalles">
    <h1 class="heading">Catalogo</h1>
    <div class="caja-contenedor">
          <div class="caja">
               <img src="./img/cepillos.jpg" alt="">
               <h3>Cepiilo Natural</h3>
               <p>Cepillos ecológicos de bambú. <br>
                    Libres de crueldad animal. <br>
                    Compostables. <br>
                    Biodegradables. <br>
                    Antibacterianos. <br>
                    Textura suave. <br>
                    Tiempo de vitalidad 5 veces mayor a un cepillo tradicional.</p>
        
               <a href="#" class="btnn">$8000 COP</a>
               <a href="#" class="btnn">ID: 1</a>
               <a href="./compras.php" class="btnn">Comprar</a>
          </div>

        <div class="caja" >
             <img src="img/producto2.avif" alt="">
             <h3>Jabón de moringa</h3>
             <p>Suaviza, hidrata la piel seca y mantiene la humedad. <br> Ayuda a mejorar la apariencia de las arrugas y previene la flacidez de los músculos faciales. <br>
               Contiene vitamina C, estabiliza el colágeno y reduce las líneas de expresión.</p>
        
          <a href="#" class="btnn">$12000 COP</a> 
          <a href="#" class="btnn">ID: 2</a>
          <a href="./compras.php" class="btnn">Comprar</a> 
        </div>

        <div class="caja">
             <img src="img/producto3.avif" alt="">
             <h3>Aceite de argán con vitamina E.</h3>
             <p> Beneficios para el cabello:
               <br>
               • Repara <br>
               • Nutre <br>
               • Fortalece <br>
               • Suaviza <br>
               • Aporta brillo <br>
               • Sella la cutícula <br>
               • Controla el frizz y encrespamiento.</p>
        
             <a href="#" class="btnn">$10000 COP</a> 
             <a href="#" class="btnn">ID: 3</a>
             <a href="./compras.php" class="btnn">Comprar</a>
        </div>

        <div class="caja">
             <img src="./img/Kit.jpg" alt="">
             <h3>Kit de Cabello</h3>
             <p>Dale brillo a tu pelo, con este kit lo dejarás reluciente y sin friz</p>
        
             <a href="#" class="btnn">12000 COP</a> 
             <a href="#" class="btnn">ID: 4</a>
             <a href="./compras.php" class="btnn">Comprar</a>
        </div>

        <div class="caja">
             <img src="./img/exfoliante.jpg" alt="">
             <h3>Exfoliante de arroz</h3>
             <p>Nuevo exfoliante facial de arroz. <br>
               Ideal para TODO tipo de piel. <br>
               Enriquecido con extracto de avena, miel de abejas, caléndula y colágeno. <br>
               Cremoso, nutritivo, suavizante y calmante. <br>
               Elimina restos de maquillaje, sebo, impurezas, remueve células muertas, activa la circulación, regenera y disminuye imperfecciones</p>
              
          
             <a href="#" class="btnn">23000 COP</a> 
             <a href="#" class="btnn">ID: 5</a>
             <a href="./compras.php" class="btnn">Comprar</a>
             
        </div>

        <div class="caja">
             <img src="./img/cuticula.jpg" alt="">
             <h3>Hidratante de cutícula</h3>
             <p>Una de las razones principales por las cuales no se goza de una uña larga y fuerte, es la resequedad de la cutícula. <br>
               La cutícula es la protección de la uña, el marco que la envuelve y evita la propagación del hongo, que las infecciones pasen.</p>
                    
             <a href="#" class="btnn">15000 COP</a>
             <a href="#" class="btnn">ID: 6</a>
             <a href="./compras.php" class="btnn">Comprar</a>
        </div>
    </div>

    </section>

    <?php include_once "./footer.php" ?>

</body>
</html>