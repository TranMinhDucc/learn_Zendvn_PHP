<?php


$user = $_POST['user'];
$pass = $_POST['pass'];


$result = ($user == 'admin' && $pass == '123') ? "Đăng Nhập Thành Công" : "Đăng Nhâp Thất Bại" ;

echo $result;