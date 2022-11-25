<?php
    // No hago validaciones
    $nombre = $_REQUEST['nombre'];
    $password = $_REQUEST['contra'];

    session_start();
    #$conn = new mysqli("localhost", "root", "", "taller");
    #$sql = "SELECT * FROM usuarios WHERE Nombre='$_REQUEST['name']' AND Contraseña='$_REQUEST['password']';";
    if ($nombre=='paloma' and $password=='123'){
        // estamos logeamos
        $_SESSION['logged'] = true;
        $_SESSION['idUsuario'] = "paloma";
        header("location: admin.php");
    } else {
        //no es correcto
        $_SESSION['error'] = "Login incorrecto.";
        header("location: inicio.php");
    }
?>