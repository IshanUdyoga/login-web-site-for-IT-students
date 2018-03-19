<?php

$db = new mysqli("localhost", "root", "", "accounts");



   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      

	  $newusername = mysqli_real_escape_string($db,$_POST['newusername']);
      $newpassword = mysqli_real_escape_string($db,$_POST['newpassword']); 
      
      $sql = "DELETE FROM users WHERE password='$newpassword'";

	  
if ($db->query($sql) === TRUE) {
    echo "Record Deleted successfully";
} else {
    echo "Error Deleting record: " . $db->error;
}
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
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
   
   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Read Books</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="userprofile.php">Update</a></li>
        
        <li><a href="insert.php">Insert</a></li>
        <li class="active"><a href="delete.php" >Delete</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
   
   
   <body bgcolor = "#FFFFFF">
	<div class="center">
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <center><div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Delete</b></div></center>
				
            <div style = "margin:30px">
               
               <form action = "delete.php" method = "post">
			   
				  
				  <label>User Name  :</label><input type = "text" name = "newusername" class = "box"/><br />
				  <label>Password  :</label><input type = "password" name = "newpassword" class = "box" /><br/>
                  <input type = "submit" value = " Remove My Account "/><br />
               </form>
               
              
					
            </div>
				
         </div>
			
      </div>
</div>
   </body>
</html>