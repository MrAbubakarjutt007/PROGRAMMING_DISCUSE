<?php
include("_conectdb.php");
    if(isset($_POST['submit'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $admin_email = $_POST['email'];
            $user_name = $_POST['username'];
            $name = $_POST['name'];
            $pass = $_POST['password'];
            $cpass = $_POST['cpassword'];
            $address = $_POST['address'];
            $check_user_exsist = "SELECT * FROM `admin` WHERE admin_email = '$admin_email'";
            $run_sql = mysqli_query($conn, $check_user_exsist);
            $result = mysqli_num_rows($run_sql);
            if($result > 0){
                $show_erorr = "Email Already registered";
                echo $show_erorr;
                exit;
            }
            else{
                $insert_data = "INSERT INTO `admin`( `admin_name`, `admin_username`, 
                `admin_email`, `address`, `admin_pass`) 
                VALUES ('$name ','$user_name','$admin_email','$address','$pass')";
                $run = mysqli_query($conn , $insert_data);
                header('location: /myforam?signup=true');
            }
        }
    }
?>