<?php
/**
 * Created by PhpStorm.
 * User: lisab
 * Date: 2018/9/5 0005
 * Time: 18:21
 */
    require_once ('connect.php');
    $sql = "select * from nav ORDER BY 'id'";
    $row = mysqli_query($con,$sql);

    $jarr = array();
    $zarr = array();

while ($rows = mysqli_fetch_assoc($row)){
    if($rows['parent_id'] == 0){
        $zarr[] = $rows;
    }
    else{
        $jarr[] = $rows;
    }
}

$res = [];
foreach ($zarr as $item) {
    $item['childrens'] = [];
    foreach ($jarr as $e) {
        if ($item['id'] == $e['parent_id']) {
            $item['childrens'][] = $e;
        }
    }
    $res[] = $item;
}

die(json_encode($res));

//    print_r(json_encode($res));


//mysqli_close($con);