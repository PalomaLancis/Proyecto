<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/09d8ac2723.js" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        .h3{
            text-align: center;
        }
        .div1{
            text-align:center;
        }
        .img{
            width: 400px;
            height: 200px;
        }
        .div{
            padding-left: 35%;
        }
        .pendientes{
            padding-left: 34%;
        }
        .trab{
            padding-left: 23%;
        }
        .agrupadas{
            padding-left: 34.6%;
        }
        .usuarios{
            padding-left: 33%;
        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
        }
        #customers td, #customers th {
            padding: 5px;
        }
        #customers th {
            padding-top: 8px;
            padding-bottom: 8px;
            text-align: left;
            background-color: #C1FCE8;
        }
        .table{
            border-collapse: separate;
            border-spacing: 5px;
            background: #C1FCE8;
        }
        .nav{
            text-align:right;
            padding-right:10px;
        }
        a:link,a:visited,a:active {
            text-decoration:none;
        }
    </style>
    <nav class="nav">
        <a href='cerrarSesion.php'>Cerrar Sesion</a>
    </nav>
    <div class="div1"><img src="imagenes/logo.PNG" class="img"></div>
    <h3 class="h3">Citas pendientes:</h3>
    <?php
        session_start();
        $conn = new mysqli("localhost", "root", "", "taller");
        //mostrar las citas pendientes y permite cancelarlas.
        $sql = "SELECT * FROM citas WHERE Estado = 'Pendiente'";
        $result = $conn -> query($sql);
        echo "<div class='pendientes'>";
            echo "<table border='1' id='customers'>";
                echo "<tr class='table-group-divider'>";
                    echo "<th>Idmecanico</th>";
                    echo "<th>Idusuario</th>";
                    echo "<th>Fecha</th>";
                    echo "<th>Estado</th>";
                    echo "<th>Comentarios</th>";
                    echo "<th></th>";
                echo "</tr>";
                while($row = $result -> fetch_assoc()){
                    echo "<tr>";
                        echo "<td>" .$row['Idmecanico']. "</td>";
                        echo "<td>" .$row['Idusuario']. "</td>";
                        echo "<td>" .$row['Fecha']. "</td>";
                        echo "<td>" .$row['Estado']. "</td>";
                        echo "<td>" .$row['Comentarios']. "</td>";
                        echo "<td><a href='cancelarCitaAdmin.php?id=" . $row['Id'] . "'><i class='fa-solid fa-trash'></i></a></td>";
                    echo "</tr>";
                }
            echo "</table>";
        echo "</div>";
    ?>
    <h3 class="h3">Citas agrupadas pos trabajador:</h3>
    <?php
        //mostrar las citas agrupadas por trabajador.
        $sql = "SELECT * FROM citas ORDER BY idmecanico";
        $result = $conn -> query($sql);
        echo "<div class='agrupadas'>";
            echo "<table border='1' id='customers'>";
                echo "<tr>";
                    echo "<th>Idmecanico</th>";
                    echo "<th>Idusuario</th>";
                    echo "<th>Fecha</th>";
                    echo "<th>Estado</th>";
                    echo "<th>Comentarios</th>";
                echo "</tr>";
                while($row = $result->fetch_assoc()){
                    echo "<tr>";
                        echo "<td>" .$row['Idmecanico']. "</td>";
                        echo "<td>" .$row['Idusuario']. "</td>";
                        echo "<td>" .$row['Fecha']. "</td>";
                        echo "<td>" .$row['Estado']. "</td>";
                        echo "<td>" .$row['Comentarios']. "</td>";
                    echo "</tr>";
                }
            echo "</table>";
        echo "</div>";
    ?>
    <h3 class="h3">Trabajadores:</h3>
    <?php
        //muestra todos los trabajadores y permite crear, borrar y modificar.
        $sql = "SELECT * FROM trabajadores";
        $result = $conn -> query($sql);
        echo "<div class='trab'>";
            echo "<table border='1' id='customers'>";
                echo "<tr>";
                    echo "<th>Nombre</th>";
                    echo "<th>Apellido</th>";
                    echo "<th>Email</th>";
                    echo "<th>Foto</th>";
                    echo "<th>Especialidad</th>";
                    echo "<th></th>";
                    echo "<th></th>";
                echo "</tr>";
                if ($result = $conn->query($sql)){;
                    while($row = $result->fetch_assoc()){
                        if (isset($_REQUEST['Id']) && ($row['Id'] == $_REQUEST['Id'])){
                            echo '<form action="modifyTrab.php" method="POST">';
                                echo '<td><input type="text" name="Nombre" value="'.$row['Nombre'].'"></td>';
                                echo '<td><input type="text" name="Apellido" value="'.$row['Apellido'].'"></td>';
                                echo '<td><input type="text" name="Email" value="'.$row['Email'].'"></td>';
                                echo '<td><input type="text" name="Foto" value="'.$row['Foto'].'"></td>';
                                echo '<td><input type="text" name="Especialidad" value="'.$row['Especialidad'].'"></td>';
                                echo '<td><button type="submit">Save</td>';
                                echo '<input type="hidden" name="id" value="'.$row['Id'].'">';
                            echo '</fom>';
                        }else{
                            echo "<tr>";
                            echo "<td>" .$row['Nombre']. "</td>";
                            echo "<td>" .$row['Apellido']. "</td>";
                            echo "<td>" .$row['Email']. "</td>";
                            echo "<td>" .$row['Foto']. "</td>";
                            echo "<td>" .$row['Especialidad']. "</td>";
                            echo "<td><a href='modifyTrab.php?id=" . $row['Id'] . "'><i class='fa-solid fa-pencil'></i></i></a></td>";
                            echo "<td><a href='delTrab.php?id=" . $row['Id'] . "'><i class='fa-solid fa-trash'></i></a></td>";
                            echo "</tr>";
                        }
                    }
                }
                echo "<tr>";
                    echo "<form action='createTrab.php' method='POST'>";
                        echo "<td><input type='text' name='Nombre'></td>";
                        echo "<td><input type='text' name='Apellido'></td>";
                        echo "<td><input type='email' name='Email'></td>";
                        echo "<td><input type='text' name='Foto'></td>";
                        echo "<td><input type='text' name='Especialidad'></td>";
                        echo "<td><input type='submit' value='+'></td>";
                    echo "</form>";
                echo "</tr>";
            echo "</table>";
        echo "</div>";
    ?>
    <h3 class="h3">Ususarios:</h3>
    <?php
        //muestra todos los usuarios borrar y restaurar la contraseña.
        $sql = "SELECT * FROM usuarios";
        $result = $conn -> query($sql);
        echo "<div class='usuarios'>";
            echo "<table border='1' id='customers'>";
                echo "<tr>";
                    echo "<th>Nombre</th>";
                    echo "<th>Apellido</th>";
                    echo "<th>Email</th>";
                    echo "<th>Contraseña</th>";
                    echo "<th>Direccion</th>";
                    echo "<th></th>";
                    echo "<th></th>";
                echo "</tr>";
                if ($result = $conn->query($sql)){;
                    while($row = $result->fetch_assoc()){
                        if (isset($_REQUEST['Id']) && ($row['Id'] == $_REQUEST['Id'])){
                            echo '<form action="modifyUsuPass.php" method="POST">';
                                echo '<td><input type="text" name="Nombre" value="'.$row['Nombre'].'"></td>';
                                echo '<td><input type="text" name="Apellido" value="'.$row['Apellido'].'"></td>';
                                echo '<td><input type="text" name="Email" value="'.$row['Email'].'"></td>';
                                echo '<td><input type="text" name="Contraseña" value="'.$row['Contraseña'].'"></td>';
                                echo '<td><input type="text" name="street" value="'.$row['Direccion'].'"></td>';
                                echo '<td><button type="submit">Save</td>';
                                echo '<input type="hidden" name="id" value="'.$row['Id'].'">';
                            echo '</fom>';
                        }else{
                            echo "<tr>";
                            echo "<td>" .$row['Nombre']. "</td>";
                            echo "<td>" .$row['Apellido']. "</td>";
                            echo "<td>" .$row['Email']. "</td>";
                            echo "<td>" .$row['Contraseña']. "</td>";
                            echo "<td>" .$row['Direccion']. "</td>";
                            echo "<td><a href='modifyUsuPass.php?id=" . $row['Id'] . "'><i class='fa-solid fa-pencil'></i></i></a></a></td>";
                            echo "<td><a href='delPasUsu.php?id=" . $row['Id'] . "'><i class='fa-solid fa-trash'></i></a></td>";
                            echo "</tr>";
                        }
                    }
                }
            echo "</table>";
        echo "</div>";
        $conn->close();
        session_destroy();
    ?>
</body>
</html>