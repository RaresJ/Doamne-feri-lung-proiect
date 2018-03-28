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
            include "connection.php";
            $sql="DELETE FROM flori WHERE id='{$_GET['id']}'";
            $query = mysqli_query($con, $sql)or die(mysqli_error($con));
            header('Location:index.php');
        ?>
    </body>
</html>
