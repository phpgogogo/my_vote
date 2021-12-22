<?php
include_once "db.php";
dd($_POST);

foreach($_POST["id"] as $key=>$id){
    if(isset($_POST["del"]) && in_array($id,$_POST["del"])){
        // 刪除
        del("ad",$id);

    }else{
        // 更新
        $sh=($_POST["sh"]==$id)?1:0;
        // if($_POST["sh"]==$id){
        //     $sh=1;
        // }else{
        //     $sh=0;
        // }
        update("ad",["sh"=>$sh],["id"=>$id]);
    }
}

to("../backend/?do=image");
?>