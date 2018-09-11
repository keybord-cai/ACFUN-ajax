<?php
require_once('../connect.php');

$id = $_POST["id"];
$name = $_POST['name'];
$url = $_POST["url"];
$parent_id = $_POST["parent_id"];

$updatesql = "update nab set 'name'='$name',url = $url,parent_id = $parent_id, where id=$id";

if (!isset($_POST["name"]) || empty($_POST["name"])
    || !isset($_POST["url"]) || empty($_POST["url"])
    || !isset($_POST["id"]) || empty($_POST["id"])
    || !isset($_POST["parent_id"]) || empty($_POST["parent_id"])) {
    echo "<script>alert('信息不全');</script>";
} else {
    if (mysqli_query($con, $updatesql)) {
        echo "<script>alert('修改成功');window.location.href='http://localhost/ACFUN-ajax/admin/ACFUN.manage.php';</script>";
    } else {
        echo "<script>alert('修改失败');window.location.href='http://localhost/ACFUN-ajax/admin/ACFUN.manage.php';</script>";
    }
}


?>