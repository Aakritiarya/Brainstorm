<?php

session_destroy();
unset($_SESSION['username']);
header('Location: login.php');
exit;

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Logout</title>
		</head>
	<body>	
	<h2>Logout Successful</h2>
	<form action= "logout.php" method="get">
	
	</form>
	</body>
</html>