<?php

include "conn.php";

$link = $GLOBALS['conn'];

$sql = "use vaccine";

if ($link->query($sql) === TRUE) {
    echo "use vaccine成功<br>";
} else {
    echo "use vaccine失败<br>";
}


$sql = "CREATE TABLE vaccine(
        vaccine_id INT(10) PRIMARY KEY,
        vaccine_name VARCHAR(50) NOT NULL,
        vaccine_manufacture VARCHAR (50) NOT NULL
)";

if ($link->query($sql) === TRUE) {
    echo "创建表vaccine成功<br>";
} else {
    echo "创建表vaccine失败<br>";
}


$sql = "CREATE TABLE student(
        student_id INT(10) PRIMARY KEY,
        student_name VARCHAR (50) NOT NULL,
        student_sex CHAR(4) NOT NULL,
        student_tel VARCHAR(50) NOT NULL UNIQUE,
        institute_id INT(10) NOT NULL,
        is_vaccine BOOLEAN NOT NULL,
        is_NAT BOOLEAN NOT NULL,
        vaccine_id INT(10) NOT NULL
)";

if ($link->query($sql) === TRUE) {
    echo "创建表student成功<br>";
} else {
    echo "创建表student失败<br>";
}


$sql = "CREATE TABLE institute(
        institute_id INT(10) PRIMARY KEY,
        institute_name VARCHAR (50) NOT NULL,
        institute_tel VARCHAR (50) NOT NULL UNIQUE,
        institute_StudentNumber INT(10) NOT NULL
)";

if ($link->query($sql) === TRUE) {
    echo "创建表institute成功<br>";
} else {
    echo "创建表institute失败<br>";
}
$link->close();