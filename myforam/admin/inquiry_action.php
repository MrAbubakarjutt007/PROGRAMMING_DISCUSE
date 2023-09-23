<?php
include("<includes/_conectdb.php");
$id = $_GET['id'];
$qury = "SELECT * FROM `contact` WHERE `Contact-id` = 1";
$run= mysqli_query($conn , $qury);
$row = mysqli_fetch_assoc($run);
$update = "UPDATE `contact` SET `Status`= 1 WHERE `Contact-id` = $id";
$run= mysqli_query($conn , $update);
header('location: inquries.php');
?>