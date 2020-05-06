<?php

/*require_once('core/init.php');



if(isset($_SESSION['username']) . isset($_SESSION['userID'])){

} else {
	$_SESSION['userType'] = '';
}
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<title>Page Not Found - TheDarkJetox.com</title>

	<!-- Hello there! Finding anything of interest? -->

	<meta charset="utf-8">
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
					<li class="nav-item active">
						<a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../projects.php">Projects</a>
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
						<?php if(isset($_SESSION['username'])/* . isset($_SESSION['userID'])*/){ ?>
							<a href="../actions/logout.php" class="btn btn-primary">Logout</button>
						<?php } else { ?>
							<form class="px-4 py-3" method="post" action="/actions/login.php">
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
									<label class="form-check-label" for="dropdownCheck">Remember me</label>
								</div>
								<button type="submit" value="login" class="btn btn-primary">Sign in</button>
							</form>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item text-light bg-dark" href="<?php echo Config::get('links/register');?>">New around here? Sign up</a>
							<a class="dropdown-item text-light bg-dark" href="#">Forgot password?</a>
						<?php } ?>
						</div>	
					</li>				
				</ul>
			</div>	
			
		</div>
	</nav>		
	<div class="container">
		<div class="row">
			<div class="col-sm-12 title-bg">
				<h1>Page Not Found!</h1>
				<br>
				Sorry, but we were not able to find the page you were looking for. <br>
				Please check the URL or start over on the <a href="/">startpage</a>.
			</div>
		</div>
	</div>

	<div class="footer bg-dark">
		© Copyright TheDarkJetox Co. <?php 
		if(date("Y") == $GLOBALS['config']['startDate']){
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