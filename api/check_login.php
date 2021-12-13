<?php
include_once "db.php";

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$all=all("users",["account"=>"aaa"]);
foreach($all as $key=>$value){
}

if(isset($_SESSION["error"])){
    unset($_SESSION["error"]);
}

if(rows("users",$_POST)>0 and $_POST["account"]!="aaa"){
    $_SESSION["user"]=$_POST["account"];
    to("../index.php");
}else if($_POST["account"]=="aaa"){
    $_SESSION["user"]=$_POST["account"];
    $_SESSION["admin"]=$_POST["account"];
    to("../backend");
}else{
    $_SESSION["error"]="error";
    to("../frontend/login_fail.php");
}






?>