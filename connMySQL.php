<?php

$db_host = '127.0.0.1';
$db_userName = 'root';
$db_password = '';
$db_name = 'lab';

$db_link = @mysqli_connect($db_host, $db_userName, $db_password, $db_name);
if (!$db_link) {
    die('資料庫連結失敗!');
} else {
    echo '資料庫連結成功';
}

mysqli_query($db_link, "SET NAMES 'utf8'");
