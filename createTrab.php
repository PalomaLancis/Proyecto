<?php
    $name = $_REQUEST['Nombre'];
    $apellido = $_REQUEST['Apellido'];
    $email = $_REQUEST['Email'];
    $foto = $_REQUEST['Foto'];
    $especialidad = $_REQUEST['Especialidad'];
    // conectarse a la base de datos
    $conn = new mysqli("localhost", "root", "", "taller");

    $miInsert = "INSERT INTO trabajadores (Nombre, Apellido, Email, Foto, Especialidad) VALUES ('$name', '$apellido', '$email', '$foto', '$especialidad')";
    $conn->query($miInsert);
    $conn->close();
    Header("Location: admin.php");
?>