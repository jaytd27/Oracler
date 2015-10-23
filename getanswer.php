<?php
$type = $_GET['type'];
$number = $_GET['number']; 
$path = 'images/'.$type.'/'.$number.'.txt';
$file = file_get_contents($path, true);
echo $file
?>