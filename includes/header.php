<?php

	include("includes/config.php");
	include("includes/classes/Artist.php");
	include("includes/classes/Album.php");
	include("includes/classes/Song.php");
	//session_destroy(); for logout

	if (isset($_SESSION['userLoggedIn'])) {
		$userLoggedIn = $_SESSION['userLoggedIn'];
		echo
			"<script>
				userLoggedIn = '$userLoggedIn';
			</script>";
	}
	else{
		header("Location: register.php");
	}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>OMSP || Browse & Listen </title>
	<link rel="icon" class="rad" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
</head>

<body>
	<div id="mainContainer">
		<div id="topContainer">
			<?php include("includes/navBarContainer.php"); ?>
			<div id="mainViewContainer">
				<div id="mainContent">