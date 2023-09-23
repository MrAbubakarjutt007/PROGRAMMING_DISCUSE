<?php
include("includes/_conectdb.php");
if(isset($_GET['userid'])){
    $id = $_GET["userid"];
    echo$id;
    $run = mysqli_query($conn ,"DELETE FROM `users_data` WHERE 	User_id = $id");
    header('location: /myforam/admin/allusers.php');
}
elseif(isset($_GET['adminid'])){
    $id = $_GET["adminid"];
    echo$id;
    $run = mysqli_query($conn ,"DELETE FROM `admin` WHERE 	admin_id = $id");
    header('location: /myforam/admin/alladmins.php');
}

?>