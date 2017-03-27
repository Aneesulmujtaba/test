<?php 

mysql_connect("localhost","root","");
	mysql_Select_db("sch");

	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$fathername = $_POST["fatherName"];
	$dob = $_POST["dob"];
	$DoJ = $_POST["doj"];
	$Class = $_POST["class"];
	$Fee = $_POST["fee"];
	$CellNO = $_POST["celNo"];
	$Address = $_POST["address"];
	$NO = $_POST["NO"];
	
	$s = "update addmission set FirstName ='".$fname."',LastName ='".$lname."',fatherName ='".$fathername."',
	Dob ='".$dob."',DoJ ='".$DoJ."',Class ='".$Class."', Fee ='".$Fee."',CellNO	='".$CellNO."',Address ='".$Address."' where NO =".$NO."";


	mysql_query($s);
	
	header("location:display.php");

?>