<?php
	
	session_start();
	$user = $_SESSION['username'];	
	$comment_result=$_SESSION['comment'];
	
	?>
<!doctype html>
<html lang="en">
<style>
body
{
    font-family: Tahoma, Geneva, sans-serif;
    background: url('journal.jpg');
	background-size : cover;
   
}

label
{	font-family: Tahoma, Geneva, sans-serif;
	color:#FFFFFF;
	size: 12px
	
}

</style>
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
<form action="yourjournal_view.php" method="post">
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
                <li class="nav-item active">
                    <a class="nav-link" href="yourjournal.php">Your Journal <span class="sr-only">(current)</span></a>
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

    <div class="section-page-heading col-blue">
        Writing journals and diaries have proven to be an effective solution.
    </div>
	
	<div class="previous-journals bg-white">
	<div class="user-journal bg-blue">
			
            
            <div class="display-heading">
                Your Previous journals:
            </div>
            <div id="screen">
			<a id="previous_comment">This is your previous comment</a>
			
			</div>
        </div>
	</div>
				<script>
				var comment=""
				comment=<?php echo json_encode($comment_result); ?>;
				console.log(comment);
				document.getElementById("previous_comment").innerHTML=comment;
			</script>

    <div class="app-footer">
        Helpline Numbers : +91-11-23978046, +91-8376804102
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</form>
</body>

</html>