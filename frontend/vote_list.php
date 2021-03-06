<style>
    ol li:hover {
        background-color: #dadcde;
        padding: 10px;
    }
</style>

<?php
$subjects = all("topics");
if (isset($_SESSION["user"])) {
?>
    <div class="row mt-3">
        <div class="">
            <h2 class="mt-3">歡迎登入</h2>
            <h4 class="mb-3">請進行投票</h4>
        </div>

        <?php
         // 如果沒有上傳任何圖片 就使用預設的圖片
         $c=q("SELECT count(*) FROM `ad`");
         // dd($c[0]['count(*)']);
         if($c[0]['count(*)']==0){
             ?>
             <div class="mt-2 ml-3">
                 <img src='./vote.jpg' width='192px' height='89px'>
                 </div>
             <?php
         }else{
             $imgs=all("ad");
             // dd($imgs);
             foreach($imgs as $key=>$value){
                 if($value["sh"]==1){
                     ?>
                     <div class="mt-2 ml-3">
                     <img src='./image/<?=$value["name"];?>' width='192px' height='89px'>
                     </div>
                     <?php
                 }
             }
         }

        ?>
    </div>

    <?php
    echo "<ol class='list-group'>";
    foreach ($subjects as $key => $value) {
        // echo $value["topic"];
        // echo "<br>";
        // echo $value["id"];
        // echo "<br>";
        if ($value["status"] == 1) {
            echo "<li class='mt-2 row align-items-center'>";
            echo "<span class='col-md-6 text-left'>";
            echo $value["topic"];
            echo "</span>";

            // 總投票數顯示
            $count = q("SELECT sum(`count`) as '總計' FROM `options` WHERE `topic_id`='{$value['id']}'");
            // dd($count);
            echo "<span class='d-inline-block col-md-2 text-center'>";
            echo "總投票數: " . $count[0]['總計'];
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
    }
    echo "</ol>";
} else {
    ?>
    <h2 class="mt-3">歡迎蒞臨本站</h2>
    <h4 class="mb-3">請進行登入後使用投票功能</h4>
<?php
    echo "<ol class='list-group'>";
    foreach ($subjects as $key => $value) {
        // echo $value["topic"];
        // echo "<br>";
        // echo $value["id"];
        // echo "<br>";
        if ($value["status"] == 1) {
            echo "<li class='mt-2 row align-items-center'>";
            echo "<span class='col-md-6 text-left'>";
            echo $value["topic"];
            echo "</span>";

            // 總投票數顯示
            $count = q("SELECT sum(`count`) as '總計' FROM `options` WHERE `topic_id`='{$value['id']}'");
            // dd($count);
            echo "<span class='d-inline-block col-md-2 text-center'>";
            echo "總投票數: " . $count[0]['總計'];
            echo "</span>";
            echo "<a href='?do=vote_result&id={$value['id']}' class='col-md-2 offset-md-2 text-center'>";
            echo "<button class='btn btn-primary'>觀看結果</button>";
            echo "</a>";
            echo "</li>";
        }
    }
    echo "</ol>";
}





?>