<?php
require_once('../connect.php');

$id = $_POST["id"];
$name = $_POST['name'];
$url = $_POST["url"];
$parent_id = $_POST["parent_id"];

$updatesql = "update nav set 'name'=$name,url = $url,parent_id = $parent_id, where id=$id";

if (!isset($_POST["name"]) || empty($_POST["name"])
    || !isset($_POST["url"]) || empty($_POST["url"])
    || !isset($_POST["id"]) || empty($_POST["id"])
    || !isset($_POST["parent_id"])
//    || empty($_POST["parent_id"])

) {
    echo '{"success":false,"msg":"参数错误，信息填写不全"}';
} else {
    if (mysqli_query($con, $updatesql)) {
        echo '{"success":true,"msg":"信息修改成功!<br>菜单名称:' . $name . '<br>链接地址:' . $url . '<br>父菜单:' . $parent_id . '<br>"}';
    } else {
        echo '{"success":true,"msg":"信息修改失败!"}';
    }
}
?>