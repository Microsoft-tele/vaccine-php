<?php

include "conn.php";

$link = $GLOBALS['conn'];

$sql = "use vaccine";

if ($link->query($sql) === TRUE) {
} else {
    echo "use vaccine失败<br>";
}

$sql = "select * from student";
$res = $link->query($sql);

?>
<?php
if($res->num_rows > 0){ ?>

<table border="2">
    <tr>
        <td>学号</td>
        <td>姓名</td>
        <td>性别</td>
        <td>联系电话</td>
        <td>学院号</td>
        <td>是否接种疫苗</td>
        <td>是否核酸检测</td>
        <td>接种疫苗的编号</td>
        <td>操作</td>
    </tr>
    <?php
        while($row = $res->fetch_assoc()){ ?>
            <tr>
                <td> <?php echo $row['student_id']                               ?></td>
                <td> <?php echo $row['student_name']                             ?></td>
                <td> <?php echo $row['student_sex']                              ?></td>
                <td> <?php echo $row['student_tel']                              ?></td>
                <td> <?php echo $row['institute_id']                             ?></td>
                <td> <?php if($row['is_vaccine'] == 1) echo "是";else echo "否";  ?></td>
                <td> <?php if($row['is_NAT'] == 1) echo "是";else echo "否";      ?></td>
                <td> <?php echo $row['vaccine_id']                               ?></td>
                <td>
                    <form method="post">
                        <button type="submit" name="id" value="<?php echo $row['student_id']." t_student" ?>" formaction="update.php">修改</button>
                        <button type="submit" name="id" value="<?php echo $row['student_id']." t_student" ?>" formaction="drop.php">删除</button>
                    </form>
                </td>
            </tr>
    <?php } ?>
<?php } ?>
</table>
<hr/>
<form action="insert.php" method="post">
    <button type="submit" name="table" value="t_student">插入数据</button>
</form>