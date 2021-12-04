<?php
//UTILIZAMOS EL ID DE LA SESION PARA MANDARLA A LA TABLA
if(!isset($_SESSION)){ 
    session_start(); 
} 
$idpsu = $_SESSION["id"];
//INCLUIMOS LA CONEXION A LA BASE DE DATOS
include("con_db.php");
//VERIFICAMOS QUE SE HAYA DADO CLIC EN EL BOTON DE GUARDAR DE LA SECCIÓN DE SALUD FISICA
if(isset($_POST['consumoSustancias'])){
    //COMPROBAMOS QUE TODAS LAS RESPUESTAS ESTEN CONTESTADAS
    if(isset($_POST['cs-a1']) &&
    isset($_POST['cs-b1']) &&
    isset($_POST['cs-c1']) &&
    isset($_POST['cs-d1']) &&
    isset($_POST['cs-a9']) &&
    isset($_POST['cs-a10']) &&
    isset($_POST['cs-a11']) &&
    isset($_POST['cs-a12']) &&
    isset($_POST['cs-a13']) &&
    isset($_POST['cs-a14']) &&
    isset($_POST['cs-a15']) &&
    isset($_POST['cs-a16']) &&
    isset($_POST['cs-a17']) &&
    isset($_POST['cs-a18'])){

        $pass01=$pass02=FALSE;
        $noIsset01=$noIsset02=TRUE;
        //ASIGNAMOS VARIABLES A LAS RESPUESTAS QUITANDO ESPACIOS CON TRIM
        //asignacion de los datos de la primer pregunta
        $a1 = $_POST['cs-a1'];
        $b1 = $_POST['cs-b1'];
        $c1 = $_POST['cs-c1'];
        $d1 = $_POST['cs-d1'];

        //comparacion para la asignacion de los datos de la segunda pregunta (si No se escogio "NO" en todas las partes de la pregunta 1 entra)
        if(($a1+$b1+$c1+$d1)>0){
            $pass01=TRUE;
            if(isset($_POST['cs-a2']) && isset($_POST['cs-b2']) && 
            isset($_POST['cs-c2']) && isset($_POST['cs-d2'])){
                $a2 = $_POST['cs-a2'];
                $b2 = $_POST['cs-b2'];
                $c2 = $_POST['cs-c2'];
                $d2 = $_POST['cs-d2'];
                //comparacion para la asignacion de los datos de las preguntas restantes (si No se escogio "NUNCA" en todas las partes de la pregunta 2 entra)
                if(($a2+$b2+$c2+$d2)>0){
                    if(isset($_POST['cs-a3']) &&
                    isset($_POST['cs-b3']) &&
                    isset($_POST['cs-c3']) &&
                    isset($_POST['cs-d3']) &&
                    isset($_POST['cs-a4']) &&
                    isset($_POST['cs-b4']) &&
                    isset($_POST['cs-c4']) &&
                    isset($_POST['cs-d4']) &&
                    isset($_POST['cs-a5']) &&
                    isset($_POST['cs-b5']) &&
                    isset($_POST['cs-c5']) &&
                    isset($_POST['cs-d5']) &&
                    isset($_POST['cs-a6']) &&
                    isset($_POST['cs-b6']) &&
                    isset($_POST['cs-c6']) &&
                    isset($_POST['cs-d6']) &&
                    isset($_POST['cs-a7']) &&
                    isset($_POST['cs-b7']) &&
                    isset($_POST['cs-c7']) &&
                    isset($_POST['cs-d7']) &&
                    isset($_POST['cs-a8'])){
                        
                        $a3 = $_POST['cs-a3'];
                        $a4 = $_POST['cs-a4'];
                        $a5 = $_POST['cs-a5'];
                        $a6 = $_POST['cs-a6'];
                        $a7 = $_POST['cs-a7'];
                        $a8 = $_POST['cs-a8'];
            
                        $b3 = $_POST['cs-b3'];
                        $b4 = $_POST['cs-b4'];
                        $b5 = $_POST['cs-b5'];
                        $b6 = $_POST['cs-b6'];
                        $b7 = $_POST['cs-b7'];
            
                        $c3 = $_POST['cs-c3'];
                        $c4 = $_POST['cs-c4'];
                        $c5 = $_POST['cs-c5'];
                        $c6 = $_POST['cs-c6'];
                        $c7 = $_POST['cs-c7'];
            
                        $d3 = $_POST['cs-d3'];
                        $d4 = $_POST['cs-d4'];
                        $d5 = $_POST['cs-d5'];
                        $d6 = $_POST['cs-d6'];
                        $d7 = $_POST['cs-d7'];
                        $pass02=TRUE;
                    }else{
                        $noIsset02=FALSE;
                    }
                }
            }else{
                $noIsset01=FALSE;
            }
        }
         
        if($noIsset01&&$noIsset02){
            //REALIZAMOS LAS CONSULTAS CORRESPONDIENTES A LA TABLA DE RESPUESTAS
            $consulta1 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a1')";
            $consulta2 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$b1')";
            $consulta3 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$c1')";
            $consulta4 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$d1')";

            
            //CREAMOS UNA CONEXION 
            $rest1 = mysqli_query($conex,$consulta1);
            $rest2 = mysqli_query($conex,$consulta2);
            $rest3 = mysqli_query($conex,$consulta3);
            $rest4 = mysqli_query($conex,$consulta4);

            //COMPROBAMOS SI SE GUARDARAN LAS PREGUNTAS O ESTARAN OCULTAS
            if($pass01){
                $consulta5 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a2')";
                $consulta6 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$b2')";
                $consulta7 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$c2')";
                $consulta8 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$d2')";
                
                //CREAMOS UNA CONEXION 
                $rest5 = mysqli_query($conex,$consulta5);
                $rest6 = mysqli_query($conex,$consulta6);
                $rest7 = mysqli_query($conex,$consulta7);
                $rest8 = mysqli_query($conex,$consulta8);

                
                //COMPROBAMOS SI SE GUARDARAN LAS PREGUNTAS O ESTARAN OCULTAS
                if($pass02){
                    $consulta9 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a3')";
                    $consulta10 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$b3')";
                    $consulta11 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$c3')";
                    $consulta12 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$d3')";
                    $consulta13 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a4')";
                    $consulta14 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$b4')";
                    $consulta15 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$c4')";
                    $consulta16 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$d4')";
                    $consulta17 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a5')";
                    $consulta18 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$b5')";
                    $consulta19 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$c5')";
                    $consulta20 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$d5')";
                    $consulta21 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a6')";
                    $consulta22 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$b6')";
                    $consulta23 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$c6')";
                    $consulta24 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$d6')";
                    $consulta25 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a7')";
                    $consulta26 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$b7')";
                    $consulta27 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$c7')";
                    $consulta28 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$d7')";
                    $consulta29 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a8')";
                    
                    //CREAMOS UNA CONEXION 
                    $rest9 = mysqli_query($conex,$consulta9);
                    $rest10 = mysqli_query($conex,$consulta10);
                    $rest11 = mysqli_query($conex,$consulta11);
                    $rest12 = mysqli_query($conex,$consulta12);
                    $rest13 = mysqli_query($conex,$consulta13);
                    $rest14 = mysqli_query($conex,$consulta14);
                    $rest15 = mysqli_query($conex,$consulta15);
                    $rest16 = mysqli_query($conex,$consulta16);
                    $rest17 = mysqli_query($conex,$consulta17);
                    $rest18 = mysqli_query($conex,$consulta18);
                    $rest19 = mysqli_query($conex,$consulta19);
                    $rest20 = mysqli_query($conex,$consulta20);
                    $rest21 = mysqli_query($conex,$consulta21);
                    $rest22 = mysqli_query($conex,$consulta22);
                    $rest23 = mysqli_query($conex,$consulta23);
                    $rest24 = mysqli_query($conex,$consulta24);
                    $rest25 = mysqli_query($conex,$consulta25);
                    $rest26 = mysqli_query($conex,$consulta26);
                    $rest27 = mysqli_query($conex,$consulta27);
                    $rest28 = mysqli_query($conex,$consulta28);
                    $rest29 = mysqli_query($conex,$consulta29);
                }
            }
            
            //asignacion de los datos de las preguntas de alcohol
            $a9 = $_POST['cs-a9'];
            $a10 = $_POST['cs-a10'];
            $a11 = $_POST['cs-a11'];
            $a12 = $_POST['cs-a12'];
            $a13 = $_POST['cs-a13'];
            $a14 = $_POST['cs-a14'];
            $a15 = $_POST['cs-a15'];
            $a16 = $_POST['cs-a16'];
            $a17 = $_POST['cs-a17'];
            $a18 = $_POST['cs-a18'];

            $consulta30 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a9')";
            $consulta31 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a10')";
            $consulta32 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a11')";
            $consulta33 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a12')";
            $consulta34 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a13')";
            $consulta35 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a14')";
            $consulta36 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a15')";
            $consulta37 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a16')";
            $consulta38 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a17')";
            $consulta39 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('cs-1', '$idpsu', '$a18')";

            $rest30 = mysqli_query($conex,$consulta30);
            $rest31 = mysqli_query($conex,$consulta31);
            $rest32 = mysqli_query($conex,$consulta32);
            $rest33 = mysqli_query($conex,$consulta33);
            $rest34 = mysqli_query($conex,$consulta34);
            $rest35 = mysqli_query($conex,$consulta35);
            $rest36 = mysqli_query($conex,$consulta36);
            $rest37 = mysqli_query($conex,$consulta37);
            $rest38 = mysqli_query($conex,$consulta38);
            $rest39 = mysqli_query($conex,$consulta39);
            
            //ESTA PARTE SERA PARA OCULTAR LA SECCION CUANDO SE HAGA TODO CORRECTAMENTE
            if($rest1 && $rest2 && $rest3 && $rest4 && 
            $rest30 && $rest31 && $rest32 && $rest33 && $rest34 && $rest35 && $rest36 && $rest37 && $rest38 && $rest39){
                if($pass01){
                    if($rest5 && $rest6 && $rest7 && $rest8){
                        if($pass02){
                            if($rest9 && $rest10 && $rest11 && $rest12 && $rest13 && $rest14 && $rest15 && $rest16 && $rest17 && $rest18 && $rest19 &&
                            $rest20 && $rest21 && $rest22 && $rest23 && $rest24 && $rest25 && $rest26 && $rest27 && $rest28 && $rest29){
                                ?>
                                <script>
                                    document.getElementById("consumsust").style.display = "none";
                                </script>
                                <?php
                            }else{
                                ?>
                                <h3>Ha ocurrido un error</h3>
                                <?php
                            }
                        }else{
                            ?>
                            <script>
                                document.getElementById("consumsust").style.display = "none";
                            </script>
                            <?php
                        }
                    }else{
                        ?>
                        <h3>Ha ocurrido un error</h3>
                        <?php
                    }
                }else{
                    ?>
                    <script>
                        document.getElementById("consumsust").style.display = "none";
                    </script>
                    <?php
                }
            }else{
                ?>
                <h3>Ha ocurrido un error</h3>
                <?php
            }
        }else{
        ?>
            <h3>Por Favor completa todos los campos</h3>
        <?php
        }
    //TIENE QUE CONTESTAR TODAS LAS PREGUNTAS PARA GUARDAR
    }else{
    ?>
       <h3>Por Favor completa todos los campos 01</h3>
    <?php
    }
}
?>
