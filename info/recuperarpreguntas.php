<?php $dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$link = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$link) { 
die('Error de coneccion ' . mysql_error()); 
} 
echo 'Coneccion Ok'; 

$query = "SELECT *FROM users"; 

// Ejecutas las consulta 
$result = mysql_query($query); 

// Check resultado 
// Si hubo un error mostras cual es 
if (!$result) { 
$message = 'Invalid query: ' . mysql_error() . " "; 
$message .= 'Whole query: ' . $query; 
die($message); 
} 

// Use result 
//Aca recorres todas las filas y te va devolviendo el resultado 
while ($row =mysql_fetch_row($result)) { 
echo $row['id_pregunta']; 
echo $row['opcion1']; 
echo $row['opcion2']; 
echo $row['opcion3'];
echo $row['opcion4']; 
echo $row['id_materia'];  
} 

//Liberas el resultado 
mysql_free_result($result); 


//Cerras coneccion 
mysql_close($link); 
?> 

