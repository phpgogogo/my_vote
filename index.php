<?php
include_once "./api/db.php";
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* .container {
            min-height: 1000px;
        } */

        

        /* footer{
        position: relative;
      } */
        .carousel .carousel-item {
            height: 300px;
        }

        .wrapper {
            /* min-height: 800px; */

            /*減去footer高度 可隨內容變動*/
            /* min-height: calc(100% - 100px);  */
}
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
                <a class="nav-link text-dark" href="index.php"><i class="fas fa-home"></i> Home</a>
            </li>
            <!-- <li class="nav-item">
      <a class="nav-link text-dark" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Link 2</a>
    </li> -->
        </ul>
        <?php
        if (isset($_SESSION["admin"]) and isset($_SESSION["user"])) {
        ?>
            <div class="row align-items-center">
                <span class="mx-2">歡迎登入, <?=$_SESSION["user"];?></span>
                <a class="btn btn-sm btn-primary mx-2" href="./backend/">前往後台</a>
                <a class="btn btn-sm btn-primary mx-2" href="?do=member_index">會員中心</a>
                <a class="btn btn-sm btn-primary ml-2 mr-3" href="?do=logout">會員登出</a>
            </div>
        <?php
        } else if(!isset($_SESSION["admin"]) and isset($_SESSION["user"])){
            ?>
            <div class="row align-items-center">
                <span class="mx-2">歡迎登入, <?=$_SESSION["user"];?></span>
                <a class="btn btn-sm btn-primary mx-2" href="?do=member_index">會員中心</a>
                <a class="btn btn-sm btn-primary ml-2 mr-3" href="?do=logout">會員登出</a>
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

    <!-- carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/id/237/1200/300" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>感謝狗狗的支持</h5> -->
                    <p>感謝王小明的贊助</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/247/1200/300" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Second slide label</h5> -->
                    <p>感謝王小明的贊助</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/258/1200/300" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Third slide label</h5> -->
                    <p>感謝王小明的贊助</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/240/1200/300" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Fourth slide label</h5> -->
                    <p class="text-dark">感謝王小明的贊助</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/241/1200/300" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Fifth slide label</h5> -->
                    <p>感謝王小明的贊助</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="" aria-hidden="true"><i class="fas fa-arrow-circle-left fa-3x"></i></i></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="" aria-hidden="true"><i class="fas fa-arrow-circle-right fa-3x"></i></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <!-- content -->
    <div class="container wrapper mb-5">
        <?php
        if (isset($_GET["do"])) {
            $do = $_GET["do"];
        } else {
            $do = "vote_list";
        }
        $web = "./frontend/" . $do . ".php";
        if (file_exists($web)) {
            include $web;
        } else {
            include "./frontend/vote_list.php";
        }
        // include "./frontend/login.php";



        ?>
    </div>



    <!-- footer -->
    <footer>
        <div class="bg-warning text-center p-3 footer">XXX版權所有</div>
        </footer>

        <?php
        ob_end_flush();
        ?>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>