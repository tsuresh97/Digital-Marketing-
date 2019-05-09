<?php
session_start();
if(!isset($_SESSION['password'])){
    echo "<script>  window.location.assign('login.php'); </script>";
}
?>

<?php
mysql_connect("localhost","root","suresh")or die("localhost error");
mysql_select_db("shop")or die("database error");
$res=mysql_query("Select id from supplier");
while($rn=mysql_fetch_array($res))
{
$id=$rn['id'];
$per=$id+1;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
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
 
  </div>
</nav>
<br><br><br>

<h2>Add New Supplier</h2>

<form method=post action=supplier.php>
  <div class="imgcontainer">
   
  </div>

  <div class="container">
<label for="uname"><b>Supplier ID is 
<?php
echo $per+1; 
?>

</b></label><br><br> 

    <label for="uname"><b>Supplier Name</b></label><br>
    <input type="text" placeholder="Enter Supplier Name" name="uname" required><br>
<label for="uname"><b>GST No. </b></label><br>
    <input type="text" placeholder="Enter GST No. " name="uname1" required><br>
<label for="uname"><b>State</b></label><br>
    <input type="text" placeholder="Enter State" name="uname2" required><br>
<label for="uname"><b>District</b></label><br>
    <input type="text" placeholder="Enter District" name="uname3" required><br>
<label for="uname"><b>Town/Village</b></label><br>
    <input type="text" placeholder="Enter Town/Village" name="uname4" required><br>
<label for="uname"><b>Door No. </b></label><br>
    <input type="text" placeholder="Enter Door No. " name="uname5" required><br>

<label for="uname"><b>Mobile No. </b></label><br>
    <input type="text" placeholder="Enter Mobile No. " name="uname6" required><br>

<label for="uname"><b>Alternate No. </b></label><br>
    <input type="text" placeholder="Enter Alternate No. " name="uname7"><br>

<label for="uname"><b>e-mail</b></label><br>
    <input type="text" placeholder="Enter e-mail " name="uname8" required><br>

<label for="uname"><b>Website</b></label><br>
    <input type="text" placeholder="Enter Website" name="uname9" required><br>

   <button type="submit">Insert</button>
   </div>
<h2><center>List of Category</center></h2>
<?php

echo"<center><table border=1>";
echo"<tr><th>Item Code<th>Item Name<th>Category Code<th>MRP<th>Selling Price</tr>";
$res=mysql_query("Select * from supplier");
while($rn=mysql_fetch_array($res))
{
$bd1=$rn['id'];
$bd7=$rn['name'];
$bd8=$rn['gst_no'];
$bd88=$rn['state'];
$bd888=$rn['district'];
$bd11=$rn['location'];
$bd17=$rn['door'];
$bd18=$rn['mob1'];
$bd188=$rn['mob2'];
$bd2888=$rn['email'];
$bd3888=$rn['website'];

echo "<tr><td>".$bd1."<td>".$bd7."<td>".$bd8."<td>".$bd88."<td>".$bd888."<td>".$bd11."<td>".$bd17."<td>".$bd18."<td>".$bd188."<td>".$bd2888."<td>.$bd3888.";

}
?>


<?php
$name=$_POST["uname"];
$name1=$_POST["uname1"];
$name2=$_POST["uname2"];
$name3=$_POST["uname3"];
$name4=$_POST["uname4"];
$name5=$_POST["uname5"];
$name6=$_POST["uname6"];
$name7=$_POST["uname7"];
$name8=$_POST["uname8"];
$name9=$_POST["uname9"];
mysql_connect("localhost","root","suresh")or die("localhost error");
mysql_select_db("shop")or die("database error");
$res=mysql_query("Select id from supplier");
while($rn=mysql_fetch_array($res))
{
$id1=$rn['id'];
$per=$id1+1;
}

$res=mysql_query("insert into supplier values($per,'$name','$name1','$name2','$name3','$name4','$name5','$name6','$name7','$name8','$name9')");
?>

  </form>

</body>
</html>

