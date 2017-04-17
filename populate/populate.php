<?php
function populate_cat()
{
	$BDcat = unserialize(file_get_contents('../private/BDcat'));
	foreach ($BDcat as $cat)
		echo '<li><a href="categorii.php?cat=' . $cat['name'] . '" target="iframe_a">' . $cat['name'] . '</a></li>';
}

function print_itm($i_id, $BDitm)
{
	echo $BDitm[$i_id]['name'] . "    " . $BDitm[$i_id]['stock'] . "    " . $BDitm[$i_id]['price'];
}

function populate_itm($cat)
{
	echo '<br/><br/><h2>'. $cat .'</h2>';
	$BDcat = unserialize(file_get_contents('../private/BDcat'));
	$BDitm = unserialize(file_get_contents('../private/BDitm'));
	$BDitm_cat = unserialize(file_get_contents('../private/itm_cat'));
	foreach ($BDcat as $key => $elem)												//find cat_id in functie de nume
		if ($elem['name'] == $cat)
			$cat_id = $key;
	foreach($BDitm_cat as $key => $elem)
		if ($elem[0] == $cat_id)
			echo '<br/>' . print_itm($key, $BDitm);
}

function populate_userlist()
{
	echo '<br/><br/>';
	$BDusr = unserialize(file_get_contents('../private/BDusr'));
	foreach ($BDusr as $login => $usrdata)
	{
		echo '<br />' . $login . " " . $usrdata['name'] . " " . $usrdata['prename'] . " " . $usrdata['e-mail'];
	}
}

function populate_basket($login)
{
	echo '<br/><br/><h2>'. $cat .'</h2>';
	$BDitm = unserialize(file_get_contents('../private/BDitm'));
	$Basket = unserialize(file_get_contents('../private/Basket'));
	foreach($Basket as $key => $elem)
		if ($key == $login)
			foreach($elem as $i_id)
				echo '<br />' . print_itm($i_id, $BDitm);
}
/*
<?php
	include ('../populate/add_item.php');
?>
echo '<li><a href="add_item.php?i_id=' . //i_id// . '" target="iframe_a">' . CosCumparaturi . '</a></li>';
*/
?>

