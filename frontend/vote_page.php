<h1>建立投票的頁面</h1>

<!-- 1.建立投票題目
     2.傳到api新增到資料庫
     3.傳到新增選項頁面,點選增加按鈕(點幾次就增加幾個),到api增加一個空值到資料庫再回到新增選項頁面
     4.用foreach增加表單input,值都是前面產生的空值
     5.輸入想要的選項後傳到api,用update更新前面增加空值的內容  -->

<div class="container">
    <form action="./api/add_subject.php" method="post">
    <label>問卷主題: <input type="text" name="vote_title"></label>
    <input type="submit" value="送出">

    </form>
</div>








