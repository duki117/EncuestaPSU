<?php
//UTILIZAMOS EL ID DE LA SESION PARA MANDARLA A LA TABLA
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$idpsu = $_SESSION["id"];
//INCLUIMOS LA CONEXION A LA BASE DE DATOS
include("con_db.php");
//VERIFICAMOS QUE SE HAYA DADO CLIC EN EL BOTON DE GUARDAR DE LA SECCIÓN DE SALUD FISICA
if(isset($_POST['saludSexual'])){
    //COMPROBAMOS QUE TODAS LAS RESPUESTAS ESTEN CONTESTADAS
    if(!empty($_POST['ss-1']) >=1 &&
        !empty($_POST['ss-2']) >=1 &&
        !empty($_POST['ss-3']) >=1 &&
        !empty($_POST['ss-4']) >=1 &&
        !empty($_POST['ss-5']) >=1 &&
        !empty($_POST['ss-6']) >=1 &&
        !empty($_POST['ss-7']) >=1 &&
        !empty($_POST['ss-8']) >=1 &&
        !empty($_POST['ss-9']) >=1 &&
        !empty($_POST['ss-10']) >=1){
            //ASIGNAMOS VARIABLES A LAS RESPUESTAS QUITANDO ESPACIOS CON TRIM
            $resp1 = trim($_POST['ss-1']);
            $resp2 = trim($_POST['ss-2']);
            $resp3 = trim($_POST['ss-3']);
            $resp4 = trim($_POST['ss-4']);
            $resp5 = trim($_POST['ss-5']);
            $resp6 = trim($_POST['ss-6']);
            $resp7 = trim($_POST['ss-7']);
            $resp8 = trim($_POST['ss-8']);
            $resp9 = trim($_POST['ss-9']);
            $resp10 = trim($_POST['ss-10']);
            //REALIZAMOS LAS CONSULTAS CORRESPONDIENTES A LA TABLA DE RESPUESTAS
            $consulta1 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('ss-1', '$idpsu', '$resp1')";
            $consulta2 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('ss-2', '$idpsu', '$resp2')";
            $consulta3 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('ss-3', '$idpsu', '$resp3')";
            $consulta4 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('ss-4', '$idpsu', '$resp4')";
            $consulta5 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('ss-5', '$idpsu', '$resp5')";
            $consulta6 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('ss-6', '$idpsu', '$resp6')";
            $consulta7 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('ss-7', '$idpsu', '$resp7')";
            $consulta8 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('ss-8', '$idpsu', '$resp8')";
            $consulta9 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('ss-9', '$idpsu', '$resp9')";
            $consulta10 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('ss-10', '$idpsu', '$resp10')";
            //CREAMOS UNA CONEXION 
            $rest1 = mysqli_query($conex,$consulta1);
            $rest2 = mysqli_query($conex,$consulta2);
            $rest3 = mysqli_query($conex,$consulta3);
            $rest4 = mysqli_query($conex,$consulta4);
            $rest5 = mysqli_query($conex,$consulta5);
            $rest6 = mysqli_query($conex,$consulta6);
            $rest7 = mysqli_query($conex,$consulta7);
            $rest8 = mysqli_query($conex,$consulta8);
            $rest9 = mysqli_query($conex,$consulta9);
            $rest10 = mysqli_query($conex,$consulta10);

            

            //ESTA PARTE SERA PARA OCULTAR LA SECCION CUANDO SE HAGA TODO CORRECTAMENTE
            if($rest1 && $rest2 && $rest3 && $rest4 && $rest5 && $rest6 && $rest7 && $rest8 && $rest9 && $rest10){
                ?>
                <script>
                    document.getElementById("saludsex").style.display = "none";
                </script>
                <?php
            }else{
                ?>
                <h3>Ha ocurrido un error</h3>
                <?php
            }
            
    //TIENE QUE CONTESTAR TODAS LAS PREGUNTAS PARA GUARDAR
    }else{
    ?>
       <h3>Por Favor completa todos los campos</h3>
        <?php
    }
}
$_SESSION["ss"]=TRUE;
            #$_SESSION["sf"]=TRUE;
            #$_SESSION["sp"]=TRUE;
            #$_SESSION["cs"]=TRUE;
?>