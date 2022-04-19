<?php


include "conn.php";
$link = $GLOBALS['conn'];
$sql = "drop database vaccine";

if ($link->query($sql) === TRUE) {
    echo "数据库vaccine删除成功";
} else {
    echo "Error drop database: " . $link->error;
}
$link->close();

