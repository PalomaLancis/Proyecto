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
    }else if(!isset($_REQUEST['fileToUpload']) or $_REQUEST['fileToUpload']==''){
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
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fichero_subido = "imagenes/" . basename($_FILES["fileToUpload"]["name"]);

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $fichero_subido)) {
            echo '<p>Se subió perfectamente a la ruta: '. $fichero_subido .'</p>';
            echo '<p><img width="500" src="' . $fichero_subido . '"></p>';
            echo "muestro el resto de campos que me envian";
            var_dump($_REQUEST);
        } else {
            echo '<p>¡Ups! Algo ha pasado.</p>';
        }
    }

    if (isset($error)){
        $_SESSION['name'] = $_REQUEST['name'];
        $_SESSION['apellido'] = $_REQUEST['apellido'];
        $_SESSION['fileToUpload'] = $_REQUEST['fileToUpload'];
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['street'] = $_REQUEST['street'];
        $_SESSION['pass'] = $_REQUEST['pass'];
        $_SESSION['error'] = $error;
        echo "No se ha guardado correctamente.";
        Header("Location: inicio.php");
    }else{
        $nombre = $_REQUEST['name'];
        $apellido = $_REQUEST['apellido'];
        $foto = $_REQUEST['fileToUpload'];
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