<?php
session_start();
include("dbconfig/config.php");
error_reporting(0);

?>


<!DOCTYPE html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="outer">
<div class="container">
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">To-do lists
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="work.php">Work list</a></li>
      <li><a href="shopping.php">Shopping list</a></li>
      <li><a href="europe.php">Europe trip</a></li>
    </ul>
	
  </div>
  
  <div class="inner">
  <h1>
  Organize your day
  </h1>
  <h3 style="font-family:Courier New;">
  You don't have to worry about remembring things again ever.
  we will do that for you. You can add and remove the things you want to do and you want to remember from anywhere at anytime.
  
 
  </h3>
  
  
  </div>
  
  
</div>
</div>
</body>
</html>
