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

    // 如果資料庫沒有任何一筆圖片資料 第一個寫入的圖片 預設為顯示
    $c=q("SELECT count(*) FROM `ad`");
    if($c[0]['count(*)'] == 0){

        insert('ad',['name'=>$filename,'sh'=>1,'intro'=>$intro]);
    }else{
        insert('ad',['name'=>$filename,'sh'=>0,'intro'=>$intro]);
    }
}

to("../backend/?do=image");

?>