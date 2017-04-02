<?php
	include ('../populate/populate.php');
?>

<html>
<head>
  <title>Categorii</title>
<body>
  <center>

  <?php populate_itm($_GET['cat']); ?>
  <center>
</body>
</html>
