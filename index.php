<?php
  include("Config/config.php");

  $config = new Config();

  $res = $config->Connect();

 if(isset($_REQUEST['btn'])){
  $grid = $_REQUEST['grid'];
  $name = $_REQUEST['name'];
  $course = $_REQUEST['course'];
  $city = $_REQUEST['city'];

  $res = $config->insertStudent($grid,$name,$course,$city);
  
  if($res){

     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Congratulations..!</strong> Student Added Succsessfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
   
  }else{

    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Faild..!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
   
  }
 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <div class="col-6">
  <form action="" method="GET">
    <br> GRID :- <input class="form-control" type="number" name="grid"> </br>
    <br> NAME :- <input class="form-control" type="text" name="name"> </br>
    <br> COURSE :- <input class="form-control" type="text" name="course"> </br>
    <br> CITY :- <input class="form-control" type="text" name="city"> </br>
    <button class="btn btn-success" name="btn">SUBMIT</button>
</form>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>