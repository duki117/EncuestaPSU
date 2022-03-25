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
if(isset($_POST['saludFisica'])){
    //COMPROBAMOS QUE TODAS LAS RESPUESTAS ESTEN CONTESTADAS
    if(strlen($_POST['sf-A1']) >=1 &&
        strlen($_POST['sf-A2']) >=1 &&
        strlen($_POST['sf-A3']) >=1 &&
        strlen($_POST['sf-A4']) >=1 &&
        strlen($_POST['sf-A5']) >=1 &&
        strlen($_POST['sf-A6']) >=1 &&
        strlen($_POST['sf-A7']) >=1 &&
        strlen($_POST['sf-A8']) >=1 &&
        !empty($_POST['sf-Ev1']) &&
        strlen($_POST['sf-Ev2']) >=1 &&
        !empty($_POST['sf-lista']) &&
        strlen($_POST['sf-Ev4']) >=1 &&
        strlen($_POST['sf-Ev5']) >=1 &&
        !empty($_POST['sf-Ev6']) &&
        !empty($_POST['sf-Ev7']) >=1){
            //ASIGNAMOS VARIABLES A LAS RESPUESTAS QUITANDO ESPACIOS CON TRIM
            $resp1 = trim($_POST['sf-A1']);
            $resp2 = trim($_POST['sf-A2']);
            $resp3 = trim($_POST['sf-A3']);
            $resp4 = trim($_POST['sf-A4']);
            $resp5 = trim($_POST['sf-A5']);
            $resp6 = trim($_POST['sf-A6']);
            $resp7 = trim($_POST['sf-A7']);
            $resp8 = trim($_POST['sf-A8']);
            $resp9 = trim($_POST['sf-Ev1']);
            $resp10 = trim($_POST['sf-Ev2']);
            $sfEstiloVida = $_POST['sf-lista'];
            $resp11 = implode(",", $sfEstiloVida);
            $resp12 = trim($_POST['sf-Ev4']);
            $resp13 = trim($_POST['sf-Ev5']);
            $resp14 = trim($_POST['sf-Ev6']);
            $resp15 = trim($_POST['sf-Ev7']);
            //REALIZAMOS LAS CONSULTAS CORRESPONDIENTES A LA TABLA DE RESPUESTAS
            $consulta1 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-A1', '$idpsu', '$resp1')";
            $consulta2 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-A2', '$idpsu', '$resp2')";
            $consulta3 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-A3', '$idpsu', '$resp3')";
            $consulta4 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-A4', '$idpsu', '$resp4')";
            $consulta5 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-A5', '$idpsu', '$resp5')";
            $consulta6 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-A6', '$idpsu', '$resp6')";
            $consulta7 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-A7', '$idpsu', '$resp7')";
            $consulta8 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-A8', '$idpsu', '$resp8')";
            $consulta9 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-Ev1', '$idpsu', '$resp9')";
            $consulta10 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-Ev2', '$idpsu', '$resp10')";
            $consulta11 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-Ev3', '$idpsu', '$resp11')";
            $consulta12 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-Ev4', '$idpsu', '$resp12')";
            $consulta13 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-Ev5', '$idpsu', '$resp13')";
            $consulta14 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-Ev6', '$idpsu', '$resp14')";
            $consulta15 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sf-Ev7', '$idpsu', '$resp15')";
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
            $rest11 = mysqli_query($conex,$consulta11);
            $rest12 = mysqli_query($conex,$consulta12);
            $rest13 = mysqli_query($conex,$consulta13);
            $rest14 = mysqli_query($conex,$consulta14);
            $rest15 = mysqli_query($conex,$consulta15);
            
           

            //ESTA PARTE SERA PARA OCULTAR LA SECCION CUANDO SE HAGA TODO CORRECTAMENTE
            if($rest1 && $rest2 && $rest3 && $rest4 && $rest5 && $rest6 && $rest7 && $rest8 && $rest9 && $rest10 && $rest11 && $rest12 && $rest13 && $rest14 && $rest15){
                 $_SESSION["sf"]=TRUE;
                 ?>
                 <script>
                     location.reload();
                     document.getElementById("saludfsi").style.display = "none";
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
?>