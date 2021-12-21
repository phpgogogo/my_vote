<h1>建立選項</h1>
<?php
// get的id就是問卷題目的id
$id = $_GET["id"];
// echo $id;
$options = all("options", ["topic_id" => $_GET["id"]]);
// dd($options);
$subject = find("topics", ["id" => $id]);;
// dd($subject);

?>
<form action="../api/vote_finish.php?id=<?= $id; ?>" method="post">
    <!-- 新增選項的按鈕  傳到api後會先建立一個空值 -->
    <div>
        <label for="">題目:</label>
        <input type="text" name="subject" id="" value="<?= $subject['topic']; ?>">
    </div>
    <div>
        <label for="">新增選項</label>
        <a href="../api/add_option.php?id=<?= $id; ?>">
            <input class="bg-info border-info text-light rounded" type="button" value="+">
        </a>
    </div>
    <!--  -->
    <?php

        echo "<label class='list-group-item main'>";

        echo "</label>";

    ?>
    <div>
        <input type="submit" value="送出">
    </div>

</form>

<div class="">
    <a href="" id="plus">
        <input class="bg-info border-info text-light rounded" type="button" value="+">
    </a>
</div>

<script>
    
    const plus=document.getElementById("plus");
    
    plus.addEventListener("click",function(e){
        e.preventDefault();
        let strCE = document.createElement('div');
        // strCE.innerHTML = "<span style='color:red;'>1234</span>";
        strCE.innerHTML = "<?php foreach ($options as $key => $value) {
        echo "選項" . ($key + 1) . " ";
        // 把上面建立的空值選項撈過來 在這邊輸入內容後再傳到api 完成建立選項
        echo "<input type='text' name='options[]' ";
        echo "<input type='hidden' name='opt_id[]' ";
        // dd($value['id']);
    }
        
        ?>";
        document.querySelector('.main').appendChild(strCE);
    
})
</script>