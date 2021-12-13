<?php
include_once "db.php";

$id=$_GET["id"];
echo $id;
insert("options",["opt"=>"","topic_id"=>$id,"count"=>0]);
// insert("topics",["topic"=>$_GET["id"]]);
to("../index.php?do=add_option&id=$id");





?>