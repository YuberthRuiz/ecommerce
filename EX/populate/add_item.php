<?php
function add_item($i_id)
{
	$Basket = unserialize(file_get_contents('../private/Basket'));
	$Basket[$_SESSION['login']][] = $i_id;
}
?>