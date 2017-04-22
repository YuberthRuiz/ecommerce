<?PHP
include ('../account_management/whoami.php');
if (is_admin())
{
	if (!isset($_POST["c_id"]) || !isset($_POST["name"]))
			echo "Completati casetele";
	else
	{
	$i = 0;
	$BDcat = unserialize(file_get_contents("../private/bdcat"));
	foreach($BDcat as $c_id => $cont)
		if ($c_id === $_POST["c_id"])
		{
			$i = 1;
			$cont["name"] = $_POST["name"];
		}
	if ($i)
	{
		file_put_contents("../private/bdcat",serialize($BDcat));
		echo "Operatie realizata cu success";
	}
	else
		echo "Categoria nu a fost gasita";
	}
}
else
	die("Access interzis");
?>
