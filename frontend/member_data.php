<h1 class="text-center mt-3">會員中心</h1>

<?php
// 非會員導回首頁
if (!isset($_SESSION["user"])) {
    to("../index.php");
    exit();
}

$account = all("users", ["account" => $_SESSION["user"]]);
// dd($account);
foreach ($account as $key => $value) {
    // dd($value);
}

?>

<div class="row mt-3">
    <div class="col-md-3">
        <div class="text-center p-2">
            <a href="./index.php?do=member_data">帳號資料</a>
        </div>
        <div class="text-center p-2">
            <a href="./index.php?do=edit_member">修改會員基本資料</a>
        </div>
        <div class="text-center p-2">
            <a href="./index.php?do=member_vote">查詢投票紀錄</a>
        </div>
    </div>
    <div class="col-md-6 text-center mt-3">
    <span class="font-weight-bold">用戶名: <?=$value["name"];?></span><br>
        <span class="font-weight-bold">帳號: <?=$value["account"];?></span><br>
        <span class="font-weight-bold">密碼: *****</span>
    </div>

</div>












