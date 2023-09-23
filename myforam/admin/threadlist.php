<?php

    session_start();
    include("<includes/header.php");
    include("<includes/_conectdb.php");
    if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false){
       // $user_name = $_SESSION['username'];
      // header('location: http://localhost/foram/index.php');
      include('welcome.php');

    }
    if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
       
        $user_name = $_SESSION['user_name'];
       // echo "lkdjfoisdhngkdsjnbgvkjszndvlksdnjlvnsljnv";
    
?>
<?php
 
 if(isset($_POST['submit'])){
    $id= $_GET['catid'];
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $tittle = $_POST['tittle'];
        $details = $_POST['details'];
        $insert ="INSERT INTO `threads` ( `thread_tittle`, `thread_details`, `thread_cat_id`, `user_name`, `datetime`) 
        VALUES ( '$tittle', '$details', '$id', '$user_name', current_timestamp());";
        $insert_result = mysqli_query($conn , $insert);   }
}
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
    <!-- catagory details -->
    <?php
     
      $id = $_GET["catid"];
      $req = "SELECT * FROM `categories` WHERE 	categories_id = '$id'";
      $result = mysqli_query($conn , $req);
      while($row = mysqli_fetch_assoc($result)){
          $details = $row['categories_details'];
          $cat_name = $row['categories_name'];
      }
      ?>
    <?php
    echo'<div class="container" )); 
    background-color:none;
    ">
    <div >
    <div class="jumbotron"  >
        <h1 class="display-4">Welcome to '. $cat_name.' </h1>
        <p class="lead">'. $details . '</p>
        
        </div> </div>';
?>


    <!-- List of questions Of same catagory -->
    <?php
      $id = $_GET["catid"];
      $req = "SELECT * FROM `threads` WHERE 	thread_cat_id = '$id'";
      $noresult = true;
      $result = mysqli_query($conn , $req);
      while($row = mysqli_fetch_assoc($result)){
        $noresult = false;
          $thread_details = $row['thread_details'];
          $thread_name = $row['thread_tittle'];
          $thread_id = $row['thread_id'];
          $postby =$row['user_name'];
          $back= 't';
          echo'<div class="media m-5 mb-0">
          <img class="mr-3" src="includes/images/user.jpeg" width = "50px" alt="Generic placeholder image">
          <div class="media-body" );">
         
              <h5 class="mt-0"> <a href="thread.php?threadid='.$thread_id.'"> '.$thread_name.' </a></h5>
              '.$thread_details.'
          </div>
          <b> Posted by '.$postby.' <br> <a href="delete_thread.php?threadid='.$thread_id.'& catid='.$id.'& back=t">delete</a></b> 
          
          </div>';

        
      }
      ?>
    <!-- Form to Enter New Question in Thread List-->
    <?php
    
        
            echo'
            <form class="container col-8" method="POST" action="'. $_SERVER['REQUEST_URI'] .'">
            <div class="form-group">
                <label for="tittle">Question Tittle</label>
                <input type="text" class="form-control"  name="tittle" id="tittle" placeholder="Enter Your Question Tille">
            </div>
    
            <div class="form-group">
                <label for="details"> Example textarea</label>
                <textarea class="form-control"  name="details" id="details" rows="3"></textarea>
            </div>
            <button type="submit"  name="submit" class="btn btn-primary mb-3">Submit</button>
        </form>';
        
    ?>
   
    <!-- If No result Found -->
    <div class="container">
        <?php
         
    if($noresult){
        echo' <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4"> No Question Yet.</h1>
          <p class="lead">Be the first person You can ask any question about '.$cat_name.'.</p>
        </div>
      </div>';
    }



?>
    </div>


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
<?php
}?>