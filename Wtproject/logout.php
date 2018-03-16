<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" href="home.css">
</head>
<body>
	<div class="h">
	<h1>PRODUCT</h1>
	<ul type="none">
		<li><a href="home.html">Home</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="about.html">About</a></li>
	</ul>
	</div>
	<?php
	     $_SESSION_destroy();
	     header(location:"home.html");
	?>
</body>
</html>
