<?php
// var_dump($_POST);
$res = explode(" ", $_POST['id']);
$id = $res[0];
$table = $res[1];
// echo $id." and ".$table;

if($table == "t_vaccine"){ ?>
    <table border="1">
        <tr>
            <td>疫苗编号</td>
            <td>疫苗名称</td>
            <td>生产厂家</td>
        </tr>
        <tr>
            <form>
                <td> <input type="number"> </td>
                <td> <input type="text"> </td>
                <td> <input type="text"> </td>
                <td> <input type="submit" name="op" value="update"> </td>
            </form>
        </tr>
    </table>
<?php }elseif($table == "t_institute"){ ?>
    <table border="1">
        <tr>
            <td>学院号</td>
            <td>学院名称</td>
            <td>学院联系电话</td>
            <td>学院人数</td>
        </tr>
        <tr>
            <form>
                <td> <input type="number"> </td>
                <td> <input type="text"> </td>
                <td> <input type="text"> </td>
                <td> <input type="number"> </td>
                <td> <input type="submit" name="op" value="update"> </td>
            </form>
        </tr>
    </table>
<?php }elseif ($table == "t_student"){ ?>
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
            <form>
                <td> <input type="number"> </td>
                <td> <input type="text"> </td>
                <td> <input type="text"> </td>
                <td> <input type="text"> </td>
                <td> <input type="number"> </td>
                <td> <input type="number"> </td>
                <td> <input type="number"> </td>
                <td> <input type="number"> </td>
                <td> <input type="submit" name="op" value="update"> </td>
            </form>
        </tr>
    </table>
<?php } ?>

