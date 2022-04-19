<?php

include "conn.php";
$link = $GLOBALS['conn'];
$sql = "create database vaccine";

if ($link->query($sql) === TRUE) {
    echo "数据库vaccine创建成功";
} else {
    echo "Error creating database: " . $link->error;
}

$link->close();
