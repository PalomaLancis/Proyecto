<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    if (!isset($_REQUEST['name']) or $_REQUEST['name']==''){
        $error = 'Nombre incompleto.';
    }else if (!isset($_REQUEST['apellido']) or $_REQUEST['apellido']==''){
        $error = 'Apellido incompleto.';
    }else if(!isset($_REQUEST['foto']) or $_REQUEST['foto']==''){
        $error = 'Foto incompleta.';
    }else if(!isset($_REQUEST['email']) or $_REQUEST['email']==''){
        $error = 'Email incompleto.';
    }else if(!filter_var( $_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
        $error = 'Email debe ser un email.';
    }else if(!isset($_REQUEST['street']) or $_REQUEST['street']==''){
        $error = 'Direccion incompleta.';
    }else if(!isset($_REQUEST['pass']) or $_REQUEST['pass']==''){
        $error = 'Contraseña incompleta.';
    }

    if (isset($error)){
        $_SESSION['name'] = $_REQUEST['name'];
        $_SESSION['apellido'] = $_REQUEST['apellido'];
        $_SESSION['foto'] = $_REQUEST['foto'];
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['street'] = $_REQUEST['street'];
        $_SESSION['pass'] = $_REQUEST['pass'];
        $_SESSION['error'] = $error;
        echo "No se ha guardado correctamente.";
        Header("Location: inicio.php");
    }else{
        $nombre = $_REQUEST['name'];
        $apellido = $_REQUEST['apellido'];
        $foto = $_REQUEST['foto'];
        $email = $_REQUEST['email'];
        $street = $_REQUEST['street'];
        $pass = $_REQUEST['pass'];

        $conn = new mysqli("localhost", "root", "", "taller");
        $miInsert = "INSERT INTO usuarios (Nombre, Apellido, Foto, Email, Contraseña, Direccion) VALUES ('$nombre','$apellido','$foto','$email','$pass','$street')";
        $conn->query($miInsert);
        $conn->close();
        Header("Location: usuario.php");
    }
    ?>
</body>
</html>