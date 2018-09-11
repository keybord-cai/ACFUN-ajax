<?php
    require_once('../connect.php');
    if (!isset($_POST["name"]) || empty($_POST["name"])
        || !isset($_POST["url"]) || empty($_POST["url"])
        || !isset($_POST["parent_id"]) || empty($_POST["parent_id"])) {
        echo '{"success":false,"msg":"参数错误，信息填写不全"}';
    }
    $name = $_POST["name"];
    $url = 'http://' .$_POST["url"].'/';
    $sql = "select * from nav ORDER BY 'id'";
    $row = mysqli_query($con,$sql);
    while($rows = mysqli_fetch_assoc($row)){
        if($_POST["parent_id"] == '无父菜单') {
            $parent_id = 0;
        }else if ($_POST["parent_id"] == $rows['name']){
            $parent_id = $rows['id'];
        }
    }
    $insertsql = "insert into nav(name,url,parent_id) values('$name', '$url', '$parent_id')";

    if(mysqli_query($con,$insertsql)){
        echo '{"success":true,"msg":"信息保存成功!<br>菜单名称:'. $name .'<br>链接地址:' .  $url . '<br>父菜单:' .  $parent_id . '<br>"}';
    }
?>

