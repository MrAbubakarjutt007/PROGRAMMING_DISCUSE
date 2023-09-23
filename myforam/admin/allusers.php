<?php
include("<includes/_conectdb.php");

session_start();
if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false){
  header('location: index.php');

}
include("<includes/header.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Users|Discussion Foram</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: #f2f2f2";>

    <div class="col-12">
      <div class="row">
        <div class="col-2">
        <?php


include('includes/sidebar.php');
                
                ?>
        </div>
        <div class="col-8 offset-1">
        <?php
  $req = "SELECT * FROM `users_data` ";
  $noresult = true;
  $result = mysqli_query($conn , $req);
  echo"<div class='container'>
  <div>
  <button type='button' class='btn btn-success ' data-toggle='modal' data-target='#signup'>Rgister a user</button>
  </div>
  <table class='table mt-4 '>
  <thead>
      <tr class='bg-success text-white'>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Regiseration Time</th>
          <th>Status</th>
      </tr>
  </thead>
  <tbody>";
  while($row = mysqli_fetch_assoc($result)){
    $noresult = false;
      $User_id = $row['User_id'];
      $User_email  = $row['User_email'];
      $User_name = $row['User_name'];
      $Register_Time =$row['Register_Time'];
      echo'
      
          
              <tr>
                  <td scope="row">'. $User_id.'</td>
                  <td>'.$User_name.'</td>
                  <td>'.$User_email.'</td>
                  <td>'.$Register_Time.'</td>
                  <td><a href="delete_user.php?userid='.$User_id.'">Active</a></td>
                  
                  
              </tr>
          ';
          
  }
  echo" </tbody> 
  </table>
  </div>";
  ?>
        </div>
      </div>
    </div>
 
  </body>
</html>