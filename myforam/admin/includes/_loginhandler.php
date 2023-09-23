<?php
    include("_conectdb.php");
    if(isset($_POST['submit'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $email = $_POST['email'];
            $pass = $_POST['password'];
            $exsist_check = "SELECT * FROM `admin` where admin_email = '$email'";
            $run = mysqli_query($conn , $exsist_check);
            $number = mysqli_num_rows($run);
        
            echo $number;
            if($number == 1){
                echo"okok";
                $data = mysqli_fetch_assoc($run);
                $oldpass= $data['admin_pass'];
                if($pass == $data['admin_pass']){
                    echo"okok";
                    $user_id = $data['admin_id'];
                    $name = $data['admin_name'];
                    
                    session_start();
                   
                    $_SESSION['admin'] = true;
                    $_SESSION['adminlog'] = true;
                    $_SESSION['user_name'] = $name;
                    $_SESSION['admin_id'] = $user_id;
                    header('location: /myforam/admin/welcome.php?userid='.$user_id);
                }
                else{
                    echo"pass erorr";
                }
            }
        }
    }
?>