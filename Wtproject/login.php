<?php
   require "authen.php";
?>
<html>
<head>
	<title>Products</title>
	<link rel="stylesheet" href="register.css">
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
	<div class="ha">
	<form action="login.php" method="post">
	<fieldset>
	<legend>Login</legend>
	Username:<input type="username" name="username" required><br><br>
	Passkey:<input type="password" name="password" required><br><br>
	<input type="submit" value="login" name="login_btn"><br><br>
	<a href="register.php"><input type="button" value="register" ></a><br><br>
	</fieldset>
	</form>
	<?php
	   if($_SERVER['REQUEST_METHOD']=='POST'){
	   $username=trim($_POST['username']);
	   $password=trim($_POST['password']);
	   $qry="select * from users where `username`='$username' and `password`='$password'";
	   $sql=mysqli_query($qry,$con);
	   if(mysqli_num_rows($sql)>0){
	  	 header("location:fed.php");
	   } 
	   else{
	         echo '<script type="text/javascript">alert("not an user go and register..")</script>';
	   }
	  }
	?>
	</div>
</body>
</html>
