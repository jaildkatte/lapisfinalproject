<?php

$Oid = $_GET['Oid'];


$connection = mysqli_connect("localhost","root","","im_lapisdb");
     
     $sql = "DELETE FROM shoes WHERE Oid= $Oid";
     
     $result = $connection->query($sql);
     
     $connection->close();
     
     header("location:index.php");
