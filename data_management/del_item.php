<?PHP
include ('../account_management/whoami.php');
if (is_admin())
{
if (!isset($_POST["i_id"]))
	echo "Specificati id-ul obiectului pe care il doriti sters";
else
{
$mod = 0;
$BDitm = unserialize(file_get_contents("../private/bditm"));
$BDitcat = unserialize(file_get_contents("../private/itm_cat"));
foreach($BDitm as $i_id => $cont)
{
	if ($mod === 1)
	{
		$BDitm[$i_id - 1]["name"] = $BDitm[$i_id]["name"];
		$BDitm[$i_id - 1]["price"] = $BDitm[$i_id]["price"];
		$BDitm[$i_id - 1]["stock"] = $BDitm[$i_id]["stock"];
	}
	if ($i_id === $_POST["i_id"])
		$mod = 1;
}
if ($mod)
{
	foreach ($BDitcat as $i_id => $c_id)
		if ($i_id === $_POST["i_id"])
			unset($BDitcat[$i_id]);
	file_put_contents("../private/itm_cat",serialize($BDitcat));
	file_put_contents("../private/bditm",serialize($BDitm));
	echo "Operatie realizata cu success";
}
else
	echo "Obiectul nu a fost gasit";
}
}
else
	die("Access interzis");
?>
