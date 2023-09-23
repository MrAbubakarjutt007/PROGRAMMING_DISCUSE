<?php
include("includes/_conectdb.php");
$id = $_GET["threadid"];
$catid =$_GET["catid"];
$back = $_GET['back'];
echo$id;
$run = mysqli_query($conn ,"DELETE FROM `threads` WHERE 	thread_id= $id");
if($back=='Q'){
    header('location: /myforam/admin/all_questions.php');
}
elseif($back=='t'){
    header('location: /myforam/admin/threadlist.php?catid='.$catid);
}

?>