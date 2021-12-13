<?php
include_once "db.php";

// get的id是題目的id
// post的opt_id是選項的id

// 更新題目 不管有沒有修改
// update(資料表,要修改的欄位,條件);
update("topics",["topic"=>$_POST["subject"]],["id"=>$_GET["id"]]);
dd($_POST);

// 更新選項 空值就刪除 有值就更新
$opt_id=$_POST["opt_id"];
// dd($opt_id);
foreach($_POST["options"] as $key=>$value){
    if($value==""){
        del("options",$opt_id[$key]);
    }else{
        update("options",["opt"=>$value],["id"=>$opt_id[$key]]);
    }
}

to("../backend/index.php?do=vote_success");


?>