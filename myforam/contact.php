<?php
ob_start();
include("includes/_conectdb.php");
include("<includes/header.php");
if(isset($_POST['submit'])){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['detail'];
        $insert = "INSERT INTO `contact`( `name`, `email`, `subject`, `message`) 
        VALUES ('$name','$email','$subject','$message')";
        $run= mysqli_query($conn, $insert);
        unset($_POST['submit']);
        header('location: contact.php');

    }
}

?>



<!doctype html>
<html lang="en">
  <head>
    <title>Contact Us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: #f2f2f2";>
     <?php?> 
     <div class="container ">
      <form action="contact.php" method = "POST" >
      <div class="col-8 offset-2 bg-white">
      <div class="form-group">
       <label for="">Name</label>
       <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" placeholder="">
       
     </div>
     <div class="form-group">
       <label for="">Email</label>
       <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="">
       
     </div>
     <div class="form-group">
       <label for="">Subject</label>
       <input type="text" class="form-control" name="subject" id="" aria-describedby="emailHelpId" placeholder="">
       
     </div>
     <div class="form-group">
       <label for=""> Message</label>
       <textarea class="form-control" name="detail" id="" rows="3"></textarea>
     </div>
     <button name="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
     </div>
     
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>