<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="core/css/index.css">
</head>
    <body>
        <div class="Content">
            <div id="LogFormTitle">
                <img id="logotipo" src="core/src/images/logotipo.png" alt="logotipo">
                <p>Bienvenido a la plataforma de la Americana que te permite Reversar tu computadora.</p>
                <form autocomplete="off">
                    <input id="usr" type="text" autocomplete="off" placeholder="Ingrese su usuario">
                    <input id="contra" type="password" autocomplete="off" placeholder="Ingrese su contraseña">
                    <button type="submit" id="LoginBotton">Ingresar</button>
                </form>
                <div id="message"></div>
                <div>
                    <a href="registro.php" id="RegisterBotton">Registrarse</a>
                </div>
            </div>
        </div>
    </body>
    <script src="core/js/jquery.min.js"></script>
    <script src="core/js/jquery.mask.min.js"></script>
    <script src="core/js/main.js"></script>
</html>