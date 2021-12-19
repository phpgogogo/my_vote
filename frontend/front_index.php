<h1>frontend首頁</h1>
<div>
    <p>歡迎蒞臨本站</p>
    <p>請登入使用投票功能</p>
</div>
<?php
if(isset($_SESSION["user"])){
    ?>
<!-- <a href="./index.php?do=vote_page">建立投票問卷</a><br> -->
<a href="./index.php?do=vote_list">查看目前進行的投票</a>
<!-- <p>登入時看到的畫面</p> -->
<?php
}else{
    ?>
    <!-- <p>沒登入時看到的畫面</p> -->
    <a href="./index.php?do=vote_list">查看目前進行的投票</a>
    <?php

}


?>







