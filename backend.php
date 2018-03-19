<?php

$db = new mysqli("localhost", "root", "", "accounts");



   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $title = mysqli_real_escape_string($db,$_POST['title']);
      $description = mysqli_real_escape_string($db,$_POST['description']); 
	  $id = mysqli_real_escape_string($db,$_POST['cars']);
       $avatar_path = $db->real_escape_string('images/'.$_FILES['avatar']['name']);
             
        
        //make sure the file type is image
        if (preg_match("!image!",$_FILES['avatar']['type'])) {
            
            //copy image to images/ folder 
            if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
                
                //set session variables
                
                $_SESSION['avatar'] = $avatar_path;

                //insert user data into database
             $sql = "UPDATE books SET title='$title', Description='$description', avatar='$avatar_path' WHERE id='$id'";
                
                //if the query is successsful, redirect to welcome.php page, done!
                if ($db->query($sql) == true){
                echo "UPDATE COMPLETE";
                }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                         
            }
            else {
                $_SESSION['message'] = 'File upload failed!';
            }
        }
        else {
            $_SESSION['message'] = 'Please only upload GIF, JPG or PNG images!';
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
<title>Back End</title>

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
    padding: 30px 0;
 
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
    background-color: #5e5d5e;
    color: white;
    padding: 14px 20px;
    margin: 0px 0;
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
    background-color: #3f3f3f;
}

.divc {
    border-radius: 5px;
    background-color: #f858;
    padding: 20px;
}

.tt
{
	color: white;
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
        <li class="active"><a href="#">Edit Your Front End</a></li>
        
        <li ><a href="header.php">Edit Header And Footer</a></li>
       
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
         <div style = "width:300px; border: solid 10px #333333; background-color:#333333; " align = "left">
            <center><div style = "background-color:#555555; color:#FFFFFF; padding:3px;"><b>Edit Book Content</b></div></center>
				
            <div style = "margin:30px">
               
               <form action = "backend.php" method = "post" enctype="multipart/form-data">
			   <label class="tt">Enter Book ID :</label>
			   
			   <select name="cars">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
	<option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
  </select>
			   <br />
 
				   <label class="tt">Book Title  :</label><input type = "text" placeholder="Enchantment" name = "title" class = "box"/><br />
				  <label class="tt">Book Description  :</label><textarea placeholder="Enchantment, as defined by bestselling business guru Guy Kawasaki, is not ab..." rows="4" cols="28" name = "description" class = "box"></textarea><br />
				  <label class="tt">Select Book Image: </label><input type="file" name="avatar" accept="image/*" required /></div>
                  <input type = "submit" value = " Update "/><br />
               </form>
               
              
					
            </div>
				
         </div>
			
      </div>
</div>
   </body>
</html>