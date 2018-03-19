<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<?php

$db = new mysqli("localhost", "root", "", "accounts");


$_SESSION['login']="Login";
   
  

   
   ?>
   
   
<html xmlns="http://www.w3.org/1999/xhtml">


<head>


<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/custom.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
body  {
	
    background-image: url("images/background2.jpeg");
    background-color: #cccccc;
    background-position: center center;  
}
.jumbotron{
	background: rgba(31, 31, 20, 0.7); 
	
}
</style>
</head>

<body>

<div class="container">
	
    <div class="jumbotron">
		<center><h3><hh>- Read Books -</hh></h3></center>
        </div>
	
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/bookimg11.jpg" alt="">
      <div class="carousel-caption">
        <h3>Good books</h3>
        <p>Always so much fun!</p>
      </div>
    </div>

    <div class="item">
      <img src="images/bookimg22.jpg" alt="">
      <div class="carousel-caption">
        <h3>Read Enywhere</h3>
        <p>Boost your Knowledge</p>
      </div>
    </div>

    <div class="item">
      <img src="images/bookimg33.jpg" alt="">
      <div class="carousel-caption">
        <h3>Save your time</h3>
        <p>Always with you!</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
    <div class="container">

    </div>
    
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Read Books</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Most Reads<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Local books</a></li>
      <li><a href="#">Worldwide</a></li>
      <li><a href="#">Asian</a></li>
       <li><a href="#">Write a Books</a></li>
          </ul>
        </li>
        <li><a href="#">Top Rated</a></li>
        <li><a href="#">Paid Books</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        
		
		
		
		
	<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="login.php"><span class="glyphicon glyphicon-log-in"></span>
		  
		  <?php 
		session_start();
		
		if(isset($_SESSION['login_user'])){
		
		echo $_SESSION['login_user'] ;
		
		}
	if (isset($_GET['logout'])) {
		
		$_SESSION['login_user']="";
		unset ($_SESSION['login_user']);
		header("location: index.php");
	
	}
	
	if(!isset($_SESSION['login_user']) && empty($_SESSION['login_user'])){
		
		echo "Login";
		
		}
	
	

	
	


			
?>
		  
		  <span class="caret"></span></a>
          <ul class="dropdown-menu">
		  <?php 
	
		if(isset($_SESSION['login_user']) && !empty($_SESSION['login_user'])){
		
		echo "<li><a href='userprofile.php'>My Profile</a></li>";
		
		}
		?>
		  
		  
            <li><a href="login.php">Login</a></li>
			
      <li><a href="index.php?logout='1'">Logout</a></li>
      
          </ul>
        </li>
		
      </ul>
    </div>
  </div>
</nav>
    
    
    
    
    
    
    
    <div class="jumbotron">
    
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
 	<div class="thumbnail">
    <img src="images/thum1.jpg" alt=".." />
    <div class="caption">
    <h3> 
	 <?php 
 $sql = "SELECT title FROM books WHERE id='1'";
$result = $db->query($sql);
 
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "". $row["title"]. "";
    }
} 
 
 ?>
	
	
	</h3>
 <?php 
 $sql = "SELECT Description FROM books WHERE id='1'";
$result = $db->query($sql);
 
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "". $row["Description"]. "";
    }
} 
 
 ?>
    <p><a href="#" class="btn btn-primary" role="button">Read</a></p>
    </div>
  
 
    </div>
    </div>
    
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
 	<div class="thumbnail">
    <img src="images/thum2.jpg" alt=".." />
    <div class="caption">
    <h3>Just Courage</h3>
    This book is a strong call for every Christian to deepen their walk with God.
    <p><a href="#" class="btn btn-primary" role="button">Read</a></p>
    </div>
  
 
    </div>
    </div>
    
    
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
 	<div class="thumbnail">
    <img src="images/thum3.jpg" alt=".." />
    <div class="caption">
    <h3>Moking Bird</h3>
    However, the book's value is severely limited because it is largely text with little effort ....
    <p><a href="#" class="btn btn-primary" role="button">Read</a></p>
    </div>
  
 
    </div>
    </div>
    
    
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
 	<div class="thumbnail">
    <img src="images/thum4.jpg" alt=".." />
    <div class="caption">
    <h3>Auriel Rising</h3>
    An exile and fugitive from England, Ned Warriner returns to his homeland in spite of the danger to search for his beloved
    <p><a href="#" class="btn btn-primary" role="button">Read</a></p>
    </div>
  
 
    </div>
    </div>
    </div>
    
    
    
    
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
 	<div class="thumbnail">
    <img src="images/thum5.jpg" alt=".." />
    <div class="caption">
    <h3> Enchantment</h3>
    Enchantment, as defined by bestselling business guru Guy Kawasaki, is not about manipulating people.
    <p><a href="#" class="btn btn-primary" role="button">Read</a></p>
    </div>
  
 
    </div>
    </div>
    
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
 	<div class="thumbnail">
    <img src="images/thum6.jpg" alt=".." />
    <div class="caption">
    <h3>Just Courage</h3>
    This book is a strong call for every Christian to deepen their walk with God.
    <p><a href="#" class="btn btn-primary" role="button">Read</a></p>
    </div>
  
 
    </div>
    </div>
    
    
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
 	<div class="thumbnail">
    <img src="images/thum7.jpg" alt=".." />
    <div class="caption">
    <h3>Moking Bird</h3>
    However, the book's value is severely limited because it is largely text with little effort ....
    <p><a href="#" class="btn btn-primary" role="button">Read</a></p>
    </div>
  
 
    </div>
    </div>
    
    
    
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
 	<div class="thumbnail">
    <img src="images/thum8.jpg" alt=".." />
    <div class="caption">
    <h3>Auriel Rising</h3>
    An exile and fugitive from England, Ned Warriner returns to his homeland in spite of the danger to search for his beloved
    <p><a href="#" class="btn btn-primary" role="button">Read</a></p>
    </div>
  
 
    </div>
    </div>
    </div>
    
    
</div>



<div id="footer">
    <div class="container">
  <div class="jumbotron">
        <div class="row">
            <h3 class="footertext"><cc>About Us:</cc></h3>
            <br>
              <div class="col-md-4">
                <center>
                  <img src="images/w8lycl.jpg" class="img-circle" alt="the-brains">
                  <br>
                  <h4 class="footertext"><cc>Programmer</cc></h4>
                  <p class="footertext"><cc>You can thank all the crazy programming here to this guy.</cc><br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="images/2z7enpc.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext"><cc>Artist</cc></h4>
                  <p class="footertext"><cc>All the images here are hand drawn by this man.</cc><br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="images/307n6ux.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext"><cc>Designer</cc></h4>
                  <p class="footertext"><cc>We design all kind of websites and mobile apps</cc><br>
                </center>
              </div>
            </div>
            <div class="row">
            <p><center><a href="#"><cc>Contact Stuff Here</cc></a> <p class="footertext"><cc>
			
			<?php 
 $sql = "SELECT footer FROM header WHERE id='1'";
$result = $db->query($sql);
 
 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "". $row["footer"]. "";
    }
} 
 
 ?>
			
			</cc></p></center></p>
        </div>
    </div>
    </div>
</body>
</html>