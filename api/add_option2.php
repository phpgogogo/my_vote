<?php
include_once "db.php";

$id=$_GET["id"];
echo $id;
dd($_POST);
foreach($_POST["options"] as $value){
    dd($value);
    insert("options",["opt"=>$value,"topic_id"=>$id,"count"=>0]);
}
// insert("options",["opt"=>"","topic_id"=>$id,"count"=>0]);
// insert("topics",["topic"=>$_GET["id"]]);
to("../backend/index.php?do=vote_success");





?>