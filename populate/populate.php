<?php

include ('./data_management/admin.php');

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
	$nbprod = mysqli_query($link, 'SELECT COUNT(*) FROM itm');
	echo '<div class="itmtitle">Total: '.mysqli_fetch_row($nbprod)[0]." products</div>";
	while ($cat = mysqli_fetch_row($result))
		echo '<div class="itmlist">'.$cat[1].'</div>';
}

function populate_uncategorized()
{
	global $link;

	$query = 'SELECT * FROM itm WHERE itm_id NOT IN (SELECT itm_id FROM itm_cat)';
	$result = mysqli_query($link, $query);
	$nbprod = mysqli_query($link, 'SELECT COUNT(*) FROM itm WHERE itm_id NOT IN (SELECT itm_id FROM itm_cat)');
	echo '<div class="itmtitle">Total uncategorized: '.mysqli_fetch_row($nbprod)[0]." products</div>";
	while ($cat = mysqli_fetch_row($result))
		echo '<div class="itmlist">'.$cat[1].'</div>';
}

function populate_category()
{
	global $link;

	$query = 'SELECT cat_id from cat WHERE name="'.$_GET['cat'].'"';
	$result = mysqli_query($link, $query);
	$cat_id = mysqli_fetch_row($result)[0];
	$query =	'select itm.*
				from itm
				join itm_cat on itm.itm_id=itm_cat.itm_id
				join cat on itm_cat.cat_id=cat.cat_id
				where cat.cat_id='.$cat_id;
	$result = mysqli_query($link, $query);
	$nbprod = mysqli_query($link, 'SELECT COUNT(*) FROM itm_cat WHERE cat_id="'.$cat_id.'"');
	echo '<div class="itmtitle">'.$_GET['cat'].": ".mysqli_fetch_row($nbprod)[0]." products</div>";
	while ($cat = mysqli_fetch_row($result))
		echo '<div class="itmlist">'.$cat[1].'</div>';
}

function populate_home()
{
	global $link;

	$result = mysqli_query($link, "SELECT * FROM `itm` ORDER BY RAND() LIMIT 3");
	while ($cat = mysqli_fetch_row($result))
		echo '<div class="itmlist">'.$cat[1].'</div>';
}

function populate_search()
{
	global $link;

	if (!isset($_GET['searchtext']) || $_GET['searchtext'] == '')
	{
		echo "<script type='text/javascript'>alert('Search query empty!')</script>";
		unset($_GET['searchtext'], $_GET['submitsearch']);
		populate_main();
	}
	else
	{
		$result = mysqli_query($link, 'SELECT * FROM `itm` WHERE name LIKE "%'.$_GET['searchtext'].'%"');
		if ($cat = mysqli_fetch_row($result))
		{
			echo '<div class="itmlist">'.$cat[1].'</div>';
			while ($cat = mysqli_fetch_row($result))
				echo '<div class="itmlist">'.$cat[1].'</div>';
		}
		else
		{
			echo "<script type='text/javascript'>alert('Search returned nothing! :(')</script>";
			unset($_GET['searchtext'], $_GET['submitsearch']);
			populate_main();
		}
	}
}

function populate_main()
{
	if (isset($_POST['create_account']) || isset($_POST['create_user']))
		include ('./htmls/create_account.html');
	else if (isset($_POST['delete_account']))
		include ('./htmls/delete_account.html');
	else if (isset($_GET['submitsearch']))
		populate_search();
	else if (isset($_POST['adminquery']))
		adminquery();
	else if (isset($_GET['cat']) && $_GET['cat'] != 'Home')
	{
		if ($_GET['cat'] == 'Info')
			populate_info();
		else if ($_GET['cat'] == 'Subject')
			populate_subject();
		else if ($_GET['cat'] == 'Admin')
		{
			if (check_admin())
				include ('./htmls/adminmenu.html');
			else
				populate_home();
		}
		else if ($_GET['cat'] == 'Basket')
			populate_basket();
		else if ($_GET['cat'] == 'All Products')
			populate_allitms();
		else if ($_GET['cat'] == 'Uncategorized')
			populate_uncategorized();
		else
			populate_category();	
	}
	else
		populate_home();
}
?>

