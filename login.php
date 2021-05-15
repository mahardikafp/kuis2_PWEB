<?php 
session_start();
include_once('config.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location:index.php');
}

if(isset($_COOKIE['username']))
{
  $database->relogin($_COOKIE['username']);
  header('location:index.php');
}

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($username,$password,$remember))
    {
      header('location:index.php');
    }
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
    <link href="assets/css/signin.css" rel="stylesheet">
    </head>
<body class="text-center">
    <form class="form-signin" method="post" action="">
        <h1 class="h3 mb-3 font-weight-normal">Please Log in</h1>
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="Username" name="username" required >
        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me" name="remember"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Log in</button>
        <a href="register.php" class="btn btn-lg btn-success btn-block">Register</a>
    </form>
</body>
</html>