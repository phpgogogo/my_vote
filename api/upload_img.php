<?php
include_once "db.php";
echo "tmp_name=>".$_FILES['name']['tmp_name']."<br>";
echo "filename=>".$_FILES['name']['name']."<br>";
echo "intro=>".$_POST['intro']."<br>"; 

// $_FILES['input所定義的name']['檔案名稱']
if(!empty($_FILES['name']['tmp_name'])){
    $intro=$_POST['intro'];
    $filename=$_FILES['name']['name'];

    // 把檔案丟到image資料夾 用$filename當檔名
    move_uploaded_file($_FILES['name']['tmp_name'],'../image/'.$filename);

    insert('ad',['name'=>$filename,'sh'=>0,'intro'=>$intro]);
}

to("../backend/?do=image");

?>