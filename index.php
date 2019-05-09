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
        <a class="nav-link" href="#C">Home <span class="sr-only">(current)</span></a>
      </li>

   
      <li class="nav-item">
        <a class="nav-link" href="new.php">Products</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="cover2.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cover3.php">Contact Us</a>
    </ul>
      </li>
      <ul class="nav navbar-nav navbar-right">
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
<i style="font-size:24px" class="fa">&#xf090;</i></a></li>
    </ul>
  
  </div>
</nav>

  <br><br><br><br>
<div style="margin-top:30px;">
<div class="bg-dark bg-dark my-heading">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                   The Best Veenai's<small></small></h1>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<center><img src="cons.png" width="200px"><center><br><br>
<?php
mysql_connect("localhost","root","suresh") or die(mysql_error()); 
mysql_select_db("shop") or die(mysql_error());
$get = "Select * from item_table";
$get2 = mysql_query($get);
while ($row=mysql_fetch_array($get2, MYSQL_ASSOC)){

    $imageData = base64_encode($row['img']);
    $n2=$row['MRP'];
  
    // Format the image SRC:  data:{mime};base64,{data};
    $src = 'data:img/jpeg;base64,'.$imageData;
    echo "<div>";
    echo "<img src='".$src."' class=img-responsive width=404 height=236>";
echo "<center>Rs. :".$n2."</center>";
    echo "</div>";
}
?>  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>


</html>

