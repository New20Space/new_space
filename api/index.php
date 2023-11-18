<?php
$url = $_SERVER['REQUEST_URI'];
$content = file_get_contents( $url . '.php');
echo $content;
?>