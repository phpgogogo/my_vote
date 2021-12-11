<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=vote";
$pdo=new PDO($dsn,'root','');
// $sql="SELECT * FROM `options` WHERE `id`='1'";
// $rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($rows);
// echo "<pre>";
// return $rows;
// echo "<pre>";
// print_r($rows[0]);
// echo "<pre>";



//取出指定資料表的所有資料
function all($table,...$arg){
    global $pdo;
    $sql="SELECT * FROM `$table` ";
    if(isset($arg[0])){
        if(is_array($arg[0])){
            foreach($arg[0] as $key=>$value){
                $tmp[]="`$key`='$value'";
            }
            
            $sql=$sql."where " . implode(" AND ",$tmp);
        }else{
            $sql=$sql.$arg[0];
        }
    }

    if(isset($arg[1])){
        $sql=$sql.$arg[1];
    }
    
    echo $sql;
    
    $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    //return $pdo->query($sql)->fetchAll();
}

$a=all("users",["id"=>"1"]);
echo "<pre>";
print_r($a);
echo "</pre>";

//取得符合條件的一筆資料
function find($table,$id){
    global $pdo;
    $sql="SELECT * FROM `$table` WHERE ";

    if(is_array($id)){
        foreach($id as $key=>$value){
            $tmp[]="`$key`='$value'";
        }
        
        $sql=$sql. implode(" AND ",$tmp);
    }else{
       $sql=$sql . "`id`='$id'";
    }
    echo $sql;
    return $pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
}
// find("options","4");


?>