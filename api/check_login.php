<?php
include_once "db.php";

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
if(isset($_SESSION["error"])){
    unset($_SESSION["error"]);
}

if(rows("users",$_POST)>0){
    $_SESSION["user"]=$_POST["account"];
    to("../index.php");
}else{
    $_SESSION["error"]="error";
    to("../frontend/login_fail.php");
}






?>