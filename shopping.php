<?php
session_start();
include("dbconfig/config.php");
error_reporting(0);

?>


<!DOCTYPE html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<h1 style="color:white;">
Make your shopping list
</h1 >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="outer">
<div class="container">
<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">To do lists
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="work.php">Work list</a></li>
      <li><a href="shopping.php">Shopping list</a></li>
      <li><a href="europe.php">Europe trip</a></li>
    </ul>
	
  </div>
  
  <div class="inner">
  <form action="work.php" method="GET">
  <div class="form-group">
  <label>Add an item</label>
  <input class="form-control" type="text" name="add" value=""/>
  <input type="submit" name="submit" value="ADD">
  </div>
  </form>
  <?php
  if($_GET['submit'])
  {
	  $item=$_GET['add'];
	  $query="insert into shopping values('$item')";
	  $data=mysqli_query($con,$query);
	  if($data)
	  {
		  echo "";
	  }
	  else
	  {
		  echo "fail";
	  }
	  
  }
  
  
?>
<form action="shopping.php">
<?php 


?>
<input type="checkbox" name="milk" value="milk">
<label>milk</label><button type ="button">Delete</button>
</br>
<input type="checkbox" name="tea" value="">
<label>tea</label><button type ="button">Delete</button>
</br>
<input type="checkbox" name="sugar" value="">
<label>sugar</label><button type ="button">Delete</button>
</br>
<input type="checkbox" name="rice" value="">
<label>rice</label><button type ="button">Delete</button>
</br>
</form>
      

    
</div>
</div>
<a href="home.php"><button type="button" >Go back</button></a>

</div>
</div>
</body>
</html>
