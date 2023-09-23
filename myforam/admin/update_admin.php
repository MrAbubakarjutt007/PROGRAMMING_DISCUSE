<?php
include("<includes/_conectdb.php");
session_start();
ob_start();
if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false){
    header('location: index.php');
}
if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
    $admin_id = $_SESSION['admin_id'];
    include("<includes/header.php");
   // INsert data in DB
    if(isset($_POST['submit'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $newname = $_POST['name'];
            $newuser =$_POST['username'];
            $newemail =$_POST['email'];
            $query ="UPDATE `admin` SET `admin_name`='$newname',
            `admin_username`='$newuser',
            `admin_email`='$newemail'WHERE admin_id = '$admin_id' ";
            $run = mysqli_query($conn , $query);
            header('location: admin_profile.php');
            
            
    }
   
    }
    
    
    
    $exsist_check = "SELECT * FROM `admin` where admin_id = '$admin_id'";
    $run = mysqli_query($conn , $exsist_check);
    $number = mysqli_num_rows($run);
    //echo"ok";
    if($number == 1){
        $data = mysqli_fetch_assoc($run);
        
            $user_id = $data['admin_id'];
            $name = $data['admin_name'];
            $email = $data['admin_email'];
            $username = $data['admin_username'];
            
        }
    
    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
  echo'
  <div class="container">
                <form method = "POST" action ="update_admin.php">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" value ="'.$email.'" name ="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="email" class="form-text text-muted">We will never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="User Name">User Name</label>
                        <input type="text" name ="username" value ="'.$username.'" class="form-control"  name ="username" id="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name ="name" value ="'.$name.'" class="form-control"  name ="username" id="username" placeholder="Enter Username">
                    </div>
                    
                    <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
                </form>
            </div>';
  ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     </body>
</html>