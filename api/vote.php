<?php
include_once "./db.php";

// dd($_POST);

// 選項的id
$opt_id=$_POST["opt"];
// echo $opt_id;

// 用選項的id撈出資料
$opt=find("options",$opt_id);
// dd($opt);

// 在計票前先判斷這個user是否投過票
// 1.用session 避免重複投票 (前台的vote.php也要記得去新增判斷)
// if(!isset($_SESSION["norepeat"])){
//     $_SESSION["norepeat"]=[];
//     array_push($_SESSION["norepeat"],$opt['topic_id']);
//     dd($_SESSION["norepeat"]);
// }
// else{
//     array_push($_SESSION["norepeat"],$opt['topic_id']);
// }

// 2.用cookie 避免重複投票
// if(!isset($_COOKIE["norepeat" . $opt['topic_id']])){
//     setcookie( "norepeat" . $opt['topic_id'], $opt['topic_id'], time()+300);
//     echo "cookie內容:";
//     print_r($_COOKIE);
// }
// else{
//     to("../index.php?do=norepeat");
//    exit();
// }

// 3.把user名字寫入資料庫來判斷是否投過票 但是管理員帳號不受限制
$check_vote=rows("already_vote",["already_vote_name"=>$_SESSION["user"],"topic_id"=>$opt['topic_id']]);
if(!isset($_SESSION["admin"])){
    if($check_vote<=0){
        insert("already_vote",["already_vote_name"=>$_SESSION["user"],"topic_id"=>$opt['topic_id']]);
    }else{
        to("../index.php?do=norepeat");
        exit();
    }

}
// $check_vote=all("already_vote");
// foreach($all as $key=>$value){

//  }

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