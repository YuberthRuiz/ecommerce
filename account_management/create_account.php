<?php

//need to compare everything to a mysqli DB, not serialize

if (isset($_POST['login'], $_POST['passwd']))//, $_POST['prename'], $_POST['name'], $_POST['e-mail']))
{
	if ($_POST['login'] != "" && $_POST['passwd'] != "")
	{
		if ($_POST['submit'] == "OK")
		{
			$pass = hash('whirlpool', $_POST['passwd']);
			if (file_exists("../private") == FALSE)
				mkdir("../private", 0777, true);
			if (file_exists("../private/passwd") == FALSE)
			{
				$arr = array(array('login' => $_POST['login'], 'passwd' => $pass));
				$ser = serialize($arr);
				file_put_contents("../private/passwd", $ser);
			}
			else
			{
				$arr = file_get_contents("../private/passwd");
				$temp = unserialize($arr);
				$exist = array_search($_POST['login'], array_column($temp, 'login'));
				echo gettype($exist) . "\n";
			}
			if ($exist === FALSE)
			{
				$temp[] = array('login' => $_POST['login'], 'passwd' => $pass);
				$ser2 = serialize($temp);
				file_put_contents("../private/passwd", $ser2);
				echo "OK";
			}
			else
				echo "ERROR - account already exists\n";
		}
		else
			echo "ERROR - submit not OK\n";
	}
	else
		echo "ERROR - login || passwd 0 length\n";
}
?>