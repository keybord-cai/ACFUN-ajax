<?php
require_once('../connect.php');

$id = $_POST["id"];
$name = $_POST['name'];
$url = $_POST["url"];

$sql = "select * from nav ORDER BY 'id'";
$row = mysqli_query($con, $sql);
while ($rows = mysqli_fetch_assoc($row)) {
    if ($_POST["parent_id"] == '无') {
        $parent_id = 0;
    } else if ($_POST["parent_id"] == $rows['name']) {
        $parent_id = $rows['id'];
    }
}

$updatesql = "update `nav` set `name` = '$name', `url`= '$url' , `parent_id` = $parent_id where `id` = $id";

//$updatesql = "UPDATE `nav` set `name` = '动画', `url`= '1234654' , `parent_id` = 0 where `id`= 3";
//echo $updatesql;

$modify = new nav();

if (!isset($_POST["name"]) || empty($_POST["name"])
    || !isset($_POST["url"]) || empty($_POST["url"])
    || !isset($_POST["id"]) || empty($_POST["id"])
    || !isset($_POST["parent_id"])
//    || empty($_POST["parent_id"])
) {
    echo '{"success":false,"msg":"参数错误，信息填写不全"}';
} else {
    $modify->modify($con, $updatesql);
}

class nav
{
    function modify($con, $sql)
    {
        if (mysqli_query($con, $sql)) {
            echo '{"success":true,"msg":"信息修改成功!"}';
        } else {
            echo '{"success":true,"msg":"信息修改失败!"}';
        }
    }
}

?>