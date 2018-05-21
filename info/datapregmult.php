<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `multpregunta` WHERE CONCAT(`id_pregunta`, `opcion1`, `opcion2`, `opcion3`,`opcion4`,`id_materia`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `multpregunta`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "loginsystem");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>filtrar y ver</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="php_html_table_data_filter.php" method="post">
            <input type="text" name="valueToSearch" placeholder="escribe para buscar"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>id_pregunta</th>
                    <th>opcion 1</th>
                    <th>opcion 2</th>
                    <th>opcion 3</th>
                    <th>opcion 4</th>
                    <th>id_materia</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id_pregunta'];?></td>
                    <td><?php echo $row['opcion1'];?></td>
                    <td><?php echo $row['opcion2'];?></td>
                    <td><?php echo $row['opcion3'];?></td>
                    <td><?php echo $row['opcion4'];?></td>
                    <td><?php echo $row['id_materia'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>
