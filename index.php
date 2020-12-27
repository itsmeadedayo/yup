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
  <?php
if(isset($_SESSION["useruid"])){

  echo "<p>Hello there " .$_SESSION["useruid"]."</p>";
}
  

?>

<hr>
<br>
<div class= "container">
<div class="row">
<div class="col-md-3 col-sm-6">
<div class="card text-center">
<div class="card-block">
<img src="unknown.jpg" alt="" class="img-fluid">
<div class="card-title">
  <h4>Fun Stuff </h4>
  </div>
  <div class="card-text">This is some sample text.This is some sample text.This is some sample text.This is some sample text.</div>
 <a style="margin-top:10px;" href="#" class="btn btn-success">Click</a>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="card text-center">
<div class="card-block">
<img src="download.jpeg" alt="" class="img-fluid">
<div class="card-title">
  <h4>Serious Stuff </h4>
  </div>
  <div class="card-text">This is some sample text.This is some sample text.This is some sample text.This is some sample text.</div>
 <a style="margin-top:17px;" href="#" class="btn btn-success">Click</a>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="card text-center">
<div class="card-block">
<img src="wow.jpeg" alt="" class="img-fluid">
<div class="card-title">
  <h4>Exciting Stuff</h4>
  </div>
  <div class="card-text">This is some sample text.This is some sample text.This is some sample text.This is some sample text.</div>
 <a style="margin-top:28px;" href="#" class="btn btn-success">Click</a>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="card text-center">
<div class="card-block">
<img src="images.jpeg" alt="" class="img-fluid">
<div class="card-title">
  <h4>Boring Stuff</h4>
  </div>
  <div class="card-text">This is some sample text.This is some sample text.This is some sample text.This is some sample text.</div>
 <a style="margin-top:30px;" href="#" class="btn btn-success">Click</a>
</div>
</div>
</div>
</div>
</div>
</div>


<div style="height:150px;"></div> 

<!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>  -->

<?php
include_once 'footer.php'
?>