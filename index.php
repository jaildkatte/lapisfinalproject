<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
        </table>
    </body>
</html> 
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>  
       <form action="addshoe.php">
           <label for='brand'>BRAND</label>
            <input type="text" id="brand" name="brand">
            <label for='color'>COLOR</label>
            <input type="text" id="color" name="color">
            <label for='size'>SIZE</label>
            <input type="text" id="size" name="size">
             <label for='price'>PRICE</label>
            <input type="text" id="price" name="price">
            <input type="submit" value="ADD" name="addshoe"/>
            </form>
        <table>
            <tr>
                <th>OID</th>
                <th>Brand</th>
                <th>COLOR</th>
                <th>SIZE</th>
                <th>PRICE</th>
                <th>ACTION</th>
            </tr>
       
     <?php
        $connection = mysqli_connect("localhost","root","","im_lapisdb");
        $sql = "SELECT * FROM shoes";
       
       $result = $connection->query($sql);
     
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['Oid']."</td>";
            echo "<td>".$row['Brand']."</td>";
            echo "<td>".$row['Color']."</td> ";
            echo "<td>".$row['Size']."</td> ";
            echo "<td>".$row['Price']."</td> ";
            echo "<td>"
            . "<a class=\"btn\"href=\"editshoeview.php?Oid=".$row['Oid']."\">Edit</a>"
                    . "<a class=\"btn\"href=\"delete.php?Oid=".$row['Oid']."\" onclick=\"return confirm('Delete imlapis_db?')\">Delete</a>"
                    . "</td> ";
            echo "</tr>";
        }
       $connection->close();
     
     ?>
        </table>
    </body>
</html>
