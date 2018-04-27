<?php
require_once('core/init.php');

if(isset($_SESSION['username']) . isset($_SESSION['userID'])){
	
} else {
	$_SESSION['userType'] = '';
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<title>TheDarkJetox.com</title>

	<!-- Hello there! Finding anything of interest? -->
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="../css/main.css" />
	<link rel="icon" href="../images/tdj_icon.png" />
</head>

<body>
	<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark banner">
		<div class="container">
			<a class="navbar-header" href="../">
				<img src="../images/tdj_logo.png" width="1919" height="150" class="logo">
			</a>	
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav mr-auto"></ul>
				<ul class="navbar-nav ">
					<li class="nav-item">
						<a class="nav-link" href="../">Home</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="../projects.php">Projects <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Websites
						</a>
						<div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item text-light bg-dark" href="https://plex.thedarkjetox.com/">Plex</a>
							<a class="dropdown-item text-light bg-dark" href="https://www.autobuddy.cf/">Autobuddy</a>
							<a class="dropdown-item text-light bg-dark" href="https://www.nocturnalmu.tk/">Nocturnal MU</a>
							<?php if($_SESSION['userType'] == 'dev' or $_SESSION['userType'] == 'siteAdmin'){ ?>
							<a class="dropdown-item text-light bg-dark" href="../phpmyadmin">phpMyAdmin</a>	
							<a class="dropdown-item text-light bg-dark" href="https://cloud.thedarkjetox.com/">OwnCloud</a>
							<?php } ?>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../about.php">About Me </a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Login
						</a>
						<div class="dropdown-menu bg-dark dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<form class="px-4 py-3">
								<div class="form-group text-light">
									<label for="exampleDropdownFormEmail1">Email address</label>
									<input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
								</div>
								<div class="form-group text-light">
									<label for="exampleDropdownFormPassword1">Password</label>
									<input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
								</div>
								<div class="form-check text-light">
									<input type="checkbox" class="form-check-input" id="dropdownCheck">
									<label class="form-check-label" for="dropdownCheck">
										Remember me
									</label>
								</div>
								<button type="submit" class="btn btn-primary">Sign in</button>
							</form>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item text-light bg-dark" href="<?php echo Config::get('links/register');?>">New around here? Sign up</a>
							<a class="dropdown-item text-light bg-dark" href="#">Forgot password?</a>
						</div>	
					</li>				
				</ul>
			</div>	
		</div>
	</nav>		
	<div class="container">
		<div class="row">
			<div class="col-sm-12 title-bg">
				<h1><u>Projects:</u></h1>
			</div>
			
			<div class="col-sm-12 back-center">
				<h3>TheDarkJetox.com Website:</h3>
				<h4>Plans</h4>	
				A lot of PHP and MySQL functionality: <br>
				- Login <br>
				- News System <br>
				
				<br> Source Code: <a target="_blank" class="text-dark" href="https://github.com/TheDarkJetox"><strong>GitHub</strong></a>
			</div>
			
			<div class="col-sm-12 back-center">
				<h3>The MU Online Server:</h3>
				
				- <a target="_blank" class="text-dark" href="https://www.nocturnalmu.tk/"><strong>Nocturnal MU</strong></a>
			</div>
			
			<div class="col-sm-12 back-center">
				<h3>Minecraft Servers:</h3>
				
				All servers will be controlled with whitelists, for people allowing to connect.
				<br>- Vanilla v* - Running on thedarkjetox.com:25565
				<br>- SevTech: Ages v* - Running on thedarkjetox.com:25566
			</div>
			
			<div class="col-sm-12 back-center">
				<h3>Plex Server - with Custom Login:</h3>
				
				- 
			</div>
			
			<div class="col-sm-12 back-center">
				<h3>Owncloud/Nextcloud Server - for Personal Cloud:</h3>
				
				- 
			</div>
		</div>
	</div>

	<div class="footer bg-dark">
		© Copyright TheDarkJetox Co. <?php 
		if(date("Y")== $GLOBALS['config']['startDate']){
			echo $GLOBALS['config']['startDate'];
		}else{
			echo $GLOBALS['config']['startDate']."-".date("Y")."";
		}
		?>. All rights reserved.
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>