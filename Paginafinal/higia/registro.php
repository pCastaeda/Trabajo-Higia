<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./detalles/estilo.css">
    <title>Higia</title>
</head>
<body>

<div class="container">
  <div class="row">

      <form action="../conexion/Nuevo.php" class="row g-3 " id="formulario" method="post">
          <div class="col-10">
            <h1 style="text-align: center;" >Registrarse</h1>
          </div>
          <div class="col-10">
              <img src="./img/HigiaLogo.jpg"  id="imagen" alt="" class="rounded">
          </div>

          <div class="col-10 " id="tex">
            <label for="nombre" class="form-label">
              <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
            </label>
          </div>
          
          
          <div class="col-10" id="tex">
            <label for="apellido" class="form-label">
              <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Apellido">
            </label>
          </div>

          <div class="col-10" id="tex">
            <select name="sexo" id="sexo">
            <option disabled  selected value="nada" hidden >Elija su sexo</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            </select>
          </div>

          <div class="col-10" id="tex">
            <label for="usuario" class="form-label">
            <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Nombre usuario">
          </label>
          </div>

          <div class="col-10" id="tex">
            <label for="correo" class="form-label">
              <input type="text" name="correo" class="form-control" id="correo" placeholder="Correo">
            </label>
          </div>

          <div class="col-10" id="tex">
            <label for="contra" class="form-label">
              <input type="password" name="contra" class="form-control" id="contra" placeholder="Contraseña">
            </label>
          </div>

          <div class="col-10 " id="pag">
            <button type="submit" class="btn btn-primary" onclick="this.form.action='./iniciar.php'">Ir a iniciar Sesión</button>
          </div>

          <div class="col-10 " id="pag">
            <button type="submit" class="btn btn-primary" >Registrar</button>
          </div>
          
        </form>
  </div>
</div>
             
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>