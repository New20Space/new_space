<?php
$url = $_SERVER['REQUEST_URI'];

$arr = require './api/pages.php';

$e='';
for ($i = count($arr) - 1; $i >= 0; $i--) {
    $e=  $arr[$i].$e;
}

$layout = file_get_contents('./api/layout.php');
$content = file_get_contents('./api/1.php').$e;
$layout = str_replace('{{ content }}', $content, $layout);
echo  $layout;
?>