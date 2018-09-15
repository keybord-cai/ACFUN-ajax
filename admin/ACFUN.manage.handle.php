<?php
/**
 * Created by PhpStorm.
 * User: lisab
 * Date: 2018/9/13 0013
 * Time: 14:18
 */
require_once('../connect.php');
$sql = "select * from nav order by id";
$query = mysqli_query($con, $sql);
$data = [];
if ($query && mysqli_num_rows($query)) {
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
//} else {
//    $data = array();
}
die(json_encode($data));
?>