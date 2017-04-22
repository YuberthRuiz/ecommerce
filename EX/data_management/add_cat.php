<?PHP
include ('../account_management/whoami.php');
if (is_admin())
{
		if (!isset($_POST["name"]))
			echo "Completati caseta";
		else
		{
			$i = 0;
		$BDcat = unserialize(file_get_contents("../private/bdcat"));
		foreach($BDcat as $i_id => $cont)
		{
			$i++;
			if ($cont === $_POST("name"))
				exit("Categoria exista deja");
		}
		$i++;
		$BDcat[$i] = $_POST("name");
		file_put_contents("../private/bdcat",serialize($BDcat));
		echo "Operatie realizata cu success";
		}
}
else
	die("Access interzis");
?>
