<?php
	include ('../populate/populate.php');
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
		Mos Craciun
	</div>

	<div class="leftbar">
		<form method="GET" action=".">
			<br/>
			<input type="submit" class="catlist" name="cat" value="Home" />
			<input type="submit" class="catlist" name="cat" value="Info" />
			<input type="submit" class="catlist" name="cat" value="Admin" />
			<input type="submit" class="catlist" name="cat" value="Subject" />
			<hr/>
			<?php populate_cat()?>
			<hr/>
		</form>
		

	</div>

	<div class="mainpage">
		<div class="itmlist">
			Mos Craciun
		</div>
		<div class="itmlist">
			Mos Craciun
		</div>
		<div class="itmlist">
			Mos Craciun
		</div>
		<div class="itmlist">
			Mos Craciun
		</div>
		<div class="itmlist">
			Mos Craciun
		</div>
		<div class="itmlist">
			Mos Craciun
		</div>
		<div class="itmlist">
			Mos Craciun
		</div>
		<div class="itmlist">
			Mos Craciun
		</div>
		<div class="itmlist">
			Mos Craciun
		</div>
		<div class="itmlist">
			Mos Craciun
		</div>
		<?php
			populate_main();
		?>
		<br/>
	</div>

</div>

</body>
</html>
