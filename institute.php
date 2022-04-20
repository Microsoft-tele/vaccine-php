<?php

include "conn.php";

$link = $GLOBALS['conn'];

$sql = "use vaccine";

if ($link->query($sql) === TRUE) {
} else {
    echo "use vaccine失败<br>";
}

$sql = "select * from institute";
$res = $link->query($sql);

?>
<?php
if($res->num_rows > 0){ ?>

<table border="2">
    <tr>
        <td>学院号</td>
        <td>学院名称</td>
        <td>学院联系电话</td>
        <td>学院人数</td>
        <td>操作</td>
    </tr>
    <?php
    while($row = $res->fetch_assoc()){ ?>
        <tr>
            <td> <?php echo $row['institute_id']                               ?></td>
            <td> <?php echo $row['institute_name']                             ?></td>
            <td> <?php echo $row['institute_tel']                              ?></td>
            <td> <?php echo $row['institute_StudentNumber']                    ?></td>
            <td>
                <form method="post">
                    <button type="submit" name="id" value="<?php echo $row['institute_id']." t_institute" ?>" formaction="update.php">修改</button>
                    <button type="submit" name="id" value="<?php echo $row['institute_id']." t_institute" ?>" formaction="drop.php">删除</button>
                </form>
            </td>
        </tr>
    <?php } ?>
    <?php } ?>
</table>
<hr/>
<form action="insert.php" method="post">
    <button type="submit" name="table" value="t_institute">插入数据</button>
</form>
<form action="menu.html">
    <button type="submit">首页</button>
</form>