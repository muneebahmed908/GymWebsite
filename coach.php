<?php

include "config.php";

if(isset($_REQUEST["Submit"])){

    $id= $_REQUEST["id"];
    $name= $_REQUEST["name"];
    $date= $_REQUEST["date"];
    $experience= $_REQUEST["experience"];

    $ins = "INSERT into coach (id, name, date, experience) VALUES('$id','$name','$date','$experience')" ;

    $query1 = mysqli_query($connection, $ins);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <!-- nav bar start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="admin-login.php"><img src="img/TT.png"  alt="tution to night"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">GYM System</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="billing.php">Billing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="coach.php">Coach</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="members.php">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="receptionist.php">Receptionist</a>
      </li>
    </ul>
  </div>
</nav>

<!--nav bar end-->
<!--form star-->
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">id</label>
      <input type="text" name="id" class="form-control" id="input"  placeholder="id">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"> name</label>
      <input type="text" name="name" class="form-control" id="inputname" placeholder="name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date of birth</label>
    <input type="text" name="date" class="form-control" id="inputperiod" placeholder="date of birth">
  </div>
  <div class="form-group">
    <label for="inputAddress2">experience</label>
    <input type="text" name="experience" class="form-control" id="inputAddress2" placeholder="experience">
  </div>
    <input type="Submit" name="Submit" class="form-control" id="inputAddress2" value="Submit">
  </div>
</form>


<!--form end-->
    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>