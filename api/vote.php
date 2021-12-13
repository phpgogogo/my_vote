<?php
include_once "./db.php";

// dd($_POST);

// 選項的id
$opt_id=$_POST["opt"];
// echo $opt_id;

// 用選項的id撈出資料
$opt=find("options",$opt_id);
// dd($opt);

// 票數+1
$opt["count"]=$opt["count"]+1;
// 更新票數到資料表
update("options",["count"=>$opt["count"]],["id"=>$opt_id]);

// 把topic_id一起丟到問卷結果的頁面 以便有依據查詢哪個subject的投票結果
if(isset($_SESSION["admin"])){
    to("../backend/index.php?do=vote_result&id={$opt['topic_id']}");
}else{
    to("../index.php?do=vote_result&id={$opt['topic_id']}");

}

?>