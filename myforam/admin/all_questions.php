<?php
include("includes/_conectdb.php");
session_start();
if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false){
  header('location: index.php');

}
include("<includes/header.php");


?> 
 
 <!doctype html>
 <html lang="en">
   <head>
     <title>All Question</title>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
   <body style="background-color: #f2f2f2";>
       <div class="col-12 " >
        <div class="row">
            <div class="col-2">
                <?php


include('includes/sidebar.php');
                
                ?>
            
            </div>
            <div class="col-8 offset-1 ">
                <?php
                
                $req = "SELECT * FROM `threads` ";
      $result = mysqli_query($conn , $req);
      echo'
      <table class="table">
            <thead>
                <tr class="bg-primary text-white">
                    <th>ID</th>
                    <th>Question</th>
                    <th>Deatil</th>
                    <th>Catagory ID</th>
                    <th>User Name</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
      ';
      while($row = mysqli_fetch_assoc($result)){
            $id = $row['thread_id'];
          $detail = $row['thread_details'];
          $name = $row['thread_tittle'];
          $catagoryid = $row['thread_cat_id'];
          $uname = $row['user_name'];
          $dt = $row['datetime'];
          $back= 'Q';
          echo'
                <tr>
                    <td scope="row">'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$detail.'</td>
                    <td>'.$catagoryid.'</td>
                    <td>'.$uname.'</td>
                    <td>'.$dt.'</td>
                    <td><a name="" id="" class="btn btn-primary" href="delete_thread.php?threadid='.$id.'&catid='.$catagoryid.'& back='.$back.'" role="button">Delete</a></td>
                </tr>'
                ;
            
      }
      echo'</tbody>
      </table>';
                ?>
            </div>
        </div>
       </div>

     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
 