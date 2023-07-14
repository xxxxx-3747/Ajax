<?php
header("Access-Control-Allow-Origin: *");

if(empty($_POST['username'])|| empty($_POST['password'])) {
    exit('请输入用户名和密码');
} else {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

if ($username == 'admin' && $password == '123') {
    exit('登录成功');
} else {
    exit('用户名密码错误');
}
