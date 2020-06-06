<?php
	session_start();
	$db=mysqli_connect("localhost","root","","authentication");
	if(isset($_POST['submit_btn'])){
		
		$username= $_POST['username'];
		$password= $_POST['password'];
		$password2=$_POST['password2'];
		
		if($password2==$password){
			$password=md5($password);
			$sql="INSERT INTO users(username, password)VALUES('$username','$password')";
			mysqli_query($db,$sql);
			$sql="INSERT INTO user_profile(username)VALUES('$username')";
			mysqli_query($db,$sql);
			$_SESSION['message']="You are now logged in.";
			$_SESSION['username']= $username;
			echo"You have been registered successfully!";
			header('location:userdetails.php');
		}
		else {
			echo"The two passswords do not match!";
		}
	}
	?>	



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="sgnup.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <style>
    #msg {
    visibility: hidden;
    min-width: 250px;
    background-color:yellow;
    color: #000;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    right: 30%;
    top: 30px;
    font-size: 17px;
	margin-right:30px;
}

#msg.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {top: 0; opacity: 0;} 
    to {top: 30px; opacity: 1;}
}

@keyframes fadein {
    from {top: 0; opacity: 0;}
    to {top: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {top: 30px; opacity: 1;} 
    to {top: 0; opacity: 0;}
}

@keyframes fadeout {
    from {top: 30px; opacity: 1;}
    to {top: 0; opacity: 0;}
}
    </style>
</head>

<body>
<div class="signup">
    <form action="register.php" method="post">
    <h2 style="color: #fff;">Sign Up</h2><br><br> 
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>    
    <input type="password" name="password2" placeholder="Confirm Password"><br><br>   
   
    <button type="submit" name="submit_btn"><h3>Sign up</h3></button></a><br><br>
	
	 Already have account?<a href="login.php" style="text-decoration: none; font-family: 'Play', sans-serif; color: yellow;">&nbsp;Log In</a>
	</form>
     
    </div>
	
       
    </form>
    </div>
</body>
</html>
