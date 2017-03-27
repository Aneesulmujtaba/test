<?php 



	if (isset($_POST["submit"]))
	
	{
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$fathername = $_POST["fatherName"];
	$DoB = $_POST["dob"];
	$DoJ = $_POST["doj"];
	$Class = $_POST["class"];
	$Fee = $_POST["fee"];
	$CellNO = $_POST["celNo"];
	$Address = $_POST["address"];
	
	
	
	mysql_connect("localhost","root","");
	mysql_Select_db("sch");
	$s = "insert into addmission (FirstName,LastName,FatherName,DoB,DoJ,Class,Fee,CellNO,Address) values('".$fname."','".$lname."','".$fathername."','".$DoB."','".$DoJ."','".$Class."','".$Fee."','".$CellNO."','".$Address."') ";
	
	mysql_query($s);
	}
?>
<html>
<head>
<style>
p {
width:auto;
height:50px;
margin:4px;
padding:5px;
text-align:center;
background-color:green;
font-size:35px;
color:white;

}
th{
text-align:right;
}
input{
margin:4px;
height:35px;
font-size:18px;
}

ul{
list-style-type:none;
margin:0px;
padding:0px;
overflow:hidden;
background-color:#333;
}

li{
float:left;

}

li a{
display:block;
color:white;
text-align:center;
padding:14px 16px;
text-decoration:none;

}

li a:hover{
background-color:#4CAF50;

}

.active {
    background-color: #4CAF50;
}

</style>
</head>
<body style = "background-color:#F0E68C;">

<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="entry.php">Add New Student</a></li>
  <li><a href="display.php">Student List</a></li>

  <li style="float:right"><a href="#about">About</a></li>
</ul>

<p>Student Admission form</p>
<br>
<center>

<form name = "Sform" method = "post" action = "entry.php">
<table border = "0">



<tr>
<th>
First Name:
</th>
<td> 
<input type = "text" name = "fname" placeholder = "x" size = 30px>
</td>
</tr>

<tr>
<th>
Last Name:
</th>
<td> 
<input type = "text" name = "lname" placeholder = "x" size = 30px>
</td>
</tr>

<tr>
<th>
Father Name:
</th>
<td> 
<input type = "text" name = "fatherName" placeholder = "x" size = 30px>
</td>
</tr>

<tr>
<th>
Date of Birth:
</th>
<td> 
<input type = "date" name = "dob">
</td>
</tr>

<tr>
<th>
Date of Join:
</th>
<td> 
<input type = "date" name = "doj">
</td>
</tr>

<tr>
<th>
Class:
</th>
<td> 
<select name = "class" style = "height:35px;width:90px;margin:4px">
<option vlaue = "one" selected>One</option>
<option vlaue = "two" >Two</option>
<option vlaue = "three" >Three</option>
<option vlaue = "four" >Four</option>
<option vlaue = "five" >Five</option>
<option vlaue = "six" >Six</option>
<option vlaue = "seven" >Seven</option>
<option vlaue = "eight" >Eight</option>
<option vlaue = "nine" >Nine</option>
<option vlaue = "ten" >Ten</option>
</td>
</tr>

<tr>
<th>
Fee:
</th>
<td> 
<input type = "text" name = "fee" placeholder = "0" size = 15px;>
</td>
</tr>

<tr>
<th>
Cel No:
</th>
<td> 
<input type = "text" name = "celNo" placeholder = "x" size = 20px;>
</td>
</tr>

<tr>
<th>
Address:
</th>
<td> 
<textarea name = "address" rows = "3" cols = "30" placeholder = "x" style = "margin:4px;font-size:14px;"></textarea>
</td>
</tr>



</table>
<input type="submit"  name = "submit" value = "Add" onclick = "Add()" style = "width:130px;height:45px;">
<input type = "button" name = "Cancel" onclick = "cancel()" value = "Cancel" style = "width:130px;height:45px;">

<input type = "text" hidden name = "hid" placeholder = "x">
<input type = "text" hidden name = "hid0" placeholder = "0">


</form>
<br>

</center>
</body>
</html>


<script>
function cancel(){
var x;
x = document.Sform.hid.value;

document.Sform.fname.value = x;
document.Sform.lname.value = x;
document.Sform.fatherName.value = x;

document.Sform.celNo.value = x;
document.Sform.address.value = x;
var y;
y = document.Sform.hid0.value;
document.Sform.fee.value = y;
	

document.Sform.class.value="One";
var a;
a = document.Sform.dcan.value;
document.Sform.dob.value = a;
document.Sform.doj.value = a;
	
}
function Add(){
	
	window.alert("data has sent successfully.......");
	
}

</script>