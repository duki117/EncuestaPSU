<?php
//INICIAMOS UNA SESION AL MOMENTO DE REGISTRAR LOS DATOS DEL USARIO
session_start();  
//INCLUIMOS LA CONEXION A LA BASE DE DATOS
include("con_db.php");
//CUANDO SE DE CLIC AL BTN DE REGISTER SE REALIZA LAS SIGUIENTES VALIDACIONES
//1.- QUE TODOS LOS CAMPOS ESTEN CONTESTADOS
//2.- QUITAR LOS ESPACION DE AMBOS LADOS CON "TRIM"
//3.- MANDAR EL REGISTRO A LA TABLA CORRESPONDIENTE DEL PERFIL UNIVERSITARIO
//4.- QUE EL QUERY SE HAYA INSERTADO CORRECTAMENTE
if(isset($_POST['register'])){
            if(strlen($_POST['id']) >=1 &&
            strlen($_POST['nombre']) >=1 &&
            strlen($_POST['apellidoP']) >=1 &&
            strlen($_POST['apellidoM']) >=1 &&
            strlen($_POST['centro']) >=1 &&
            strlen($_POST['depts']) >=1 &&
            strlen($_POST['sexo']) >=1 &&
            strlen($_POST['fecha_nac']) >=1 &&
            strlen($_POST['miembro']) >=1){
            if($_POST['miembro'] == 'Estudiante'){
                $id = trim($_POST['id']);
                $nombre = trim($_POST['nombre']);
                $apellidoP = trim($_POST['apellidoP']);
                $apellidoM = trim($_POST['apellidoM']);
                $centro = trim($_POST['centro']);
                $depts = trim($_POST['depts']);
                $sexo = trim($_POST['sexo']);
                $fechanac = trim($_POST['fecha_nac']);
                $carrera = trim($_POST['carrera']);
                $semestre = trim($_POST['semestre']);
                $fechareg = date("d/m/y");
                $consulta = "INSERT INTO estudiante(Id_uaa, Nombre, PrimApe, SegApe, Centro, Dpto, Sexo, Fecha_nac, Carrera, Semestre, Fecha_reg) VALUES ('$id', '$nombre', '$apellidoP', '$apellidoM', '$centro', '$depts', '$sexo', '$fechanac', '$carrera', '$semestre', '$fechareg')";
                $resultado = mysqli_query($conex,$consulta);
            }else if($_POST['miembro'] == 'Docente'){
                $id = trim($_POST['id']);
                $nombre = trim($_POST['nombre']);
                $apellidoP = trim($_POST['apellidoP']);
                $apellidoM = trim($_POST['apellidoM']);
                $centro = trim($_POST['centro']);
                $depts = trim($_POST['depts']);
                $sexo = trim($_POST['sexo']);
                $fechanac = trim($_POST['fecha_nac']);
                $fechareg = date("d/m/y");
                $consulta = "INSERT INTO docente(Id_uaa, Nombre, PrimApe, SegApe, Centro, Dpto, Sexo, Fecha_nac, Fecha_reg) VALUES ('$id', '$nombre', '$apellidoP', '$apellidoM', '$centro', '$depts', '$sexo', '$fechanac', '$fechareg')";
                $resultado = mysqli_query($conex,$consulta);
            }else if($_POST['miembro'] == 'Administrativo'){
                $id = trim($_POST['id']);
                $nombre = trim($_POST['nombre']);
                $apellidoP = trim($_POST['apellidoP']);
                $apellidoM = trim($_POST['apellidoM']);
                $centro = trim($_POST['centro']);
                $depts = trim($_POST['depts']);
                $sexo = trim($_POST['sexo']);
                $fechanac = trim($_POST['fecha_nac']);
                $fechareg = date("d/m/y");
                $consulta = "INSERT INTO administrativo(Id_uaa, Nombre, PrimApe, SegApe, Centro, Dpto, Sexo, Fecha_nac, Fecha_reg) VALUES ('$id', '$nombre', '$apellidoP', '$apellidoM', '$centro', '$depts', '$sexo', '$fechanac', '$fechareg')";
                $resultado = mysqli_query($conex,$consulta);
            }
            if($resultado && $resultado){
                $_SESSION["id"] = $_POST['id'];
                $_SESSION["sexo"] = $_POST['sexo'];
                header("Location: encuestas.php");
                die();
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
}
?>