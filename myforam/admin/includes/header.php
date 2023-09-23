<!doctype html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
   
   ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ml-3 mb-4 p-3 ">
        <a class="navbar-brand  " href="welcome.php">AHU FORAM</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inquries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="allusers.php">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="add_catagory.php">Catogries</a>
                </li>
                
            </ul>

        </div>


        <?php
 if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false){
   echo'
   <div >
 <button type="button" class="btn btn-success m-1 " data-toggle="modal" data-target="#login">Login</button>
 </div>
 <div>
 <button type="button" class="btn btn-success " data-toggle="modal" data-target="#signup">Sign Up</button>
 </div>';
 }
 else{
   echo' 
   <div>
   <a class="btn btn-primary "   href="includes/logout.php"> Logout</a>
   </div>';
 }
?>


    </nav>;
    <?php
include("includes/login.php");
include("includes/signup.php");
?>

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