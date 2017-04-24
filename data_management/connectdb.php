<?php

$dbhost = 'localhost:8889';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'DBe_commerce';

$link = mysqli_connect($dbhost,$dbuser,$dbpass) or die ('Error connecting to mysql: ' . mysqli_error($link).'\r\n');

if (!isset($_POST['installdb']))
{
	$query = "USE ".$dbname;
	mysqli_query($link, $query);
}

?>