<?php
include_once "db.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";
echo $_POST["account"];
// all("users",[""]);
$sql="SELECT `account` FROM `users`";
q($sql);







?>