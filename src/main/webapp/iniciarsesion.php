<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="./js/iniciarsesion.js"></script>
        <link rel="stylesheet" href="./css/Estilos.css">
    </head>
    <style>
        h1{
            color: white;
        }
    </style>
    <body>
        <button onclick="window.location='./index.html'" id="Boton7">Inicio</button>
        <fieldset>
            <legend>Iniciar sesión</legend>
        <form name="frm_inicio_sesion" action="Iniciosesion" method="post" onsubmit="return validarDatosIniciarSesion()">
        <div id="instrucciones2">
            <h1>Introduzca su boleta y su contraseña</h1>
        </div>
        <br>
        <div id="campoini">
            <label>
                Boleta
                <input type="text" id="boleta" name="Boleta" size="10" maxlength="10" required>
            </label>
        </div>
        <br>
        <div id="campoini2">
            <label>
                Password
                <input type="password" id="password" name="Password" size="32" maxlength="32" required>
            </label>
        </div>
        <br>
        <div id="iniciarsesionalum">
            <input type="submit" value="Iniciar sesion" id="Boton8">
        </div>
        </form>
            </fieldset>
    </body>
</html>
