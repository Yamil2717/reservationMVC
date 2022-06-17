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
                <p>Registro</p>
                <form id="RegistroForm" autocomplete="off">
                    <input id="nombre" class="input-control" type="text" placeholder="Ingrese su nombre completo" autocomplete="off" required>
                    <input id="dni" class="input-control" type="tel" placeholder="Dni" autocomplete="off" required>
                    <input id="user" class="input-control" type="text" placeholder="Usuario" autocomplete="off" required>
                    <input id="password" class="input-control" type="password" placeholder="Contraseña" autocomplete="off" required>
                    <input id="repassword" class="input-control" type="password" placeholder="Repita contraseña" autocomplete="off" required>
                    <input type="submit" id="RegistroBotton" value="Registrarse">
                </form>                
            </div>
        </div>
    </body>
    <script src="core/js/jquery.min.js"></script>
    <script src="core/js/jquery.mask.min.js"></script>
    <script src="core/js/main.js"></script>
</html>