<h1 class="mt-5">建立選項</h1>
<?php
// get的id就是問卷題目的id
$id = $_GET["id"];
// echo $id;
$options = all("options", ["topic_id" => $_GET["id"]]);
// dd($options);
$subject = find("topics", ["id" => $id]);
// dd($subject);

?>
<form action="../api/add_option2.php?id=<?= $id; ?>" method="post">
    <!-- 新增選項的按鈕  傳到api後會先建立一個空值 -->
    <div>
        <label for="">題目:</label>
        <input type="text" name="subject" id="" value="<?= $subject['topic']; ?>">
    </div>
    <div>
        <label for="">新增選項</label>
        <a href="" id="plus">
            <input class="bg-info border-info text-light rounded" type="button" value="+">
        </a>
    </div>
    <!--  -->


<label class='list-group-item main'>
    <div>
        選項<span id="text1">1</span>: <input type='text' name='options[]'>
    </div>
</label>
    <div>
        <input type="submit" value="送出">
    </div>

</form>


<script>
    
    const plus=document.getElementById("plus");
    const text1=document.getElementById("text1");
    var count = 0;
    
    plus.addEventListener("click",function(e){
        e.preventDefault();
        
        // 每點一次 count+1 
        count += 1;
        // console.log("count: " + count);

        // console.log(text1.innerText);

        // 撈出標籤裡的文字後轉數字
        text2=parseInt(text1.innerText);
        // console.log(typeof(text2));

        // 和count相加
        text3=text2+count;
        // console.log(text3);

        // 要插入的標籤
        let strCE = document.createElement('div');
        // 幫標籤上class
        strCE.setAttribute("class", "mt-2");
        strCE.innerHTML = `選項<span id="q1">${text3}</span>: <input type='text' name='options[]'>`;
        document.querySelector('.main').appendChild(strCE);
    
})
</script>
