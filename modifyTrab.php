<?php
    // conectarse a la base de datos
    $conn = new mysqli("localhost", "root", "", "taller");
    $id = $_REQUEST['Id'];
    $name = $_REQUEST['Nombre'];
    $apellido = $_REQUEST['Apellido'];
    $email = $_REQUEST['Email'];
    $foto = $_REQUEST['Foto'];
    $especialidad = $_REQUEST['Especialidad'];

    $modTrab = "UPDATE trabajadores SET Nombre='$name', Apellido='$apellido', Email='$email', Foto='$foto', Especialidad='$especialidad' WHERE Id='$id';";
    $conn -> query($modTrab);
    $conn -> close();
    Header("Location: admin.php");
?>