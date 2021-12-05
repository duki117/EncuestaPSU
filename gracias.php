<?php
# Necesario para poder cerrar la sesión actual
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style-gracias.css">
    <script>
        //Bloquea el boton de regreso de página
        function nobackbutton(){
            window.location.hash="no-back-button";
            window.location.hash="Again-No-back-button"; //esta linea es necesaria para chrome
            window.onhashchange=function(){window.location.hash="no-back-button";}
        }
    </script>
    <title>EncuestaPSU</title>
</head>
<body onload="nobackbutton()">
    <br><br>
    <div class="container">
        <h1 class="titulo">¡Gracias por contestar la encuesta!</h1>
            <button onclick="window.location.href='./login.php'">ACEPTAR</button>
    </div>    
</body>
</html>

<?php
# Se destruye la sesión actual
    session_destroy();
?>