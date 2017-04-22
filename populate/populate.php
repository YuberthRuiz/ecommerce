<?php

include('./data_management/connectdb.php');

function populate_catlist()
{
	global $link;

	$query = 'SELECT * FROM cat ORDER BY name';
	$result = mysqli_query($link, $query);
	while ($cat = mysqli_fetch_row($result))
		echo '<input type="submit" class="catlist" name="cat" value="'.$cat[1].'" />';
}

function populate_allitms()
{
	global $link;

	$query = 'SELECT * FROM itm';
	$result = mysqli_query($link, $query);
	while ($cat = mysqli_fetch_row($result))
		echo '<div class="itmlist">'.$cat[1].'</div>';
}

function populate_uncategorized()
{
	global $link;

	$query = 'SELECT * FROM itm WHERE itm_id NOT IN (SELECT itm_id FROM itm_cat)';
	$result = mysqli_query($link, $query);
	while ($cat = mysqli_fetch_row($result))
		echo '<div class="itmlist">'.$cat[1].'</div>';
}

function populate_badlogin()
{
	;
}

function populate_main()
{
	if (isset($_GET['cat']) && $_GET['cat'] != 'Home')
	{
		if ($_GET['cat'] == 'badlogin')
			populate_badlogin();
		else if ($_GET['cat'] == 'Info')
			populate_info();
		else if ($_GET['cat'] == 'Subject')
			populate_subject();
		else if ($_GET['cat'] == 'Admin')
			populate_admin();
		else if ($_GET['cat'] == 'Basket')
			populate_basket();
		else if ($_GET['cat'] == 'All Products')
			populate_allitms();
		else if ($_GET['cat'] == 'Uncategorized')
			populate_uncategorized();
		else
			populate_cat();	
	}
	else
		populate_home();
}
?>

