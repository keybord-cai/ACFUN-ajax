<?php
require_once('../connect.php');
$id = $_GET['id'];
$deletesql = "delete from nav where id=$id";

$del = new nav();
$del->del($con,$deletesql);

class nav
{
    function del($con, $sql)
    {
        if (mysqli_query($con, $sql)) {
            echo '{"success":"true"}';
        } else {
            echo '{"success":"false"}';
        }
    }
}

?>
