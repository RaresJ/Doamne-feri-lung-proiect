<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include 'connection.php';
            $sql = "SELECT * FROM flori  WHERE ID='{$_GET['id']}'";
            $query = mysqli_query($con,$sql)or die(mysqli_error($con));
            $row = mysqli_fetch_array($query);
            echo "Nume: ".$row['nume'].'<br>';
            echo "Culoare: ".$row['culoare'].'<br>';
            echo "Marime: ".$row['marime'].'<br>';
            echo "Pret: ".$row['pret'].'<br>';
        ?>
        <a href="index.php">Back</a>
    </body>
</html>
