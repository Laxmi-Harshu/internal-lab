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
	<form action="register.php" method="post">
	<fieldset>
	<legend>Registration</legend>
	Username:<input type="username" name="username" required><br><br>
	Email:<input type="email" name="email" required><br><br>
	Passkey1:<input type="password" name="password" required><br><br>
	Passkey2:<input type="password" name="password1" required><br><br>
	<input type="submit" value="submit" name="submit_btn"><br><br>
	</fieldset>
	</form>
	<?php
	   if($_SERVER['REQUEST_METHOD']=='POST'){
	   $username=trim($_POST['username']);
	   $email=trim($_POST['email']);
	   $password=trim($_POST['password']);
	   $password1=trim($_POST['password1']);
	   if($password==$password1){
           	$qry="select * from users where `username`='$username'";
	        $sql=mysqli_query($qry,$con);
	        if(mysqli_num_rows($sql)>0){
	        	echo '<script type="text/javascript">alert("username already exists..")</script>';
	        }else{
	        $qry="insert into users(`username`,`email`,`password`,`password1`) values('$username','$email','$password','$password1')";
	        $sql=mysqli_query($qry,$con);
	        if($sql){
	        	echo '<script type="text/javascript">alert("successfully registered..")</script>';
	        	header("location:login.php");
	        }
	        else{
	        	echo '<script type="text/javascript">alert("error occured..")</script>';    
                }
             }
             
          }
             else
             	echo '<script type="text/javascript">alert("password and password1 doesnot match..")</script>';
	   }
	   
	?>
	</div>
	
</body>
</html>
