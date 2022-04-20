<?php
echo "<pre>";
$temp = explode(" ",$_POST['table']);
$table = $temp[0];
$id = $temp[1];

include "conn.php";
$link = $GLOBALS['conn'];
$link->query("use vaccine");

if($table == 'vaccine'){
    $set1 = (int)$_POST['vaccine_id'];
    $set2 = "'".$_POST['vaccine_name']."'";
    $set3 = "'".$_POST['vaccine_manufacture']."'";
    $sql_vaccine = "UPDATE vaccine SET vaccine_id=$set1, vaccine_name=$set2, vaccine_manufacture=$set3
    WHERE vaccine_id=$id";

    if ($link->query($sql_vaccine) === TRUE) {
        echo "（vaccine表）修改成功";
    } else {
        echo "（vaccine表）修改失败<br>";
    }
}elseif ($table == 'institute'){
    $set1 = (int)$_POST['institute_id'];
    $set2 = "'".$_POST['institute_name']."'";
    $set3 = "'".$_POST['institute_tel']."'";
    $set4 = (int)$_POST['institute_StudentNumber'];
    $sql_institute = "UPDATE institute SET institute_id=$set1, institute_name=$set2, institute_tel=$set3, institute_StudentNumber=$set4
    WHERE institute_id=$id";

    if ($link->query($sql_institute) === TRUE) {
        echo "（institute表）修改成功";
    } else {
        echo "（institute表）修改失败<br>";
    }
}elseif ($table == 'student'){
    $set1 = (int)$_POST['student_id'];
    $set2 = "'".$_POST['student_name']."'";
    $set3 = "'".$_POST['student_sex']."'";
    $set4 = "'".$_POST['student_tel']."'";
    $set5 = (int)$_POST['institute_id'];
    $set6 = (int)$_POST['is_vaccine'];
    $set7 = (int)$_POST['is_NAT'];
    $set8 = (int)$_POST['vaccine_id'];
    $sql_institute = "UPDATE student SET student_id=$set1, student_name=$set2, student_sex=$set3, student_tel=$set4, institute_id=$set5, is_vaccine=$set6, is_NAT=$set7, vaccine_id=$set8
    WHERE student_id=$id";

    if ($link->query($sql_institute) === TRUE) {
        echo "（student表）修改成功";
    } else {
        echo "（student表）修改失败<br>";
    }
}