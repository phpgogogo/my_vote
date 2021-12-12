<h1>投票清單</h1>

<?php
$subjects=all("topics");
if(isset($_SESSION["user"])){
    echo "<ol class='list-group'>";
foreach($subjects as $key=>$value){
    // echo $value["topic"];
    // echo "<br>";
    // echo $value["id"];
    // echo "<br>";
    echo "<li>";
    echo "<a href='../index.php?do=vote&id={$value['id']}'>";
    echo $value["topic"];
    echo "</a>";
    echo "</li>";
}
echo "</ol>";
}else{
    echo "<ol class='list-group'>";
foreach($subjects as $key=>$value){
    // echo $value["topic"];
    // echo "<br>";
    // echo $value["id"];
    // echo "<br>";
    echo "<li>";
    echo "<span>";
    echo $value["topic"];
    echo "</span>";
    echo "</li>";
}
echo "</ol>";
}





?>






