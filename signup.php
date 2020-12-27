<?php
include_once 'header.php'
?> 

<div class="jumbotron text-center">
  <div class="container">
  <h1>Welcome To Dele Bakare</h1>
  <p>Let's show you around!!!  </p>
  </div>
  </div>
  </section>
  <div>
<h1 class="menh"> Sign Up <h1>
<section class="dayo">
<section class="container-fluid">
<section class="row justify-content-center">
<sectio class="col-12 col-sm-6 col-md-3">
<form action="/includes/signup.inc.php" method="post">
<div class="form-group">
<input type="text"  class="form-control" name="name" placeholder="Full name..."> 
<input style="margin-top:10px" type="text" class="form-control" name="email"  placeholder="Email...">
<input style="margin-top:10px" type="text" class="form-control" name="uid"  placeholder="Username...">
<input style="margin-top:10px" type="password" class="form-control" name="pwd"  placeholder="Password...">
<input style="margin-top:10px" type="password" class="form-control" name="pwdrepeat"  placeholder="Repeat password...">
<button style="width:100px; margin-left: 180px; margin-top:10px" type="submit" class="btn btn-primary btn-block" name="submit">Sign up</submit>

</div>
</form>
</section>
</section>
</section>


<?php
if(isset($_GET["error"])){
  if($_GET["error"] == "emptyinput"){
    echo "<p> fill in all fields </p>";
  }
  else if($_GET["error"] == "emptyuid"){
    echo "<p> Choose a proper username </p>";
}
else if($_GET["error"] == "emptyemail"){
  echo "<p> Choose a proper email </p>";
}
else if($_GET["error"] == "stmtfailed"){
  echo "<p> Something went wrong, try again! </p>";
    }
    else if($_GET["error"] == "usernametaken"){
      echo "<p> Username already taken! </p>";
    }
    else if($_GET["error"] == "none"){
      echo "<p> You have signed up </p>";
}

}

?>
</section>

<?php
include_once 'footer.php'
?> 



 