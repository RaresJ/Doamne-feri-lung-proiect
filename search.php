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
            $sql= 'SELECT * FROM flori ';
            if(isset($_POST['search']))
            {
                $search_term = mysqli_real_escape_string($con, $_POST['search_box']);
                $sql.="WHERE nume ='{$search_term}'";
                $sql.=" OR culoare ='{$search_term}'";
            }
            $query = mysqli_query($con, $sql) or die(mysqli_error($con));
        ?>
        <form name="search_form" method="post" action="search.php">
            Search: <input type="text" name="search_box" value="">
            <input type="submit" name="search" value="Search the table">
            <input type="reset" value="Reset">
        </form>
        <table width="70" cellpadding="4" cellspace="4">
            <tr>
                <th>Nume</th>
                <th>Culoare</th>
                <th>Marime</th>
                <th>Pret</th>
                <td><strong>Actions</strong></td>
            </tr>
            <?php while($row= mysqli_fetch_array($query)){ ?>
            <tr>
                <td><?php echo $row['nume'];?></td>
                <td><?php echo $row['culoare'];?></td>
                <td><?php echo $row['marime'];?></td>
                <td><?php echo $row['pret'];?></td>
                <td><?php echo "<a href=\"view.php?id=".$row['id']."\">View<a/>"?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
