<?php
#$_SESSION["ss"]=TRUE;
#$_SESSION["sf"]=TRUE;
#$_SESSION["sp"]=TRUE;
#$_SESSION["cs"]=TRUE;

//UTILIZAMOS EL ID DE LA SESION PARA MANDARLA A LA TABLA
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$idpsu = $_SESSION["id"];
//INCLUIMOS LA CONEXION A LA BASE DE DATOS
include("con_db.php");
//VERIFICAMOS QUE SE HAYA DADO CLIC EN EL BOTON DE GUARDAR DE LA SECCIÓN DE SALUD FISICA
if(isset($_POST['saludPSocial'])){
    //COMPROBAMOS QUE TODAS LAS RESPUESTAS ESTEN CONTESTADAS
    if(!empty($_POST['sp-mp1']) >=1 &&
        !empty($_POST['sp-mp2']) >=1 &&
        !empty($_POST['sp-mp3']) >=1 &&
        !empty($_POST['sp-mp4']) >=1 &&
        !empty($_POST['sp-mp5']) >=1 &&
        !empty($_POST['sp-mp6']) >=1 &&
        !empty($_POST['sp-mp7']) >=1 &&
        !empty($_POST['sp-mp8']) >=1 &&
        !empty($_POST['sp-mp9']) >=1 &&
        !empty($_POST['sp-mp10']) >=1 &&
        !empty($_POST['sp-v1']) >=1 &&
        !empty($_POST['sp-v2']) >=1 &&
        !empty($_POST['sp-v3']) >=1 &&
        !empty($_POST['sp-v4']) >=1 &&
        !empty($_POST['sp-v5']) >=1 &&
        !empty($_POST['sp-v6']) >=1 &&
        !empty($_POST['sp-v7']) >=1 &&
        !empty($_POST['sp-v8']) >=1 &&
        !empty($_POST['sp-v9']) >=1 &&
        !empty($_POST['sp-rs1']) >=1 &&
        !empty($_POST['sp-rs2']) >=1 &&
        !empty($_POST['sp-rs3']) >=1 &&
        !empty($_POST['sp-rs4']) >=1 &&
        !empty($_POST['sp-rs5']) >=1 &&
        !empty($_POST['sp-rs6']) >=1 &&
        !empty($_POST['sp-rs7']) >=1 &&
        !empty($_POST['sp-rs8']) >=1 &&
        !empty($_POST['sp-rs9']) >=1 &&
        !empty($_POST['sp-rs10']) >=1 &&
        !empty($_POST['sp-rs11']) >=1 &&
        !empty($_POST['sp-rs12']) >=1 &&
        !empty($_POST['sp-rs13']) >=1 &&
        !empty($_POST['sp-rs14']) >=1 &&
        !empty($_POST['sp-rs15']) >=1 &&
        !empty($_POST['sp-rs16']) >=1 &&
        !empty($_POST['sp-rs17']) >=1 &&
        !empty($_POST['sp-rs18']) >=1 &&
        !empty($_POST['sp-rs19']) >=1 &&
        !empty($_POST['sp-rs20']) >=1){
            //ASIGNAMOS VARIABLES A LAS RESPUESTAS QUITANDO ESPACIOS CON TRIM
            $resp1 = trim($_POST['sp-mp1']);
            $resp2 = trim($_POST['sp-mp2']);
            $resp3 = trim($_POST['sp-mp3']);
            $resp4 = trim($_POST['sp-mp4']);
            $resp5 = trim($_POST['sp-mp5']);
            $resp6 = trim($_POST['sp-mp6']);
            $resp7 = trim($_POST['sp-mp7']);
            $resp8 = trim($_POST['sp-mp8']);
            $resp9 = trim($_POST['sp-mp9']);
            $resp10 = trim($_POST['sp-mp10']);
            $resp11 = trim($_POST['sp-v1']);
            $resp12 = trim($_POST['sp-v2']);
            $resp13 = trim($_POST['sp-v3']);
            $resp14 = trim($_POST['sp-v4']);
            $resp15 = trim($_POST['sp-v5']);
            $resp16 = trim($_POST['sp-v6']);
            $resp17 = trim($_POST['sp-v7']);
            $resp18 = trim($_POST['sp-v8']);
            $resp19 = trim($_POST['sp-v9']);
            $resp20 = trim($_POST['sp-rs1']);
            $resp21 = trim($_POST['sp-rs2']);
            $resp22 = trim($_POST['sp-rs3']);
            $resp23 = trim($_POST['sp-rs4']);
            $resp24 = trim($_POST['sp-rs4']);
            $resp25 = trim($_POST['sp-rs6']);
            $resp26 = trim($_POST['sp-rs7']);
            $resp27 = trim($_POST['sp-rs8']);
            $resp28 = trim($_POST['sp-rs9']);
            $resp29 = trim($_POST['sp-rs10']);
            $resp30 = trim($_POST['sp-rs11']);
            $resp31 = trim($_POST['sp-rs12']);
            $resp32 = trim($_POST['sp-rs13']);
            $resp33 = trim($_POST['sp-rs14']);
            $resp34 = trim($_POST['sp-rs15']);
            $resp35 = trim($_POST['sp-rs16']);
            $resp36 = trim($_POST['sp-rs17']);
            $resp37 = trim($_POST['sp-rs18']);
            $resp38 = trim($_POST['sp-rs19']);
            $resp39 = trim($_POST['sp-rs20']);
            $resp40 = trim($_POST['sp-rs21']);
            //REALIZAMOS LAS CONSULTAS CORRESPONDIENTES A LA TABLA DE RESPUESTAS
            $consulta1 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-mp1', '$idpsu', '$resp1')";
            $consulta2 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-mp2', '$idpsu', '$resp2')";
            $consulta3 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-mp3', '$idpsu', '$resp3')";
            $consulta4 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-mp4', '$idpsu', '$resp4')";
            $consulta5 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-mp5', '$idpsu', '$resp5')";
            $consulta6 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-mp6', '$idpsu', '$resp6')";
            $consulta7 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-mp7', '$idpsu', '$resp7')";
            $consulta8 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-mp8', '$idpsu', '$resp8')";
            $consulta9 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-mp9', '$idpsu', '$resp9')";
            $consulta10 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-mp10', '$idpsu', '$resp10')";
            $consulta11 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-v1', '$idpsu', '$resp11')";
            $consulta12 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-v2', '$idpsu', '$resp12')";
            $consulta13 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-v3', '$idpsu', '$resp13')";
            $consulta14 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-v4', '$idpsu', '$resp14')";
            $consulta15 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-v5', '$idpsu', '$resp15')";
            $consulta16 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-v6', '$idpsu', '$resp16')";
            $consulta17 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-v7', '$idpsu', '$resp17')";
            $consulta18 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-v8', '$idpsu', '$resp18')";
            $consulta19 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-v9', '$idpsu', '$resp19')";
            $consulta20 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs1', '$idpsu', '$resp20')";
            $consulta21 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs2', '$idpsu', '$resp21')";
            $consulta22 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs3', '$idpsu', '$resp22')";
            $consulta23 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs4', '$idpsu', '$resp23')";
            $consulta24 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs5', '$idpsu', '$resp24')";
            $consulta25 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs6', '$idpsu', '$resp25')";
            $consulta26 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs7', '$idpsu', '$resp26')";
            $consulta27 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs8', '$idpsu', '$resp27')";
            $consulta28 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs9', '$idpsu', '$resp28')";
            $consulta29 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs10', '$idpsu', '$resp29')";
            $consulta30 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs11', '$idpsu', '$resp30')";
            $consulta31 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs12', '$idpsu', '$resp31')";
            $consulta32 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs13', '$idpsu', '$resp32')";
            $consulta33 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs14', '$idpsu', '$resp33')";
            $consulta34 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs15', '$idpsu', '$resp34')";
            $consulta35 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs16', '$idpsu', '$resp35')";
            $consulta36 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs17', '$idpsu', '$resp36')";
            $consulta37 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs18', '$idpsu', '$resp37')";
            $consulta38 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs19', '$idpsu', '$resp38')";
            $consulta39 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs20', '$idpsu', '$resp39')";
            $consulta40 = "INSERT INTO respuesta(Cdg_prgta, Id_psu, Respuesta) VALUES ('sp-rs21', '$idpsu', '$resp40')";
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
            $rest40 = mysqli_query($conex,$consulta40);
            //ESTA PARTE SERA PARA OCULTAR LA SECCION CUANDO SE HAGA TODO CORRECTAMENTE
            if($rest1 && $rest2 && $rest3 && $rest4 && $rest5 && $rest6 && $rest7 && $rest8 && $rest9 && $rest10 &&
            $rest11 && $rest12 && $rest13 && $rest14 && $rest15 && $rest16 && $rest17 && $rest18 && $rest19 && $rest20 &&
            $rest21 && $rest22 && $rest23 && $rest24 && $rest25 && $rest26 && $rest27 && $rest28 && $rest29 && $rest30 &&
            $rest31 && $rest32 && $rest33 && $rest34 && $rest35 && $rest36 && $rest37 && $rest38 && $rest39 && $rest40){
                ?>
                <script>
                    document.getElementById("saludpsico").style.display = "none";
                </script>
                <?php
            }else{
                ?>
                <h3>Ha ocurrido un error</h3>
                <?php
            }

            $contador = 0;


    //TIENE QUE CONTESTAR TODAS LAS PREGUNTAS PARA GUARDAR
    }else{
    ?>
       <h3>Por Favor completa todos los campos</h3>
        <?php
    }
}
#$_SESSION["ss"]=TRUE;
#$_SESSION["sf"]=TRUE;
$_SESSION["sp"]=TRUE;
#$_SESSION["cs"]=TRUE;
?>