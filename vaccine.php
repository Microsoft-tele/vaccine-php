<?php

include "conn.php";

$link = $GLOBALS['conn'];

$sql = "use vaccine";

if ($link->query($sql) === TRUE) {
} else {
    echo "use vaccine失败<br>";
}

$sql = "select * from vaccine";
$res = $link->query($sql);

?>
<?php
if($res->num_rows > 0){ ?>

<table border="2">
    <tr>
        <td>疫苗编号</td>
        <td>疫苗名称</td>
        <td>生产厂家</td>
        <td>操作</td>
    </tr>
    <?php
    while($row = $res->fetch_assoc()){ ?>
        <tr>
            <td> <?php echo $row['vaccine_id']                               ?></td>
            <td> <?php echo $row['vaccine_name']                             ?></td>
            <td> <?php echo $row['vaccine_manufacture']                      ?></td>
            <td>
                <form method="post">
                    <button type="submit" name="id" value="<?php echo $row['vaccine_id']." t_vaccine" ?>" formaction="update.php">修改</button>
                    <button type="submit" name="id" value="<?php echo $row['vaccine_id']." t_vaccine" ?>" formaction="drop.php">删除</button>
                </form>
            </td>
        </tr>
    <?php } ?>
    <?php } ?>
</table>
<hr/>
<form action="insert.php" method="post">
    <button type="submit" name="table" value="t_vaccine">插入数据</button>
</form>
<form action="menu.html">
    <button type="submit">首页</button>
</form>