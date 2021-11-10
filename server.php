
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?php
        //Definicion de variables para el uso de funciones
        $a1=$a2=$a3=$a4=$a5=$a6=$a7=$a8=$a9=$a10=$a11=$a12=$a13=$a14=$a15=$a16=$a17=$a18=$b1=$b2=$b3=$b4=$b5=$b6=$b7=$c1=$c2=$c3=$c4=$c5=$c6=$c7=$d1=$d2=$d3=$d4=$d5=$d6=$d7=$H1=0;
        $tabaco=$alcohol=$cannabis=$otras=$alcohol2=0;

        function Cargar(){
            //Definicion de variables para el uso de las funciones globales
            global $a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,$a15,$a16,$a17,$a18,$b1,$b2,$b3,$b4,$b5,$b6,$b7,$c1,$c2,$c3,$c4,$c5,$c6,$c7,$d1,$d2,$d3,$d4,$d5,$d6,$d7,$H1;
            //asignacion de los datos de la primer pregunta
            $a1 = $_POST['a1'];
            $b1 = $_POST['b1'];
            $c1 = $_POST['c1'];
            $d1 = $_POST['d1'];
            //asignacion de los datos de las preguntas de alcohol
            $a9 = $_POST['a9'];
            $a10 = $_POST['a10'];
            $a11 = $_POST['a11'];
            $a12 = $_POST['a12'];
            $a13 = $_POST['a13'];
            $a14 = $_POST['a14'];
            $a15 = $_POST['a15'];
            $a16 = $_POST['a16'];
            $a17 = $_POST['a17'];
            $a18 = $_POST['a18'];

            //comparacion para la asignacion de los datos de la segunda pregunta (si No se escogio "NO" en todas las partes de la pregunta 1 entra)
            if(($a1+$b1+$c1+$d1)>0){
                $a2 = $_POST['a2'];
                $b2 = $_POST['b2'];
                $c2 = $_POST['c2'];
                $d2 = $_POST['d2'];
                //comparacion para la asignacion de los datos de las preguntas restantes (si No se escogio "NUNCA" en todas las partes de la pregunta 2 entra)
                if(($a2+$b2+$c2+$d2)>0){
                    $a3 = $_POST['a3'];
                    $a4 = $_POST['a4'];
                    $a5 = $_POST['a5'];
                    $a6 = $_POST['a6'];
                    $a7 = $_POST['a7'];
                    $a8 = $_POST['a8'];
        
                    $b3 = $_POST['b3'];
                    $b4 = $_POST['b4'];
                    $b5 = $_POST['b5'];
                    $b6 = $_POST['b6'];
                    $b7 = $_POST['b7'];
        
                    $c3 = $_POST['c3'];
                    $c4 = $_POST['c4'];
                    $c5 = $_POST['c5'];
                    $c6 = $_POST['c6'];
                    $c7 = $_POST['c7'];
        
                    $d3 = $_POST['d3'];
                    $d4 = $_POST['d4'];
                    $d5 = $_POST['d5'];
                    $d6 = $_POST['d6'];
                    $d7 = $_POST['d7'];
                }
            }
        }
        function PrintData(){
            //Funcion meramente de desarrollo: Se usa para verificar que los datos sean correctos.
            //PENDIENTE A ELEIMINAR.
            global $a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,$a15,$a16,$a17,$a18,$b1,$b2,$b3,$b4,$b5,$b6,$b7,$c1,$c2,$c3,$c4,$c5,$c6,$c7,$d1,$d2,$d3,$d4,$d5,$d6,$d7,$H1;
            echo "$a1 <br>";
            echo "$b1 <br>";
            echo "$c1 <br>";
            echo "$d1 <br><br>";
            echo "$a2 <br>";
            echo "$b2 <br>";
            echo "$c2 <br>";
            echo "$d2 <br><br>";
            echo "$a3 <br>";
            echo "$b3 <br>";
            echo "$c3 <br>";
            echo "$d3 <br><br>";
            echo "$a4 <br>";
            echo "$b4 <br>";
            echo "$c4 <br>";
            echo "$d4 <br><br>";
            echo "$a5 <br>";
            echo "$b5 <br>";
            echo "$c5 <br>";
            echo "$d5 <br><br>";
            echo "$a6 <br>";
            echo "$b6 <br>";
            echo "$c6 <br>";
            echo "$d6 <br><br>";
            echo "$a7 <br>";
            echo "$b7 <br>";
            echo "$c7 <br>";
            echo "$d7 <br><br>";
            echo "$a8 <br>";
            echo "$a9 <br>";
            echo "$a10 <br>";
            echo "$a11 <br>";
            echo "$a12 <br>";
            echo "$a13 <br>";
            echo "$a14 <br>";
            echo "$a15 <br>";
            echo "$a16 <br>";
            echo "$a17 <br>";
            echo "$a18 <br>";
        }
        function CalcRiesgo(){
            global $tabaco,$alcohol,$cannabis,$otras,$alcohol2,$a1,$a2,$a3,$a4,$a5,$a6,$a7,$a8,$a9,$a10,$a11,$a12,$a13,$a14,$a15,$a16,$a17,$a18,$b1,$b2,$b3,$b4,$b5,$b6,$b7,$c1,$c2,$c3,$c4,$c5,$c6,$c7,$d1,$d2,$d3,$d4,$d5,$d6,$d7,$H1;
            //Funcion desiganada a calcualar los puntajes de las preguntas.
            $tabaco = $a1+$a2+$a3+$a4+$a5+$a6+$a7;
            $alcohol= $b1+$b2+$b3+$b4+$b5+$b6+$b7;
            $cannabis = $c1+$c2+$c3+$c4+$c5+$c6+$c7;
            $otras = $d1+$d2+$d3+$d4+$d5+$d6+$d7+$a8;
            $alcohol2 = $a9+$a10+$a11+$a12+$a13+$a14+$a15+$a16+$a17+$a18;
        }
        function PrintResult(){
            //Funcion designada a imprimir los mensajes relacionados con el puntaje de cada riesgo.
            global $tabaco,$alcohol,$cannabis,$otras,$alcohol2;
            echo "Puntaje de riesgo en tabaco: $tabaco";
            echo "<br>";
            if($tabaco>26){
                echo "Usted está  en riesgo. Requiere de un tratamiento Intensivo";
                echo "<br>";
            }else if($tabaco>3){
                echo "Su riesgo es moderado. Requiere de un tratamiento breve";
                echo "<br>";
            }else{
                echo "Su riesgo es mínimo. No requiere de ningún  tipo de tratamiento";
                echo "<br>";
            }
            echo "<hr>";

            echo "Puntaje de riesgo en alcohol: $alcohol";
            echo "<br>";
            if($alcohol>26){
                echo "Usted está  en riesgo. Requiere de un tratamiento Intensivo";
                echo "<br>";
            }else if($alcohol>10){
                echo "Su riesgo es moderado. Requiere de un tratamiento breve";
                echo "<br>";
            }else{
                echo "Su riesgo es mínimo. No requiere de ningún  tipo de tratamiento";
                echo "<br>";
            }
            echo "<hr>";

            echo "Puntaje de riesgo en cannabis: $cannabis";
            echo "<br>";
            if($cannabis>26){
                echo "Usted está  en riesgo. Requiere de un tratamiento Intensivo";
                echo "<br>";
            }else if($cannabis>4){
                echo "Su riesgo es moderado. Requiere de un tratamiento breve";
                echo "<br>";
            }else{
                echo "Su riesgo es mínimo. No requiere de ningún  tipo de tratamiento";
                echo "<br>";
            }
            echo "<hr>";

            echo "Puntaje de riesgo en otras drogas: $otras";
            echo "<br>";
            if($otras>26){
                echo "Usted está  en riesgo. Requiere de un tratamiento Intensivo";
                echo "<br>";
            }else{
                echo "Su riesgo es moderado. Requiere de un tratamiento breve";
                echo "<br>";
            }
            echo "<hr>";

            echo "Puntaje Total de riesgo en alcohol: $alcohol2";
            echo "<br>";
            if($alcohol2>14){
                echo "Es muy probable que tengas en Síndrome de Dependencia al Alcohol y necesitas ayuda profesional";
                echo "<br>";
            }else if($alcohol2>12){
                echo "Si es Mujer es muy probable que tengas en Síndrome de Dependencia al Alcohol y necesitas ayuda profesional";
                echo "<br>";
            }else if($alcohol2>7){
                echo "Tu manera de beber puede ser peligrosa o dañina para tu salud";
                echo "<br>";
            }else if($alcohol2>3){
                echo "Comienza a tener problemas con la manera de beber";
                echo "<br>";
            }else{
                echo "Usted es un Bebedor Responsable";
                echo "<br>";
            }
        }    

        //Llamada de funciones.
        Cargar();
        CalcRiesgo();
        PrintResult();
    ?></h3>
    
</body>
</html>