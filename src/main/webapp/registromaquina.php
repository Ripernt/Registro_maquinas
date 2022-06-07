<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/Estilos.css">
        <script type="text/javascript" src="./js/registromaquina.js"></script>
    </head>
    <body>
        
        <fieldset>
            <legend>Registro de alumno</legend>
            <form name="frm_registro_maquina" action="MaquinaRegistro" method="post" onsubmit="return validarDatosRM()">
                <div id="indicacion3">
                    <h1>Para registrar la maquina, introduzca los datos que se le piden a continuación, una vez
                        terminado darle click a registrar maquina</h1>
                </div>
                <br>
                <div id="regiscampo2">
                    <label>
                        Introduzca el número de serie
                        <input type="text" id="id" name="Id" size="35" maxlength="35" required>
                    </label> 
                </div>
                <br>
                <div id="regiscampo1">
                    <label>
                        Introduzca la Marca
                        <input type="text" id="marca" name="Marca" size="35" maxlength="35" required>
                    </label>
                </div>
                <br>
                <div id="regiscampo2">
                    <label>
                        Introduzca el Modelo de la maquina
                        <input type="text" id="modelo" name="Modelo" size="35" maxlength="35" required>
                    </label> 
                </div>
                <br>
                <div id="regiscampo3">
                    <label>
                        Introduzca el Laboratorio
                        <input type="text" id="laboratorio" name="Laboratorio" size="35" maxlength="35" required>
                    </label>
                </div>
                <br>
                <div id="botonregistromaq">
                    <input type="submit" value="Registrar maquina" id="Boton16">
                </div>   
            </form>
        </fieldset>
        <br>
        <div id="botonvolvermenu">
            <button onclick="window.location='./inicio.jsp'" id="Boton15">Volver al Menú</button>
        </div>
    </body>
</html>

