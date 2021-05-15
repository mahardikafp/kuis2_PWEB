<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="assets/css/starter-template.css" rel="stylesheet">
	<style>
		h3{
			font-family: "Times New Roman", Times, serif;
		}
	</style>
 	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<ul class="navbar-nav">
				<li class="nav-item active">
				<a class="nav-link" href="">Home</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="register.php">Creat New Account</a>
				</li>
				<li class="nav-item">
				<a class="nav-link" href="logout.php">Log out</a>
				</li>
			</ul>
		</nav>
		<div class="d-flex justify-content-center flex-row">
			<img src="jessica_mila.jpg" class="rounded w-25 " alt="logo app">
		</div>
		<div class="d-flex justify-content-center flex-row" >
			<h3>Welcome To Home Screen</h3>
		</div>
		
</body>

</html>