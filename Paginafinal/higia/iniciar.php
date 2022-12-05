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
      <form action="../conexion/iniciar.php" id="registro" method="post">
            <h1>Iniciar sesión</h1>
          <div class="ps-5 pt-5">
              <img src="./img/HigiaLogo.jpg"  id="image" alt="" class="rounded">
          </div> <br>

          <div class="col-10" id="mac">
            <label for="usuarios" class="form-label">
              <input type="text" name="usuarios" class="form-control" id="usuarios" placeholder="Usuario o Correo">
            </label>
          </div> <br>

          <div class="col-10" id="mac">
            <label for="contra" class="form-label">
              <input type="password" name="contra" class="form-control" id="contra" placeholder="Contraseña">
            </label>
          </div> <br>

          <div class="col-10" id="butt">
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
          </div> <br>

          <div class="col-10" id="but">
            <button type="submit" class="btn btn-primary" onclick="this.form.action='./registro.php'">Registrarme</button>
          </div> <br>

        </form>
  </div>
</div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>