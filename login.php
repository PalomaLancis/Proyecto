<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            .div1{
                padding-left: 40%;
            }
            a:link, a:visited, a:active {
                text-decoration:none;
            }
        </style>
        <link href="css/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <div class="div1">
            <img class="mb-4" src="imagenes/logo.PNG" alt="" width="400" height="300">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal">Iniciar sesion</h1>
                <form action="loginValidator.php" method="get">
                    <div class="form-floating">
                        <label for="floatingInput">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Julia" name="nombre">
                    </div>
                    <div class="form-floating">
                        <label for="floatingPassword">Contraseña:</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="checkbox mb-3">
                        <label><input type="checkbox" value="remember-me">Recordarme</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Acceder</button>
                </form>
            </main>
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal">Nuevo usuario</h1>
                <form action="nuevousuario.php" method="POST">
                    <div class="form-floating">
                        <div class="form-floating">
                            <label for="floatingInput">Nombre:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Julia" value="<?php if (isset($_SESSION['name'])) echo $_SESSION['name'];?>">
                        </div>
                        <div class="form-floating">
                            <label for="floatingInput">Apellido:</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Hernandez" value="<?php if (isset($_SESSION['apellido'])) echo $_SESSION['apellido'];?>">
                        </div>
                        <div class="form-floating">
                            <label for="floatingInput">Foto:</label>
                            <input type="file" id="foto" class="form-control" name="foto" value="<?php if (isset($_SESSION['foto'])) echo $_SESSION['foto'];?>"></input>
                        </div>
                        <div class="form-floating">
                            <label for="floatingInput">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email'];?>">
                        </div>
                        <div class="form-floating">
                            <label for="floatingInput">Direccion:</label>
                            <input type="text" class="form-control" name="street" id="street" placeholder="Avenida Pablo Gargallo" value="<?php if (isset($_SESSION['street'])) echo $_SESSION['street'];?>">
                        </div>
                        <div class="form-floating">
                            <label for="floatingPassword">Contraseña:</label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" value="<?php if (isset($_SESSION['pass'])) echo $_SESSION['pass'];?>">
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Crear cuenta</button>
                    </div>
                </form>
            </main>
            <a href="inicio.php" class="a">Volver</a>
        </div>
    </body>
</html>
