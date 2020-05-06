<?php
session_start();

if(isset($_SESSION['username'])&&isset($_SESSION['username'])){

}

$startDate = '2016';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<title>TheDarkJetox.com</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="icon" href="../images/tdj_icon.png">
</head>

<body>
	
	<nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="../"><img src="../images/tdj_logo_edit.png" width="20%" /></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav">

				<li class="nav-item btn-dark">
					<a class="nav-link active" href="../">Home</a>
				</li>
				<li class="nav-item btn-dark">
					<a class="nav-link" href="https://media.thedarkjetox.com/">Plex</a>
				</li>
				<li class="nav-item btn-dark">
					<a class="nav-link" href="https://cloud.thedarkjetox.com/">Cloud</a>
				</li>
				<li class="nav-item btn-dark">
					<a class="nav-link" href="../projects.php">Projects</a>
				</li>
				<li class="nav-item btn-dark">
					<a class="nav-link" href="../about.php">About</a>
				</li>
				<li class="nav-item dropdown btn-dark">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Login
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<form action="../login.php" class="container">
							<div class="form-group">
								<label for="inputUsername">Username</label>
								<input type="text" name="username" id="inputUsername" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="inputPassword">Username</label>
								<input type="password" name="username" id="inputPassword" placeholder="Password">
							</div>
							<div class="btn btn-dark">Login</div>
						</form>
					</div>
				</li>
			</ul>
		</div>
	</nav>	

	<div class="container">
		<div class="text">
			
			<div class="textbg">
				<div class="row">
					<div class="col-sm-12">
						<h1>Webside Development Checklist:</h1>
					</div>	
				</div>

				<div class="row">
					<div class="col-sm-2 border border-dark text-warning">
						In progress.
					</div>
					<div class="col-sm-10 border border-dark">
						Complete the basic design of this webpage.
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2 border border-dark text-success">
						Complete!
					</div>
					<div class="col-sm-10 border border-dark">
						Setup the server computer again.
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2 border border-dark text-success">
						Complete!
					</div>
					<div class="col-sm-10 border border-dark">
						Enable SSL-encryption with Let's Encrypt.
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2 border border-dark text-warning">
						In progress.
					</div>
					<div class="col-sm-10 border border-dark">
						Continue re-designing the <a class="text-dark" href="https://dev.thedarkjetox.com">Noturnal MU</a> Website.
					</div>
				</div>
			</div>

			<p>
				This will be a random website, with a lot of random stuff...<br>
				There of, a MU Online Server and a NextCloud Server!<br>
			</p>
			<p>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random<br>
				Random
			</p>
		</div>
	</div>

	<div class="footer">
		© Copyright <a class="text-white" href="../about.php">TheDarkJetox</a> Co. <?php 
		if(date("Y")== $startDate){
			echo $startDate;
		}else{
			echo $startDate."-".date("Y")."";
		}
		?>. All rights reserved.
	</div>

	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	
</body>
</html>