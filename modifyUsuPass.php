<?php
    // conectarse a la base de datos
    $conn = new mysqli("localhost", "root", "", "taller");
    $id = $_REQUEST['Id'];
    $contraseña = $_REQUEST['Contraseña'];

    $modUsuPass = "UPDATE usuarios SET Contraseña=123 WHERE Id=" . $_REQUEST['id'];
    $conn -> query($modUsuPass);
    $conn -> close();
    Header("Location: admin.php");
?>