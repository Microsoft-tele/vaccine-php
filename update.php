<?php
// var_dump($_POST);
$res = explode(" ", $_POST['id']);
$id = $res[0];

$tmp = explode("_",$res[1]);
$table = $tmp[1];


include "conn.php";
$link = $GLOBALS['conn'];
$link->query("use vaccine");

if($res[1] == "t_vaccine"){
    $sql_vaccine = "select * from $table where vaccine_id = $id";
    $data = $link->query($sql_vaccine);
    $row = $data->fetch_assoc();
    $vaccine_id = $row['vaccine_id'];
    $vaccine_name = $row['vaccine_name'];
    $vaccine_manufacture = $row['vaccine_manufacture'];
    ?>
    <table border="1">
        <tr>
            <td>疫苗编号</td>
            <td>疫苗名称</td>
            <td>生产厂家</td>
        </tr>
        <tr>
            <form action="update_sql.php" method="post">
                <td> <input type="number" name="vaccine_id" value="<?php echo $vaccine_id ?>"> </td>
                <td> <input type="text" name="vaccine_name" value="<?php echo $vaccine_name ?>"> </td>
                <td> <input type="text" name="vaccine_manufacture" value="<?php echo $vaccine_manufacture ?>"> </td>
                <td> <button type="submit" name="table" value="<?php echo "vaccine"." ".$id ?>">修改</button></td>
            </form>
        </tr>
    </table>
<?php }elseif($res[1] == "t_institute"){
    $sql_institute = "select * from $table where institute_id = $id";
    $data = $link->query($sql_institute);
    $row = $data->fetch_assoc();
    $institute_id = $row['institute_id'];
    $institute_name = $row['institute_name'];
    $institute_tel = $row['institute_tel'];
    $institute_StudentNumber = $row['institute_StudentNumber'];
    ?>
    <table border="1">
        <tr>
            <td>学院号</td>
            <td>学院名称</td>
            <td>学院联系电话</td>
            <td>学院人数</td>
        </tr>
        <tr>
            <form action="update_sql.php" method="post">
                <td> <input type="number" name="institute_id" value="<?php echo $institute_id ?>"> </td>
                <td> <input type="text" name="institute_name" value="<?php echo $institute_name ?>"> </td>
                <td> <input type="text" name="institute_tel" value="<?php echo $institute_tel ?>"> </td>
                <td> <input type="number" name="institute_StudentNumber" value="<?php echo $institute_StudentNumber ?>"> </td>
                <td> <button type="submit" name="table" value="<?php echo "institute"." ".$id ?>">修改</button> </td>
            </form>
        </tr>
    </table>
<?php }elseif ($res[1] == "t_student"){
    $sql_student = "select * from $table where student_id = $id";
    $data = $link->query($sql_student);
    $row = $data->fetch_assoc();
    $student_id = $row['student_id'];
    $student_name = $row['student_name'];
    $student_sex = $row['student_sex'];
    $student_tel = $row['student_tel'];
    $institute_id = $row['institute_id'];
    $is_vaccine = $row['is_vaccine'];
    $is_NAT = $row['is_NAT'];
    $vaccine_id = $row['vaccine_id'];
    ?>
    <table border="1">
        <tr>
            <td>学号</td>
            <td>姓名</td>
            <td>性别(男/女)</td>
            <td>联系电话</td>
            <td>学院号</td>
            <td>是否接种疫苗(1/0)</td>
            <td>是否核酸检测(1/0)</td>
            <td>接种疫苗的编号</td>
        </tr>
        <tr>
            <form action="update_sql.php" method="post">
                <td> <input type="number" name="student_id" value="<?php echo $student_id ?>"> </td>
                <td> <input type="text" name="student_name" value="<?php echo $student_name ?>"> </td>
                <td> <input type="text" name="student_sex" value="<?php echo $student_sex ?>"> </td>
                <td> <input type="text" name="student_tel" value="<?php echo $student_tel ?>"> </td>
                <td> <input type="number" name="institute_id" value="<?php echo $institute_id ?>"> </td>
                <td> <input type="number" name="is_vaccine" value="<?php echo $is_vaccine ?>"> </td>
                <td> <input type="number" name="is_NAT" value="<?php echo $is_NAT ?>"> </td>
                <td> <input type="number" name="vaccine_id" value="<?php echo $vaccine_id ?>"> </td>
                <td> <button type="submit" name="table" value="<?php echo "student"." ".$id ?>">修改</button> </td>
            </form>
        </tr>
    </table>
<?php } ?>

