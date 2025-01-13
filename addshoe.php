<?php
     $brnd = $_GET['brand'];
     $clr = $_GET['color'];
     $sz = $_GET['size'];
     $prc = $_GET['price'];
     
     echo $brnd." ".$clr."sz".$sz."prc".$prc;
     
     $connection = mysqli_connect("localhost","root","","im_lapisdb");
     
     $sql = "INSERT INTO shoes VALUES(0,'$brnd','$clr','$sz','$prc')";
     
     $result = $connection->query($sql);
     
     $connection->close();
     
     header("location:index.php");
