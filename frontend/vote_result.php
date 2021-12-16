<h1>投票結果</h1>

<?php
$all=find("topics",$_GET["id"]);
$options=all("options",["topic_id"=>$_GET["id"]]);
// dd($options);

echo "題目:" . $all["topic"];
echo "<br>";

$barArray=[];
foreach($options as $key=>$value){
    echo $value["opt"] . ":" . $value["count"] . "票";
    echo "<br>";
    array_push($barArray, array("y"=> $value["count"], "label"=> $value["opt"]));
}
// dd($barArray);



?>

<a href="./index.php">回首頁</a>


<!-- 使用別人的bar chart code (陣列的KEY和KEY的順序一定要跟範本一樣才能用) -->
<?php
 
// $dataPoints = array( 
// 	array("y" => 3373.64, "label" => "Germany" ),
// 	array("y" => 2435.94, "label" => "France" ),
// 	array("y" => 1842.55, "label" => "China" ),
// 	array("y" => 1828.55, "label" => "Russia" ),
// 	array("y" => 1039.99, "label" => "Switzerland" ),
// 	array("y" => 765.215, "label" => "Japan" ),
// 	array("y" => 612.453, "label" => "Netherlands" )
// );
// dd($dataPoints);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "投票結果"
	},
	axisY: {
		title: "票數"
	},
	data: [{
		type: "column",
		yValueFormatString: "###0 票",
		dataPoints: <?php echo json_encode($barArray, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>   



