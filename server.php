<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $total = 0;

        //Recupera el valor de la pregunta 1, para así entrar al if y que dependiendo del caso realice la suma de las respuestas en si, segun
        //se el caso
        $pregunta = $_POST['sex1'];

        if($pregunta = 1 ){     //Si contesta si, toma los datos de las preguntas 
            $dos = $_POST['sex2'];
            $tres = $_POST['sex3'];
            $cuatro = $_POST['sex4'];
            $cinco = $_POST['sex5'];
            $seis = $_POST['sex6'];
            $siete = $_POST['sex7'];
            $ocho = $_POST['sex8'];
            $nueve = $_POST['sex9'];
            $diez = $_POST['sex10'];

            $total=$dos+$tres+$cuatro+$cuatro+$seis+$siete+$ocho+$nueve+$diez;

        } else {
            $total = 0;
        }
    
        echo "La puntuación es: $total ";

    ?>
</body>