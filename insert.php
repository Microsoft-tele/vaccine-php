<?php
/**
 * 获取用户输入
 */
if($_POST['table'] == "t_vaccine"){ ?>
    <table border="1">
        <tr>
            <td>疫苗编号</td>
            <td>疫苗名称</td>
            <td>生产厂家</td>
        </tr>
        <tr>
            <form action="insert_sql.php" method="post">
                <td> <input type="number" name="vaccine_id"> </td>
                <td> <input type="text" name="vaccine_name"> </td>
                <td> <input type="text" name="manufacture"> </td>
                <td> <button type="submit" name="table" value="vaccine">插入</button> </td>
            </form>
        </tr>
    </table>

<?php }elseif ($_POST['table'] == "t_institute"){ ?>
    <table border="1">
        <tr>
            <td>学院号</td>
            <td>学院名称</td>
            <td>学院联系电话</td>
            <td>学院人数</td>
        </tr>
        <tr>
            <form action="insert_sql.php" method="post">
                <td> <input type="number" name="institute_id"> </td>
                <td> <input type="text" name="institute_name"> </td>
                <td> <input type="text" name="institute_tel"> </td>
                <td> <input type="number" name="institute_StudentNumber"> </td>
                <td> <button type="submit" name="table" value="institute">插入</button> </td>
            </form>
        </tr>
    </table>

<?php }elseif ($_POST['table'] == "t_student"){ ?>
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
            <form action="insert_sql.php" method="post">
                <td> <input type="number" name="student_id"> </td>
                <td> <input type="text" name="student_name"> </td>
                <td> <input type="text" name="student_sex"> </td>
                <td> <input type="text" name="student_tel"> </td>
                <td> <input type="number" name="institute_id"> </td>
                <td> <input type="number" name="is_vaccine"> </td>
                <td> <input type="number" name="is_NAT"> </td>
                <td> <input type="number" name="vaccine_id"> </td>
                <td> <button type="submit" name="table" value="student">插入</button> </td>
            </form>
        </tr>
    </table>
<?php } ?>

