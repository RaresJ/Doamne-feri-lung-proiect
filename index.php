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
            $sql= 'SELECT * FROM flori ORDER BY pret ASC';
            $query = mysqli_query($con, $sql) or die(mysql_error($con));
        ?>
        <table width="70" cellpadding="4" cellspace="4">
            <tr>
                <th>Nume</th>
                <th>Culoare</th>
                <th>Marime</th>
                <th>Pret</th>
                <td colspan="2"><strong>Actions</strong></td>
            </tr>
            <?php while($row= mysqli_fetch_array($query)){ ?>
            <tr>
                <td><?php echo $row['nume'];?></td>
                <td><?php echo $row['culoare'];?></td>
                <td><?php echo $row['marime'];?></td>
                <td><?php echo $row['pret'];?></td>
                <td><?php echo "<a href=\"view.php?id=".$row['id']."\">View<a/>"?></td>
                <td><?php echo "<a href=\"delete.php?id=".$row['id']."\">Delete<a/>"?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
    <a href="index1.php">Hi, you animal :D</a><br><br>
    <a href="search.php">Oh, hi, Mark</a><br><br>
    <a href="insert.php">Jesus</a>
</html>
