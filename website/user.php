<?php
	session_start();
	$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>User</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Walter+Turncoat" rel="stylesheet">

	<style type="text/css">
	#welcome_tag{
		position: relative;
		top: 100px;
		font-family: Walter Turncoat;
		font-size: 25px;
	}
	#welcome_txt{
		padding-bottom: 0px;
	}
	#banner{
		position: relative;
		top: 130px;
		font-family: Walter Turncoat;
		font-size: 22px;
	}
	a:link, a:visited, a:hover, a:active{
		text-decoration: none;
		color: black;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="user.php"><img class="brand_img" src="../images/main_icon.png">JSP</a>
		<div class="collapse navbar-collapse" id="navbarCollapse">
		</div>	
	</nav>
	<div id="welcome_tag" class="container-fluid">
		<div class="row" >
			<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 " id="welcome_txt">
				<p class="float-right" >Welcome, <?php echo $username; ?></p>
			</div>
		</div>
	</div>
	<div id="banner" class="container-fluid">
		
		<div class="row">
			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
				<a href="profile.html">
					<img src="../images/profile_banner.png" class="img-fluid">
					<p>View your Profile</p>
				</a>	
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
				<a href="search.html">
					<img src="../images/search_banner.png" class="img-fluid">
					<p>Search for Gifts</p>
				</a>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
				<a href="create.html">
					<img src="../images/registry_banner.png" class="img-fluid">
					<p>Create a registry</p>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
				<a href="registries.html">
					<img src="../images/registries_banner.png" class="img-fluid">
					<p>My Registries</p>
				</a>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
				<a href="shared.html">
					<img src="../images/share_banner.png" class="img-fluid">
					<p>Shared With Me</p>
				</a>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
				<a href="../services/logout.php">
					<img src="../images/logout.png" class="img-fluid">
					<p>Logout</p>
				</a>
			</div>
		</div>
	</body>
	</html>