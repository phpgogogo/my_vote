<h1 class="text-center my-3 font-weight-bold">投票結果</h1>


<?php
$all=find("topics",$_GET["id"]);
$options=all("options",["topic_id"=>$_GET["id"]]);
// dd($options);

// echo "<div class='text-center font-weight-bold'>";
// echo "題目:" . $all["topic"];
// echo "</div>";

$barArray=[];
foreach($options as $key=>$value){
	echo "<div class='my-2 row align-items-center'>";
	echo "<span class='offset-md-4 col-md-2 text-left'>";
    echo $value["opt"] . ":";
	echo "</span>";

	echo "<span class='d-inline-block col-md-3 text-center'>";
	echo $value["count"] . "票";
	echo "</span>";
	echo "</div>";
    // echo "<br>";
	// 把資料按照長條圖所需要的格式丟進陣列
    array_push($barArray, array("y"=> $value["count"], "label"=> $value["opt"]));
}
// dd($barArray);
	echo "<div class'my-3'>";
	echo "&nbsp";
	echo "</div>";


?>


<!-- 使用別人的bar chart code (陣列的KEY和KEY的順序一定要跟範本一樣才能用) -->
<!-- 參考網址 https://canvasjs.com/php-charts/column-chart/ -->
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
		text: "題目: <?=$all["topic"];?>"
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



