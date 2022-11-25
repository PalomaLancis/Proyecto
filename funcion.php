<?php
    function cita($cita){
        $conn = new mysqli("localhost", "root", "", "taller");
        $sql = "SELECT Fecha, Hora FROM citas;";
        $result = $conn -> query($sql);
        
?>