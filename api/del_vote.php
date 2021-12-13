<?php
include_once "db.php";

$id=$_GET["id"];
echo $id;
del("topics",$id);
del("options",["topic_id"=>$id]);
to("../backend/index.php?do=vote_list");





?>