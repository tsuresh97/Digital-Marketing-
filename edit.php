<?php
mysql_connect("localhost","root","suresh")or die("localhost error");
mysql_select_db("shop")or die("database error");
 
	if( isset($_GET['edit']) )
	{
		$cat_code = $_GET['edit'];
		$res= mysql_query("SELECT * FROM category WHERE cat_code='$cat_code'");
		$row= mysql_fetch_array($res);
	}
 
	if( isset($_POST['newName']) )
	{
		$newName = $_POST['newName'];
		$cat_code  	 = $_POST['cat_code'];
		$sql     = "UPDATE category SET cat_name='$newName' WHERE cat_code='$cat_code'";
		$res 	 = mysql_query($sql) 
                                    or die("Could not update".mysql_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
 
?>
<form action="edit.php" method="POST">
Name: <input type="text" name="newName" value="<?php echo $row[1]; ?/>"><br />
<input type="hidden" name="cat_code" value="<?php echo $row[0]; ?/>">
<input type="submit" value=" Update "/>
</form>
