<?php 
  session_start();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap 101 Template</title>

    <link href="css/yup.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      .navbar{
        margin-bottom:0;
        border-radius:0;
        }

    </style>    
  </head>
  <body>
  <div class="cool">
  <nav class="navbar  navbar-inverse">
  <nav class="text-right">

<ul class="nav nav-tabs">
<a class="navbar-brand" href="#">Dele Bakare </a>
<li role="presentation" class="active"><a href="index.php">Home</a></li>
<li role="presentation"><a href="discover.php">About us</a></li>
<li role="presentation"><a href="blog.php">Find Blogs</a></li>
<?php
if(isset($_SESSION["useruid"])){

  echo '<li role="presentation"> <a href="profile.php">Profile page</a></li>';
echo '<li role="presentation"> <a href="includes/logout.inc.php">Log out</a></li>';
}
else {
  echo '<li role="presentation"> <a href="signup.php">Sign Up</a></li>';
echo '<li role="presentation"> <a href="login.php">Log in</a></li>';
}

?>
</ul> 
</nav>
</div>
</div>


