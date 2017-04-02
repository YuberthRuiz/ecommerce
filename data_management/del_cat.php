<?PHP
include ('../account_management/whoami.php');
if (is_admin())
{
	if (!isset($_POST["c_id"]))
			echo "Completati casetele";
	else
	{
	$i = 0;
	$BDitmcat = unserialize(file_get_contents("../private/itm_cat"));
	$BDcat = unserialize(file_get_contents("../private/bdcat"));
	foreach($BDcat as $c_id => $cont)
		if ($c_id === $_POST["c_id"])
		{
			$i = 1;
			unset($BDcat[$c_id]);
		}
	if ($i)
	{
		foreach($BDitmcat as $k => $val)
		{
			foreach($val as $l => $cat)
				if ($cat === $_POST["c_id"])
				{
					unset ($val[$l]);
				}
		}
		file_put_contents("../private/bdcat",serialize($BDcat));
		file_put_contents("../private/itm_cat",serialize($BDitmcat));
		echo "Operatie realizata cu success";
	}
	else
		echo "Categoria nu a fost gasita";
	}
}
else
	die("Access interzis");
?>
