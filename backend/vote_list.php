<h1 class="mt-5">投票清單</h1>

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
        echo $value["topic"] . "<a class='p-2 ml-2' href='../api/del_vote.php?id={$value['id']}'><i class='fas fa-times text-danger'></i></a>";
        // 顯示不顯示開關
        echo "<a href='../api/vote_status.php?id={$value['id']}'>";
        echo ($value["status"]==1)?"<span class='p-2'><i class='far fa-eye'></i></span>":"<span class='p-2'><i class='far fa-eye-slash'></i></span>";
        echo "</a>";
        // 編輯選項
        echo "<a class='p-2 ml-2' href='./index.php?do=edit_option&id={$value['id']}'><i class='fas fa-edit'></i></a>";
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