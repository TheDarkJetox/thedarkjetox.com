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
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet mi eros. Vivamus sit amet semper erat. Morbi tempor venenatis pretium. Nunc vestibulum feugiat varius. Phasellus varius elit sed metus malesuada, sit amet tempor ipsum venenatis. Donec sollicitudin in dolor in pretium. Quisque turpis felis, pellentesque nec nisi quis, tempor venenatis metus. Vestibulum eget ultrices justo, mollis vestibulum quam. Nulla dolor neque, egestas varius laoreet vitae, euismod a ipsum. Nullam pretium facilisis diam, vitae malesuada felis molestie nec. Pellentesque dignissim elementum urna vitae eleifend. Integer nisi dui, lacinia sit amet erat ut, euismod dictum ipsum. Vivamus luctus sollicitudin sem in rutrum.
			</p>
			<p>
			Nam at eleifend nunc, dictum sollicitudin nulla. Duis tincidunt aliquet faucibus. Nam metus lectus, venenatis eget ex ac, finibus aliquam massa. Integer dui sapien, lacinia ac interdum ac, vehicula at nisi. Maecenas fringilla tempor turpis porta ultricies. Donec varius laoreet libero et convallis. Fusce facilisis eleifend tortor, mollis interdum velit commodo gravida.
			</p>
			<p>
			Pellentesque consectetur nisl at tortor interdum elementum. Suspendisse dictum placerat leo nec commodo. Aliquam varius risus ut nisl imperdiet, eu facilisis velit tempor. Phasellus varius condimentum erat in placerat. Donec lobortis justo laoreet mattis vehicula. Sed vestibulum orci vel elementum molestie. In et turpis quis nulla mollis sodales. Integer a placerat risus. Sed vitae erat vestibulum elit efficitur mollis id eu enim.
			</p>
			<p>
			Nullam sit amet dictum augue. Maecenas at varius ex. Nulla sit amet libero risus. Vivamus ante nisi, dapibus feugiat ligula ut, suscipit tempus odio. Donec sollicitudin augue turpis, non varius sapien dignissim ut. Integer sit amet mauris tempor, condimentum lacus non, fringilla mi. Aliquam in fringilla nunc. Vivamus at commodo arcu, in volutpat orci.
			</p>
			<p>
			Maecenas nulla tellus, faucibus at augue sit amet, pharetra egestas velit. Nullam sit amet tincidunt ex, sed tristique diam. Aenean sit amet sapien facilisis, volutpat nisl nec, iaculis augue. Suspendisse potenti. Aliquam aliquam elit a purus tempus, at mollis nunc mattis. Vestibulum eget dui ut nisi maximus aliquet nec et massa. Ut semper non felis in semper.
			</p>
			<p>
			Nunc efficitur, enim ut sollicitudin efficitur, orci nibh pellentesque tellus, nec consequat sapien dolor vel tellus. Pellentesque eu dignissim ante. Sed eget lectus at velit convallis posuere at a quam. Curabitur luctus sit amet magna non tristique. Proin in venenatis ante, consequat dictum enim. In risus est, dignissim ac ultricies non, tincidunt non nulla. Integer ullamcorper tempor ullamcorper. In nunc nibh, faucibus nec pulvinar lobortis, hendrerit nec massa. Nullam ultrices sapien sed ligula efficitur fermentum. Nullam eget metus vel nunc dignissim rhoncus.
			</p>
			<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat efficitur ex, vitae porta arcu commodo vel. Nulla vitae maximus lorem. Sed nunc urna, sagittis a tincidunt non, ornare sed magna. Mauris posuere, ipsum a mollis bibendum, turpis ante fringilla felis, eu vehicula tellus ex quis leo. In fermentum magna mauris, id dictum risus euismod in. Suspendisse nec semper magna, quis aliquam dui. Cras ex lectus, malesuada sit amet lectus ut, commodo hendrerit elit. Sed ac nisl vel nisi posuere faucibus quis eu ante. In eros quam, sodales vitae lacinia ac, faucibus quis odio. Vestibulum laoreet, justo eget aliquet imperdiet, turpis arcu feugiat nulla, et fermentum enim purus et dui. Aliquam ligula turpis, gravida nec nisi eu, dictum hendrerit elit. Vivamus ac enim vitae sem finibus interdum. Donec sit amet felis vitae dui venenatis vestibulum. Mauris lacus velit, fringilla aliquet sapien nec, vehicula bibendum turpis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
			</p>
			<p>
			Sed felis erat, suscipit sed ultrices ac, accumsan fringilla ipsum. Mauris non feugiat erat. Nam vel bibendum nibh. Nulla facilisi. Nulla nulla orci, ultrices nec magna finibus, euismod tempor risus. Nam auctor nibh ac massa aliquet, eu tincidunt orci finibus. Duis dictum scelerisque turpis, et hendrerit turpis aliquet a. Fusce rhoncus ligula a leo luctus dapibus.
			</p>
			<p>
			Mauris scelerisque, mauris feugiat finibus tempus, ante purus fermentum tellus, nec varius ligula massa id lectus. Vivamus varius dui ac elementum viverra. Nunc euismod porttitor odio vitae mattis. Duis id volutpat est, at pellentesque elit. Quisque nec justo sollicitudin, pretium odio at, maximus purus. Sed pellentesque elit eleifend justo consectetur pulvinar. Phasellus tristique, quam ut cursus lobortis, enim tellus interdum mauris, ac commodo ex diam eu quam. Donec et purus viverra neque vestibulum ullamcorper. Phasellus interdum ornare magna, non cursus diam interdum id.
			</p>
			<p>
			Nullam tellus mi, finibus in mi iaculis, finibus ornare mi. Praesent in diam est. Nam vestibulum metus sit amet pulvinar ornare. Nunc ex tellus, consequat vel posuere et, sodales id ligula. Cras aliquam quam ac augue maximus consequat. Fusce vel felis diam. Suspendisse non accumsan lectus, nec tristique sem. Duis ut pharetra neque, ac maximus sem. Quisque tincidunt consectetur rhoncus. Phasellus sit amet auctor tortor.
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