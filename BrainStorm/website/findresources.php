<?php 
 session_start();  
 $user = $_SESSION['username']; 
?>
<!doctype html>
<html lang="en">

<style>
   
body
{
    font-family: Tahoma, Geneva, sans-serif;
    background: url('findRes.jpg');
	background-size :cover;
   
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="homepage.php">Brainstorm</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="homepage.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="findresources.php">Find Resources <span class="sr-only">(current)</span></a>
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
    <div class="section-page-heading col-red">
        Find a number of resources and take a step further towards mental health.
    </div>
    <div class="resources-list bg-red">
        <div class="resources-list-item bg-white">
            <a href="https://www.mentalhealth.gov/basics/what-is-mental-health#:~:text=It%20affects%20how%20we%20think,childhood%20and%20adolescence%20through%20adulthood." target="_blank">1) Article: Importance of Mental Health</a>
        </div>
        <div class="resources-list-item bg-white">
            <a href="https://www.mentalhealth.org.uk/publications/how-to-mental-health" target="_blank">2) Article: Look after your Mental Health</a>
        </div>
        <div class="resources-list-item bg-white">
            <a href="https://www.uhs.umich.edu/tenthings" target="_blank">3) Article: Ways to cope with unhealthy mind</a>
        </div>
        <div class="resources-list-item bg-white">
            <a href="https://www.youtube.com/watch?v=G0zJGDokyWQ" target="_blank">4) Video: What exactly is Mental Health?</a>
        </div>
        <div class="resources-list-item bg-white">
            <a href="https://www.youtube.com/watch?v=TFbv757kup4" target="_blank">5) Video: The secret of becoming mentally strong</a>
        </div>
        <div class="resources-list-item bg-white">
            <a href="https://www.youtube.com/watch?v=WWloIAQpMcQ" target="_blank">6) Video: How to cope with anxiety?</a>
        </div>
        <div class="resources-list-item bg-white">
            <a href="https://rainymood.com/" target="_blank">7) Music: Rain sounds to soothe your soul</a>
        </div>
        <div class="resources-list-item bg-white">
            <a href="http://soundrown.com/" target="_blank">8) Music: Calm music to relax</a>
        </div>
    </div>

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
</body>

</html>