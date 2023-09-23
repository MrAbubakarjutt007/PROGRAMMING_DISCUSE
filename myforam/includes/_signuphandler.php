<?php
include("_conectdb.php");
    if(isset($_POST['submit'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user_email = $_POST['email'];
            $user_name = $_POST['username'];
            $pass = $_POST['password'];
            $cpass = $_POST['cpassword'];
            $check_user_exsist = "SELECT * FROM `users_data` WHERE user_email = '$user_email'";
            $run_sql = mysqli_query($conn, $check_user_exsist);
            $result = mysqli_num_rows($run_sql);
            if($result > 0){
                $show_erorr = "Email Already registered";
                echo $show_erorr;
                exit;
            }
            else{
                $insert_data = "INSERT INTO `users_data` ( `User_email`, `User_name`, `User_pass`, `Register_Time`) 
                VALUES ( '$user_email', '$user_name', '$pass', current_timestamp());";
                $run = mysqli_query($conn , $insert_data);
                header('location: /foram?signup=true');
            }
        }
    }
?>