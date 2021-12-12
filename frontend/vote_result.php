<h1>投票結果</h1>

<?php
$all=find("topics",$_GET["id"]);
$options=all("options",["topic_id"=>$_GET["id"]]);
// dd($options);

echo "題目:" . $all["topic"];
echo "<br>";
foreach($options as $key=>$value){
    echo $value["opt"] . ":" . $value["count"] . "票";
    echo "<br>";
}

?>

<a href="../index.php">回首頁</a>






