<?php
include_once "../api/db.php";
?>
<?php
// 非會員導回首頁
if(!isset($_SESSION["admin"])){
  to("../index.php");
  exit();
}
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
    <style>
      .footer {
            height: 50px; /*設定footer本身高度*/
            margin-top: 800px;

        }
    </style>

    
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-sm bg-info">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link text-dark" href="?do=vote_manage.php"><i class="fas fa-home"></i> Home</a>
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link text-dark" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Link 2</a>
    </li> -->
  </ul>
  <?php
  if(isset($_SESSION["admin"])){
?>
<div>
  <a class="btn btn-sm btn-primary mx-1" href="../index.php">回到前台</a>
</div>
<div>
  <a class="btn btn-sm btn-primary mx-1" href="logout.php">管理員登出</a>
</div>
<?php
  }else{
      ?>

<?php
  }
  ?>
</nav>
<!-- content -->
<div class="container wrapper mb-5">
    <?php
    if(isset($_GET["do"])){
        $do=$_GET["do"];
    }else{
        $do="vote_manage";
    }
    $web=$do . ".php";
    if (file_exists($web)) {
        include $web;
    }else {
        include "vote_manage.php";
    }




?>
</div>



<!-- footer -->
<footer">
    <div class="bg-warning text-center p-3 footer">XXX版權所有 &copy;</div>
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