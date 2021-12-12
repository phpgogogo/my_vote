<?php
 include_once "./api/db.php";

 $all=all("users",["account"=>"aaa"]);
 dd($all);
 foreach($all as $key=>$value){

 }
 echo "<hr>";
 echo $value["account"];

?>