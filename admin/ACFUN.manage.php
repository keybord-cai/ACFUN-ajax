<?php
require_once('../connect.php');
$sql = "select * from nav order by id";
$query = mysqli_query($con, $sql);
if ($query && mysqli_num_rows($query)) {
    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }
} else {
    $data = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>菜单后台管理系统</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
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

<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>菜单名称</th>
        <th>链接地址</th>
        <th>父菜单ID</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (!empty($data)) {
        foreach ($data as $value) {
            ?>
            <tr>
                <td> <?php echo $value['id'] ?> </td>
                <td> <?php echo $value['name'] ?> </td>
                <td> <?php echo $value['url'] ?> </td>
                <td> <?php echo $value['parent_id'] ?> </td>
                <td>
                    <a href="http://localhost/ACFUN-ajax/admin/ACFUN.del.handle.php?id=<?php echo $value['id'] ?>">删除</a>
                    <a href="http://localhost/ACFUN-ajax/admin/ACFUN.modify.php?id=<?php echo $value['id'] ?>">修改</a>
                </td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>