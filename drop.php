<?php
//var_dump($_POST);
$res = explode(" ", $_POST['id']);//
$id = $res[0];

$tmp = explode("_",$res[1]);
$table = $tmp[1];
// $res[1] t_表名
// $table  表名
// $id 主键
//echo "<pre>";
//echo $res[1];
//echo "<br>";
//echo $table;
//echo "<br>";
//echo $id;


include "conn.php";
$link = $GLOBALS['conn'];
$link->query("use vaccine");

if($table == 'vaccine'){
    $sql = "delete from vaccine where vaccine_id=$id";

    if ($link->query($sql) === TRUE) {
        echo "（vaccine表）删除成功";
    } else {
        echo "（vaccine表）删除失败<br>";
    }
}elseif ($table == 'institute'){
    $sql = "delete from institute where institute_id=$id";

    if ($link->query($sql) === TRUE) {
        echo "（institute表）删除成功";
    } else {
        echo "（institute表）删除失败<br>";
    }
}elseif ($table == 'student'){
    $sql = "delete from student where student_id=$id";

    if ($link->query($sql) === TRUE) {
        echo "（student表）删除成功";
    } else {
        echo "（student表）删除失败<br>";
    }
}