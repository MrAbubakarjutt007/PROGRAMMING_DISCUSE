<?php
include("includes/_conectdb.php");
$id = $_GET["threadid"];
$catid =$_GET["catid"];
echo$id;
$run = mysqli_query($conn ,"DELETE FROM `threads` WHERE 	thread_id= $id");
header('location: /myforam/threadlist.php?catid='.$catid);
?>