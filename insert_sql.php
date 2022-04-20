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
        echo "（vaccine表）插入成功<br>";
    } else {
        echo "（vaccine表）插入失败<br>";
    }
    header('Refresh:3,Url=vaccine.php');
    echo '3s 后跳转';
}elseif ($_POST['table'] == "institute"){
    $type1 = (int)$_POST['institute_id'];
    $type2 = "'".$_POST['institute_name']."'";
    $type3 = "'".$_POST['institute_tel']."'";
    $type4 = (int)$_POST['institute_StudentNumber'];

    $sql = "insert into institute(institute_id, institute_name, institute_tel, institute_StudentNumber) values($type1, $type2, $type3, $type4)";

    if ($link->query($sql) === TRUE) {
        echo "（institute表）插入成功<br>";
    } else {
        echo "（institute表）插入失败<br>";
    }
    header('Refresh:3,Url=institute.php');
    echo '3s 后跳转';
}elseif ($_POST['table'] == "student"){
    $type1 = (int)$_POST['student_id'];
    $type2 = "'".$_POST['student_name']."'";
    $type3 = "'".$_POST['student_sex']."'";
    $type4 = "'".$_POST['student_tel']."'";
    $type5 = (int)$_POST['institute_id'];
    $type6 = (int)$_POST['is_vaccine'];
    $type7 = (int)$_POST['is_NAT'];
    $type8 = (int)$_POST['vaccine_id'];

    $sql = "insert into student(student_id, student_name, student_sex, student_tel, institute_id, is_vaccine, is_NAT, vaccine_id) values($type1, $type2, $type3, $type4, $type5, $type6, $type7, $type8)";

    if ($link->query($sql) === TRUE) {
        echo "（student表）插入成功<br>";
    } else {
        echo "（student表）插入失败<br>";
    }
    header('Refresh:3,Url=student.php');
    echo '3s 后跳转';
}

