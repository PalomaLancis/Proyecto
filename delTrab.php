<?php
    // conectarse a la base de datos
    $conn = new mysqli("localhost", "root", "", "taller");
    // ejecutar Delete
    $delTrab = "DELETE FROM trabajadores WHERE Id =" . $_REQUEST['id'];
    $conn->query($delTrab);
    $conn->close();
    Header("Location: admin.php");
?>