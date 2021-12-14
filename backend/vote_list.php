<h1>投票清單</h1>

<?php
$subjects = all("topics");
if (isset($_SESSION["user"]) and isset($_SESSION["admin"])) {
    echo "<ol class='list-group'>";
    foreach ($subjects as $key => $value) {
        // echo $value["topic"];
        // echo "<br>";
        // echo $value["id"];
        // echo "<br>";
        echo "<li class='mt-2 row align-items-center'>";
        echo "<span class='col-md-6 text-left'>";
        // 刪除按鈕
        // 顯示不顯示開關
        echo $value["topic"] . "<a class='p-2' href='../api/del_vote.php?id={$value['id']}'>刪除</a>";
        echo "<a href='../api/vote_status.php?id={$value['id']}'>";
        echo ($value["status"]==1)?"<span class='bg-light p-2'>顯示</span>":"<span class='bg-dark text-white p-2'>不顯示</span>";
        echo "</a>";
        echo "</span>";
        
        // 總投票數顯示
        $count=q("SELECT sum(`count`) as '總計' FROM `options` WHERE `topic_id`='{$value['id']}'");
        // dd($count);
        echo "<span class='d-inline-block col-md-2 text-center'>";
        echo "總票數: " . $count[0]['總計'];
        echo "</span>";

        // 投票按鈕
        echo "<a href='./index.php?do=vote&id={$value['id']}' class='col-md-2 text-center'>";
        echo "<button class='btn btn-success'>投票</button>";
        echo "</a>";
        // 投票結果按鈕
        echo "<a href='?do=vote_result&id={$value['id']}' class='col-md-2 text-center'>";
        echo "<button class='btn btn-primary'>觀看結果</button>";
        echo "</a>";
        echo "</li>";
    }
    echo "</ol>";
} else {
    echo "<ol class='list-group'>";
    foreach ($subjects as $key => $value) {
        // echo $value["topic"];
        // echo "<br>";
        // echo $value["id"];
        // echo "<br>";
        echo "<li class='mt-2 row align-items-center'>";
        echo "<span class='col-md-6 text-left'>";
        echo $value["topic"];
        echo "</span>";
        
        // 總投票數顯示
        $count=q("SELECT sum(`count`) as '總計' FROM `options` WHERE `topic_id`='{$value['id']}'");
        // dd($count);
        echo "<span class='d-inline-block col-md-2 text-center'>";
        echo "總票數: " . $count[0]['總計'];
        echo "</span>";
        echo "<a href='?do=vote_result&id={$value['id']}' class='col-md-2 offset-md-2 text-center'>";
        echo "<button class='btn btn-primary'>觀看結果</button>";
        echo "</a>";
        echo "</li>";
    }
    echo "</ol>";
}





?>