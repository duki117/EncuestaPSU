        <?php
        //--------------------------------------------PHP DE CONSUMO DE SUSTANCIAS--------------------------------------------
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
        //--------------------------------------------PHP DE CONSUMO DE SUSTANCIAS--------------------------------------------
?>



<?php
//--------------------------------------------PHP DE SALUD PSICOSOCIAL--------------------------------------------
        //DAVID: Variables de funciones
        $cansancio=$nervioso=$nocalma=$desesperado=$inquieto=$impaciente=$deprimido=$esfuerzo=$animarte=$inutil=0;
        $MalestarPsic=$RiesgSuici=0;    //DAVID: Para guardar el puntaje de Malestar Psicológico
        $violacion= $cuchillo= $pareja= $golpessup= $golpesfam= $famasalt= $famsecuest= $tusecuest= $forzadrogas =0;
        $esperanza= $vencido= $mal= $vida= $tiempo= $futuro= $oscuro= $buenas= $cambio= $experiencias= $desagradable= $deseo= $futuro2= $marcha= $confianza= $absurdo= $satisfaccion= $vago= $epocas= $logro = 0;
        $intento = 0;
        
        function Validar() {
            //DAVID: Se definen las variables para las funciones globales
            global $cansancio,$nervioso,$nocalma,$desesperado,$inquieto,$impaciente,$deprimido,$esfuerzo,$animarte,$inutil,
            $violacion, $cuchillo, $pareja, $golpessup, $golpesfam, $famasalt, $famsecuest, $tusecuest, $forzadrogas,
            $esperanza, $vencido, $mal, $vida, $tiempo, $futuro, $oscuro, $buenas, $cambio, $experiencias, $desagradable, $deseo, $futuro2, $marcha, $confianza, $absurdo, $satisfaccion, $vago, $epocas, $logro,
            $intento;
        
            //DAVID: Primera parte del formulario
            $cansancio = $_POST['01-cansancio'];
            $nervioso = $_POST['02-nervioso'];
            $nocalma = $_POST['03-nocalma'];
            $desesperado = $_POST['04-desesperado'];
            $inquieto = $_POST['05-inquieto'];
            $impaciente = $_POST['06-impaciente'];
            $deprimido = $_POST['07-deprimido'];
            $esfuerzo = $_POST['08-esfuerzo'];
            $animarte = $_POST['09-animarte'];
            $inutil = $_POST['10-inutil'];

            //DAVID: Segunda parte del formulario
            $violacion = $_POST['11-violacion'];
            $cuchillo= $_POST['12-cuchillo'];
            $pareja = $_POST['13-pareja'];
            $golpessup = $_POST['14-golpessup'];
            $golpesfam = $_POST['15-golpesfam'];
            $famasalt= $_POST['16-famasalt'];
            $famsecuest = $_POST['17-famsecuest'];
            $tusecuest= $_POST['18-tusecuest'];
            $forzadrogas = $_POST['19-forzadrogas'];

            //DAVID: Tercera parte del formulario
            $esperanza =$_POST['20-esperanza'];
            $vencido = $_POST['21-vencido'];
            $mal = $_POST['22-mal'];
            $vida = $_POST['23-vida'];
            $tiempo = $_POST['24-tiempo'];
            $futuro = $_POST['25-futuro'];
            $oscuro = $_POST['26-oscuro'];
            $buenas = $_POST['27-buenas'];
            $cambio= $_POST['28-cambio'];
            $experiencias = $_POST['29-experiencias'];
            $desagradable = $_POST['30-desagradable'];
            $deseo = $_POST['31-deseo'];
            $futuro2 = $_POST['32-futuro'];
            $marcha = $_POST['33-marcha'];
            $confianza = $_POST['34-confianza'];
            $absurdo = $_POST['35-absurdo'];
            $satisfaccion = $_POST['36-satisfaccion'];
            $vago = $_POST['37-vago'];
            $epocas = $_POST['38-epocas'];
            $logro = $_POST['39-logro'];

            $intento = $_POST['40-intento'];


        }
        

        //DAVID: Calcular puntajes
        function Puntaje(){
            global $MalestarPsic,$cansancio,$nervioso,$nocalma,$desesperado,$inquieto,$impaciente,$deprimido,$esfuerzo,$animarte,$inutil,
            $RiesgSuici,$esperanza, $vencido, $mal, $vida, $tiempo, $futuro, $oscuro, $buenas, $cambio, $experiencias, $desagradable, $deseo, $futuro2, $marcha, $confianza, $absurdo, $satisfaccion, $vago, $epocas, $logro;
            
            //DAVID: Puntajes de primera parte del formulario
            $MalestarPsic= $cansancio+$nervioso+$nocalma+$desesperado+$inquieto+$impaciente+$deprimido+$esfuerzo+$animarte+$inutil;

            //DAVID: Puntajes de segunda parte del formulario
            $RiesgSuici = $esperanza+ $vencido+ $mal+ $vida+ $tiempo+ $futuro+ $oscuro+ $buenas+ $cambio+ $experiencias+ $desagradable+ $deseo+ $futuro2+ $marcha+ $confianza+ $absurdo+ $satisfaccion+ $vago+ $epocas+ $logro;
        }

        //DAVID: Imprime calculos
        function Imprimir(){
            global $MalestarPsic, $RiesgSuici;

            //DAVID: Para primera parte del formulario
            echo "Puntaje de riesgo en malestar psicológico: $MalestarPsi";
            echo "<br>";
            if($MalestarPsi>29){
                echo "Riesgo muy alto de padecer un trastorno depresivo y/o ansioso se requiere valoración clínica";
                echo "<br>";
            }else if($MalestarPsi>21){
                echo "Riesgo alto de padecer un trastorno depresivo y/o ansioso. ";
                echo "<br>";
            }else if($MalestarPsi>15){
                echo "Riesgo moderado de padecer un trastorno depresivo y/o ansioso, se puede encontrar bajo situaciones estresantes que generen ciertos síntomas de ansiedad y/o ";
                echo "<br>";
            }else{
                echo "Riesgo bajo de padecer un trastorno depresivo y/o ansioso, no presenta un riesgo real de padecer un trastorno de ansiedad y/o depresión";
            }
            echo "<hr>";

            //DAVID: Para tercera parte del formulario
            echo "Puntaje de riesgo suicida: $RiesgSuici";
            echo "<br>";
            if($RiesgSuici>7){
                echo "Usted está en riesgo alto";
                echo "<br>";
            }else if($RiesgSuici>3){
                echo "Usted está en riesgo medio";
                echo "<br>";
            }else{
                echo "Usted está en riesgo medio";
                echo "<br>";
            }
            echo "<hr>";
        }
    
        Validar();
        Puntaje();
        Imprimir();
?>