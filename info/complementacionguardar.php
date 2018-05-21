<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>preguntas</title>
</head>
<body>
<?php
  $server="localhost";
  $usuario="root";
  $contrasenha="";
  $bd="loginsystem";

  
  $conexion=mysqli_connect($server,$usuario,$contrasenha,$bd) 
  or die("error en la conexion");

   $id_preguntacom=$_POST['txtidpreguntacom'];
   $opcion=$_POST['txtopcion'];
   $id_materia=$_POST['txtidmateria'];

    
    $insertar="INSERT into complementacion values ('$id_preguntacom','$opcion','$id_materia')";

    $resultado=mysqli_query($conexion,$insertar)
    or die("error al ingresar preguntas");

    mysqli_close($conexion);
    echo "datos ingresados";   
//datagridview 


?>
</body>
</html>