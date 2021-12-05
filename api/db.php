<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=vote";
$pdo=new PDO($dsn,"root","");
session_start();

// 取得符合條件的一筆資料
function find($table,$id){
    // global 定義全域變數
    global $pdo;
    // $sql="SELECT * FROM `$table` WHERE `id`='$id'";
    $sql="SELECT * FROM `$table` WHERE ";
    if(is_array($id)){
        foreach($id as $key=>$value){
            $tmp[]="`$key`='$value'";
        }
        $sql=$sql . implode(" AND ",$tmp);
    }else{
        $sql=$sql . "`id`='$id'";
    }
    // echo $sql;

    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}
// 執行find function
// find("students",["account"=>"deded"]);



//  取出指定資料表的所有資料
function all($table,...$arg){
    global $pdo;
    $sql="SELECT * FROM `$table` ";
    if(isset($arg[0])){
        // 判斷有無第二個參數
        if(is_array($arg[0])){
            foreach($arg[0] as $key=>$value){
                $tmp[]="`$key`='$value'";
                // echo "<pre>";
                // print_r($tmp);
                // echo "</pre>";
                // echo "<br>";
            }
            $sql=$sql . "WHERE " . implode(" AND ",$tmp);

        }
        else{
            $sql=$sql.$arg[0];

        }
    }
    // 這邊判斷未完成
    if(isset($arg[1])){
        $sql=$sql.$arg[1];
    }
    // echo $sql;

    // echo "<pre>";
    // print_r($arg[0]);
    // echo "</pre>";
    // echo "<br>";
    // fetchALL(PDO::FETCH_ASSOC) 不顯示key值
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    // return $pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
}
// 執行all函式
// all("student",["major"=>"國際貿易科"]);

// update 函式設計
/*
1.指定資料表 $table  (字串)
2.指定更新的欄位
3.指定更新的條件

*/ 
// 要update的欄位和值
$column=["seat_num"=>"99999","address"=>"AAAAAAAA"];
// 查詢條件
$where=["id"=>"1","national_id"=>"C100000012"];
// 建立函式
function update($table,$column,$where){
    global $pdo;
    $sql_set="";
    // 用迴圈和陣列把$column拆解組合成sql語句
    foreach($column as $key=>$value){
        $sql_set=$sql_set . "`$key`='$value',";
}
// 清除最後一個字元的特殊符號
$sql_set=trim($sql_set,",");

// 用迴圈和陣列把$where拆解組合成sql語句
$sql_where="";
    foreach($where as $key=>$value){
        $sql_where=$sql_where . "`$key`='$value' AND ";
}
// 把最後面的AND和空格處理掉
$sql_where=mb_substr($sql_where,0,mb_strlen($sql_where)-5);

// $sql="UPDATE `students` SET `seat_num`='99999',`address`='AAAAAAAA' WHERE `id`='1' AND `national_id`='C100000012'";
$sql="UPDATE `$table` SET $sql_set WHERE $sql_where ";
echo $sql;
echo "<br>";
// echo $sql_set;
// echo "<br>";
// echo $sql_where;
// echo "<br>";
$pdo->exec($sql);


}

// 執行update函式
// update("students",$column,$where);


function insert($table,$array){
    global $pdo;

    // $array=["id"=>"1",
    //         "subject"=>"XXXXXX"];
    // array_keys() 把KEY值 拉出來變陣列
    // print_r(array_keys($array));
    // $sql="INSERT into $table(`id`,`subject`,``) value('1','XXXXXX','')"; 陣列內容轉成sql的語法
    $sql="INSERT into $table(`" . implode('`,`',array_keys($array)) . "`) 
                       value('" . implode("','",$array) . "')";

    echo $sql;
    return $pdo->exec($sql);

}

function del($table,$id){
    // global 定義全域變數
    global $pdo;
    
    $sql="DELETE FROM `$table` WHERE ";
    if(is_array($id)){
        foreach($id as $key=>$value){
            $tmp[]="`$key`='$value'";
        }
        $sql=$sql . implode(" AND ",$tmp);
    }else{
        $sql=$sql . "`id`='$id'";
    }


    return $pdo->exec($sql);
}



function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
// 計算符合資料條件的筆數
function rows($table,$array){
    // global 定義全域變數
    global $pdo;
    // $sql="SELECT * FROM `$table` WHERE `id`='$id'";
    $sql="SELECT count(*) FROM `$table` WHERE ";
 
        foreach($array as $key=>$value){
            $tmp[]="`$key`='$value'";
        }
        $sql=$sql . implode(" AND ",$tmp);
    // echo $sql;
    return $pdo->query($sql)->fetchColumn();
}
// 執行 rows 函式
// echo rows("options",["topic_id"=>5]);

function to($url){
    header("location:" . $url);
}

// 任意查詢函式
function q($sql){
    global $pdo;
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}










?>


