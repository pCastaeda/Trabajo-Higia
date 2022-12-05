<?php
    session_start();
    
    if (!empty($_SESSION['usuario']) && !empty($_SESSION['contra'])) {
    }else{
        echo "<h1>Inicia sesión Primero</h1>"."<br>";
        die("<h1><a href='./iniciar.php'>Iniciar</a></h1>");
    }

    require '../conexion/conexionPDO.php';
    $db = new Database();
    $connection = $db->connect();

    // $id = $_GET["id"];

    $consulta = $connection->prepare("SELECT * FROM registro WHERE usuario=:usuario");
    $consulta->execute(['usuario'=>$_SESSION['usuario']]);
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./detalles/editar.css">
    <title>Higia</title>
</head>
<body>
<div class="container">
  <div class="row">
            <form action="../conexion/editar.php" method="post" id="edita">
                <h3>Editar Perfil</h3>
                <div class="col-10" class="edi">
                    <label for="id">
                    <input type="text" name="id" id="id" hidden value="<?php echo $resultado['ID'];?>" ></label>
                </div> <br>

                <div class="col-10" class="edi">
                    <label for="nombre">Nombre <br>
                    <input type="text" name="nombre" id="nombre" value="<?php echo $resultado['Nombre'];?>"></label>
                </div> 

                <div class="col-10"class="edi">
                    <label for="apellido">Apellido <br>
                    <input type="text" name="apellido" id="apellido" value="<?php echo $resultado['Apellido'];?>"></label> 
                </div> 

                <div class="col-10" class="edi">
                    <label for="sexo">Sexo <br>
                    <input type="text" name="sexo" id="sexo" value="<?php echo $resultado['Sexo'];?>"></label> 
                </div> 

                <div class="col-10" class="edi">
                    <label for="correo">Correo <br>
                    <input type="text" name="correo" id="correo" value="<?php echo $resultado['Correo'];?>"></label> 
                </div>

                <div class="col-10" class="edi">
                    <label for="contra">Contraseña <br>
                    <input type="password" name="contra" id="contra" value="<?php echo $resultado['Contrasena'];?>"></label> 
                </div> 

                <div class="col-10" class="edi">
                <label for="usuario">
                <input type="text" name="usuario" id="usuario" hidden value="<?php echo $resultado['usuario'];?>"></label>
                </div> 

                <div class="col-10" id="editb">
                    <button type="submit">Editar</button> 
                </div> <br>

                <div class="col-10" id="editb">
                <button><a href="./configuracion.php" >Regresar</a></button>
                </div>
            </form>

    </div>
</div>    
</body>
</html>