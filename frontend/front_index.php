<h1>frontend首頁</h1>
<?php
if(isset($_SESSION["user"])){
    ?>
<a href="./frontend/vote_page.php">建立投票問卷</a>
<p>沒登入時看到的畫面</p>
<?php
}else{
    ?>
    <p>沒登入時看到的畫面</p>
    <?php

}


?>







