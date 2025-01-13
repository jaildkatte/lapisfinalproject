<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>  
  <?php
       $Oid= $_GET['Oid'];
       
        $connection = mysqli_connect("localhost","root","","im_lapisdb");
        $sql = "SELECT * FROM shoes WHERE Oid=$Oid";
       $result = $connection->query($sql);
       $row = mysqli_fetch_assoc($result);
         
 ?>
       <form action="editshoe.php" method="POST">
           <input type="hidden" id="Oid" name="Oid" value="<?php echo $row['Oid'];?>">
           <label for="brand">BRAND</label>
           <input type="text" id="brand" name="brand" placeholder="brand" value="<?php echo $row['Brand'];  ?>">
           <label for="color">COLOR</label>
           <input type="text" id="color" name="color" placeholder="color" value="<?php echo $row['Color'];  ?>">
            <label for="size">SIZE</label>
              <input type="text" id="size" name="size" placeholder="size" value="<?php echo $row['Size'];  ?>">
            <label for="price">PRICE</label>
            <input type="text" id="price" name="price" placeholder="price" value="<?php echo $row['Price'];  ?>">
            <input type="submit" value="Edit" onclick="return confirm()">
          </form>
    </body>
</html>
