<?php
include("<includes/_conectdb.php");
session_start();
if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false){
    header('location: index.php');
  
  }
  include("<includes/header.php");

// Get Data of admin From DB

  
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

  <div class="col-12">
    <div class="row">
        <div class="col-2">
        <?php
include('includes/sidebar.php')
?>
        </div>
        <div class="col-9">
            <?php
            if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
                $admin_id =$_SESSION['admin_id'];
                $exsist_check = "SELECT * FROM `admin` where admin_id = '$admin_id'";
                      $run = mysqli_query($conn , $exsist_check);
                      $number = mysqli_num_rows($run);
                  
                      if($number == 1){
                          
                          $data = mysqli_fetch_assoc($run);
                          $id = $data['admin_id'];
                          $name =$data['admin_name'];
                          $username = $data['admin_username'];
                          $admin_email = $data['admin_email'];
                          $address = $data['address'];
                          $admin_dt = $data['admin_dt'];
                          
                      }
                      echo'
            <div class="container col-6">
                      <h1 style= "text-align: center; color:blue"> Hi '.$name.'</h1>
                          <form method = "POST" action ="update_admin.php" readonly>
                              <div class="form-group">
                                  <label for="email">Email address</label>
                                  <input readonly type="email" class="form-control" value ="'.$admin_email.'" name ="email" id="exampleInputEmail1" aria-describedby="emailHelp "
                                      placeholder="Enter email">
                                  <small id="email" class="form-text text-muted">We will never share your email with anyone
                                      else.</small>
                              </div>
                              <div class="form-group">
                                  <label for="User Name">User Name</label>
                                  <input readonly type="text" name ="username" value ="'.$username.'" class="form-control"  name ="username" id="username" placeholder="Enter Username">
                              </div>
                              <div class="form-group">
                                  <label for="Name">Name</label>
                                  <input readonly type="text" name ="name" value ="'.$name.'" class="form-control"  name ="username" id="username" placeholder="Enter Username">
                              </div>
                              
                          </form>
                          <a href="update_admin.php"><button type="submit" name = "submit" class="btn btn-primary">Edit</button></a>
                      </div>';
              }
            
            
            ?>
        </div>
    </div>
  </div>
      <?php
      
      
      ?>
  </body>
</html>