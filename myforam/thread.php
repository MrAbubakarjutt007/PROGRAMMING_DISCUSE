<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <title>Foram</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
      include("<includes/header.php");
      include("<includes/_conectdb.php");
      $id = $_GET["threadid"];
      $req = "SELECT * FROM `threads` WHERE 	thread_id = '$id'";
      $result = mysqli_query($conn , $req);
      while($row = mysqli_fetch_assoc($result)){
          $details = $row['thread_details'];
          $name = $row['thread_tittle'];
          echo'<div class="container">
    <div class="jumbotron">
        <h1 class="display-4"> '. $name.' </h1>
        <p class="lead">'. $details . '</p>
        <hr class="my-4">
        
    </div>';
      }
      ?>  

    

    <!-- Comments Insert Into database -->

    <?php
    // Comment form
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
    echo'
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Login First To Ask a Question </strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
     </div>';
      
   }
   else{
    echo'<form class="container col-8" method="POST" action="'.  $_SERVER['REQUEST_URI'] .'">

        <div class="form-group">
            <label for="details">Enter Your Comments </label>
            <textarea class="form-control" name="details" id="details" rows="3"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mb-3">Submit</button>
        </form>';
   }
?>

    <?php
        if(isset($_POST['submit'])){
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $details = $_POST["details"];
                $sql = "INSERT INTO `comments` (`comment_details`, `comment_by`, `thread_id`, `datetime`) 
                VALUES ( '$details', '', '$id', current_timestamp());";
                $result = mysqli_query($conn , $sql);
                
            }
         
        }
    ?>

 <!-- Comments Section -->

<?php
      $id = $_GET["threadid"];
      $req = "SELECT * FROM `comments` WHERE 	thread_id = '$id'";
      $result = mysqli_query($conn , $req);
      while($row = mysqli_fetch_assoc($result)){
          $comment_details = $row['comment_details'];
          echo'<div class="media m-5 mb-0">
                <img class="mr-3" src="includes/images/user.jpeg" width = "50px" alt="Generic placeholder image">
                <div class="media-body">
                    
                    '.$comment_details.'
                </div>
                </div>';
      }
      ?>
    


<!-- Form to Enter New Comments in Thread List
    <form class="container col-8" method="POST" action="">

        <div class="form-group">
            <label for="details">Enter Your Comments </label>
            <textarea class="form-control" name="details" id="details" rows="3"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mb-3">Submit</button>
    </form>
-->



        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>