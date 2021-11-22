<script>
function mostrar(){
	let miembro = document.getElementById('miembro').value;

  if (miembro == 'Estudiante') {
      document.getElementById("carrera").style.display = "block";
      document.getElementById("semestre").style.display = "block";
  } else {
      document.getElementById("carrera").style.display = "none";
      document.getElementById("semestre").style.display = "none";
  }
}
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./style/style_l.css">
  <title>Formulario Registro</title>
</head>
<body>
  <section class="form-register">
    <h4>Formulario Registro</h4>
    <form method="POST">
        <input class="controls" type="text" name="id" id="id" placeholder="Ingrese su ID">
        <input class="controls" type="text" style="text-transform:uppercase;" name="nombre" id="nombres" placeholder="Ingrese su(s) Nombre(s)">
        <input class="controls" type="text" style="text-transform:uppercase;" name="apellidoP" id="apellidoP" placeholder="Ingrese su Apellido Paterno">
        <input class="controls" type="text" style="text-transform:uppercase;" name="apellidoM" id="apellidoM" placeholder="Ingrese su Apellido Materno">
        <input class="controls" type="text" name="centro" id="centro" placeholder="Ingrese su centro">
        <input class="controls" type="text" name="depts" id="depts" placeholder="Ingrese su Departamento">
        <label for="">Seleccione su sexo</label>
        <hr>
          <select id="sexo" name="sexo" class="controls">
            <option value="0" selected>Seleccione una opción</option>
            <option value="H">Hombre</option>
            <option value="M">Mujer</option>
          </select>
        <label for="">Seleccione que tipo miembro es</label>
        <hr>
          <select id="miembro" name="miembro" onclick="mostrar()" class="controls">
            <option value="0" selected>Seleccione una opción</option>
            <option name="Docente" id="Docente"  value="Docente">Docente</option>
            <option name="Administrativo" id="Administrativo"  value="Administrativo">Administrativo</option>
            <option name="estudiante" id="estudiante" value="Estudiante" >Estudiante</option>
          </select>
      <input class="controls" type="text" name="carrera" id="carrera" style="display:none" placeholder="Ingrese su carrera">
      <input class="controls" type="text" name="semestre" id="semestre" style="display:none" placeholder="Ingrese su semestre">    
      <label for="start">Ingrese fecha de naciemiento:</label>
        <input type="date" id="start" name="fecha_nac"min="1930-01-01"  value="2022-01-01">    

      <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
      <input class="botons" type="submit" name="register" value="Registrase" >
    </form>
    <?php
       include("register.php");
       
    ?>
  </section>

</body>
</html>