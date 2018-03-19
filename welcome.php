<?php session_start(); ?>


<div class="center">

<h1>
<center>
<div class="jumbotron">
<h2>
        <div ><?= $_SESSION['message'] ?></div></h2>
       <br />
	   
	   <p><a href="login.php"><input type="submit" value="Login" name="reg" /></a></p>
  <p><a href="index.php"><input type="submit" value="Home" name="reg" /></a></p>
      
        <p><?php
        $mysqli = new mysqli("localhost", "root", "", "accounts");
        //Select queries return a resultset
        $sql = "SELECT username FROM users";
        $result = $mysqli->query($sql); //$result = mysqli_result object
        //var_dump($result);
        ?>
        <div id='registered'>
		
        <span>All registered users:</span>
        <?php
        while($row = $result->fetch_assoc()){ //returns associative array of fetched row
            //echo '<pre>';
            //print_r($row);
            //echo '</pre>';
            echo "<div class='userlist'><span>$row[username]</span><br />";
          
        }
        ?>  
        </div>
    </div>
	
	</center>
</div>
</div>
</h1>



<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/custom.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome</title>

<style>
body  {
	
    background-image: url("images/background2.jpeg");
    background-color: #cccccc;
    background-position: center center;  
}
.jumbotron{
	background: rgba(31, 31, 20, 0.7); 
	
}
.center {
    padding: 90px 0;
 
}

input[name=reg] {
    width: 100%;
	
    background-color: #83aff7;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


h1 {
    text-align: center;
    text-transform: uppercase;
    color: #ffffff;
}

h2 {
    text-align: center;
    text-transform: uppercase;
    color: #fca1a1;
}

</style>