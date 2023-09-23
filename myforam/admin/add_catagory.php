<?php
include("includes/_conectdb.php");
session_start();
if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false){
  header('location: index.php');

}
include("<includes/header.php");

if(isset($_POST['add'])){
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $detail = $_POST['detail'];
    $check= "SELECT * FROM `categories` WHERE categories_name = '$name'";
    $run =mysqli_query($conn , $check);
    if(mysqli_num_rows($run) == 0){
      $insert = "INSERT INTO `categories`( `categories_name`, `categories_details`) 
      VALUES ('$name','$detail')";
      $query = mysqli_query($conn, $insert);

    }
    else{
      echo'<h5 style="text-align:center; color: red">'.$name .' is already exist.</h5>';
    }
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="col-12 " style="background-color: #f2f2f2";>
        <div class="row">
            <div class="col-2">
<?php
include('includes/sidebar.php');
?>
            </div>
            <div class="col-9">
                <div class="container">
                    <div class="col-6 offset-4 mt-4">
                        <form action="add_catagory.php" method="POST">
                            <div class="form-group">
                                <label for="">Catagory Name </label>
                                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId"
                                    placeholder="">
                                <small id="helpId" class="form-text text-muted">Must me unique</small>
                                <div class="form-group">
                                    <label for="">Enter Catagory Details</label>
                                    <textarea class="form-control" name="detail" id="" rows="3"></textarea>
                                </div>

                                <button name="add" class="btn btn-primary"> Add </button>


                            </div>
                        </form>
                    </div>
                </div>
                <Div class="continer m-4 pt-4">
                    <div class="col-9 offset-3 mt-4">
                        <table class="table">
                            <thead>
                                <tr class="bg-primary text-white">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Catagory Detail</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$select = "SELECT * FROM `categories`";
$run =mysqli_query($conn , $select);
if(mysqli_num_rows($run) != 0){
  while ($row = mysqli_fetch_assoc($run)){
    $id = $row['categories_id'];
    $name = $row['categories_name'];
    $detail = $row['categories_details'];
    $dt =$row['date_time'];
    echo'<tr>
    <td>'.$id.'</td>
    <td>'.$name.'</td>
    <td style="width = 20px">'.$detail.'</td>
    <td>'.$dt.'</td>
    <td><a name="" id="" class="btn btn-danger" href="delete_catagory.php?id='.$id.'" role="button"> Delete </a>
    
    </td>
    <td><a name="" id="" class="btn btn-primary mt-1" href="edit_catagory.php?id='.$id.'" role="button">Edit</a> </td>
  </tr>';
  }
}

?>



                            </tbody>
                        </table>
                    </div>
                </Div>
            </div>
        </div>
    </div>


</body>

</html>