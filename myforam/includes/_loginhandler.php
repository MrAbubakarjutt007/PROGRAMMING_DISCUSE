<?php
    include("_conectdb.php");
    if(isset($_POST['submit'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $exsist_check = "SELECT * FROM `users_data` where user_email = '$email'";
            $run = mysqli_query($conn , $exsist_check);
            $number = mysqli_num_rows($run);
            //echo"ok";
            if($number == 1){
                $data = mysqli_fetch_assoc($run);
                if($pass == $data['User_pass']){
                    $user_id = $data['User_id'];
                    $name = $data['User_name'];+
                    
                    session_start();
                   
                    $_SESSION['loggedin'] = true;
                    $_SESSION['logged'] = true;
                    $_SESSION['user_name'] = $name;
                    header('location: /myforam?userid='.$user_id);
                }
                else{
                    echo"pass erorr";
                }
            }
        }
    }
?>