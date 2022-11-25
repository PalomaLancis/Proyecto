<?php
    // conectarse a la base de datos
    $conn = new mysqli("localhost", "root", "", "taller");
    $id = $_REQUEST['Id'];
    $contraseña = $_REQUEST['Contraseña'];
    $delUsuPas = "UPDATE usuarios SET Contraseña = '' WHERE Id=" . $_REQUEST['id'];
    $conn->query($delUsuPas);
    $conn->close();
    Header("Location: admin.php");
?>