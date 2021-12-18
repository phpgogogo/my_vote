<?php
include_once "db.php";

$account = all("users", ["account" => $_SESSION["user"]]);
foreach ($account as $key => $value) {
    // dd($value);
}

update("users",["email"=>$_POST["email"]],["account"=>$value["account"]]);
update("users",["name"=>$_POST["name"]],["account"=>$value["account"]]);
update("users",["gender"=>$_POST["gender"]],["account"=>$value["account"]]);
update("users",["birthday"=>$_POST["birthday"]],["account"=>$value["account"]]);

to("../index.php?do=member");









?>