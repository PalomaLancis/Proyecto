<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <title>Cita Previa Taller Lancis</title>
        <link href="//www.eurotaller.com/css/app_library.css?v=153" media="all" rel="stylesheet" type="text/css">
        <link href="//www.eurotaller.com/css/app_eurotaller.css?v=153" media="all" rel="stylesheet" type="text/css">
    </head>
    <body class="comprimido  talleres_cita" data-favicon="/img/EuroTaller.ico" style="">
        <form method="POST" action="nuevaCita.php" class="form-horizontal" id="formulario"><input name="_token" type="hidden" value="ZGDkfERsBMnTPYsbaC1GSSZhPLon5188OylT7OJ4">
            <div class="grid-container" style="">
                <div class="grid-x grid-margin-x cita_taller">
                    <div class="small-12 medium-4 large-3 cell quitar-margin-movil">
                        <div class="cnt-info-taller padding_cita" style="width: 100%;">
                        <div class="datos_taller">
                        <img src="imagenes/logo.PNG">
                    </div>
                </div>
            </div>
            <div class="small-offset-1 small-11 large-offset-1 large-8 medium-offset-0 medium-8 cell ">
                <div class="cita">
                    <div class="titulo_cita_taller"><h1>Solicitar cita</h1></div>
                    <div class="form_cita">
                        <div class="grid-x">
                            <div class="small-12 medium-6 form-cita">
                                <label for="fecha">Fecha *</label><input class="form-text required" id="fecha" name="fecha" type="datetime-local" value="<?php if (isset($_SESSION['fecha'])) echo $_SESSION['fecha'];?>">
                            </div>
                            <div class="small-12 medium-6 form-cita">
                                <label for="mecanico">Mecanico *</label><input class="form-text required" id="mecanico" name="mecanico" type="text" value="<?php if (isset($_SESSION['mecanico'])) echo $_SESSION['mecanico'];?>">
                            </div>
                            <div class="small-12 medium-6 form-cita">
                                <label for="comentario">Comentario *</label><input class="form-text required" id="comentario" name="comentario" type="text" value="<?php if (isset($_SESSION['comentario'])) echo $_SESSION['comentario'];?>">
                            </div>
                            <div class="small-12 form-cita">
                                <label for="">Servicio</label>
                                <div class="buscador-servicios grid-x">
                                    <div class="small-6 medium-4 large-3 servicio">
                                        <input type="checkbox" id="pintura" name="servicios[Pintura]" value="true">
                                        <label for="pintura">
                                            <img src="//gestion.eurotaller.com//img/especialidades/pintura.png?v=153"><span>Pintura</span><i class="ion-checkmark"></i>
                                        </label>
                                    </div>
                                    <div class="small-6 medium-4 large-3 servicio">
                                        <input type="checkbox" id="mecanica" name="servicios[Mecánica]" value="true">
                                        <label for="mecanica">
                                            <img src="//gestion.eurotaller.com//img/especialidades/mecanica.png?v=153"><span> Mecánica</span><i class="ion-checkmark"></i>
                                        </label>
                                    </div>
                                    <div class="small-6 medium-4 large-3 servicio">
                                        <input type="checkbox" id="neumaticos" name="servicios[Neumáticos]" value="true">
                                        <label for="neumaticos">
                                            <img src="//gestion.eurotaller.com//img/especialidades/neumaticos.png?v=153"><span> Neumáticos</span><i class="ion-checkmark"></i>
                                        </label>
                                    </div>
                                    <div class="small-6 medium-4 large-3 servicio">
                                        <input type="checkbox" id="electricidad" name="servicios[Electricidad]" value="true">
                                        <label for="electricidad">
                                            <img src="//gestion.eurotaller.com//img/especialidades/electricidad.png?v=153"><span> Electricidad</span><i class="ion-checkmark"></i>
                                        </label>
                                    </div>
                                    <div class="small-6 medium-4 large-3 servicio">
                                        <input type="checkbox" id="chapa" name="servicios[Chapa]" value="true">
                                        <label for="chapa">
                                            <img src="//gestion.eurotaller.com//img/especialidades/chapa.png?v=153"><span> Chapa</span><i class="ion-checkmark"></i>
                                        </label>
                                    </div>
                                    <div class="small-6 medium-4 large-3 servicio">
                                        <input type="checkbox" id="servicio_rapido" name="servicios[Servicio Rápido]" value="true">
                                        <label for="servicio_rapido">
                                            <img src="//gestion.eurotaller.com//img/especialidades/servicio-rapido.png?v=153"><span> Servicio Rápido</span><i class="ion-checkmark"></i>
                                        </label>
                                    </div>
                                    <div class="small-6 medium-4 large-3 servicio">
                                        <input type="checkbox" id="climatizacion" name="servicios[Climatización]" value="true">
                                        <label for="climatizacion">
                                            <img src="//gestion.eurotaller.com//img/especialidades/climatizacion.png?v=153"><span> Climatización</span><i class="ion-checkmark"></i>
                                        </label>
                                    </div>
                                    <div class="small-6 medium-4 large-3 servicio">
                                        <input type="checkbox" id="electronica" name="servicios[Electrónica]" value="true">
                                        <label for="electronica">
                                            <img src="//gestion.eurotaller.com//img/especialidades/electronica.png?v=153"><span> Electrónica</span><i class="ion-checkmark"></i>
                                        </label>
                                    </div>
                                    <div class="small-6 medium-4 large-3 servicio">
                                        <input type="checkbox" id="frenos" name="servicios[Frenos]" value="true">
                                        <label for="frenos">
                                            <img src="//gestion.eurotaller.com//img/especialidades/frenos.png?v=153"><span> Frenos</span><i class="ion-checkmark"></i>
                                        </label>
                                    </div>
                                    <input type="submit" value="Enviar" id="btnSend"/>
                                    <p class="p"><a href='cerrarSesion.php'>Cerrar Sesion</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>