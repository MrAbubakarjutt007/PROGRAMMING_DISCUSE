<?php
include("includes/_conectdb.php");
$id = $_GET['id'];
echo$id;
$qury ="DELETE FROM `categories` WHERE categories_id = $id ";
$run=mysqli_query($conn,$qury);
header('location: add_catagory.php');
?>