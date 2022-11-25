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
        </style>
        <link href="css/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <div class="div1">
            <img class="mb-4" src="imagenes/logo.PNG" alt="" width="400" height="300">
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-normal">Iniciar sesion</h1>
                <form action="logValAdmin.php" method="get">
                    <div class="form-floating">
                        <label for="floatingInput">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Julia">
                    </div>
                    <div class="form-floating">
                        <label for="floatingPassword">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="contra" placeholder="Password">
                    </div>
                    <div class="checkbox mb-3">
                        <label><input type="checkbox" value="remember-me">Recordarme</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Acceder</button>
                </form>
            </main>
            <a href="inicio.php">Volver</a>
        </div>
    </body>
</html>