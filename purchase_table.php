<?php
session_start();
if(!isset($_SESSION['password'])){
    echo "<script>  window.location.assign('login.php'); </script>";
}
?>
<?php
mysql_connect("localhost","root","suresh")or die("localhost error");
mysql_select_db("shop")or die("database error");

$per=mysql_query("SELECT p_id FROM purchase_table ORDER BY p_id DESC LIMIT 1");

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
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

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 132px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {background-color: #f44336;} /* Red */
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
<form method=post action=purchase_table.php>
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
<h2>Purchase Table</h2>


  <div class="imgcontainer">
   
  </div>

  <div class="container">

</b></label><br><br>  


<label for="uname"><b>Enter Date</b></label><br>
 <input type="date"  name="uname"><br>

 <label for="uname"><b>Purchase Bill No. </b></label><br>
    <input type="text" placeholder="Enter Purchase Bill No.  " name="uname1"><br>
 
 <label for="uname"><b>Choose Supplier ID </b></label><br>
<?php
$res=mysql_query("Select id from supplier");
echo "<select name=s1>";
while($rn=mysql_fetch_array($res))
{
$rno=$rn['id'];
echo "<option value=".$rno.">".$rno."</option>";
}
echo "</select>";
$name2=$_POST["s1"];
?>
<br>
<label for="uname"><b>Choose Item Code </b></label><br>
<?php
$res=mysql_query("Select item_code from item_table");
echo "<select name=s2>";
while($rn=mysql_fetch_array($res))
{
$rno=$rn['item_code'];
echo "<option value=".$rno.">".$rno."</option>";
}
echo "</select>";
$name3=$_POST["s2"];
?>
<br>
 <label for="uname"><b>Quantity</b></label><br>
    <input type="text" placeholder="Enter Quantity"  name="uname4"><br>

 <label for="uname"><b>Cost Per Item</b></label><br>
    <input type="text" placeholder="Enter Cost Per Item"  name="uname5"><br>

  <table><tr> <input type="submit" name="Add" value="Add"><tr><input type="submit" name="Next" value="Next"></table>

   </div><br>
<h2><center>List of Category</center></h2>
<?php

echo"<center><table border=1>";
echo"<tr><th>Purchase ID<th>Date<th>Purchase Bill. No<th>Supplier ID<th>Item Code<th>Quantity<th>Cost Per Item</tr>";
$res=mysql_query("Select * from purchase_table");
while($rn=mysql_fetch_array($res))
{
$bd1=$rn['p_id'];

$bd2=$rn['p_date'];

$bd3=$rn['p_bill'];

$bd4=$rn['s_id'];

$bd5=$rn['item_code'];

$bd6=$rn['qty'];

$bd7=$rn['cost'];


echo "<tr><td>".$bd1."<td>".$bd2."<td>".$bd3."<td>".$bd4."<td>".$bd5."<td>".$bd6."<td>".$bd7."";

}
?>

<?php

$btn1=$_POST["Add"];

$name=$_POST["uname"];
$name1=$_POST["uname1"];
$name4=$_POST["uname4"];
$name5=$_POST["uname5"];

mysql_connect("localhost","root","suresh")or die("localhost error");
mysql_select_db("shop")or die("database error");
$per=mysql_query("SELECT p_id FROM purchase_table ORDER BY p_id DESC LIMIT 1");

if($btn1=="Add")
{
mysql_connect("localhost","root","suresh")or die("localhost error");
mysql_select_db("shop")or die("database error");
$res=mysql_query("insert into purchase_table values($per,'$name',$name1,$name2,$name3,$name4,$name5)");
}
?>

  </form>

</body>
</html>

