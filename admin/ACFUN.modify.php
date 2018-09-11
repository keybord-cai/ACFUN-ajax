<?php
require_once('../connect.php');
//读取旧信息
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($con, "select * from nav where id=$id");
    $data = mysqli_fetch_assoc($query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改菜单</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    div {
        width: 300px;
        margin: 0 auto;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost/ACFUN-ajax/admin/ACFUN.manage.php">菜单后台管理系统</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/ACFUN-ajax/admin/ACFUN.add.html">插入菜单</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/ACFUN-ajax/admin/ACFUN.modify.php">修改菜单</a>
            </li>
        </ul>
    </div>
</nav>
<div class="text-center">
    <h1 style="text-align: center">修改内容</h1>
    <label style="text-align:left">菜单ID:</label>
    <input type="text" id="staffId" value="<?php echo $id ?>"><br>
    <label>菜单名称:</label>
    <input type="text" id="staffName" value="<?php echo $data['name'] ?>"><br>
    <label>链接地址:</label>
    <input type="text" id="staffUrl" value="<?php echo $data['url'] ?>"><br>
    <label>父菜单ID:</label>
    <input type="text" id="staffParent" value="<?php echo $data['parent_id'] ?>"><br>
    <button class="btn btn-primary btn-sm" id="change">修改</button>
    <p id="createResult"></p>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script>
    $("#change").click(function () {
        $.ajax({
            type: "POST",
            url: "http://localhost/ACFUN-ajax/admin/ACFUN.modify.handle.php",
            data: {
                id: $("#staffId").val(),
                name: $("#staffName").val(),
                url: $("#staffUrl").val(),
                parent_id: $("#staffParent").val()
            }
        })
    });
</script>
</body>
</html>