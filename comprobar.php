<?php

    if (!isset($_SESSION)) {
        session_start();
    }

    //Creacion de cookie de prueba (esto lo realiza e-siima). Pendiente a Eliminar.
    setcookie("vcevreif","257597|8|Sistemas|8|Daniel|Romo|Padilla|H");

    //Prueba simple para recibir una cookie
    if(isset($_COOKIE['vcevreif'])) {
        //*
        list($ID, $NIVEL, $CARRERA, $SEMESTRE, $NOMBRE, $PATERNO, $MATERNO, $SEXO) = explode("|", $_COOKIE['vcevreif'], 8);
        
        /*/ CODIGO USADO ANTERIORMENTE PARA OBTENER LA INFORMACION DE LA COOKIE
        ----------------------------------------------------------------------------------------
        list($ID, $NIVEL, $CARRERA, $SEMESTRE, $NOMBRE, $PATERNO, $MATERNO, $SEXO) = split("\|", $_COOKIE['vcevreif'], 8);
        $ID = str_replace("\"", "", $ID);
        //*/

        if(isset($ID, $NIVEL, $CARRERA, $SEMESTRE, $NOMBRE, $PATERNO, $MATERNO, $SEXO)){
            //Conexion con la BDD
            include("con_db.php");
            //Comporbamos que exista una encuesta para la carrera y semestre del usuario
            $query = "SELECT * FROM encuestas WHERE Clave_Carrera= '".$NIVEL."/".$CARRERA."' AND Semestre=$SEMESTRE;";

            $resultados = mysqli_query($conex,$query);
            
            if(mysqli_num_rows($resultados) > 0){
                //En caso de existir comprobamos que este en fechas de realizar la encuesta
                $Encuesta = mysqli_fetch_assoc($resultados);
                if(strtotime($Encuesta["Fecha_Inicio"])<strtotime(date("Y-m-d")) && strtotime($Encuesta["Fecha_Fin"])>strtotime(date("Y-m-d"))){
                    //En caso de estar en fecha comprobamos que no la haya realizado antes
                    $query = "SELECT * FROM  estudiante  WHERE Id_uaa= $ID";

                    $resultados = mysqli_query($conex,$query);
                    
                    if(mysqli_num_rows($resultados) > 0){
                        echo "Usted ya ha realizado la encuesta disponible";
                    } else {
                        //Registramos al usuario para evitar repeticiones
                        $consulta = "INSERT INTO estudiante(Id_uaa, Nombre, PrimApe, SegApe, Sexo, Carrera, Semestre, Fecha_reg) VALUES ('".$ID."', '".$NOMBRE."', '".$PATERNO."', '".$MATERNO."', '".$SEXO."', '".$NIVEL."/".$CARRERA."', '".$SEMESTRE."', '".date("Y-m-d")."')";
                        $resultado = mysqli_query($conex,$consulta);
                        if($resultado){
                            //Si el registro fue exitoso generamos las variables de session y enviamos a la encuesta
                            $_SESSION["id"] = $ID;
                            header("Location: encuestas.php");
                            die();
                        }
                    }
                }else{
                    echo "Las encuestas no disponibles por el momento, intentalo mas tarde";
                }
            } else {
                echo "NO existen encuestas disponibles para tu carrera y semestre";
            }
        }
    }else{
        echo "Hubo un error. Vuelva a intentarlo. El error normalmente se soluciona saliendo del apartado de imss en esiima y regresando al mismo.";
        exit();
    }
?>