<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
	<form class="form-signin" method="post" action="">	  
	  <h1 class="h3 mb-3 font-weight-normal">Selamat Datang</h1>
	  <label for="inputEmail" class="sr-only">Username</label>
	  <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
	  <label for="inputPassword" class="sr-only">Password</label>
	  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
	  <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnSignin">Sign in</button>
	</form>
</body>
</html>
<?php 
if (isset($_POST["btnSignin"])) {
	$USER=$_POST["username"];
	$PASS=md5($_POST["password"]);

	include "koneksi.php";

	$sql="select * from tuser where username='$USER' and password='$PASS' and aktif='1'";
	$result=$koneksi->query($sql);

	if ($result->rowCount()==1) {
		session_start();
		$_SESSION['username']="Admin";
		header("location:buku_select.php");
	} else {
		echo "username, password salah";
	}
} 

?>