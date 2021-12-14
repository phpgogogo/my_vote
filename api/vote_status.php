<?php
include_once "db.php";

// 預設status=1為顯示
$id=$_GET["id"];
$status=find("topics",$id);
// dd($status);
// 加入一個判斷讓每次點選按鈕時,讓status在1和0之間轉換
$status["status"]=($status["status"]+1)%2;
// echo $status["status"];
// 更新資料表的status
update("topics",["status"=>$status["status"]],["id"=>$id]);

to("../backend/index.php?do=vote_list");





?>