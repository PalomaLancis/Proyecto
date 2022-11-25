<?php

    session_start();
    // Recogemos los datos que nos envia el usuario
    $nombre = $_REQUEST['nombre'];
    $password = $_REQUEST['password'];

    // Me conecto a la BBDD
    $conn = new mysqli("localhost", "root", "", "taller");
    // Construyo la consulta y ejecuto
    $sql = "SELECT * FROM usuarios WHERE Nombre='$nombre' AND Contraseña='$password'";
    $resultado = $conn->query($sql);

    // Si tengo 1 es que existe el usuario y sino pues no
    if($resultado->num_rows >= 1){
        // el usuario existe
        $_SESSION['logged'] = true;
        $row = $resultado->fetch_assoc();
        $_SESSION['id'] = $row['Id'];
        $_SESSION['nombre'] = $row['Nombre'];
        $_SESSION['apellidos'] = $row['Apellido'];
        $_SESSION['foto'] = $row['Foto'];
        $_SESSION['email'] = $row['Email'];
        $_SESSION['direccion'] = $row['Direccion'];
        //var_dump($_SESSION);
        header("location: usuario.php");
    }else{
        // no existe ese email o no corresponde con esa contraseña
        $_SESSION['error'] = "Login incorrecto.";
        header("location: login.php");
    }
?>