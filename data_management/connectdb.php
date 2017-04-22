<?php

$dbhost = 'localhost:8889';
$dbuser = 'root';
$dbpass = 'root';

$link = mysqli_connect($dbhost,$dbuser,$dbpass) or die ('Error connecting to mysql: ' . mysqli_error($link).'\r\n');

$query = "USE DBe_commerce";
mysqli_query($link, $query);
?>