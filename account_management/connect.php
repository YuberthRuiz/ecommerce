<?php

session_start();

function display_login()
{
	echo '
	<form method="POST" action=".">
		<div class="login">
			Login: <input type="text" class="loginforms" name="login" value="">
		</div>
		<div class="login">
			Password: <input type="text" class="loginforms" name="passwd" value="">
		</div>
		<div class="login">
			<input type="submit" class="loginsubm" name="submitlogin" value="Log in" />
		</div>
	</form>
	';
}

function connect_main()
{
	if (!isset($_SESSION['logged_in_user']))
		display_login();
}

?>