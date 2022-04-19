<?php


include "conn.php";
$link = $GLOBALS['conn'];

$sql = "use vaccine";

$type = array();


if ($link->query($sql) === TRUE) {
    echo "use database vaccine";
} else {
    echo "Error : " . $link->error;
}

$link->close();

