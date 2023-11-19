<?php
$url = $_SERVER['REQUEST_URI'];

$layout = file_get_contents('layout.html');
$content = file_get_contents('https://new20space.vercel.app/api/1.php');
$layout = str_replace('{{ content }}', $content, $layout);
echo  $layout;
?>