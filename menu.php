<?php
session_start();
if(!isset($_SESSION['password'])){
    echo "<script>  window.location.assign('login.php'); </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title></title>
<style>
.jumbotron {
background: #358CCE;
color: #FFF;
border-radius: 0px;
}

.my-heading{
padding:10px 0px 10px 0px;
color:white;
font-size:2rem;
margin-top:40px;
}
.jumbotron-sm { padding-top: 24px;
padding-bottom: 24px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 24px;
}
body {
  
height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("file:///home/suresh_arunachalam/lampstack-5.6.40-0/apache2/htdocs/shop/index.png");
}
.my-head{
    display:block;
    text-align:center;
    font-size:2rem;
    padding:5px 5px;
    background-color:white;
}
.navbar{
margin-top:52px;
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="my-head fixed-top">
Thanjai Veenai Worker
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top" style="box-shadow:1px 5px 3px rgba(0,0,0,0.3);">
  <a class="navbar-brand" href="#"><img src="index.jpeg" width="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="category.php">Add Category <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="sub_category.php">Add Sub Category</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="item_table.php">Add Item</a>
      </li>
 <li class="nav-item active">
        <a class="nav-link" href="supplier.php">Add Supplier</a>
      </li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>
Logout</i></a></li>
    </ul>
  
  </div>
</nav>
</body>


</html>

  

