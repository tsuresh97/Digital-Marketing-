<?php
session_start();
if(!isset($_SESSION['password'])){
    echo "<script>  window.location.assign('login.php'); </script>";
}
?>
<?php
mysql_connect("localhost","root","suresh")or die("localhost error");
mysql_select_db("shop")or die("database error");
$res=mysql_query("Select sub_code from sub_category");
while($rn=mysql_fetch_array($res))
{
$id=$rn['sub_code'];
$per=$id+1;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password]  {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
select
{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
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
<form method=post action="sub_category.php">
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
<br><br><br>
<h2>Add New Sub Category</h2>


  <div class="imgcontainer">
   

  </div>
  <div class="container">
<label for="uname"><b>Sub Category ID is 
<?php
echo $per+1; 
?>

</b></label><br><br>   
  <label for="uname"><b>Enter Sub Category Name</b></label><br>
    <input type="text" placeholder="Sub Category Name" name="uname" required><br>
<label for="uname"><b>Enter Category Code</b></label><br>
<?php
$res=mysql_query("Select * from category");
echo "<select name=s1>";
while($rn=mysql_fetch_array($res))
{
$rno=$rn['cat_code'];
$rno1=$rn['cat_name'];
echo "<option value=".$rno.">".$rno."/".$rno1."</option>";
}
echo "</select>";
$uname1=$_POST["s1"];
?>
</div>
<br>    <button type="submit">Insert</button>
   <br>
<h2><center>List of Category</center></h2>
<?php

echo"<center><table border=1>";
echo"<tr><th>Sub Category Code<th>Sub Category Name<th>Category Code</tr>";
$res=mysql_query("Select * from sub_category");
while($rn=mysql_fetch_array($res))
{
$bd1=$rn['sub_code'];
$bd7=$rn['sub_name'];
$bd8=$rn['category_code'];
echo "<tr><td>".$bd1."<td>".$bd7."<td>".$bd8."";
}
?>
<?php
$name=$_POST["uname"];
if($per==0)
{
$per=1;
}
$res1=mysql_query("insert into sub_category values($per,'$name',$uname1)");
?>

  </form>

</body>
</html>

