<?php
include_once "./api/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-sm bg-info">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link text-dark" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Link 2</a>
    </li>
  </ul>
  <?php
  if(isset($_SESSION["user"])){
?>
<div>
  <a class="btn btn-sm btn-primary mx-1" href="?do=logout">會員登出</a>
</div>
<?php
  }else{
      ?>
  <div>
  <a class="btn btn-sm btn-primary mx-1" href="?do=login">會員登入</a>
  <a class="btn btn-sm btn-primary mx-1" href="?do=reg">註冊新會員</a>
</div>
<?php
  }
  ?>
</nav>
<!-- content -->
<div class="container" style="height: 1500px;">
    <?php
    if(isset($_GET["do"])){
        $do=$_GET["do"];
    }else{
        $do="front_index";
    }
    $web="./frontend/" . $do . ".php";
    if (file_exists($web)) {
        include $web;
    } else {
        include "./frontend/front_index.php";
    }
    // include "./frontend/login.php";



?>
</div>



<!-- footer -->
<footer">
    <div class="bg-primary text-center p-3">XXX版權所有</div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>

</html>