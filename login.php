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
<h2 class="menh"> Login In <h2>
<section class="dayo">
<section class="container-fluid">
<section class="row justify-content-center">
<sectio class="col-12 col-sm-6 col-md-3">
<form action="includes/login.inc.php" method="post">
<div class="form-group">
<input type="text"  class="form-control" name="name" id="exampleInputName1" placeholder="Username/Email..."> 
<input style="margin-top:10px" type="password" class="form-control" name="pwd" id="exampleInputPwd" placeholder="Password...">
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
  else if($_GET["error"] == "wronglogin"){
    echo "<p> Incorrect login information </p>";

}

}

?>
</section>



  <?php
include_once 'footer.php'
?> 


