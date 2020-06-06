<?php
	$username="";
	$password="";
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") {
      
		$username= $_POST['username'];
		$password= $_POST['password'];
		$password=md5($password);
	
		$db=mysqli_connect("localhost","root","","authentication");
		$sql="SELECT * FROM users WHERE username= '$username' AND password='$password'";
		$sql1="SELECT * FROM users WHERE username= '$username'";
		$result= mysqli_query($db,$sql) or die("Failed to query database" .mysqli_error());
		$result1= mysqli_query($db,$sql1) or die("Failed to query database" .mysqli_error());
		$row= mysqli_fetch_array($result);
		$row1= mysqli_fetch_array($result1);
		
		if($row['username']==$username && $row['password']==$password){
			$_SESSION['username']= $username;
			header("location: homepage.php");
			}
		else if($row1['username']==$username){
			if($row1['password']!=$password)
			echo"Incorrect password";	
			}	
	
		else
			echo"Please Register to login.";
	   
	}			
?>	

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="logn.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
</head>

<body>
   <div class="signin">

<form action="login.php" method="post">
<h2 style="color:#fff;">Log In</h2><br /><br />
<input type="text" name="username" placeholder="Username"/><br /><br />
<input type="password" name="password" placeholder="Password" /><br /><br />
<button type="submit">Log In </button><br /><br />
<div id="container">

Don't have account?<a href="register.php" style="font-family:'Play', sans-serif;">&nbsp;Sign Up</a>
    </div><br /><br /><br /><br /><br /><br />


</form>
</div>

</body>
</html>
