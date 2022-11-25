<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Mi sitio</title>
    <script src="https://kit.fontawesome.com/09d8ac2723.js" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        .h1{
            text-align:center;
        }
        .p {
            text-align:center;
        }
        .div2{
            padding-left:40%;
        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
        }
        #customers td, #customers th {
            padding: 8px;
        }
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #C1FCE8;
        }
        .nav{
            text-align:left;
            padding-left:10px;
        }
        a:link,a:visited,a:active {
            text-decoration:none;
        }
    </style>
    <nav class="nav">
        <a href='cerrarSesion.php'>Cerrar Sesion</a>
    </nav>
    <?php
        session_start();
        $conn = new mysqli("localhost", "root", "", "taller");
        $sql = "SELECT * FROM trabajadores WHERE Nombre != 'Hanjara';";
        $result = $conn -> query($sql);
    ?>
    <section class="form_wrap">
        <div class="div1"><img src="imagenes/logo.PNG" class="img"></div>
        <form action="nuevaCita.php" method="POST" class="form_contact">
            <h2>Pedir cita</h2>
            <div class="user_info">
                <label for="Fecha">Fecha y hora:</label>
                <input type="datetime-local" name="fecha" value="<?php if (isset($_SESSION['fecha'])) echo $_SESSION['fecha'];?>"><br/>
                <label for="Mecanico">Mecánico</label>
                <select name="mecanico" id="mecanico">
                    <?php
                        while($linea = $result->fetch_assoc()){
                            echo "<option value='".$linea['Id']."'>".$linea['Nombre']."</option>";
                        }
                    ?>
                </select>
                <label for="Comentario">Comentario:</label>
                <input type="text" name="comentario" value="<?php if (isset($_SESSION['comentario'])) echo $_SESSION['comentario'];?>"><br/>
                <input type="submit" value="Enviar" id="btnSend"/>
            </div>
        </form>
    </section>
    <h1 class="h1">Mis citas</h1>
    <?php
        // Compruebo si tenemos session iniciada
        if(isset($_SESSION['logged']) and isset($_SESSION['id'])){
            $id = $_SESSION['id'];
            $sql = "SELECT * FROM citas WHERE Idusuario=$id";
            
            
            $result = $conn -> query($sql);
            echo "<div class='div2'>";
                echo "<table border='1' id='customers'>";
                    echo "<tr>";
                        echo "<th>Fecha</th>";
                        echo "<th>Estado</th>";
                        echo "<th>Comentarios</th>";
                        echo "<th></th>";
                    echo "</tr>";
                    while($row = $result -> fetch_assoc()){
                        echo "<tr>";
                            echo "<td>" .$row['Fecha']. "</td>";
                            echo "<td>" .$row['Estado']. "</td>";
                            echo "<td>" .$row['Comentarios']. "</td>";
                            echo "<td><a href='cancelarCitaUsu.php?id=" . $row['Id'] . "'><i class='fa-solid fa-ban'></i></a></td>";
                        echo "</tr>";
                    }
                echo "</table>";
            echo "</div>";
        }else{
            header("location: login.php");
        }
        
    ?>
</body>
</html>