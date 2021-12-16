<?php
 include_once "./api/db.php";

 $check_vote=rows("already_vote",["already_vote_name"=>"ccc","topic_id"=>"2"]);
 echo $check_vote;
 echo "<br>";

//  $all=all("already_vote");
//  dd($all);
//  foreach($all as $key=>$value){
//     dd($value);
//  }


?>