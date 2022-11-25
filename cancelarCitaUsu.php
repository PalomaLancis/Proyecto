<?php
    // conectarse a la base de datos
    $conn = new mysqli("localhost", "root", "", "taller");

    $deleteCita = "DELETE FROM citas WHERE Id =" . $_REQUEST['id'];
    $conn->query($deleteCita);
    $conn->close();
    Header("Location: usuario.php");
?>