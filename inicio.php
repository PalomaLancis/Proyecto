<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto</title>
</head>
<body>
    <style>
        .div1{
            text-align:center;
        }
        .img{
            width: 500px;
            height: 265px;
        }
        .div{
            padding-left: 40%;
        }
        .table{
            border-collapse: separate;
            border-spacing: 5px;
            background: #E0F8F7;
        }
        .pie{
            text-align: center;
            background-color: lightblue;
            position: absolute;
            bottom: 0;
            width: 99%;
        }
        a:link, a:visited, a:active {
            text-decoration:none;
        }
        .imagen{
            width: 475px;
            height: 260px;
        }
        .nav{
            text-align:right;
        }
    </style>
    <nav class="nav" style="background-color: #e3f2fd;">
        <a href="loginAdmin.php">Administrador</a> |
        <a href='login.php'>Acceder</a>
    </nav>
    <div class="div1">
        <img src="imagenes/logo.PNG" class="img">
        <h2>Bienvenido a Taller Lancis</h2>
        <div class="div">
            <table class="table">
                <tr>
                    <td>EMAIL</td>
                    <td>erwinlatorresanchez@gmail.com</td>
                </tr>
                <tr>
                    <td>TELÉFONO</td>
                    <td>976811984</td>
                </tr>
                <tr>
                    <td>HORARIO</td>
                    <td>Lunes-Viernes 09:00-13:00 16:00-18:00</td>
                </tr>
                <tr>
                    <td>CITA PREVIA</td>
                    <td>Sí</td>
                </tr>
            </table>
        </div></br>
        <img src="imagenes/taller2.png" class="imagen">
        <h4>Ofrecemos los siguiente servicios:</h4>
        <ul class="ul">
            <abbr title="Pintura"><img src="imagenes/pintura.png?v=153"></abbr>
            <abbr title="Mecánica"><img src="imagenes/mecanica.png?v=153"></abbr>
            <abbr title="Neumáticos"><img src="imagenes/neumaticos.png?v=153"></abbr>
            <abbr title="Electricidad"><img src="imagenes/electricidad.png?v=153"></abbr>
            <abbr title="Chapa"><img src="imagenes/chapa.png?v=153"></abbr>
            <abbr title="Servicio Rápido"><img src="imagenes/servicio-rapido.png?v=153"></abbr>
            <abbr title="Climatización"><img src="imagenes/climatizacion.png?v=153"></abbr>
            <abbr title="Electrónica"><img src="imagenes/electronica.png?v=153"></abbr>
            <abbr title="Frenos"><img src="imagenes/frenos.png?v=153"></abbr>
            <abbr title="Diagnostico"><img src="imagenes/diagnostico.png?v=153"></abbr>
        </ul>
    </div>
    <?php
        session_start();
        if (isset($_SESSION['logged']) and isset($_SESSION['Idusuario'])){
            echo "<p><a href='usuario.php'>".$_SESSION['idUsuario']."</a></p>";
            echo "<p><a href='cerrarSesion.php'>Cerrar Sesion</a></p>";
        }
    ?>
    <footer class="pie">
    <p>Puedes encontrarnos en el polígono La Cuesta de la Almunia de Doña Godina, Calle Castilla y León.</p>
    </footer>
</body>
</html>