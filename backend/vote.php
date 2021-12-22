<h1 class="mt-5">投票頁面</h1>

<?php

$id=$_GET["id"];
$subject=find("topics",$id);
// dd($subject);
$options=all("options",["topic_id"=>$id]);
// dd($options);
?>

<h1><?=$subject["topic"];?></h1>
<ol class="list-group">
    <form action="../api/vote.php" method="post">
<?php
foreach($options as $key => $opt){
    // label 讓整行都吃的到點擊選取選項的效果
    echo "<label class='list-group-item list-group-item-light list-group-item-action'>";
    //如果是複選 name 要用陣列  ex:name='opt{$opt['id']}'
    echo "<input type='radio' name='opt' value='{$opt['id']}'>";
    echo $opt["opt"];
    echo "</label>";
    // echo $opt['id'];
}


?>

<input class="btn btn-info mt-3" type="submit" value="投票">
</form>
</ol>







