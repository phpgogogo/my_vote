<?php

include_once "db.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
insert("topics",["topic"=>$_POST["vote_title"]]);
$a=find("topics",["topic"=>$_POST["vote_title"]]);
echo "<pre>";
print_r($a);
echo "</pre>";
// 讓問卷題目的id一起傳回去
to("../backend/index.php?do=add_option2&id={$a['id']}");







?>