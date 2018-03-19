<?php
session_start();
$_SESSION['message'] = ''; 

$servername = "localhost";
$usern = "root";
$pass = "";
$dbname = "accounts";

$mysqli = new mysqli("localhost", "root", "", "accounts");



$username = "";
$email = "";

if (isset($_POST['register'])) {
	
	$username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
		$_SESSION['message'] = "Registration succesful! Added $username to the database!";
	
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $usern, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (username, email, password)
    VALUES ('$username', '$email', '$password')";
    // use exec() because no results are returned
    //$conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


if ($mysqli->query($sql) === true){
                    
                    header("location: welcome.php");
                }

}
?>

<html>

<head>


<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/custom.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register</title>

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
    padding: 110px 0;
 
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #f97080;
	color: #f97080;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
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

.divc {
    border-radius: 5px;
    background-color: #f858;
    padding: 20px;
}

</style>
</head>


<body>

<div class="container" >
<div class="center">
<div class="jumbotron" >
<center>
<form method="post" action="Register.php" id="form">
 
 <p><input type="text" placeholder="User Name" name="username" required /></p>
     <p> <input type="text" placeholder="Email" name="email" required /></p>
      <p><input type="password" placeholder="Password" name="password" autocomplete="new-password" required /></p>
      
 <p><input type="submit" value="Register" name="register" /></p>

    </form>
	 <p><a href="login.php"><input type="submit" value="Login" name="reg" /></a></p>
  <p><a href="index.php"><input type="submit" value="Home" name="reg" /></a></p>
  </div>
  
  </center>
  
  </div>
  </div>
  
  </body>
<html>