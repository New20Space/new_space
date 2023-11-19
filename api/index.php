<?php
$url = $_SERVER['REQUEST_URI'];

$arr = require 'pages.php';


$e;

foreach ($arr as $elem) {
	$e=$elem+$e;
}

$layout = file_get_contents('layout.html');
$content = file_get_contents('https://new20space.vercel.app/api/1.php')+$e;
$layout = str_replace('{{ content }}', $content, $layout);
echo  $layout;
?>