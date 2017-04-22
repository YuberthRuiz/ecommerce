<?PHP
include ('../account_management/whoami.php');
if (is_admin())
{
if (!isset($_POST["price"]) || !isset($_POST["name"]) || !isset($_POST["stock"]) || $isset($_POST["c_id"]))
	exit("Completati toate casetele");
else
{$i = 0;
$BDitm = unserialize(file_get_contents("../private/bditm"));
$BDcat = unserialize(file_get_contents("../private/itm_cat"));
foreach($BDitm as $i_id => $cont)
{
	$i++;
	if ($cont["name"] === $_POST("name"))
		exit("Obiectul cu acest nume exista deja");
}
$i++;
$cat = explode($_POST["c_id"],",");
$BDitm[$i]["name"] = $_POST("name");
$BDitm[$i]["price"] = $_POST("price");
$BDitm[$i]["stock"] = $_POST("stock");
foreach($cat as $k => $c_id)
	$BDcat[$i][$k] = $cat[$k];
file_put_contents("../private/bditm",serialize($BDitm));
file_put_contents("../private/itm_cat",serialize($BDcat));
echo "Operatie realizata cu success";
}
}
else
	die("Access interzis");
?>
