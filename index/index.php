<?php
	include ('../populate/populate.php');
?>

<html>
<head>
<style>
body {
	margin: 0;
}

.ul1 {
	list-style-type: none;
	margin: 0;
	padding: 0;
	width: 15%;
	background-color: #f1f1f1;
	position: fixed;
	height: 96%;
	overflow: auto;
		top:4%;
}
.ul2 {
	list-style-type: none;
		width: 100%;
		height: 4%;
	margin: 0;
	padding: 0;
	overflow: auto;
	background-color: #555;
		position: fixed;
		top: 0px;
		right: 0px;

}
li a {
	display: block;
	color: #000;
	padding: 8px 16px;
	text-decoration: none;
}

li a.active {
	background-color: #4CAF50;
	color: white;
}

li a:hover:not(.active) {
	background-color: #555;
	color: white;
}
</style>
</head>
<body>
<ul class="ul2">
		<li style="float:right"><a href="#cos">Cos</a></li>
	  <li style="float:right"><a href="login.html" target="iframe_a">Login</a></li>
</ul>
<ul class="ul1">
	<li><a class="active" href="home.html" target="iframe_a">Home</a></li>
	<li><a href="contact.html" target="iframe_a">Informatii</a></li>
	<li><a href="admin.html" target="iframe_a">Admin</a></li>
	<li><a href="admin.html" target="iframe_a">Subiect</a></li>

	<?php populate_cat()?>

	


</ul>
<iframe height="900px" width="100%" src="home.html" name="iframe_a"></iframe>

</body>
</html>
