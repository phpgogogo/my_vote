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

// 給個session 避免重複投票
if(!isset($_SESSION["norepeat"])){
    $repeat=[];
    array_push($repeat,$opt['topic_id']);
    $_SESSION["norepeat"]=$repeat;
}
else{
    // in_array($opt['topic_id'],$_SESSION["norepeat"]);
    array_push($repeat,$opt['topic_id']);
    echo "a1";
    dd($_SESSION["norepeat"]);
    echo "<br>";
}
// if(in_array($opt['topic_id'],$_SESSION["norepeat"])==False){
//     array_push($$_SESSION["norepeat"],$opt['topic_id']);
//     echo "a2";
//     dd($_SESSION["norepeat"]);
//     echo "<br>";
// }



// 把topic_id一起丟到問卷結果的頁面 以便有依據查詢哪個subject的投票結果
// if(isset($_SESSION["admin"])){
//     to("../backend/index.php?do=vote_result&id={$opt['topic_id']}");
// }else{
//     to("../index.php?do=vote_result&id={$opt['topic_id']}");

// }

?>