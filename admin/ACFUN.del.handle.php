<?php
require_once('../connect.php');
$id = $_GET['id'];
$deletesql = "delete from nav where id=$id";

if (mysqli_query($con, $deletesql)) {
    echo "<script>alert('删除成功');window.location.href='http://localhost/ACFUN-ajax/admin/ACFUN.manage.php';</script>";
} else {
    echo "<script>alert('删除失败');window.location.href='http://localhost/ACFUN-ajax/admin/ACFUN.manage.php';</script>";
}
?>