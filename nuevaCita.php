<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $daynum = date("N", strtotime($_SESSION['fecha']));
    if($daynum > 5){
        echo "Cerrado";
    } else {
        echo "Abierto";
    }
    if (!isset($_REQUEST['fecha']) or $_REQUEST['fecha']==''){
        $error = 'Fecha y hora incompletas.';
    }else if(!isset($_REQUEST['mecanico']) or $_REQUEST['mecanico']==''){
        $error = 'Mecanico incompleto.';
    }else if(!isset($_REQUEST['comentario']) or $_REQUEST['comentario']==''){
        $error = 'Comentarios incompletos.';
    }


    if (isset($error)){
        $_SESSION['fecha'] = $_REQUEST['fecha'];
        $_SESSION['mecanico'] = $_REQUEST['mecanico'];
        $_SESSION['comentario'] = $_REQUEST['comentario'];
        echo $_SESSION['fecha'];
        echo $_SESSION['mecanico'];
        echo $_SESSION['comentario'];
        echo "No se ha guardado correctamente.";
        echo $error;
        Header("Location: inicio.php");
    }else{
        $fecha = $_REQUEST['fecha'];
        $idMecanico = $_REQUEST['mecanico'];
        $comentarios = $_REQUEST['comentario'];
        $idUsuario = $_SESSION['id'];
        $conn = new mysqli("localhost", "root", "", "taller");
        $miInsert = "INSERT INTO citas (Idusuario,Idmecanico,Fecha,Estado,Comentarios) VALUES ($idUsuario,$idMecanico,'$fecha','Pendiente','$comentarios');";
        echo $miInsert;
        $conn->query($miInsert);
        $conn->close();
        Header("Location: usuario.php");
    }
    ?>
</body>
</html>