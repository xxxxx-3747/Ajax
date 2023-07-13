<?php

//设置head
header('Content_type: application/json');
header("Access-Control-Allow-Origin: *");


$data = array(
    array(
        'id'=>1,
        'name'=>'大傻子',
        'age'=>18
    ),
    array(
        'id'=>2,
        'name'=>'二傻子',
        'age'=>19
    ),
    array(
        'id'=>3,
        'name'=>'小傻子',
        'age'=>20
    ),
    array(
        'id'=>4,
        'name'=>'麻瓜',
        'age'=>20
    )
);

// var_dump($data);

//转化为json格式
//判断id是否存在
if(empty($_GET['id'])){

    //没有获取到具体的id,打印全部的数据
    $json = json_encode($data);
    //var_dump($json);
    echo $json;
    //print_r($json);
}else{
    foreach ($data as $key) {
        if($key['id'] != $_GET['id']){
            continue;
        }
        $json = json_encode($key);
        echo $json;
        //var_dump($json);
        //print_r($json);
    }

}