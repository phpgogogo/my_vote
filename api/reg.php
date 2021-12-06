<?php
include_once "db.php";

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// echo $_POST["account"];
// all("users",[""]);
$sql="SELECT `account` FROM `users`";
q($sql);
// insert("users",$_POST);
echo "<pre>";
print_r(q($sql));
echo "<pre>";
// find("users",["id"=>"1"]);
echo "<pre>";
print_r(find("users",["id"=>"1"]));
echo "<pre>";






?>