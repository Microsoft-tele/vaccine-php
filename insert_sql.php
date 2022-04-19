<?php

include "conn.php";

$link = $GLOBALS['conn'];

$sql = "use vaccine";

if ($link->query($sql) === TRUE) {
//    echo "use vaccine成功<br>";
} else {
    echo "use vaccine失败<br>";
}

if($_POST['table'] == "vaccine"){
    $type1 = (int)$_POST['vaccine_id'];
    $type2 = "'".$_POST['vaccine_name']."'";
    $type3 = "'".$_POST['manufacture']."'";
//    var_dump($type1);
//    var_dump($type2);
//    var_dump($type3);

    $sql =  "insert into vaccine(vaccine_id, vaccine_name, vaccine_manufacture) values($type1, $type2, $type3)";
//    echo "$sql";
    if ($link->query($sql) === TRUE) {
        echo "插入成功";
    } else {
        echo "插入失败<br>";
    }
}

