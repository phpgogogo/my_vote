<?php
include_once "db.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";
// echo $_POST["account"];

// 查詢資料庫裡是否有相同帳號  有的話會>0
$account=rows("users",["account"=>$_POST["account"]]);
// echo "<pre>";
// print_r($account);
// echo "<pre>";

if($account>0){
    // echo "此帳號已被註冊";
    to("../frontend/reg_fail.php");
}else{
    // echo "註冊成功,請使用該帳號登入";
    insert("users",$_POST);
    to("../frontend/reg_success.php");
}







?>