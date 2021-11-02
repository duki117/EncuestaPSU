<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>PES</title>
</head>
<!--Funcion Chek1() es llamada al terminar de cargar la pagina para corroborar que las preguntas disponibles sean acordes a las respuestas seleccionadas  DANIEL-->
<body onload="chek1()">
    <!-- HEADER "TITULO" -->
    <div class="header">
        <h1 id="titulo-pes">P.E.S.</h1>
    </div>
    <!-- MENU DE NAVEGACIÓN -->
    <div class="navbar">
        <a href="#saludfisica">SALUD FÍSICA</a>
        <a href="#saludpsico">SALUD PSICOSOCIAL</a>
        <a href="#consumsust">CONSUMO DE SUSTANCIAS</a>
        <a href="#saludsex">SALUD SEXUAL</a>
      </div>
    <div class="contenedor">
        <!-- MENU DE NAVEGACION -->

        <section class="encuestas">
            <!-- aqui empieza salud física -->
            <article class="saludfisica" id="saludfisica">
                <fieldset>
                    <legend>SALUD FÍSICA</legend>
                    <!-- primera pregunta -->
                    <form action="#">
                        <h3>ALIMENTACIÓN</h3>
                        <p id="legenda">Responde a cada pregunta según se aplique a tu condición actual</p>
                        <label for="alimentacionsaludable">1. ¿Crees que tu alimentación es saludable?</label>
                        <select id="alimentacionsaludable">
                            <option value="0" selected>Seleccione una opción</option>
                            <option value="siempre">Siempre</option>
                            <option value="aveces">A veces</option>
                            <option value="pocasvec">Pocas Veces</option>
                            <option value="nunca">Nunca</option>
                        </select>
                        <!-- segunda pregunta -->
                        <label for="">2. ¿Mantienes un consumo bajo en grasas?</label>
                        <select id="">
                            <option value="0" selected>Seleccione una opción</option>
                            <option value="siempre">Siempre</option>
                            <option value="aveces">A veces</option>
                            <option value="pocasvec">Pocas Veces</option>
                            <option value="nunca">Nunca</option>
                        </select>
                        <!-- tercer pregunta -->
                        <label for="">3. ¿Comes vegetales frescos diariamente?</label>
                        <select id="">
                            <option value="0" selected>Seleccione una opción</option>
                            <option value="siempre">Siempre</option>
                            <option value="aveces">A veces</option>
                            <option value="pocasvec">Pocas Veces</option>
                            <option value="nunca">Nunca</option>
                        </select>
                        <!-- cuarta pregunta -->
                        <label for="">4. ¿Comes de forma saludable aún cuando lo hagas fuera de casa?</label>
                        <select id="">
                            <option value="0" selected>Seleccione una opción</option>
                            <option value="siempre">Siempre</option>
                            <option value="aveces">A veces</option>
                            <option value="pocasvec">Pocas Veces</option>
                            <option value="nunca">Nunca</option>
                        </select>
                        <!-- quinta pregunta -->
                        <label for="">5. ¿Comes alimentos hervidos o asados en lugar de fritos?</label>
                        <select id="">
                            <option value="0" selected>Seleccione una opción</option>
                            <option value="siempre">Siempre</option>
                            <option value="aveces">A veces</option>
                            <option value="pocasvec">Pocas Veces</option>
                            <option value="nunca">Nunca</option>
                        </select>
                        <!-- sexta pregunta -->
                        <label for="">6. ¿Mantienes un consumo bajo en sal?</label>
                        <select name="" id="">
                            <option value="0" selected>Seleccione una opción</option>
                            <option value="siempre">Siempre</option>
                            <option value="aveces">A veces</option>
                            <option value="pocasvec">Pocas Veces</option>
                            <option value="nunca">Nunca</option>
                        </select>
                        <!-- septima pregunta -->
                        <label for="">7. ¿Sustituyes el desayuno, la comida o la cena por alguna botana?</label>
                        <select name="" id="">
                            <option value="0" selected>Seleccione una opción</option>
                            <option value="casisiempre">La mayor parte del tiempo</option>
                            <option value="pocasvec">Pocas Veces</option>
                            <option value="casinunca">Casi Nunca</option>
                        </select>
                        <!-- octava pregunta -->
                        <label for="">8. ¿Con que frecuencia no desayunas?</label>
                        <select name="" id="">
                            <option value="0" selected>Seleccione una opción</option>
                            <option value="casisiempre">La mayoría de las mañanas</option>
                            <option value="pocasvec">Algunas mañanas</option>
                            <option value="casinunca">Casi Nunca</option>
                        </select>
                        <hr>
                        <!-- segunda sección de salud fisica, estilo de vida -->
                        <h3>ESTILO DE VIDA</h3>
                        <p id="legenda">Responde a cada pregunta según se aplique a tu condición actual</p>
                        <!-- pregunta 9 -->
                        <label for="">9. ¿Realizas ejercicio que dure mínimo 30 minutos y te haga sudar, cuando menos 3 veces a la semana?</label><br>
                        <input type="radio" name="" id="ejer-si" class="ejer-sino" checked>
                        <label for="si">Si</label> <br>
                        <input type="radio" name="" id="ejer-no" class="ejer-sino">
                        <label for="no">No</label> <br>
                        <!-- pregunta 10 -->
                        <label for="">10. ¿Cuántas horas a la semana dedicas a hacer ejercicio?</label>
                        <select name="" id="">
                            <option value="0" selected>Seleccione una opción</option>
                            <option value="0nada">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5mas">5 o más</option>
                        </select>
                        <!-- pregunta 11 -->
                        <label for="">11.¿Qué tipo de ejercicios realizas?</label> <br>
                        <input type="checkbox" name="aerobics" id="ejerhaces">
                        <label for="">Aerobics</label> <br>
                        <input type="checkbox" name="bailar" id="ejerhaces">
                        <label for="">Bailar</label> <br>
                        <input type="checkbox" name="correr" id="ejerhaces">
                        <label for="">Correr</label> <br>
                        <input type="checkbox" name="nadar" id="ejerhaces">
                        <label for="">Nadar</label> <br>
                        <input type="checkbox" name="futbol" id="ejerhaces">
                        <label for="">Futbol</label> <br>
                        <input type="checkbox" name="gym" id="ejerhaces">
                        <label for="">Gimnasio</label> <br>
                        <input type="checkbox" name="otrosky" id="ejerhaces" checked>
                        <label for="">Otro</label> <br>
                        <!-- pregunta 12 -->
                        <label for="">12. Al terminar  tus actividades académicas, laborales y familiares: ¿Cuántas horas al día te quedan libres?</label> <br>
                        <input type="number" name="horaslibres" id="horaslibres" value="0" max="9" min="0"> <br>
                        <!-- pregunta 13 -->
                        <label for="">13. ¿Con que frecuencia acudes al médico?</label>
                        <select name="" id="">
                            <option value="0" selected>Seleccione una opción</option>
                            <option value="1">1 vez por año</option>
                            <option value="2">2 vez por año</option>
                            <option value="3">3 vez por año</option>
                            <option value="4">Cada que te enfermas</option>
                            <option value="5">Nunca</option>
                        </select>
                        <!-- pregunta 14 -->
                        <label for="cultur-si">14. ¿Realizas alguna actividad cultural o artística?</label> <br>
                        <input type="radio" name="cultur-si" id="cultur-si" class="ejer-sino" checked>
                        <label for="cultur-si">Si</label> <br>
                        <input type="radio" name="cultur-si" id="cultur-si" class="ejer-sino">
                        <label for="cultur-si">No</label> <br>
                        <!-- pregunta 15 -->
                        <label for="cultur-sin">15. ¿Acostumbras leer diariamente?</label> <br>
                        <input type="radio" name="cultur-sin" id="cultur-sin" class="ejer-sino" checked>
                        <label for="cultur-sin">Si</label> <br>
                        <input type="radio" name="cultur-sin" id="cultur-sin" class="ejer-sino">
                        <label for="cultur-sin">No</label> <br>
                    </form>
                </fieldset>
            </article> <br>

            <!-- aqui empieza salud psicosocial -->

            <article class="saludpsico" id="saludpsico">
                <fieldset>
                    <legend>SALUD PSICOSOCIAL</legend>
                    <form action="#">
                        <!-- primera parte del formulario -->
                        <h3>MALESTAR PSICOLÓGICO</h3>
                        <p id="legenda">Responde a cada pregunta según se aplique a tu condición actual</p>
                        <p>Instrucciones: selecciona una casilla con la te identifiques de 1 al 5 en donde 1 es NUNCA y 5 es SIEMPRE</p>
                        <!-- pregunta 1 -->
                        <label for="01-cansancio">1. ¿Con qué frecuencia te has sentido cansado (a), sin alguna buena razón?</label> <br> <br>
                        <input type="radio" name="01-cansancio" id="01-cansancio" value="1" checked><label for="01-cansancio">1 - NUNCA</label> <br>
                        <input type="radio" name="01-cansancio" id="01-cansancio" value="2"><label for="01-cansancio">2 - POCAS VECES</label> <br>
                        <input type="radio" name="01-cansancio" id="01-cansancio" value="3"><label for="01-cansancio">3 - A VECES</label> <br>
                        <input type="radio" name="01-cansancio" id="01-cansancio" value="4"><label for="01-cansancio">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="01-cansancio" id="01-cansancio" value="5"><label for="01-cansancio">5 - SIEMPRE</label> <br> <br>
                        <!-- pregunta 2 -->
                        <label for="02-nervioso">2. ¿Con qué frecuencia te has sentido nervioso (a)?</label> <br> <br>
                        <input type="radio" name="02-nervioso" id="02-nervioso" value="1" checked><label for="02-nervioso">1 - NUNCA</label> <br>
                        <input type="radio" name="02-nervioso" id="02-nervioso" value="2"><label for="02-nervioso">2 - POCAS VECES</label> <br>
                        <input type="radio" name="02-nervioso" id="02-nervioso" value="3"><label for="02-nervioso">3 - A VECES</label> <br>
                        <input type="radio" name="02-nervioso" id="02-nervioso" value="4"><label for="02-nervioso">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="02-nervioso" id="02-nervioso" value="5"><label for="02-nervioso">5 - SIEMPRE</label> <br> <br>
                        <!-- pregunta 3 -->
                        <label for="03-nocalma">3. ¿Con qué frecuencia te has sentido tan nervioso (a) que nada te podía calmar?</label> <br> <br>
                        <input type="radio" name="03-nocalma" id="03-nocalma" value="1" checked><label for="03-nocalma">1 - NUNCA</label> <br>
                        <input type="radio" name="03-nocalma" id="03-nocalma" value="2" ><label for="03-nocalma">2 - POCAS VECES</label> <br>
                        <input type="radio" name="03-nocalma" id="03-nocalma" value="3"><label for="03-nocalma">3 - A VECES</label> <br>
                        <input type="radio" name="03-nocalma" id="03-nocalma" value="4"><label for="03-nocalma">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="03-nocalma" id="03-nocalma" value="5"><label for="03-nocalma">5 - SIEMPRE</label> <br> <br>
                        <!-- pregunta 4 -->
                        <label for="04-desesperado">4. ¿Con qué frecuencia te has sentido desesperado (a)?</label> <br> <br>
                        <input type="radio" name="04-desesperado" id="04-desesperado" value="1" checked><label for="04-desesperado">1 - NUNCA</label> <br>
                        <input type="radio" name="04-desesperado" id="04-desesperado" value="2"><label for="04-desesperado">2 - POCAS VECES</label> <br>
                        <input type="radio" name="04-desesperado" id="04-desesperado" value="3"><label for="04-desesperado">3 - A VECES</label> <br>
                        <input type="radio" name="04-desesperado" id="04-desesperado" value="4"><label for="04-desesperado">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="04-desesperado" id="04-desesperado" value="5"><label for="04-desesperado">5 - SIEMPRE</label> <br> <br>
                        <!-- pregunta 5 -->
                        <label for="05-inquieto">5. ¿Con qué frecuencia te has sentido inquieto (a) o intranquilo (a)?</label> <br> <br>
                        <input type="radio" name="05-inquieto" id="05-inquieto" value="1" checked><label for="05-inquieto">1 - NUNCA</label> <br>
                        <input type="radio" name="05-inquieto" id="05-inquieto" value="2"><label for="05-inquieto">2 - POCAS VECES</label> <br>
                        <input type="radio" name="05-inquieto" id="05-inquieto" value="3"><label for="05-inquieto">3 - A VECES</label> <br>
                        <input type="radio" name="05-inquieto" id="05-inquieto" value="4"><label for="05-inquieto">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="05-inquieto" id="05-inquieto" value="5"><label for="05-inquieto">5 - SIEMPRE</label> <br> <br>
                        <!-- pregunta 6  -->
                        <label for="06-impaciente">6. ¿Con qué frecuencia te has sentido tan impaciente que no has podido mantenerte quieto (a)?</label> <br> <br>
                        <input type="radio" name="06-impaciente" id="06-impaciente" value="1" checked><label for="06-impaciente">1 - NUNCA</label> <br>
                        <input type="radio" name="06-impaciente" id="06-impaciente" value="2"><label for="06-impaciente">2 - POCAS VECES</label> <br>
                        <input type="radio" name="06-impaciente" id="06-impaciente" value="3"><label for="06-impaciente">3 - A VECES</label> <br>
                        <input type="radio" name="06-impaciente" id="06-impaciente" value="4"><label for="06-impaciente">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="06-impaciente" id="06-impaciente" value="5"><label for="06-impaciente">5 - SIEMPRE</label> <br> <br>
                        <!-- pregunta 7 -->
                        <label for="07-deprimido">7. ¿Con qué frecuencia te has sentido deprimido (a)?</label> <br> <br>
                        <input type="radio" name="07-deprimido" id="07-deprimido" value="1" checked><label for="07-deprimido">1 - NUNCA</label> <br>
                        <input type="radio" name="07-deprimido" id="07-deprimido" value="2"><label for="07-deprimido">2 - POCAS VECES</label> <br>
                        <input type="radio" name="07-deprimido" id="07-deprimido" value="3"><label for="07-deprimido">3 - A VECES</label> <br>
                        <input type="radio" name="07-deprimido" id="07-deprimido" value="4"><label for="07-deprimido">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="07-deprimido" id="07-deprimido" value="5"><label for="07-deprimido">5 - SIEMPRE</label> <br> <br>
                        <!-- pregunta 8 -->
                        <label for="08-esfuerzo">8. ¿Con qué frecuencia has sentido que todo lo que haces representa un gran esfuerzo?</label> <br> <br>
                        <input type="radio" name="08-esfuerzo" id="08-esfuerzo" value="1" checked><label for="08-esfuerzo">1 - NUNCA</label> <br>
                        <input type="radio" name="08-esfuerzo" id="08-esfuerzo" value="2"><label for="08-esfuerzo">2 - POCAS VECES</label> <br>
                        <input type="radio" name="08-esfuerzo" id="08-esfuerzo" value="3"><label for="08-esfuerzo">3 - A VECES</label> <br>
                        <input type="radio" name="08-esfuerzo" id="08-esfuerzo" value="4"><label for="08-esfuerzo">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="08-esfuerzo" id="08-esfuerzo" value="5"><label for="08-esfuerzo">5 - SIEMPRE</label> <br> <br>
                        <!-- pregunta 9 -->
                        <label for="09-animarte">9. ¿Con qué frecuencia te has sentido tan triste que nada  podía animarte?</label> <br> <br>
                        <input type="radio" name="09-animarte" id="09-animarte" value="1" checked><label for="09-animarte">1 - NUNCA</label> <br>
                        <input type="radio" name="09-animarte" id="09-animarte" value="2"><label for="09-animarte">2 - POCAS VECES</label> <br>
                        <input type="radio" name="09-animarte" id="09-animarte" value="3"><label for="09-animarte">3 - A VECES</label> <br>
                        <input type="radio" name="09-animarte" id="09-animarte" value="4"><label for="09-animarte">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="09-animarte" id="09-animarte" value="5"><label for="09-animarte">5 - SIEMPRE</label> <br> <br>
                        <!-- pregunta 10 -->                        
                        <label for="10-inutil">10. ¿Con qué frecuencia te has sentido inútil?</label> <br> <br>
                        <input type="radio" name="10-inutil" id="10-inutil" value="1" checked><label for="10-inutil">1 - NUNCA</label> <br>
                        <input type="radio" name="10-inutil" id="10-inutil" value="2"><label for="10-inutil">2 - POCAS VECES</label> <br>
                        <input type="radio" name="10-inutil" id="10-inutil" value="3"><label for="10-inutil">3 - A VECES</label> <br>
                        <input type="radio" name="10-inutil" id="10-inutil" value="4"><label for="10-inutil">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="10-inutil" id="10-inutil" value="5"><label for="10-inutil">5 - SIEMPRE</label> <br> <br>
                        <div class="resultado-malestar-psico" id="resultado-malestar-psico">
                            <!-- aqui con el back hacer el conteo para mostrar el resultado -->
                        </div>
                        <hr>
                        <!-- aqui termina la primera parte del primer formulario -->

                        <!-- segunda parte del formulario -->
                        <h3>VIOLENCIA</h3>
                        <p id="legenda">Responde a cada pregunta según se aplique a tu condición actual</p>
                        <!-- pregunta 11 -->
                        <label for="11-violacion">11. ¿Alguien  te ha forzado a tener contacto sexual o a tener relaciones sexuales? </label> <br> <br>
                        <input type="radio" name="11-violacion" id="11-violacion" value="1" checked><label for="11-violacion">1 - SI</label> <br>
                        <input type="radio" name="11-violacion" id="11-violacion" value="2"><label for="11-violacion">2 - NO</label> <br><br>

                        <!-- pregunta 12 -->
                        <label for="12-cuchillo">12. ¿Te han amenazado con un arma (cuchillo, pistola, picahielos, palos, etc.)?</label> <br> <br>
                        <input type="radio" name="12-cuchillo" id="12-cuchillo" value="1" checked><label for="12-cuchillo">1 - SI</label> <br>
                        <input type="radio" name="12-cuchillo" id="12-cuchillo" value="2"><label for="12-cuchillo">2 - NO</label> <br> <br>
                        <!-- <input type="radio" name="12-cuchillo" id="12-cuchillo" value="3"><label for="12-cuchillo">3 - A VECES</label> <br>
                        <input type="radio" name="12-cuchillo" id="12-cuchillo" value="4"><label for="12-cuchillo">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="12-cuchillo" id="12-cuchillo" value="5"><label for="12-cuchillo">5 - SIEMPRE</label> <br> <br> -->
                        <!-- pregunta 13 -->
                        <label for="13-pareja">13. ¿Tu pareja te ha humillado, insultado, golpeado o amenazado?</label> <br> <br>
                        <input type="radio" name="13-pareja" id="13-pareja" value="1" checked><label for="13-pareja">1 - SI</label> <br>
                        <input type="radio" name="13-pareja" id="13-pareja" value="2"><label for="13-pareja">2 - NO</label> <br> <br>
                        <!-- <input type="radio" name="13-pareja" id="13-pareja" value="3"><label for="13-pareja">3 - A VECES</label> <br>
                        <input type="radio" name="13-pareja" id="13-pareja" value="4"><label for="13-pareja">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="13-pareja" id="13-pareja" value="5"><label for="13-pareja">5 - SIEMPRE</label> <br> <br> -->
                        <!-- pregunta 14 -->
                        <label for="14-golpessup">14. ¿Has recibido golpes, insultos y humillación por parte de compañeros o superiores?</label> <br> <br>
                        <input type="radio" name="14-golpessup" id="14-golpessup" value="1" checked><label for="14-golpessup">1 - SI</label> <br>
                        <input type="radio" name="14-golpessup" id="14-golpessup" value="2"><label for="14-golpessup">2 - NO</label> <br> <br>
                        <!-- <input type="radio" name="14-golpessup" id="14-golpessup" value="3"><label for="14-golpessup">3 - A VECES</label> <br>
                        <input type="radio" name="14-golpessup" id="14-golpessup" value="4"><label for="14-golpessup">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="14-golpessup" id="14-golpessup" value="5"><label for="14-golpessup">5 - SIEMPRE</label> <br> <br> -->
                        <!-- pregunta 15 -->
                        <label for="15-golpesfam">15. ¿Has recibido insultos, golpes, insultos y humillacion por parte de un familiar?</label> <br> <br>
                        <input type="radio" name="15-golpesfam" id="15-golpesfam" value="1" checked><label for="15-golpesfam">1 - SI</label> <br>
                        <input type="radio" name="15-golpesfam" id="15-golpesfam" value="2"><label for="15-golpesfam">2 - NO</label> <br> <br>
                        <!-- <input type="radio" name="15-golpesfam" id="15-golpesfam" value="3"><label for="15-golpesfam">3 - A VECES</label> <br>
                        <input type="radio" name="15-golpesfam" id="15-golpesfam" value="4"><label for="15-golpesfam">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="15-golpesfam" id="15-golpesfam" value="5"><label for="15-golpesfam">5 - SIEMPRE</label> <br> <br> -->
                        <!-- pregunta 16 -->
                        <label for="16-famasalt">16. ¿Alguno de tus familiares ha sido lesionado por ser asaltado?</label> <br> <br>
                        <input type="radio" name="16-famasalt" id="16-famasalt" value="1" checked><label for="16-famasalt">1 - SI</label> <br>
                        <input type="radio" name="16-famasalt" id="16-famasalt" value="2"><label for="16-famasalt">2 - NO</label> <br> <br>
                        <!-- <input type="radio" name="16-famasalt" id="16-famasalt" value="3"><label for="16-famasalt">3 - A VECES</label> <br>
                        <input type="radio" name="16-famasalt" id="16-famasalt" value="4"><label for="16-famasalt">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="16-famasalt" id="16-famasalt" value="5"><label for="16-famasalt">5 - SIEMPRE</label> <br> <br> -->
                        <!-- pregunta 17 -->
                        <label for="17-famsecuest">17. ¿Alguno de tus familiares ha sido secuestrado?</label> <br> <br>
                        <input type="radio" name="17-famsecuest" id="17-famsecuest" value="1" checked><label for="17-famsecuest">1 - SI</label> <br>
                        <input type="radio" name="17-famsecuest" id="17-famsecuest" value="2"><label for="17-famsecuest">2 - NO</label> <br> <br>
                        <!-- <input type="radio" name="17-famsecuest" id="17-famsecuest" value="3"><label for="17-famsecuest">3 - A VECES</label> <br>
                        <input type="radio" name="17-famsecuest" id="17-famsecuest" value="4"><label for="17-famsecuest">4 - MUCHAS VECES</label> <br>
                        <input type="radio" name="17-famsecuest" id="17-famsecuest" value="5"><label for="17-famsecuest">5 - SIEMPRE</label> <br> <br> -->
                        <!-- pregunta 18 -->
                        <label for="18-tusecuest">18. ¿Has sido asaltado o secuestrado?</label> <br> <br>
                        <input type="radio" name="18-tusecuest" id="18-tusecuest" value="1" checked><label for="18-tusecuest">1 - SI</label> <br>
                        <input type="radio" name="18-tusecuest" id="18-tusecuest" value="2"><label for="18-tusecuest">2 - NO</label> <br> <br>
                        <!-- pregunta 19 -->
                        <label for="19-forzadrogas">19. ¿Te han forzado a ingerir bebidas alcoholicas, drogas o alguna sustancia dañina?</label> <br> <br>
                        <input type="radio" name="19-forzadrogas" id="19-forzadrogas" value="1" checked><label for="19-forzadrogas">1 - SI</label> <br>
                        <input type="radio" name="19-forzadrogas" id="19-forzadrogas" value="2"><label for="19-forzadrogas">2 - NO</label> <br> <br>

                        <hr>
                        <!-- aqui termina la segunda parte del formulario -->

                        <!-- tercera parte del formulario -->
                        <h3>RIESGO SUICIDA - DESEPERANZA</h3>
                        <p id="legenda">Responde a cada pregunta según se aplique a tu condición actual</p>
                        <!-- pregunta 20 -->
                        <label for="20-esperanza">20. Espero el futuro con esperanza y entusiasmo</label> <br> <br>
                        <input type="radio" name="20-esperanza" id="20-esperanza" value="0" checked><label for="20-esperanza">1 - VERDADERO</label> <br>
                        <input type="radio" name="20-esperanza" id="20-esperanza" value="1"><label for="20-esperanza">2 - FALSO</label> <br> <br>
                        <!-- pregunta 21 -->
                        <label for="21-vencido">21. Puedo darme por vencido, renunciar, ya que no puedo hacer mejor las cosas por mí mismo</label> <br> <br>
                        <input type="radio" name="21-vencido" id="21-vencido" value="1" checked><label for="21-vencido">1 - VERDADERO</label> <br>
                        <input type="radio" name="21-vencido" id="21-vencido" value="0"><label for="21-vencido">2 - FALSO</label> <br> <br>
                        <!-- pregunta 22 -->
                        <label for="22-mal">22. Cuando las cosas van mal me alivia saber que las cosas no pueden permanecer tiempo así</label> <br> <br>
                        <input type="radio" name="22-mal" id="22-mal" value="0" checked><label for="22-mal">1 - VERDADERO</label> <br>
                        <input type="radio" name="22-mal" id="22-mal" value="1"><label for="22-mal">2 - FALSO</label> <br> <br>
                        <!-- pregunta 23 -->
                        <label for="23-vida">23. No puedo imaginar como será mi vida dentro de  años</label> <br> <br>
                        <input type="radio" name="23-vida" id="23-vida" value="1" checked><label for="23-vida">1 - VERDADERO</label> <br>
                        <input type="radio" name="23-vida" id="23-vida" value="0"><label for="23-vida">2 - FALSO</label> <br> <br>
                        <!-- pregunta 24 -->
                        <label for="24-tiempo">24. Tengo bastante tiempo para llevar a cabo las cosas que quisiera poder hacer</label> <br> <br>
                        <input type="radio" name="24-tiempo" id="24-tiempo" value="0" checked><label for="24-tiempo">1 - VERDADERO</label> <br>
                        <input type="radio" name="24-tiempo" id="24-tiempo" value="1"><label for="24-tiempo">2 - FALSO</label> <br> <br>
                        <!-- pregunta 25 -->
                        <label for="25-futuro">25. En el futuro, espero conseguir lo que me pueda interesar</label> <br> <br>
                        <input type="radio" name="25-futuro" id="25-futuro" value="0" checked><label for="25-futuro">1 - VERDADERO</label> <br>
                        <input type="radio" name="25-futuro" id="25-futuro" value="1"><label for="25-futuro">2 - FALSO</label> <br> <br>
                        <!-- pregunta 26 -->
                        <label for="26-oscuro">26. Mi futuro me parece oscuro</label> <br> <br>
                        <input type="radio" name="26-oscuro" id="26-oscuro" value="1" checked><label for="26-oscuro">1 - VERDADERO</label> <br>
                        <input type="radio" name="26-oscuro" id="26-oscuro" value="0"><label for="26-oscuro">2 - FALSO</label> <br> <br>
                        <!-- pregunta 27 -->
                        <label for="27-buenas">27. Espero más cosas buenas de la vida que lo que la gente suele conseguir por término medio</label> <br> <br>
                        <input type="radio" name="27-buenas" id="27-buenas" value="0" checked><label for="27-buenas">1 - VERDADERO</label> <br>
                        <input type="radio" name="27-buenas" id="27-buenas" value="1"><label for="27-buenas">2 - FALSO</label> <br> <br>
                        <!-- pregunta 28 -->
                        <label for="28-cambios">28. No logro hacer que las cosas cambien, y no existen razones para creer que pueda en el futuro</label> <br> <br>
                        <input type="radio" name="28-cambio" id="28-cambio" value="1" checked><label for="28-cambio">1 - VERDADERO</label> <br>
                        <input type="radio" name="28-cambio" id="28-cambio" value="0"><label for="28-cambio">2 - FALSO</label> <br> <br>
                        <!-- pregunta 29 -->
                        <label for="29-experiencias">29. Mis pasadas experiencias me han preparado bien para mi futuro</label> <br> <br>
                        <input type="radio" name="29-experiencias" id="29-experiencias" value="0" checked><label for="29-experiencias">1 - VERDADERO</label> <br>
                        <input type="radio" name="29-experiencias" id="29-experiencias" value="1"><label for="29-experiencias">2 - FALSO</label> <br> <br>
                        <!-- pregunta 30 -->
                        <label for="30-desagradable">30. Todo lo que puedo ver por delante de mí es más desagradable que agradable</label> <br> <br>
                        <input type="radio" name="30-desagradable" id="30-desagradable" value="1" checked><label for="30-desagradable">1 - VERDADERO</label> <br>
                        <input type="radio" name="30-desagradable" id="30-desagradable" value="0"><label for="30-desagradable">2 - FALSO</label> <br> <br>
                        <!-- pregunta 31 -->
                        <label for="31-deseo">31. No espero conseguir lo que realmente deseo</label> <br> <br>
                        <input type="radio" name="31-deseo" id="31-deseo" value="1" checked><label for="31-deseo">1 - VERDADERO</label> <br>
                        <input type="radio" name="31-deseo" id="31-deseo" value="0"><label for="31-deseo">2 - FALSO</label> <br> <br>
                        <!-- pregunta 32 -->
                        <label for="32-futuro">32.  Cuando miro hacia el futuro, espero que seré más feliz de lo que soy ahora</label> <br> <br>
                        <input type="radio" name="32-futuro" id="32-futuro" value="0" checked><label for="32-futuro">1 - VERDADERO</label> <br>
                        <input type="radio" name="32-futuro" id="32-futuro" value="1"><label for="32-futuro">2 - FALSO</label> <br> <br>
                        <!-- pregunta 33 -->
                        <label for="33-marcha">33. Las cosas no marchan como yo quisiera</label> <br> <br>
                        <input type="radio" name="33-marcha" id="33-marcha" value="1" checked><label for="33-marcha">1 - VERDADERO</label> <br>
                        <input type="radio" name="33-marcha" id="33-marcha" value="0"><label for="33-marcha">2 - FALSO</label> <br> <br>
                        <!-- pregunta 34 -->
                        <label for="34-confianza">34. Tengo una gran confianza en el futuro</label> <br> <br>
                        <input type="radio" name="34-confianza" id="34-confianza" value="0" checked><label for="34-confianza">1 - VERDADERO</label> <br>
                        <input type="radio" name="34-confianza" id="34-confianza" value="1"><label for="34-confianza">2 - FALSO</label> <br> <br>
                        <!-- pregunta 35 -->
                        <label for="35-absurdo">35. Nunca consigo lo que deseo, por lo que es absurdo desear cualquier cosa</label> <br> <br>
                        <input type="radio" name="35-absurdo" id="35-absurdo" value="1" checked><label for="35-absurdo">1 - VERDADERO</label> <br>
                        <input type="radio" name="35-absurdo" id="35-absurdo" value="0"><label for="35-absurdo">2 - FALSO</label> <br> <br>
                        <!-- pregunta 36 -->
                        <label for="36-satisfaccion">36. Es muy improbable que pueda lograr una satisfacción real en el futuro</label> <br> <br>
                        <input type="radio" name="36-satisfaccion" id="36-satisfaccion" value="1" checked><label for="36-satisfaccion">1 - VERDADERO</label> <br>
                        <input type="radio" name="36-satisfaccion" id="36-satisfaccion" value="0"><label for="36-satisfaccion">2 - FALSO</label> <br> <br>
                        <!-- pregunta 37 -->
                        <label for="37-vago">37. El futuro me parece vago e incierto</label> <br> <br>
                        <input type="radio" name="37-vago" id="37-vago" value="1" checked><label for="37-vago">1 - VERDADERO</label> <br>
                        <input type="radio" name="37-vago" id="37-vago" value="0"><label for="37-vago">2 - FALSO</label> <br> <br>
                        <!-- pregunta 38 -->
                        <label for="38-epocas">38. Espero más bien épocas buenas que malas</label> <br> <br>
                        <input type="radio" name="38-epocas" id="38-epocas" value="0" checked><label for="38-epocas">1 - VERDADERO</label> <br>
                        <input type="radio" name="38-epocas" id="38-epocas" value="1"><label for="38-epocas">2 - FALSO</label> <br> <br>
                        <!-- pregunta 39 -->
                        <label for="39-logro">39. No merece la pena que intente conseguir algo que desee, porque probablemente no lo lograré</label> <br> <br>
                        <input type="radio" name="39-logro" id="39-logro" value="1" checked><label for="39-logro">1 - VERDADERO</label> <br>
                        <input type="radio" name="39-logro" id="39-logro" value="0"><label for="39-logro">2 - FALSO</label> <br> <br>
                        <div>
                            <!-- AQUI VA EL RESULTADO DE ESTA PARTE DE LA ENCUESTA -->
                        </div>
                        <label for="40-intento">40.Alguna vez has tenido un intento suicida</label> <br> <br>
                        <input type="radio" name="40-intento" id="40-intento" value="1" checked><label for="40-intento">1 - VERDADERO</label> <br>
                        <input type="radio" name="40-intento" id="40-intento" value="0"><label for="40-intento">2 - FALSO</label> <br> <br>

                        <hr>
                        <!-- aqui termina la tercera parte del formulario -->
                    </form>
                </fieldset>
            </article>

            <!-- aqui empieza consumo de sustancias -->
            <article class="consumsust" id="consumsust">
                <fieldset>
                    <legend>CONSUMO DE SUSTANCIAS</legend>
                    <form action="server.php" method="post">

                        <script>
                            //Funcion Chek1 verifica que radioButons estan chekados para decidir si ocultar o no las preguntas relacionadas sobre consumo de Drogas    DANIEL.
                            function chek1() {
                                //x compara que todas las opciones "NO" de la pregunta 1 esten seleccionadas    DANIEL
                                //y compara que todas las opciones "NUNCA" de la pregunta 2 esten seleccionadas    DANIEL
                                let x= document.getElementById('a12').checked && document.getElementById('b12').checked && document.getElementById('c12').checked && document.getElementById('d12').checked;
                                let y= document.getElementById('a21').checked && document.getElementById('b21').checked && document.getElementById('c21').checked && document.getElementById('d21').checked;
                                if(x){
                                    document.getElementById('Pregunta2').style.display="none";
                                    document.getElementById('Pregunta3').style.display="none";
                                    document.getElementById('Pregunta4').style.display="none";
                                    document.getElementById('Pregunta5').style.display="none";
                                    document.getElementById('Pregunta6').style.display="none";
                                    document.getElementById('Pregunta7').style.display="none";
                                    document.getElementById('Pregunta8').style.display="none";
                                }else if(y){
                                    document.getElementById('Pregunta2').style.display="block";
                                    document.getElementById('Pregunta3').style.display="none";
                                    document.getElementById('Pregunta4').style.display="none";
                                    document.getElementById('Pregunta5').style.display="none";
                                    document.getElementById('Pregunta6').style.display="none";
                                    document.getElementById('Pregunta7').style.display="none";
                                    document.getElementById('Pregunta8').style.display="none";
                                }else{
                                    document.getElementById('Pregunta2').style.display="block";
                                    document.getElementById('Pregunta3').style.display="block";
                                    document.getElementById('Pregunta4').style.display="block";
                                    document.getElementById('Pregunta5').style.display="block";
                                    document.getElementById('Pregunta6').style.display="block";
                                    document.getElementById('Pregunta7').style.display="block";
                                    document.getElementById('Pregunta8').style.display="block";
                                }
                            }

                            //Funcion calc calcula el riesgo de la primera parte de consumo de sustancias    DANIEL
                            function calc(){
                                //se crean variables para sumar los puntos de las respuestas    DANIEL
                                var totalTabaco=0;
                                var totalAlcohol=0;
                                var totalCannabis=0;
                                var totalOtras=0;
                                //Se comprueba que radio esta seleccionado y se suma a su respectiva variable    DANIEL
                                //se calcula el puntaje de tabaco    DANIEL
                                if(document.getElementById('a11').checked)totalTabaco+=Number(document.getElementById('a11').value);
                                if(document.getElementById('a12').checked)totalTabaco+=Number(document.getElementById('a12').value);
                                if(document.getElementById('a21').checked)totalTabaco+=Number(document.getElementById('a21').value);
                                if(document.getElementById('a22').checked)totalTabaco+=Number(document.getElementById('a22').value);
                                if(document.getElementById('a23').checked)totalTabaco+=Number(document.getElementById('a23').value);
                                if(document.getElementById('a24').checked)totalTabaco+=Number(document.getElementById('a24').value);
                                if(document.getElementById('a25').checked)totalTabaco+=Number(document.getElementById('a25').value);
                                if(document.getElementById('a31').checked)totalTabaco+=Number(document.getElementById('a31').value);
                                if(document.getElementById('a32').checked)totalTabaco+=Number(document.getElementById('a32').value);
                                if(document.getElementById('a33').checked)totalTabaco+=Number(document.getElementById('a33').value);
                                if(document.getElementById('a34').checked)totalTabaco+=Number(document.getElementById('a34').value);
                                if(document.getElementById('a35').checked)totalTabaco+=Number(document.getElementById('a35').value);
                                if(document.getElementById('a41').checked)totalTabaco+=Number(document.getElementById('a41').value);
                                if(document.getElementById('a42').checked)totalTabaco+=Number(document.getElementById('a42').value);
                                if(document.getElementById('a43').checked)totalTabaco+=Number(document.getElementById('a43').value);
                                if(document.getElementById('a44').checked)totalTabaco+=Number(document.getElementById('a44').value);
                                if(document.getElementById('a45').checked)totalTabaco+=Number(document.getElementById('a45').value);
                                if(document.getElementById('a51').checked)totalTabaco+=Number(document.getElementById('a51').value);
                                if(document.getElementById('a52').checked)totalTabaco+=Number(document.getElementById('a52').value);
                                if(document.getElementById('a53').checked)totalTabaco+=Number(document.getElementById('a53').value);
                                if(document.getElementById('a54').checked)totalTabaco+=Number(document.getElementById('a54').value);
                                if(document.getElementById('a55').checked)totalTabaco+=Number(document.getElementById('a55').value);
                                if(document.getElementById('a61').checked)totalTabaco+=Number(document.getElementById('a61').value);
                                if(document.getElementById('a62').checked)totalTabaco+=Number(document.getElementById('a62').value);
                                if(document.getElementById('a63').checked)totalTabaco+=Number(document.getElementById('a63').value);
                                if(document.getElementById('a71').checked)totalTabaco+=Number(document.getElementById('a71').value);
                                if(document.getElementById('a72').checked)totalTabaco+=Number(document.getElementById('a72').value);
                                if(document.getElementById('a73').checked)totalTabaco+=Number(document.getElementById('a73').value);
                                
                                //se calcula el puntaje de alcohol     DANIEL
                                if(document.getElementById('b11').checked)totalAlcohol+=Number(document.getElementById('b11').value);
                                if(document.getElementById('b12').checked)totalAlcohol+=Number(document.getElementById('b12').value);
                                if(document.getElementById('b21').checked)totalAlcohol+=Number(document.getElementById('b21').value);
                                if(document.getElementById('b22').checked)totalAlcohol+=Number(document.getElementById('b22').value);
                                if(document.getElementById('b23').checked)totalAlcohol+=Number(document.getElementById('b23').value);
                                if(document.getElementById('b24').checked)totalAlcohol+=Number(document.getElementById('b24').value);
                                if(document.getElementById('b25').checked)totalAlcohol+=Number(document.getElementById('b25').value);
                                if(document.getElementById('b31').checked)totalAlcohol+=Number(document.getElementById('b31').value);
                                if(document.getElementById('b32').checked)totalAlcohol+=Number(document.getElementById('b32').value);
                                if(document.getElementById('b33').checked)totalAlcohol+=Number(document.getElementById('b33').value);
                                if(document.getElementById('b34').checked)totalAlcohol+=Number(document.getElementById('b34').value);
                                if(document.getElementById('b35').checked)totalAlcohol+=Number(document.getElementById('b35').value);
                                if(document.getElementById('b41').checked)totalAlcohol+=Number(document.getElementById('b41').value);
                                if(document.getElementById('b42').checked)totalAlcohol+=Number(document.getElementById('b42').value);
                                if(document.getElementById('b43').checked)totalAlcohol+=Number(document.getElementById('b43').value);
                                if(document.getElementById('b44').checked)totalAlcohol+=Number(document.getElementById('b44').value);
                                if(document.getElementById('b45').checked)totalAlcohol+=Number(document.getElementById('b45').value);
                                if(document.getElementById('b51').checked)totalAlcohol+=Number(document.getElementById('b51').value);
                                if(document.getElementById('b52').checked)totalAlcohol+=Number(document.getElementById('b52').value);
                                if(document.getElementById('b53').checked)totalAlcohol+=Number(document.getElementById('b53').value);
                                if(document.getElementById('b54').checked)totalAlcohol+=Number(document.getElementById('b54').value);
                                if(document.getElementById('b55').checked)totalAlcohol+=Number(document.getElementById('b55').value);
                                if(document.getElementById('b61').checked)totalAlcohol+=Number(document.getElementById('b61').value);
                                if(document.getElementById('b62').checked)totalAlcohol+=Number(document.getElementById('b62').value);
                                if(document.getElementById('b63').checked)totalAlcohol+=Number(document.getElementById('b63').value);
                                if(document.getElementById('b71').checked)totalAlcohol+=Number(document.getElementById('b71').value);
                                if(document.getElementById('b72').checked)totalAlcohol+=Number(document.getElementById('b72').value);
                                if(document.getElementById('b73').checked)totalAlcohol+=Number(document.getElementById('b73').value);

                                //se calcula el puntaje de cannabis    DANIEL
                                if(document.getElementById('c11').checked)totalCannabis+=Number(document.getElementById('c11').value);
                                if(document.getElementById('c12').checked)totalCannabis+=Number(document.getElementById('c12').value);
                                if(document.getElementById('c21').checked)totalCannabis+=Number(document.getElementById('c21').value);
                                if(document.getElementById('c22').checked)totalCannabis+=Number(document.getElementById('c22').value);
                                if(document.getElementById('c23').checked)totalCannabis+=Number(document.getElementById('c23').value);
                                if(document.getElementById('c24').checked)totalCannabis+=Number(document.getElementById('c24').value);
                                if(document.getElementById('c25').checked)totalCannabis+=Number(document.getElementById('c25').value);
                                if(document.getElementById('c31').checked)totalCannabis+=Number(document.getElementById('c31').value);
                                if(document.getElementById('c32').checked)totalCannabis+=Number(document.getElementById('c32').value);
                                if(document.getElementById('c33').checked)totalCannabis+=Number(document.getElementById('c33').value);
                                if(document.getElementById('c34').checked)totalCannabis+=Number(document.getElementById('c34').value);
                                if(document.getElementById('c35').checked)totalCannabis+=Number(document.getElementById('c35').value);
                                if(document.getElementById('c41').checked)totalCannabis+=Number(document.getElementById('c41').value);
                                if(document.getElementById('c42').checked)totalCannabis+=Number(document.getElementById('c42').value);
                                if(document.getElementById('c43').checked)totalCannabis+=Number(document.getElementById('c43').value);
                                if(document.getElementById('c44').checked)totalCannabis+=Number(document.getElementById('c44').value);
                                if(document.getElementById('c45').checked)totalCannabis+=Number(document.getElementById('c45').value);
                                if(document.getElementById('c51').checked)totalCannabis+=Number(document.getElementById('c51').value);
                                if(document.getElementById('c52').checked)totalCannabis+=Number(document.getElementById('c52').value);
                                if(document.getElementById('c53').checked)totalCannabis+=Number(document.getElementById('c53').value);
                                if(document.getElementById('c54').checked)totalCannabis+=Number(document.getElementById('c54').value);
                                if(document.getElementById('c55').checked)totalCannabis+=Number(document.getElementById('c55').value);
                                if(document.getElementById('c61').checked)totalCannabis+=Number(document.getElementById('c61').value);
                                if(document.getElementById('c62').checked)totalCannabis+=Number(document.getElementById('c62').value);
                                if(document.getElementById('c63').checked)totalCannabis+=Number(document.getElementById('c63').value);
                                if(document.getElementById('c71').checked)totalCannabis+=Number(document.getElementById('c71').value);
                                if(document.getElementById('c72').checked)totalCannabis+=Number(document.getElementById('c72').value);
                                if(document.getElementById('c73').checked)totalCannabis+=Number(document.getElementById('c73').value);

                                //se calcula el punteje de otras drogas     DANIEL
                                if(document.getElementById('d11').checked)totalOtras+=Number(document.getElementById('d11').value);
                                if(document.getElementById('d12').checked)totalOtras+=Number(document.getElementById('d12').value);
                                if(document.getElementById('d21').checked)totalOtras+=Number(document.getElementById('d21').value);
                                if(document.getElementById('d22').checked)totalOtras+=Number(document.getElementById('d22').value);
                                if(document.getElementById('d23').checked)totalOtras+=Number(document.getElementById('d23').value);
                                if(document.getElementById('d24').checked)totalOtras+=Number(document.getElementById('d24').value);
                                if(document.getElementById('d25').checked)totalOtras+=Number(document.getElementById('d25').value);
                                if(document.getElementById('d31').checked)totalOtras+=Number(document.getElementById('d31').value);
                                if(document.getElementById('d32').checked)totalOtras+=Number(document.getElementById('d32').value);
                                if(document.getElementById('d33').checked)totalOtras+=Number(document.getElementById('d33').value);
                                if(document.getElementById('d34').checked)totalOtras+=Number(document.getElementById('d34').value);
                                if(document.getElementById('d35').checked)totalOtras+=Number(document.getElementById('d35').value);
                                if(document.getElementById('d41').checked)totalOtras+=Number(document.getElementById('d41').value);
                                if(document.getElementById('d42').checked)totalOtras+=Number(document.getElementById('d42').value);
                                if(document.getElementById('d43').checked)totalOtras+=Number(document.getElementById('d43').value);
                                if(document.getElementById('d44').checked)totalOtras+=Number(document.getElementById('d44').value);
                                if(document.getElementById('d45').checked)totalOtras+=Number(document.getElementById('d45').value);
                                if(document.getElementById('d51').checked)totalOtras+=Number(document.getElementById('d51').value);
                                if(document.getElementById('d52').checked)totalOtras+=Number(document.getElementById('d52').value);
                                if(document.getElementById('d53').checked)totalOtras+=Number(document.getElementById('d53').value);
                                if(document.getElementById('d54').checked)totalOtras+=Number(document.getElementById('d54').value);
                                if(document.getElementById('d55').checked)totalOtras+=Number(document.getElementById('d55').value);
                                if(document.getElementById('d61').checked)totalOtras+=Number(document.getElementById('d61').value);
                                if(document.getElementById('d62').checked)totalOtras+=Number(document.getElementById('d62').value);
                                if(document.getElementById('d63').checked)totalOtras+=Number(document.getElementById('d63').value);
                                if(document.getElementById('d71').checked)totalOtras+=Number(document.getElementById('d71').value);
                                if(document.getElementById('d72').checked)totalOtras+=Number(document.getElementById('d72').value);
                                if(document.getElementById('d73').checked)totalOtras+=Number(document.getElementById('d73').value);

                                //Se decide si necesita algun tratamiento o no y si debe ser intensivo o breve.    DANIEL
                                //se muestran los resultados de tabaco    DANIEL
                                if(totalTabaco>26){
                                    document.getElementById('resTabaco').innerHTML='Usted está  en riesgo. Requiere de un tratamiento Intensivo';
                                }else if(totalTabaco>3){
                                    document.getElementById('resTabaco').innerHTML='Su riesgo es moderado. Requiere de un tratamiento breve';
                                }else{
                                    document.getElementById('resTabaco').innerHTML='Su riesgo es mínimo. No requiere de ningún  tipo de tratamiento';
                                }

                                //se muestran los resultados de alcohol    DANIEL
                                if(totalAlcohol>26){
                                    document.getElementById('resAlcohol').innerHTML='Usted está  en riesgo. Requiere de un tratamiento Intensivo';
                                }else if(totalAlcohol>10){
                                    document.getElementById('resAlcohol').innerHTML='Su riesgo es moderado. Requiere de un tratamiento breve';
                                }else{
                                    document.getElementById('resAlcohol').innerHTML='Su riesgo es mínimo. No requiere de ningún  tipo de tratamiento';
                                }

                                //se muestran los resultados de cannabis    DANIEL
                                if(totalCannabis>26){
                                    document.getElementById('resCannabis').innerHTML='Usted está  en riesgo. Requiere de un tratamiento Intensivo';
                                }else if(totalCannabis>4){
                                    document.getElementById('resCannabis').innerHTML='Su riesgo es moderado. Requiere de un tratamiento breve';
                                }else{
                                    document.getElementById('resCannabis').innerHTML='Su riesgo es mínimo. No requiere de ningún  tipo de tratamiento';
                                }

                                //se muestran los resultados de otras drgas    DANIEL
                                if(totalOtras>26){
                                    document.getElementById('resOtras').innerHTML='Usted está  en riesgo. Requiere de un tratamiento Intensivo';
                                }else{
                                    document.getElementById('resOtras').innerHTML='Su riesgo es moderado. Requiere de un tratamiento breve';
                                }
                            }
                        </script>
                        <!-- primera parte del formulario -->
                        <div id="Pregunta1">
                            <h3>CONSUMO DE DROGAS</h3>
                            <p id="legenda">Responde a cada pregunta según se aplique a tu condición actual</p>
                            <!-- Primera parte de consumo de drogas -->
                            <h4>01. A lo largo de tu Vida, ¿Cuál de las siguientes sustancias has consumido alguna vez?</h4>
                            <!-- pregunta a -->
                            <label for="a1">a. Tabaco (cigarrillos, cigarros habanos, tabaco de mascar, pipa, etc.)</label> <br> <br>
                            <input type="radio" name="a1" id="a11" value=1 onclick="chek1()"><label for="a11">1 - SI</label> <br>
                            <input type="radio" name="a1" id="a12" value=0 onclick="chek1()"><label for="a12">2 - NO</label> <br> <br>
                            <!-- pregunta b -->
                            <label for="b1">b. Bebidas alcohólicas (cerveza, vino, licores, destilados, etc.)</label> <br> <br>
                            <input type="radio" name="b1" id="b11" value=1 onclick="chek1()"><label for="b11">1 - SI</label> <br>
                            <input type="radio" name="b1" id="b12" value=0 onclick="chek1()"><label for="b12">2 - NO</label> <br> <br>
                            <!-- pregunta c -->
                            <label for="c1">c. Cannabis (marihuana, costo, hierba, hashish, etc.)</label> <br> <br>
                            <input type="radio" name="c1" id="c11" value=1 onclick="chek1()"><label for="c11">1 - SI</label> <br>
                            <input type="radio" name="c1" id="c12" value=0 onclick="chek1()"><label for="c12">2 - NO</label> <br> <br>
                            <!-- pregunta d -->
                            <label for="d1">d. Otras drogas (cocaína, anfetaminas, inhalantes, tranquilizantes, alucinógenos, opiáceos.)</label> <br> <br>
                            <input type="radio" name="d1" id="d11" value=1 onclick="chek1()"><label for="d11">1 - SI</label> <br>
                            <input type="radio" name="d1" id="d12" value=0 onclick="chek1()"><label for="d12">2 - NO</label> <br> <br>

                            <!-- INPUT OCULTO PARA CONTROLAR LOS ENVIOS DE INFORMACION POR METODO POST-->
                            <input type="hidden" name="pregunta" id="pregunta" value="1">
                            <!-- SI LA PERSONA PONE QUE NO LO HA HECHO LINKEALO A LA PREGUNTA 9 Y BLOQUEA TODAS LAS PREGUNTAS DE AQUI ABAJO -->
                        </div>

                        <!-- SEGUNDA parte de consumo de drogas -->
                        <div id="Pregunta2">
                            <h4>2. Con que frecuencia has consumido las sustancias que mencionaste en los últimos tres meses?</h4>
                            <!-- pregunta a -->
                            <label for="a2">a. Tabaco (cigarrillos, cigarros habanos, tabaco de mascar, pipa, etc.)</label> <br> <br>
                            <input type="radio" name="a2" id="a21" value=0 onclick="chek1()"><label for="a21"> NUNCA</label> <br> <br>
                            <input type="radio" name="a2" id="a22" value=2 onclick="chek1()"><label for="a22"> 1 O 2 VECES</label> <br><br>
                            <input type="radio" name="a2" id="a23" value=3 onclick="chek1()"><label for="a23"> CADA MES</label> <br> <br>
                            <input type="radio" name="a2" id="a24" value=4 onclick="chek1()"><label for="a24"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="a2" id="a25" value=6 onclick="chek1()"><label for="a25"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- pregunta b -->
                            <label for="b2">b. Bebidas alcohólicas (cerveza, vino, licores, destilados, etc.)</label> <br> <br>
                            <input type="radio" name="b2" id="b21" value=0 onclick="chek1()"><label for="b21"> NUNCA</label> <br> <br>
                            <input type="radio" name="b2" id="b22" value=2 onclick="chek1()"><label for="b22"> 1 O 2 VECES</label> <br> <br>
                            <input type="radio" name="b2" id="b23" value=3 onclick="chek1()"><label for="b23"> CADA MES</label> <br> <br>
                            <input type="radio" name="b2" id="b24" value=4 onclick="chek1()"><label for="b24"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="b2" id="b25" value=6 onclick="chek1()"><label for="b25"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- pregunta c -->
                            <label for="c2">c. Cannabis (marihuana, costo, hierba, hashish, etc.)</label> <br> <br>
                            <input type="radio" name="c2" id="c21" value=0 onclick="chek1()"><label for="c21"> NUNCA</label> <br> <br>
                            <input type="radio" name="c2" id="c22" value=2 onclick="chek1()"><label for="c22"> 1 O 2 VECES</label> <br><br>
                            <input type="radio" name="c2" id="c23" value=3 onclick="chek1()"><label for="c23"> CADA MES</label> <br> <br>
                            <input type="radio" name="c2" id="c24" value=4 onclick="chek1()"><label for="c24"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="c2" id="c25" value=6 onclick="chek1()"><label for="c25"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- pregunta d -->
                            <label for="d2">d. Otras drogas (cocaína, anfetaminas, inhalantes, tranquilizantes, alucinógenos, opiáceos.)</label> <br> <br>
                            <input type="radio" name="d2" id="d21" value=0 onclick="chek1()"><label for="d21"> NUNCA</label> <br> <br>
                            <input type="radio" name="d2" id="d22" value=2 onclick="chek1()"><label for="d22"> 1 O 2 VECES</label> <br><br>
                            <input type="radio" name="d2" id="d23" value=3 onclick="chek1()"><label for="d23"> CADA MES</label> <br> <br>
                            <input type="radio" name="d2" id="d24" value=4 onclick="chek1()"><label for="d24"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="d2" id="d25" value=6 onclick="chek1()"><label for="d25"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- SI LA PERSONA PONE QUE NO LO HA HECHO LINKEALO A LA PREGUNTA 9 Y BLOQUEA TODAS LAS PREGUNTAS DE AQUI ABAJO -->
                        </div>

                        <!-- TERCERA parte de consumo de drogas -->
                        <div id="Pregunta3">
                            <h4>3. En los últimos tres meses, ¿Con qué frecuencia has tenido deseos fuertes o ansias de consumir la droga mencionada?</h4>
                            <!-- pregunta a -->
                            <label for="a3">a. Tabaco (cigarrillos, cigarros habanos, tabaco de mascar, pipa, etc.)</label> <br> <br>
                            <input type="radio" name="a3" id="a31" value=0><label for="a31"> NUNCA</label> <br> <br>
                            <input type="radio" name="a3" id="a32" value=2><label for="a32"> 1 O 2 VECES</label> <br><br>
                            <input type="radio" name="a3" id="a33" value=3><label for="a33"> CADA MES</label> <br> <br>
                            <input type="radio" name="a3" id="a34" value=4><label for="a34"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="a3" id="a35" value=6><label for="a35"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- pregunta b -->
                            <label for="b3">b. Bebidas alcohólicas (cerveza, vino, licores, destilados, etc.)</label> <br> <br>
                            <input type="radio" name="b3" id="b31" value=0><label for="b31"> NUNCA</label> <br> <br>
                            <input type="radio" name="b3" id="b32" value=2><label for="b32"> 1 O 2 VECES</label> <br> <br>
                            <input type="radio" name="b3" id="b33" value=3><label for="b33"> CADA MES</label> <br> <br>
                            <input type="radio" name="b3" id="b34" value=4><label for="b34"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="b3" id="b35" value=6><label for="b35"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- pregunta c -->
                            <label for="c3">c. Cannabis (marihuana, costo, hierba, hashish, etc.)</label> <br> <br>
                            <input type="radio" name="c3" id="c31" value="0"><label for="c31"> NUNCA</label> <br> <br>
                            <input type="radio" name="c3" id="c32" value="2"><label for="c32"> 1 O 2 VECES</label> <br><br>
                            <input type="radio" name="c3" id="c33" value="3"><label for="c33"> CADA MES</label> <br> <br>
                            <input type="radio" name="c3" id="c34" value="4"><label for="c34"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="c3" id="c35" value="6"><label for="c35"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- pregunta d -->
                            <label for="d3">d. Otras drogas (cocaína, anfetaminas, inhalantes, tranquilizantes, alucinógenos, opiáceos.)</label> <br> <br>
                            <input type="radio" name="d3" id="d31" value="0"><label for="d31"> NUNCA</label> <br> <br>
                            <input type="radio" name="d3" id="d32" value="2"><label for="d32"> 1 O 2 VECES</label> <br><br>
                            <input type="radio" name="d3" id="d33" value="3"><label for="d33"> CADA MES</label> <br> <br>
                            <input type="radio" name="d3" id="d34" value="4"><label for="d34"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="d3" id="d35" value="6"><label for="d35"> A DIARIO O CASI DIARIO</label> <br> <br>
                        </div>

                         <!-- CUARTA parte de consumo de drogas -->
                         <div id="Pregunta4">
                            <h4>4. En los últimos tres meses, ¿Con qué frecuencia te ha llevado su consumo de esta droga a problemas de salud, sociales, legales o económicos?</h4>
                            <!-- pregunta a -->
                            <label for="a4">a. Tabaco (cigarrillos, cigarros habanos, tabaco de mascar, pipa, etc.)</label> <br> <br>
                            <input type="radio" name="a4" id="a41" value="0"><label for="a41"> NUNCA</label> <br> <br>
                            <input type="radio" name="a4" id="a42" value="2"><label for="a42"> 1 O 2 VECES</label> <br><br>
                            <input type="radio" name="a4" id="a43" value="3"><label for="a43"> CADA MES</label> <br> <br>
                            <input type="radio" name="a4" id="a44" value="4"><label for="a44"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="a4" id="a45" value="6"><label for="a45"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- pregunta b -->
                            <label for="b4">b. Bebidas alcohólicas (cerveza, vino, licores, destilados, etc.)</label> <br> <br>
                            <input type="radio" name="b4" id="b41" value="0"><label for="b41"> NUNCA</label> <br> <br>
                            <input type="radio" name="b4" id="b42" value="2"><label for="b42"> 1 O 2 VECES</label> <br> <br>
                            <input type="radio" name="b4" id="b43" value="3"><label for="b43"> CADA MES</label> <br> <br>
                            <input type="radio" name="b4" id="b44" value="4"><label for="b44"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="b4" id="b45" value="6"><label for="b45"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- pregunta c -->
                            <label for="c4">c. Cannabis (marihuana, costo, hierba, hashish, etc.)</label> <br> <br>
                            <input type="radio" name="c4" id="c41" value="0"><label for="c41"> NUNCA</label> <br> <br>
                            <input type="radio" name="c4" id="c42" value="2"><label for="c42"> 1 O 2 VECES</label> <br><br>
                            <input type="radio" name="c4" id="c43" value="3"><label for="c43"> CADA MES</label> <br> <br>
                            <input type="radio" name="c4" id="c44" value="4"><label for="c44"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="c4" id="c45" value="6"><label for="c45"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- pregunta d -->
                            <label for="d4">d. Otras drogas (cocaína, anfetaminas, inhalantes, tranquilizantes, alucinógenos, opiáceos.)</label> <br> <br>
                            <input type="radio" name="d4" id="d41" value="0"><label for="d41"> NUNCA</label> <br> <br>
                            <input type="radio" name="d4" id="d42" value="2"><label for="d42"> 1 O 2 VECES</label> <br><br>
                            <input type="radio" name="d4" id="d43" value="3"><label for="d43"> CADA MES</label> <br> <br>
                            <input type="radio" name="d4" id="d44" value="4"><label for="d44"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="d4" id="d45" value="6"><label for="d45"> A DIARIO O CASI DIARIO</label> <br> <br>
                        </div>

                        <!-- QUINTA parte de consumo de drogas -->
                        <div id="Pregunta5">
                            <h4>5. En los últimos tres meses, ¿Con qué frecuencia dejaste de hacer lo que se esperaba de ti habitualmente por el consumo de estas drogas?</h4>
                            <!-- pregunta a -->
                            <label for="a5">a. Tabaco (cigarrillos, cigarros habanos, tabaco de mascar, pipa, etc.)</label> <br> <br>
                            <input type="radio" name="a5" id="a51" value=0><label for="a51"> NUNCA</label> <br> <br>
                            <input type="radio" name="a5" id="a52" value=2><label for="a52"> 1 O 2 VECES</label> <br><br>
                            <input type="radio" name="a5" id="a53" value=3><label for="a53"> CADA MES</label> <br> <br>
                            <input type="radio" name="a5" id="a54" value=4><label for="a54"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="a5" id="a55" value=6><label for="a55"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- pregunta b -->
                            <label for="b5">b. Bebidas alcohólicas (cerveza, vino, licores, destilados, etc.)</label> <br> <br>
                            <input type="radio" name="b5" id="b51" value=0><label for="b51"> NUNCA</label> <br> <br>
                            <input type="radio" name="b5" id="b52" value=2><label for="b52"> 1 O 2 VECES</label> <br> <br>
                            <input type="radio" name="b5" id="b53" value=3><label for="b53"> CADA MES</label> <br> <br>
                            <input type="radio" name="b5" id="b54" value=4><label for="b54"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="b5" id="b55" value=6><label for="b55"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- pregunta c -->
                            <label for="c5">c. Cannabis (marihuana, costo, hierba, hashish, etc.)</label> <br> <br>
                            <input type="radio" name="c5" id="c51" value=0><label for="c51"> NUNCA</label> <br> <br>
                            <input type="radio" name="c5" id="c52" value=2><label for="c52"> 1 O 2 VECES</label> <br><br>
                            <input type="radio" name="c5" id="c53" value=3><label for="c53"> CADA MES</label> <br> <br>
                            <input type="radio" name="c5" id="c54" value=4><label for="c54"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="c5" id="c55" value=6><label for="c55"> A DIARIO O CASI DIARIO</label> <br> <br>
                            <!-- pregunta d -->
                            <label for="d5">d. Otras drogas (cocaína, anfetaminas, inhalantes, tranquilizantes, alucinógenos, opiáceos.)</label> <br> <br>
                            <input type="radio" name="d5" id="d51" value=0><label for="d51"> NUNCA</label> <br> <br>
                            <input type="radio" name="d5" id="d52" value=2><label for="d52"> 1 O 2 VECES</label> <br><br>
                            <input type="radio" name="d5" id="d53" value=3><label for="d53"> CADA MES</label> <br> <br>
                            <input type="radio" name="d5" id="d54" value=4><label for="d54"> CADA SEMANA</label> <br> <br>
                            <input type="radio" name="d5" id="d55" value=6><label for="d55"> A DIARIO O CASI DIARIO</label> <br> <br>
                        </div>

                        <!-- SEXTA parte de consumo de drogas -->
                        <div id="Pregunta6">
                            <h4>6. ¿Un amigo, un familiar o alguien más alguna vez ha mostrado preocupación por tu consumo de estas drogas?</h4>
                            <!-- pregunta a -->
                            <label for="a6">a. Tabaco (cigarrillos, cigarros habanos, tabaco de mascar, pipa, etc.)</label> <br> <br>
                            <input type="radio" name="a6" id="a61" value=0><label for="a61"> NUNCA</label> <br> <br>
                            <input type="radio" name="a6" id="a62" value=6><label for="a62"> SI, EN LOS ULTIMOS 3 MESES</label> <br><br>
                            <input type="radio" name="a6" id="a63" value=3><label for="a63"> SI, PERO NO EN LOS ULTIMOS 3 MESES</label> <br> <br>
        
                            <!-- pregunta b -->
                            <label for="b6">b. Bebidas alcohólicas (cerveza, vino, licores, destilados, etc.)</label> <br> <br>
                            <input type="radio" name="b6" id="b61" value=0><label for="b61"> NUNCA</label> <br> <br>
                            <input type="radio" name="b6" id="b62" value=6><label for="b62"> SI, EN LOS ULTIMOS 3 MESES</label> <br> <br>
                            <input type="radio" name="b6" id="b63" value=3><label for="b63"> SI, PERO NO EN LOS ULTIMOS 3 MESES</label> <br> <br>
        
                            <!-- pregunta c -->
                            <label for="c6">c. Cannabis (marihuana, costo, hierba, hashish, etc.)</label> <br> <br>
                            <input type="radio" name="c6" id="c61" value=0><label for="c61"> NUNCA</label> <br> <br>
                            <input type="radio" name="c6" id="c62" value=6><label for="c62"> SI, EN LOS ULTIMOS 3 MESES</label> <br><br>
                            <input type="radio" name="c6" id="c63" value=3><label for="c63"> SI, PERO NO EN LOS ULTIMOS 3 MESES</label> <br> <br>
                            <!-- pregunta d -->
                            <label for="d6">d. Otras drogas (cocaína, anfetaminas, inhalantes, tranquilizantes, alucinógenos, opiáceos.)</label> <br> <br>
                            <input type="radio" name="d6" id="d61" value=0><label for="d61"> NUNCA</label> <br> <br>
                            <input type="radio" name="d6" id="d62" value=6><label for="d62"> SI, EN LOS ULTIMOS 3 MESES</label> <br><br>
                            <input type="radio" name="d6" id="d63" value=3><label for="d63"> SI, PERO NO EN LOS ULTIMOS 3 MESES</label> <br> <br>
                        </div>

                        <!-- SEPTIMA parte de consumo de drogas -->
                        <div id="Pregunta7">
                            <h4>7. ¿HAS INTENTADO ALGUNA VEZ CONTROLAR, REDUCIR O DEJAR DE CONSUMIR ESTAS DROGAS Y NO LO HAS LOGRADO?</h4>
                            <!-- pregunta a -->
                            <label for="a7">a. Tabaco (cigarrillos, cigarros habanos, tabaco de mascar, pipa, etc.)</label> <br> <br>
                            <input type="radio" name="a7" id="a71" value=0><label for="a71"> NUNCA</label> <br> <br>
                            <input type="radio" name="a7" id="a72" value=6><label for="a72"> SI, EN LOS ULTIMOS 3 MESES</label> <br><br>
                            <input type="radio" name="a7" id="a73" value=3><label for="a73"> SI, PERO NO EN LOS ULTIMOS 3 MESES</label> <br> <br>
        
                            <!-- pregunta b -->
                            <label for="b7">b. Bebidas alcohólicas (cerveza, vino, licores, destilados, etc.)</label> <br> <br>
                            <input type="radio" name="b7" id="b71" value=0><label for="b71"> NUNCA</label> <br> <br>
                            <input type="radio" name="b7" id="b72" value=6><label for="b72"> SI, EN LOS ULTIMOS 3 MESES</label> <br> <br>
                            <input type="radio" name="b7" id="b73" value=3><label for="b73"> SI, PERO NO EN LOS ULTIMOS 3 MESES</label> <br> <br>
        
                            <!-- pregunta c -->
                            <label for="c7">c. Cannabis (marihuana, costo, hierba, hashish, etc.)</label> <br> <br>
                            <input type="radio" name="c7" id="c71" value=0><label for="c71"> NUNCA</label> <br> <br>
                            <input type="radio" name="c7" id="c72" value=6><label for="c72"> SI, EN LOS ULTIMOS 3 MESES</label> <br><br>
                            <input type="radio" name="c7" id="c73" value=3><label for="c73"> SI, PERO NO EN LOS ULTIMOS 3 MESES</label> <br> <br>
                            <!-- pregunta d -->
                            <label for="d7">d. Otras drogas (cocaína, anfetaminas, inhalantes, tranquilizantes, alucinógenos, opiáceos.)</label> <br> <br>
                            <input type="radio" name="d7" id="d71" value=0><label for="d71"> NUNCA</label> <br> <br>
                            <input type="radio" name="d7" id="d72" value=6><label for="d72"> SI, EN LOS ULTIMOS 3 MESES</label> <br><br>
                            <input type="radio" name="d7" id="d73" value=3><label for="d73"> SI, PERO NO EN LOS ULTIMOS 3 MESES</label> <br> <br>
                        </div>

                        <!-- OCTAVA parte de consumo de drogas -->
                        <div id="Pregunta8">
                            <!-- <h4>. ¿HAS INTENTADO ALGUNA VEZ CONTROLAR, REDUCIR O DEJAR DE CONSUMIR ESTAS DROGAS Y NO LO HAS LOGRADO?</h4> -->
                            <!-- pregunta a -->
                            <h4><label for="a7">8.¿HAS CONSUMIDO ALGUNA VEZ ALGUNA DROGA POR VIA INYECTADA?</label></h4>
                            <input type="radio" name="a8" id="a8" value=0><label for="a8"> NUNCA</label> <br> <br>
                            <input type="radio" name="a8" id="a8" value=2><label for="a8"> SI, EN LOS ULTIMOS 3 MESES</label> <br><br>
                            <input type="radio" name="a8" id="a8" value=1><label for="a8"> SI, PERO NO EN LOS ULTIMOS 3 MESES</label> <br> <br>
                        </div>
                        <button onclick="calc()" type="button">Calcular riesgo</button>
                        <div id="resultados1">
                            <!-- AQUI VAN LOS RESULTADOS QUE DEBEN DE MARCAR DEL EXCEL -->
                            <h5>Resultados de riesgo por Tabaco:</h5><div id=resTabaco></div>
                            <h5>Resultados de riesgo por Alcohol:</h5><div id=resAlcohol></div>
                            <h5>Resultados de riesgo por Cannabis:</h5><div id=resCannabis></div>
                            <h5>Resultados de riesgo por Otras drogas:</h5> <div id=resOtras></div>
                        </div>
                        <hr>

                        <!-- segunda parte del formulario CONSUMO DE ALCOHOL -->
                        <h3>CONSUMO DE ALCOHOL</h3>
                        <p id="legenda">Responde a cada pregunta según se aplique a tu condición actual</p>
                        <!-- PRIMERA PARTE CONSUMO DE ALCOHOL -->
                        <!-- pregunta 9 -->
                        <h4><label for="a9">9.¿Con qué frecuencia consumes alguna bebida alcohólica?</label></h4>
                        <input type="radio" name="a9" id="a9" value="0"><label for="a9">a. NUNCA</label> <br> <br>
                        <input type="radio" name="a9" id="a9" value="1"><label for="a9">b. 1 0 MENOS VECES AL MES</label> <br><br>
                        <input type="radio" name="a9" id="a9" value="2"><label for="a9">c. 2 A 4 VECES AL MES</label> <br> <br>
                        <input type="radio" name="a9" id="a9" value="3"><label for="a9">d. 2 O 3 VECES A LA SEMANA</label> <br> <br>
                        <!-- SI CONTESTA NUNCA PASARLO A LA PREGUNTA 1 DE LA SECCIÓN DE SALUD SEXUAL -->
                        <!-- pregunta 10 -->
                        <h4><label for="a10">10. ¿Cuántas bebidas alcohólicas consumes normalmente los días que bebes?</label></h4> <br> <br>
                        <input type="radio" name="a10" id="a10" value="0"><label for="a10">a. 1 O 2 </label> <br> <br>
                        <input type="radio" name="a10" id="a10" value="1"><label for="a10">b. 3 O 4</label> <br><br>
                        <input type="radio" name="a10" id="a10" value="2"><label for="a10">c. 5 O 6</label> <br> <br>
                        <input type="radio" name="a10" id="a10" value="3"><label for="a10">d. 7 A 9 </label> <br> <br>
                        <!-- <input type="radio" name="d4" id="d4" value="6"><label for="d4"> A DIARIO O CASI DIARIO</label> <br> <br> -->
                        <!-- pregunta 11 -->
                        <h4><label for="a11">11. ¿Con qué frecuencia te tomas 6 o más bebidas alcohólicas en un solo día?</label></h4> <br> <br>
                        <input type="radio" name="a11" id="a11" value="0"><label for="a11">a. NUNCA</label> <br> <br>
                        <input type="radio" name="a11" id="a11" value="1"><label for="a11">b. MENOS DE UNA VEZ AL MES</label> <br><br>
                        <input type="radio" name="a11" id="a11" value="2"><label for="a11">c. MENSUALMENTE</label> <br> <br>
                        <input type="radio" name="a11" id="a11" value="3"><label for="a11">d. SEMANALMENTE</label> <br> <br>
                        <!-- pregunta 12 -->
                        <h4><label for="a12">12. ¿Con qué frecuencia, en el curso del último año, has sido incapaz de parar de beber una vez que habías empezado?</label></h4> <br> <br>
                        <input type="radio" name="a12" id="a12" value="0"><label for="a12">a. NUNCA</label> <br> <br>
                        <input type="radio" name="a12" id="a12" value="1"><label for="a12">b. MENOS DE UNA VEZ AL MES</label> <br><br>
                        <input type="radio" name="a12" id="a12" value="2"><label for="a12">c. MENSUALMENTE</label> <br> <br>
                        <input type="radio" name="a12" id="a12" value="3"><label for="a12">d. SEMANALMENTE</label> <br> <br>
                        <!-- pregunta 13 -->
                        <h4><label for="a13">13. ¿Con qué frecuencia, en el curso del último año, no pudiste cumplir con tus obligaciones porque habías bebido?</label></h4> <br> <br>
                        <input type="radio" name="a13" id="a13" value="0"><label for="a13">a. NUNCA</label> <br> <br>
                        <input type="radio" name="a13" id="a13" value="1"><label for="a13">b. MENOS DE UNA VEZ AL MES</label> <br><br>
                        <input type="radio" name="a13" id="a13" value="2"><label for="a13">c. MENSUALMENTE</label> <br> <br>
                        <input type="radio" name="a13" id="a13" value="3"><label for="a13">d. SEMANALMENTE</label> <br> <br>
                        <!-- pregunta 14 -->
                        <h4><label for="a14">14. ¿Con qué frecuencia, en el curso del último año, has necesitado beber en ayunas para recuperarte después de haber bebido mucho el día anterior?</label></h4> <br> <br>
                        <input type="radio" name="a14" id="a14" value="0"><label for="a14">a. NUNCA</label> <br> <br>
                        <input type="radio" name="a14" id="a14" value="1"><label for="a14">b. MENOS DE UNA VEZ AL MES</label> <br><br>
                        <input type="radio" name="a14" id="a14" value="2"><label for="a14">c. MENSUALMENTE</label> <br> <br>
                        <input type="radio" name="a14" id="a14" value="3"><label for="a14">d. SEMANALMENTE</label> <br> <br>    
                        <!-- pregunta 15 -->
                        <h4><label for="a15">15. ¿Con qué frecuencia, en el curso del último año, has tenido remordimientos o sentimientos de culpa después de haber bebido?</label></h4> <br> <br>
                        <input type="radio" name="a15" id="a15" value="0"><label for="a15">a. NUNCA</label> <br> <br>
                        <input type="radio" name="a15" id="a15" value="1"><label for="a15">b. MENOS DE UNA VEZ AL MES</label> <br><br>
                        <input type="radio" name="a15" id="a15" value="2"><label for="a15">c. MENSUALMENTE</label> <br> <br>
                        <input type="radio" name="a15" id="a15" value="3"><label for="a15">d. SEMANALMENTE</label> <br> <br> 
                        <!-- pregunta 16 -->
                        <h4><label for="a16">16. ¿Con qué frecuencia, en el curso del último año, no has podido recordar lo que sucedió la noche anterior porque habías estado bebiendo?</label></h4> <br> <br>
                        <input type="radio" name="a16" id="a16" value="0"><label for="a16">a. NUNCA</label> <br> <br>
                        <input type="radio" name="a16" id="a16" value="1"><label for="a16">b. MENOS DE UNA VEZ AL MES</label> <br><br>
                        <input type="radio" name="a16" id="a16" value="2"><label for="a16">c. MENSUALMENTE</label> <br> <br>
                        <input type="radio" name="a16" id="a16" value="3"><label for="a16">d. SEMANALMENTE</label> <br> <br> 
                        <!-- pregunta 17 -->
                        <h4><label for="a17">17. ¿Tú o alguna otra persona han resultado heridos porque habías bebido?</label></h4>
                        <input type="radio" name="a17" id="a17" value="0"><label for="a17"> NUNCA</label> <br> <br>
                        <input type="radio" name="a17" id="a17" value="1"><label for="a17"> SI, PERO NO EN EL CURSO DEL ULTIMO AÑO</label> <br><br>
                        <input type="radio" name="a17" id="a17" value="2"><label for="a17"> SI, EN EL ULTIMO AÑO</label> <br> <br>
                        <!-- pregunta 18 -->
                        <h4><label for="a18">18. ¿Algún familiar, amigo, médico o profesional sanitario han mostrado preocupación por tu consumo de bebidas alcohólicas, o te han sugerido que dejes de beber?</label></h4>
                        <input type="radio" name="a18" id="a18" value="0"><label for="a18"> NUNCA</label> <br> <br>
                        <input type="radio" name="a18" id="a18" value="1"><label for="a18"> SI, PERO NO EN EL CURSO DEL ULTIMO AÑO</label> <br><br>
                        <input type="radio" name="a18" id="a18" value="2"><label for="a18"> SI, EN EL ULTIMO AÑO</label> <br> <br>
                        <div>
                            <!-- AQUI VA LA PUNTUACIÓN DE ESTA PARTE DE ALCOHOL -->
                        </div>
                        <hr>
                        <div>
                            <!-- Aqui va la puntuación global de la persona----------------------------------- -->
                        </div>
                    </form>
                </fieldset>

            </article>
            <!-- aqui termina CONSUMO DE SUSTANCIAS -->

            <!-- AQUI COMIENZA SALUD SEXUAL -->
            <article class="saludsex" id="saludsex">
                <fieldset>
                    <legend>SALUD SEXUAL</legend>
                    <form action="#">
                        <h3>SALUD SEXUAL</h3>
                        <p id="legenda">Responde a cada pregunta según se aplique a tu condición actual</p>
                        <!-- pregunta 1 -->
                        <h4><label for="sex1">1. ¿Has tenido relaciones sexuales?</label></h4>
                        <input type="radio" name="sex1" id="sex1" value="0"><label for="sex1"> NO</label> <br> <br>
                        <input type="radio" name="sex1" id="sex1" value="1"><label for="sex1"> SI</label> <br><br>
                        <!-- SI PONE QUE NO FINALIZA LA ENCUESTA -->
                        <!-- pregunta 2 -->
                        <h4><label for="sex2">2. ¿Has tenido sexo de alto riesgo (bajo el influjo del alcohol u otra droga, servidores (as) sexuales, más de una pareja en un mismo acto)?</label></h4>
                        <input type="radio" name="sex2" id="sex2" value="0"><label for="sex2"> NO</label> <br> <br>
                        <input type="radio" name="sex2" id="sex2" value="1"><label for="sex2"> SI</label> <br><br>
                        <!-- pregunta 3 -->
                        <h4><label for="sex3">3. ¿Has tenido sexo sin protección?</label></h4>
                        <input type="radio" name="sex3" id="sex3" value="0"><label for="sex3"> NO</label> <br> <br>
                        <input type="radio" name="sex3" id="sex3" value="1"><label for="sex3"> SI</label> <br><br>
                        <!-- pregunta 4 -->
                        <h4><label for="sex4">4. ¿Tú o tu pareja han tenido un embarazo no planeado?</label></h4>
                        <input type="radio" name="sex4" id="sex4" value="0"><label for="sex4"> NO</label> <br> <br>
                        <input type="radio" name="sex4" id="sex4" value="1"><label for="sex4"> SI</label> <br><br>
                        <!-- pregunta 5 -->
                        <h4><label for="sex5">5. ¿Has usado algun metodo anticonceptivo? </label></h4>
                        <input type="radio" name="sex5" id="sex5" value="0"><label for="sex5"> NO</label> <br> <br>
                        <input type="radio" name="sex5" id="sex5" value="1"><label for="sex5"> SI</label> <br><br>
                        <!-- pregunta 6 -->
                        <h4><label for="sex6">6. ¿Tú o tu pareja han  tenido algún aborto?</label></h4>
                        <input type="radio" name="sex6" id="sex6" value="0"><label for="sex6"> NO</label> <br> <br>
                        <input type="radio" name="sex6" id="sex6" value="1"><label for="sex6"> SI</label> <br><br>
                        <!-- pregunta 7 -->
                        <h4><label for="sex7">7. ¿Has tenido Enfermedades de Transmisión Sexual?</label></h4>
                        <input type="radio" name="sex7" id="sex7" value="0"><label for="sex7"> NO</label> <br> <br>
                        <input type="radio" name="sex7" id="sex7" value="1"><label for="sex7"> SI</label> <br><br>
                        <!-- pregunta 8 -->
                        <h4><label for="sex8">8. ¿Te has realizado pruebas de deteccion de Enfermedades de Transmisión Sexual?</label></h4>
                        <input type="radio" name="sex8" id="sex8" value="0"><label for="sex8"> NO</label> <br> <br>
                        <input type="radio" name="sex8" id="sex8" value="1"><label for="sex8"> SI</label> <br><br>
                        <!-- pregunta 9 -->
                        <h4><label for="sex9">9. ¿Has asistido a alguna consulta sobre tu salud sexual y reproductiva?</label></h4>
                        <input type="radio" name="sex9" id="sex9" value="0"><label for="sex9"> NO</label> <br> <br>
                        <input type="radio" name="sex9" id="sex9" value="1"><label for="sex9"> SI</label> <br><br>
                        <!-- pregunta 10 -->
                        <h4><label for="sex10">10. ¿Realizas las acciones preventivas para tu salud sexual (papanicolau, exploración de mamas, exploración testicular, examen prostático, etc.)?</label></h4>
                        <input type="radio" name="sex10" id="sex10" value="0"><label for="sex10"> NO</label> <br> <br>
                        <input type="radio" name="sex10" id="sex10" value="1"><label for="sex10"> SI</label> <br><br>
                    </form>
                </fieldset>
            </article>
        </section>
    </div>

    
    <!-- aqui va el footer -->
    <footer>
        <div class="container-footer">
            <div class="columna1">
                <p id="creditos">Créditos</p>
                <div class="columna1-content">
                    <p class="pes">PES 2.0</p>                    
                    <p class="columna1-texto">
                        Instrumento desarrollado por colaboradores del programa Universidad Saludable con el apoyo del <b>Depto. de Redes y Telecomunicaciones.</b>
                    </p>
                    <p class="columna1-texto">
                        Universidad Autónoma de Aguascalientes. 2015.
                    </p>    
                </div>
            </div>
            <div class="columna2">                
                <p id="recursos" class="margin-columna2">Recursos</p>
                <a href="#" class="margin-columna2">🌐Alumnos de nuevo ingreso: Manual de uso</a>                  
                <p class="margin-columna2">Contacto</p>                    
                <p class="infouaa-columna2">    
                    Universidad Saludable: Unidad Médico Didáctica (Edif. 101). Planta Alta.
                    <br>
                    Teléfono: 9107400 ext. 53513 y 53514.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>