<?php 

	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name){
		if (isset($_POST[$name])){
			echo($_POST[$name]);
		}

	}

 ?>
 
<!DOCTYPE html> 
<html lang="en">
<head>
	<title>OMSP || Welcome</title>
	
	<link rel="icon" class="rad" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>

<body>
	<?php 
		if(isset($_POST['registerButton'])){
			echo'<script>
				$(document).ready(function() {
					$("#loginForm").hide();
					$("#registerForm").show();
				});		
				</script>';
		}
		else {
			echo'<script>
				$(document).ready(function() {
					$("#loginForm").show();
					$("#registerForm").hide();
				});		
				</script>';
		}
			
	 ?>
	
	<div id="background">
		<div id="loginContainer">
			<div id="inputContainer">
				<form id="loginForm" action="register.php" method="POST" autocomplete="off">
					<h2>Login to your Account</h2>
					<p>
						<?php echo $account -> getError(Constants::$loginFailed) ?>
						<label for="loginUserName">User Name: </label>
						<input id="loginUserName" type="text" name="loginUserName" placeholder="e.g. MonirKhan" value="<?php getInputValue('loginUserName') ?>" required>
					</p>
					<p>
						<label for="loginPassword">Password: </label>
						<input id="loginPassword" type="password" name="loginPassword" placeholder="Your password" required>
					</p>
					<button type="submit" name="loginButton">Log In</button>

					<div class="hasAccountText">
						<span id="hideLogIn">Don't have an account yet? Sign Up here.</span>
					</div>		
				</form>

				<form id="registerForm" action="register.php" method="POST" autocomplete="off">
					<h2>Create Your Free Account</h2>
					<p>
						<?php echo $account -> getError(Constants::$userNameCharacters) ?>
						<?php echo $account -> getError(Constants::$userNameTaken) ?>
						<label for="userName">User Name: </label>
						<input id="userName" type="text" name="userName" placeholder="e.g. MonirKhan" value="<?php getInputValue('userName') ?>" required>
					</p>
					<p>
						<?php echo $account -> getError(Constants::$firstNameCharacters) ?>
						<label for="firstName">First Name: </label>
						<input id="firstName" type="text" name="firstName" placeholder="e.g. Monir" value="<?php getInputValue('firstName') ?>" required>
					</p>
					<p>
						<?php echo $account -> getError(Constants::$lastNameCharacters) ?>
						<label for="lastName">Last Name: </label>
						<input id="lastName" type="text" name="lastName" placeholder="e.g. Khan" value="<?php getInputValue('lastName') ?>" required>
					</p>
					<p>
						<?php echo $account -> getError(Constants::$emailsDoNotMatch) ?>
						<?php echo $account -> getError(Constants::$emailInvalid) ?>
						<?php echo $account -> getError(Constants::$emailTaken) ?>
						<label for="email">Email: </label>
						<input id="email" type="email" name="email" placeholder="e.g. monir@gmail.com" value="<?php getInputValue('email') ?>" required>
					</p>
					<p>
						<label for="email2">Confirm Email: </label>
						<input id="email2" type="email" name="email2" placeholder="e.g. monir@gmail.com" value="<?php getInputValue('email2') ?>" required>
					</p>
					<p>
						<?php echo $account -> getError(Constants::$passwordDoNotMatch) ?>
						<?php echo $account -> getError(Constants::$passwordNotAlphaNumeric) ?>
						<?php echo $account -> getError(Constants::$passwordCharacters) ?>
						<label for="password">Password: </label>
						<input id="password" type="password" name="password" placeholder="Password" required>
					</p>
					<p>
						<label for="password2">Confirm Password: </label>
						<input id="password2" type="password" name="password2" placeholder="Confirm Password" required>
					</p>
					<button type="submit" name="registerButton">Sign Up</button>
					<div class="hasAccountText">
						<span id="hideRegister">Already have an account? Log In here.</span>
					</div>				
				</form>
			</div>
			<div id="loginText">
				<h1>Listen Music & Refresh Your Mind</h1>
				<h2>Find & listen to a lot of songs for free</h2>
				<ul>
					<li>Discover music you'll fall in love with</li>
					<li>Create your own playlists</li>
					<li>Hear songs of your favourite artists</li>
					<li>Search your favourite songs, artists or albums</li>
				</ul>
				
			</div>
		</div>	
	</div>	
</body>
</html>