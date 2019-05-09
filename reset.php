<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
   display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=submit]{
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

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
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
h2 {
  color: red;
}
</style>
</head>
<body>
<form method=post action="reset.php">
<h2><center>Reset Password<center></h2>
  <div class="imgcontainer">
    <img src="img_avatar12.png" alt="" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
  <input type=submit name=submit value=Submit>
  
  </div>
<br><br>
  <div class="container" style="background-color:#f1f1f1">
    
   
  </div>
<?php
mysql_connect("localhost","root","suresh")or die("localhost error");
mysql_select_db("shop")or die("database error");
$res=mysql_query("Select * from login");
while($rn=mysql_fetch_array($res))
{
$user=$rn['user'];
$pass=$rn=['pass'];
}

$user1=$_POST["uname"];

$pass1=$_POST["psw"];
if(strcmp($user,$user1)==0)
{
if(strcmp($pass,$pass1)==0)
{
$_SESSION["username"] = "$user";
$_SESSION["password"] = "$pass";
header("location:reset2.php");
}
}


?>
</form>
</body>
</html>

