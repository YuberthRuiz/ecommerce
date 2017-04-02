<?php
function usr_readinto($fd)
{
	$types = fgetcsv($fd);
	while ($temp = fgetcsv($fd))
		$initBD[$temp[0]] = array($types[1] => $temp[1], $types[2] => $temp[2], $types[3] => $temp[3], $types[4] => hash('whirlpool', $temp[4]), $types[5] => $temp[5]);
	ksort($initBD);
	return ($initBD);
}
function cat_readinto($fd)
{
	$types = fgetcsv($fd);
	while ($temp = fgetcsv($fd))
		$initBD[$temp[0]] = array($types[1] => $temp[1]);
	ksort($initBD);
	return ($initBD);
}
function itm_readinto($fd)
{
	$types = fgetcsv($fd);
	while ($temp = fgetcsv($fd))
		$initBD[$temp[0]] = array($types[1] => $temp[1], $types[2] => $temp[2], $types[3] => $temp[3]);
	ksort($initBD);
	return ($initBD);
}
function itm_cat_readinto($fd)
{
	$types = fgetcsv($fd);
	while ($temp = fgetcsv($fd))
		$initBD[$temp[0]] = array($temp[1]);
	return ($initBD);
}
	$fdusr = fopen("initBDusr.csv", 'r');
	$fdcat = fopen("initBDcat.csv", 'r');
	$fditm = fopen("initBDitm.csv", 'r');
	$fditm_cat = fopen("init_itm_cat.csv", 'r');

	$BDusr = usr_readinto($fdusr);
	$BDcat = cat_readinto($fdcat);
	$BDitm = itm_readinto($fditm);

	foreach ($BDusr as $login => $userdata)
		$Basket[$login] = array();
	$itm_cat = itm_cat_readinto($fditm_cat);

	file_put_contents("../private/BDusr", serialize($BDusr));
	file_put_contents("../private/BDcat", serialize($BDcat));
	file_put_contents("../private/BDitm", serialize($BDitm));
	file_put_contents("../private/Basket", serialize($Basket));
	file_put_contents("../private/itm_cat", serialize($itm_cat));

	fclose($fdusr);
	fclose($fdcat);
	fclose($fditm);
	fclose($fditm_cat);

//	print_r($BDusr);
//	print_r($BDcat);
//	print_r($BDitm);
//	print_r($Basket);
//	print_r($itm_cat);
?>