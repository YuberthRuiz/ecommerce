<?PHP
function is_admin() {
	$BDusr = unserialize(file_get_contents("../private/bduser"));
	foreach ($BDusr as $key => $content)
	{
		if ($_SESSION["user"] === $content["user"])
			return ($content["is_admin"]);
	}
	return (FALSE);
}
?>
