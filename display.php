<?php

if(isset($_POST['search'])){
	
	$valueToSearch = $_POST['filter'];
	$query =  "SELECT * FROM `addmission` WHERE CONCAT(`NO`, `FirstName`, `LastName`, `FatherName`, `DoB`, `DoJ`, `Class`, `Fee`, `CellNO`, `Address`)LIKE '%".$valueToSearch."%'";

	$search_result = filterTable($query);
}
else{
	
	$query = "select * from addmission";
	$search_result = filterTable($query);
	
	/*mysql_connect("localhost","root","");
mysql_select_db("sch");
$s = "select * from addmission";
$resource = mysql_query($s);
$count = mysql_num_rows($resource);*/
}


function filterTable($query){
	$connect = mysqli_connect("localhost","root","","sch");
	$filter_Result = mysqli_query($connect,$query);
	return $filter_Result;
}
?>
<html>
<head> 
<style>

table{
	
	
	
	
	background-color: orchid;
	color:black;
	
}
th{
	
	background-color: #4CAF50;
    color: white;
}
tr:hover{
	background-color: #f5f5f5;
	
	
}
.par{
width:auto;
height:50px;
margin:4px;
padding:5px;
text-align:center;
background-color:green;
font-size:35px;
color:white;
}
th, td {
    text-align: left;
    padding: 4px;
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
<body style = "background-color:pink;">

<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="entry.php">Add New Student</a></li>
  <li><a href="display.php">Student List</a></li>

  <li style="float:right"><a href="#about">About</a></li>
</ul>
<p class = "par"> Student List</p>

<div style = "background-color:red;width:auto;height:40px;padding:6px;margin:4px;">
<form   method = "post" action = "display.php">
<input type = "text" name = "filter" placeholder = "Enter value to search " style = "height:35px;font-size:16px;" size = 30px>
<input type = "submit" value = "search" name = "search" style = "width:70px;height:35px;">
<input type = "button" value = "All" onclick = "document.location.href = 'display.php'" style = "width:70px;height:35px;" />
</form>

</div>


<center>
<br>
<div style="overflow:auto;width:auto;height:400px;">
<table border = "1">
<tr>
<th>No</th>

<th>First Name</th>

<th>Last Name</th>

<th>Father Name</th>

<th>Date of Birth</th>

<th>Date of join </th>

<th>Class</th>

<th>Fee</th>

<th>CellNo</th>

<th>Address</th>
<th> Edit </th>

</tr>


<?php
while($row = mysqli_fetch_array($search_result)){
	

echo "<tr>";

echo "<td>".$row['NO']."</td>";

echo "<td>".$row['FirstName']."</td>";

echo "<td>".$row['LastName']."</td>";

echo "<td>".$row['FatherName']."</td>";

echo "<td>".$row['DoB']."</td>";

echo "<td>".$row['DoJ']."</td>";

echo "<td>".$row['Class']."</td>";

echo "<td>".$row['Fee']."</td>";

echo "<td>".$row['CellNO']."</td>";

echo "<td>".$row['Address']."</td>";

echo "<td><a href = 'editpage.php?NO=".$row['NO']."'>Edit</a> </td>";




echo "</tr>";
}


?>
</table>
</div>
</body>
</html>


