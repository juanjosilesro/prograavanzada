<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="js/tabcontrol.js">
    <title>Document</title>
    

<script>
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
    <script>
    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}</script>
</head>
<body>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'preguntasdeseleccionmultiple')">Preguntas De Seleccion Multiple</button>
  <button class="tablinks" onclick="openCity(event, 'PreguntasDeFalsooVerdadero')">Preguntas De Falso o Verdadero</button>
  <button class="tablinks" onclick="openCity(event, 'Preguntasdecomplementacion')">Preguntas De Complementacion</button>
</div>

<!-- Tab content -->
<div id="preguntasdeseleccionmultiple" class="tabcontent">
  <h3>preguntasdeseleccionmultiple</h3>
  <p>
<div id="tab1" class="contenido">
<form action="newquestion.php" method="POST">
    <center>
    id_pregunta: <input type="text" name="txtidpregunta" ><br/>
        opcion1: <input type="text" name="txtopcion1" ><br/>
        opcion2: <input type="text" name="txtopcion2" ><br/>
        opcion3: <input type="text" name="txtopcion3" ><br/>
        opcion4: <input type="text" name="txtopcion4" ><br/>
        id_materia: <input type="text" name="txtidmateria" ><br/>

        <input type="submit" value="registrar" name="btnregistrar">
<a href="datapregmult.php">ver preguntas guardadas</a>

    </center>
       
    </form>
</div></p>
</div>

<div id="PreguntasDeFalsooVerdadero" class="tabcontent">
  <h3>Preguntas De Falso o Verdadero</h3>
  <p>
  <div id="tab1" class="contenido">
<form action="preguntaverdadofalso.php" method="POST">
    <center>
    id_preguntavof: <input type="text" name="txtidpreguntavof" ><br/>
        verdadero: <input type="text" name="txtverdadero" ><br/>
        falso: <input type="text" name="txtfalso" ><br/>
        id_materia: <input type="text" name="txtidmateria" ><br/>

        <input type="submit" value="registrar" name="btnregistrar">
<a href="verdadofalsointerfaz.php">ver preguntas guardadas</a>

    </center>
       
    </form>
</div>
  </p> 
</div>

<div id="Preguntasdecomplementacion" class="tabcontent">
  <h3>Preguntas De Complementacion</h3>
  <p>
  <div id="tab1" class="contenido">
<form action="complementacionguardar.php" method="POST">
    <center>
    id_preguntacom: <input type="text" name="txtidpreguntacom" ><br/>
        opcion: <input type="text" name="txtopcion" ><br/>
        id_materia: <input type="text" name="txtidmateria" ><br/>

        <input type="submit" value="registrar" name="btnregistrar">
<a href="complementaciondatos.php">ver preguntas guardadas</a>

    </center>
       
    </form>
</div>
  </p>
</div>







    
</body>
</html>