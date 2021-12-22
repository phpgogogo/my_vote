<h1 class="text-center mt-3">會員中心</h1>

<?php
// 非會員導回首頁
if (!isset($_SESSION["user"])) {
    to("../index.php");
    exit();
}
?>

<div class="row mt-3">
<table class="table col-md-3 d-inline-block">
        <tr>
            <th class="text-center">功能</th>
        </tr>
        <tr>
            <td>
                <div class="text-center p-2">
                    <a href="./index.php?do=member_data">帳號資料</a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="text-center p-2">
                    <a href="./index.php?do=edit_member">修改會員基本資料</a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="text-center p-2">
                    <a href="./index.php?do=member_vote">查詢投票紀錄</a>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>
    <div class="col-md-6 text-center mt-3">
        <p>參與過投票的題目:</p>

        <?php

        $vote = all("already_vote", ["already_vote_name" => $_SESSION["user"]]);
        // dd($account);
        foreach ($vote as $key => $value) {
            // dd($value);
            $topic = all("topics", ["id" => $value["topic_id"]]);
            $a = find("topics", ["id" => $value["topic_id"]]);
            // dd($a);
            echo "&#9758; " . $a["topic"] . "<br>";
        }

        ?>

    </div>

</div>