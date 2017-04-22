<?php
	include ('./populate/populate.php');
	include ('./account_management/connect.php')
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>TechnoSwag - 
		<?php
			if (isset($_GET['cat'])) echo $_GET['cat'];
			else echo "Home"; 
		?>					
	</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>

<div class="general">

	<div class="topbar">
		<div class="connect">
			<?php connect_main()?>
		</div>
	</div>

	<div class="leftbar">
		<form method="GET" action=".">
			<br/>
			<input type="submit" class="catlist" name="cat" value="Home" />
			<input type="submit" class="catlist" name="cat" value="Info" />
			<input type="submit" class="catlist" name="cat" value="Admin" />
			<input type="submit" class="catlist" name="cat" value="Subject" />
			<hr/>
			<input type="submit" class="catlist" name="cat" value="All Products" />
			<hr/>
			<?php populate_catlist()?>
			<hr/>
			<input type="submit" class="catlist" name="cat" value="Uncategorized" />
			<hr/>
		</form>
		

	</div>

	<div class="mainpage">
		<?php
			populate_main();
		?>
		<br/>
	</div>

</div>

</body>
</html>
