<?php
	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
	$user = $_SESSION['username'];
	if(isset($_POST['submit'])){
	
		$first_name= $_POST['firstname'];
		$last_name=$_POST['lastname'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$country=$_POST['country'];
		$issues=$_POST['issues'];	
			$db=mysqli_connect("localhost","root","","authentication");
			$sql= "UPDATE `user_profile` SET `first_name`= '$first_name',`last_name`='$last_name',`age`=$age, `email`='$email',`gender`='$gender',`country`='$country',`issues`='$issues' WHERE username='$user'";
			mysqli_query($db,$sql);
				
			$_SESSION['message']="Your profile is saved.";
			
			header('location:homepage.php');
	}}$user = $_SESSION['username'];
?>

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

body
{
    font-family: Tahoma, Geneva, sans-serif;
    color: #fff;
    background: url('mental.jpg');
   
}
.profile
{
    background: rgba(44,62,80,0.7);
	padding:40px;
	width:900px;
	margin:auto;
	margin-top:80px;
	height: 900px;
	margin-left:180px;
	margin:0 auto;
	margin-top:90px;
}
form
{
    width: 800px;
    text-align: left-side;
}


.container {
  display: grid;
  grid-template-columns: 1fr 3fr;
}

label{
    background: transparent;
	border: none;
   
    font-family: 'Play', sans-serif;
    font-size: 16px;
    font-weight: 200px;
    padding: 10px 0;
    transition: border 0.5s;
    outline: none;
    color: #fff;
}
input
{
	
    background: transparent;
	border: none;
    border-bottom: 1px solid #fff;
    font-family: 'Play', sans-serif;
    font-size: 16px;
    font-weight: 200px;
    padding: 10px 0;
    transition: border 0.5s;
    outline: none;
    color: #fff;
}
input[type=button]
{
    border: none;
    width: 190px;
    background: white;
    color: #000;
    font-size: 16px;
    line-height: 25px;
    padding: 10px 0;
    border-radius: 15px;
    cursor: pointer;
}
input[type=button]:hover
{
    color: #fff;
    background-color: black;
}
h2
{
    color: #000;
    
}
::placeholder {
    color:aliceblue;
    opacity: 0.8; /* Firefox */
}

    </style>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="mainstyle.css" rel="stylesheet">

    <title>Brainstorm</title>
</head>

<body>
<script>
	  window.watsonAssistantChatOptions = {
		  integrationID: "d640f4d5-b836-4651-ac41-e54a9b46c74e", // The ID of this integration.
		  region: "eu-gb", // The region your integration is hosted in.
		  serviceInstanceID: "76011ee2-399d-447b-9941-a7e77aa72a1b", // The ID of your service instance.
		  onLoad: function(instance) { instance.render(); }
		};
	  setTimeout(function(){
		const t=document.createElement('script');
		t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
		document.head.appendChild(t);
	  });
	  
							
	</script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="homepage.php">Brainstorm</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="findresources.php">Find Resources</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="seekhelp.php">Seek Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="yourjournal.php">Your Journal</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" id="userid" href="userdetails.php"></a>
						<script>
						var username = "<?php print($user)?>";
							console.log(username);
							document.getElementById("userid").innerHTML= username+ "'s Details";
						</script>
                        <a class="dropdown-item" href="notifications.php">Notifications</a>
                        <a class="dropdown-item" href="logout.php">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
   
	
	<div class="profile">
    <form action="userdetails.php" method="post">
    <h2 style="color: #fff;">My Profile</h2><br>
	<div class="container">
	 
		<label for="firstname">First Name</label> 
		<input type="text" name="firstname" placeholder="First Name">
		<label for="lastname">Last Name</label> 
		<input type="text" name="lastname" placeholder="Last Name">
		<label for="age">Age</label>
		<input type="number" name="age" placeholder="Age">
		<label for="gender">Gender</label>
		<input type="text" name="gender" placeholder="Gender"> 
		<label for="email">Email Address</label> 
		<input type="text" name="email" placeholder="Email">	
		<label for="country">Country:</label>
		<input type="text" name="country" placeholder="Country">
		<label for="issues">List any mental health issues you face:</label> 
		<input type="text" name="issues" id="issues" placeholder="Issues"><br><br><br>
	
	</div><br>
	
	 <button type="submit" name="submit">Save</button>
	 </form>
	 </div><br>
	    

    


</body>

</html>