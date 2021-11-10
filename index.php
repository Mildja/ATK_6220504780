<?php
if (isset($_GET['controller']) && isset($_GET['action'])) {
  $controller = $_GET['controller'];
  $action = $_GET['action'];
} else {
  $controller = 'pages';
  $action = 'Home';
} ?>



<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Home Isolation</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body bgcolor="#DDDDDD">
  <!--start แถบ-->
  <nav class="navbar navbar-dark" style="background-color: #2E3139;">
    <a class="navbar-brand" href="#">
      <img src="images/lo.svg" width="40" height="40" class="d-inline-block align-top" alt="">HomeIsolation</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="?controller=pages&action=Home">Home<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="http://158.108.207.4/db21/db21_090/">หน้าหลัก</a>
        <a class="nav-item nav-link" href="?controller=RegisHospital&action=index">โรงพยาบาลอาสา</a>
        <a class="nav-item nav-link" href="?controller=VolunteerDoctor&action=index">แพทย์อาสา</a>
        <a class="nav-item nav-link" href="?controller=Person&action=index">ประชาชน</a>
        <a class="nav-item nav-link" href="?controller=HomeIsolation&action=index">HomeIsolation</a>
      </div>
    </div>
  </nav>

  <?php require_once("./routes.php"); ?>
  <!--จบ แถบ-->
  
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
้้ี
</html>