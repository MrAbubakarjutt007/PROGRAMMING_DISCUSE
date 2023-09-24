<?php

    session_start();
    
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
    //header('location: /foram/includes/login1.php');
    session_unset();
    session_destroy();
    include('welcome.php');
    
   }
   else if  (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
       $username = $_SESSION['user_name'];
       
       include("<includes/header.php");
      
  
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HOME | Discussion FORAM</title>
    <!-- Required meta tags -->

    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
      
      include("<includes/_conectdb.php");
      /*
      
      if(isset($_GET['signup']) && $_GET['signup']== true ){
          echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Singn Up </strong> You should check in on some of those fields below.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
      }
        else if(isset($_GET['userid'])  ){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Log in </strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
      }
      */
      ?>


    <div id="carouselExampleIndicators" class="carousel slide m-0" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" Style="height: 500px"  src="includes/images/progbackground.jpg" alt="First slide" width= "100%">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" Style="height: 500px" src="includes/images/progback.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" Style="height: 500px" src="includes/images/programmingback.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container ">
        <div class="row col-12">
            <?php
            $sql = "SELECT * FROM `categories`";
            $result = mysqli_query($conn , $sql);
        while ($row = mysqli_fetch_assoc($result)) { 
          $cat_name = $row['categories_name'];
          $cat_id = $row['categories_id'];
          $cat_details = $row['categories_details'];
          echo"
          
             <div class='card col-4 mb-4' style='width: 18rem;'>
            <div class='card-body'>
            <a href='threadlist.php?catid=".$cat_id."' ><h1 class='card-title'> $cat_name  </h1></a>
              <p class='card-text'> ".substr($cat_details,0,100) ."........  </p>
              <a href='threadlist.php?catid=".$cat_id."' '></a>
            </div>
          </div>
         
          ";}
          
        ?>


        </div>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   
   <?php

    if  (isset($_SESSION['logged']) && $_SESSION['logged'] == true){
    ?>
    <script>
    swal(" Login Successfully", "Now You can Ask any Question", "success");;
    </script>
    <?php
        unset($_SESSION['logged']);
    }
}

   
  ?>

</body>

</html>