<?php      
    session_start();
    if(!empty($_POST['usuario']) && !empty($_POST['correo']) && !empty($_POST['contra'])){
        $nombre = htmlentities($_POST['nombre']);
        $apellido = htmlentities($_POST['apellido']);
        $sexo = htmlentities($_POST['sexo']);
        $usuario = htmlentities($_POST['usuario']);
        $correo = htmlentities($_POST['correo']);
        $contra = htmlentities($_POST['contra']);

        require './conexionPDO.php';
        $db = new Database();
        $connection = $db->connect();

        $consulta = "SELECT * FROM registro WHERE usuario='$usuario' OR Correo='$correo'";
        $stmt=$connection->query($consulta);
        $result=$stmt->fetch();

        if(!empty($result)){
            if($result['usuario']==$usuario){
                echo "Nombre de usuario existente";
            }elseif($result['Correo']==$correo){
                echo "Correo existente";
            }
        }else{
                $insertar = $connection->prepare("INSERT INTO registro (Nombre, Apellido, Sexo, usuario, Correo, Contrasena) VALUES (:Nombre, :Apellido, :Sexo, :usuario, :Correo,:Contrasena)");
                $resultado = $insertar->execute([
                'Nombre'=>$nombre,
                'Apellido'=>$apellido,
                'Sexo'=>$sexo,
                'usuario'=>$usuario,
                'Correo'=>$correo,
                'Contrasena'=>$contra]);
                header('Location: ../higia/Inicio.php');
        }
    }else{
        echo "llena las casillas correctamente";
    }
