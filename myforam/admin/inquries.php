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
    <title>Inquries|Discussion Foram</title>
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
          <h2 class="justify-content-center d-flex text-primary">INQUIRIES</h2>
        <?php
  $req = "SELECT * FROM `contact` ORDER BY 'Status' ASC";
  
  $result = mysqli_query($conn , $req);
  echo"<div class='container'>
  <table class='table mt-4 '>
  <thead>
      <tr class='bg-success text-white'>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Message</th>
          <th>Status</th>
            
      </tr>
  </thead>
  <tbody>";
  while($row = mysqli_fetch_assoc($result)){
    $noresult = false;
      $User_id = $row['Contact-id'];
      $User_email  = $row['email'];
      $User_name = $row['name'];
      $subject = $row['subject'];
      $message = $row['message'];
      $status = $row['Status'];
      
      echo'
      
          
              <tr>
                  <td scope="row">'. $User_id.'</td>
                  <td>'.$User_name.'</td>
                  <td>'.$User_email.'</td>
                  <td>'.$subject.'</td>
                  <td>'.$message.'</td>';
                  if($status == 1){
                    echo'<td><a name="" id="" class="btn btn-primary" href="#" role="button">Solved</a></td>';
                  }
                  else{
                    echo' <td><a href="inquiry_action.php?id='.$User_id.'" class="btn btn-danger">Unprocessed</a></td>';
                  }
                  
                 echo'
                  
                  
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