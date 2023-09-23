<?php
   // My database Conection.
   $sever = "localhost";
   $username ="root";
   $password ="";
   $database = "foram";
   $conn = mysqli_connect($sever , $username , $password , $database);
   if(!$conn){
       echo"Erorr". mysqli_connect_erorr();
   }
?>