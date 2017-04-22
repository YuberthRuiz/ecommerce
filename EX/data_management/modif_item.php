<?PHP
include ('../account_management/whoami.php');
if (is_admin())
{
if (!isset($_POST["i_id"]) || !isset($_POST["price"]) || !isset($_POST["name"]) || !isset($_POST["stock"]))
	"Completati toate casetele";
else
{
$mod = 0;
$BDitm = unserialize(file_get_contents("../private/bditm"));
foreach($BDitm as $i_id => $cont)
{
	if ($i_id === $_POST("i_id"))
	{
		$mod = 1;
		$BDitm[$i_id]["name"] = $_POST["name"];
		$BDitm[$i_id]["price"] = $_POST["price"];
		$BDitm[$i_id]["stock"] = $_POST["stock"];
	}
if ($mod)
{
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
