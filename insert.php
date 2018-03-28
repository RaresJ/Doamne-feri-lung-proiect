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
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Nume: <br><input type="text" name="nume"><br>
            Culoare: <br><input type="text" name="culoare"><br>
            Marime: <br><input type="text" name="marime"><br>
            Pret: <br><input type="text" name="pret"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
            include "connection.php";
            if(isset($_POST['submit']))
            {
                $sql = "INSERT INTO flori (nume, culoare, marime, pret) VALUES ('{$_POST['nume']}','{$_POST['culoare']}','{$_POST['marime']}','{$_POST['pret']}')";
                $query = mysqli_query($con, $sql)or die(mysqli_error($con));
                echo "Inregistrarea a fost cu succes!";
            }
        ?>
        <a href="index.php">Back</a>
    </body>
</html>
