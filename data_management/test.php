<?php

$dbhost = 'localhost:8889';
$dbuser = 'root';
$dbpass = 'root';

$link = mysqli_connect($dbhost,$dbuser,$dbpass) or die ('Error connecting to mysql: ' . mysqli_error($link).'\r\n');

$query = "USE testdb";
mysqli_query($link, $query);
$query = "SELECT * FROM categories";
$result = mysqli_query($link, $query);

if (!($result=mysqli_query($link,$query))) {
        printf("Error: %s\n", mysqli_error($link));
    }

while ($arr = mysqli_fetch_row($result))
	print_r($arr);

echo hash('whirlpool', 'root');

?>