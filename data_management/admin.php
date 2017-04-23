<?php

function addusr()
{
	global $link;

	if ($_POST['login'] != '' && $_POST['name'] != ''&& $_POST['prename'] != ''
		&& $_POST['email'] != '' && $_POST['passwd'] != '')
	{
		$query = 'SELECT * FROM usr WHERE login="'.$_POST['login'].'"';
		$result = mysqli_query($link, $query);
		if (mysqli_fetch_assoc($result) !== NULL)
		{
			echo "<script type='text/javascript'>alert('Account already exists!')</script>";
			include ('./htmls/addusr.html');
		}
		else
		{
			$query = 'INSERT INTO `usr` (`login`, `name`, `prename`, `email`, `passwd`) VALUES ("'.$_POST['login'].'", "'.$_POST['name'].'", "'.$_POST['prename'].'", "'.$_POST['email'].'", "'.hash('SHA1', $_POST['passwd']).'")';
			mysqli_query($link, $query);
			echo "<script type='text/javascript'>alert('Account successfully created!')</script>";
			include ('./htmls/adminmenu.html');
		}
	}
	else
	{
		echo "<script type='text/javascript'>alert('Field empty!')</script>";
		include ('./htmls/addusr.html');
	}
}

function mdfusr()
{
	global $link;

	if ($_POST['login'] != '' && $_POST['name'] != ''&& $_POST['prename'] != ''
		&& $_POST['email'] != '' && $_POST['passwd'] != '')
	{
		$query = 'SELECT * FROM usr WHERE login="'.$_POST['login'].'"';
		$result = mysqli_query($link, $query);
		if (mysqli_fetch_assoc($result) !== NULL)
		{
			echo "<script type='text/javascript'>alert('Account already exists!')</script>";
			include ('./htmls/addusr.html');
		}
		else
		{
			$query = 'INSERT INTO `usr` (`login`, `name`, `prename`, `email`, `passwd`) VALUES ("'.$_POST['login'].'", "'.$_POST['name'].'", "'.$_POST['prename'].'", "'.$_POST['email'].'", "'.hash('SHA1', $_POST['passwd']).'")';
			mysqli_query($link, $query);
			echo "<script type='text/javascript'>alert('Account successfully created!')</script>";
			include ('./htmls/adminmenu.html');
		}
	}
	else
	{
		echo "<script type='text/javascript'>alert('Field empty!')</script>";
		include ('./htmls/addusr.html');
	}
}

function check_admin_query()
{
	if ($_POST['adminquery'] == 'Add User')
		addusr();
	else if ($_POST['adminquery'] == 'Mdf User')
		mdfusr();
}

function adminquery()
{
	if ($_POST['adminquery'] == 'addusr')
		include('./htmls/addusr.html');
	else if ($_POST['adminquery'] == 'mdfusr')
		include('./htmls/mdfusr.html');
	else if ($_POST['adminquery'] == 'delusr')
		delusr();
	else if ($_POST['adminquery'] == 'additm')
		additm();
	else if ($_POST['adminquery'] == 'mdfitm')
		mdfitm();
	else if ($_POST['adminquery'] == 'delitm')
		delitm();
	else if ($_POST['adminquery'] == 'addcat')
		addcat();
	else if ($_POST['adminquery'] == 'mdfcat')
		mdfcat();
	else if ($_POST['adminquery'] == 'delcat')
		delcat();
	else
		check_admin_query();
}
?>