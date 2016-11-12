<?php
session_start();
unset($_SESSION['id']);
$error="";
include 'config.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$euser=$_POST['user'];
	$epass=$_POST['pass'];


$sql = "select * from users where username='$euser' and password='$epass'";
$result= $conn->query($sql);


if($result->num_rows > 0)
{
	while($row=$result->fetch_assoc())
	{
		$id = $row['id'];
		$_SESSION['id'] = $id;
	}
	

	if(isset($_SESSION['id']))
	{
		header("location:home.php");
	}

}
else
{
		$error="Invalid username or password";
		//header("location:login.php");
}

}	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			My Web App
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.2.0/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.2.0/material.min.js"></script>

		<link rel="shortcut icon" href="Android-Bluetooth.ico" />
		<link rel="stylesheet" href="style1.css">
				<link rel="stylesheet" href="style.css">


	</head>
	<body> 

		<div class="mdl-layout mdl-js-layout">
  			<header class="mdl-layout__header">
    			<div class="mdl-layout-icon">
    				<link rel="shortcut icon" href="Android-Bluetooth.ico" />

    			</div>
    			<div class="mdl-layout__header-row">
         			<span class="mdl-layout__title">My Web App</span>
         			<div class="mdl-layout-spacer"></div>
		
		
    			</div>
  			</header>
 


<!-- Simple MDL Progress Bar -->
<div id="p1" class="mdl-progress mdl-js-progress"></div>
			<!-- Textfield with Floating Label -->

			<div id ="outer">
				<h2>Log In</h2>
				<div id="inner">
				<form action="<?php $_SERVER["PHP_SELF"];?>" method="post">
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    		<input class="mdl-textfield__input" type="text" id="username" name="user">
			    		<label class="mdl-textfield__label" for="username">User Name</label>
			  		</div>
			  		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    		<input class="mdl-textfield__input" type="password" id="password" name="pass">
			    		<label class="mdl-textfield__label" for="password">Password</label>
			 		 </div>


				

				<button id="demo-show-toast" class="mdl-button mdl-js-button mdl-button--raised" type="submit" onclick="login()">Log In</button>
				</form>
				</div>
				<a class="btn" role="button" href="Register.php">
				<span>Register</span>
				</a><br>
				<br>
				<?php echo $error?>
				<!-- <div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
			 	 <div class="mdl-snackbar__text"></div>
			 	 <button class="mdl-snackbar__action" type="button"></button>
				</div>
				<script>
					'use strict';
					window['counter'] = 0;
					var snackbarContainer = document.querySelector('#demo-toast-example');
					var showToastButton = document.querySelector('#demo-show-toast');
					function login() {

						var user=document.getElementById("username").value;
						var pass=document.getElementById("password").value;
						if(user=="user" && pass=="pass")
						{

							window.location.href="https://www.google.co.in";
							$window.bind("load",function()
							{
								$('#p1').fadeOut(100);
							});


  


						}
						else
						{
				  
						    'use strict';
						     showToastButton.style.backgroundColor = '#' +
					        Math.floor(Math.random() * 0xFFFFFF).toString(16);
						    var data = {
						    	message: 'Wrong User Name or Password , Your attempt is : ' + ++counter};
						    snackbarContainer.MaterialSnackbar.showSnackbar(data);
				
						}
			  
					};
				
				</script> -->

			</div>

		</div>

	</body> 
</html>