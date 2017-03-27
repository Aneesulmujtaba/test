<?php 

mysql_connect("localhost","root","");
mysql_select_db("sch");
$s = "select * from addmission where NO=".$_GET["NO"];
$result = mysql_query($s);
$row = mysql_fetch_assoc($result);
?>

<html>
<head>
<style>
p {
width:990px;
height:50px;
margin:1px;
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
</style>
</head>
<body style = "background-color:#F0E68C;">

<p>Edit in Student Admission form</p>
<br>
<center>
<form name = "Sform" method = "post" action = "Save.php">
<input type = "hidden" value = "<?php echo $row['NO']; ?>" name = "NO" />
<table border = "0">



<tr>
<th>
First Name:
</th>
<td> 
<input type = "text" name = "fname" placeholder = "x" size = 30px value = "<?php echo $row['FirstName'];?>"/>
</td>
</tr>

<tr>
<th>
Last Name:
</th>
<td> 
<input type = "text" name = "lname" placeholder = "x" size = 30px value = "<?php echo $row['LastName'] ?>" />
</td>
</tr>

<tr>
<th>
Father Name:
</th>
<td> 
<input type = "text" name = "fatherName" placeholder = "x" size = 30px value = "<?php echo $row['FatherName'] ?>"/>
</td>
</tr>

<tr>
<th>
Date of Birth:
</th>
<td> 
<input type = "date" name = "dob" value = "<?php echo $row['DoB'] ?>"/>
</td>
</tr>

<tr>
<th>
Date of Join:
</th>
<td> 
<input type = "date" name = "doj" value = "<?php echo $row['DoB'] ?>"/>
</td>
</tr>

<tr>
<th>
Class:
</th>
<td> 



<select name = "class" style = "height:35px;width:90px;margin:4px">

<option vlaue = "one" <?Php  if($row['Class'] =="One") echo "selected" ?>>One</option>
<option vlaue = "two" <?Php  if($row['Class'] =="Two") echo "selected" ?> >Two</option>
<option vlaue = "three " <?php if ($row['Class']=="Three") echo "selected" ?> >Three</option>
<option vlaue = "four" <?php if ($row['Class']=="Four") echo "selected" ?> >Four</option>
<option vlaue = "five" <?php if ($row['Class']=="Five") echo "selected" ?> >Five</option>
<option vlaue = "six" <?php if ($row['Class']=="Six") echo "selected" ?> >Six</option>
<option vlaue = "seven" <?php if ($row['Class']=="Seven") echo "selected" ?> >Seven</option>
<option vlaue = "eight" <?php if ($row['Class']=="Eight") echo "selected" ?>>Eight</option>
<option vlaue = "nine" <?php if ($row['Class']=="Nine") echo "selected" ?>>Nine</option>
<option vlaue = "ten" <?Php  if($row['Class'] =="Ten") echo "selected" ?> >Ten</option>
</td>
</tr>

<tr>
<th>
Fee:
</th>
<td> 
<input type = "text" name = "fee" placeholder = "0" size = 15px; value = "<?php echo $row['Fee'] ?>"/>
</td>
</tr>

<tr>
<th>
Cel No:
</th>
<td> 
<input type = "text" name = "celNo" placeholder = "x" size = 20px; value = "<?php echo $row['CellNO'] ?>"/>
</td>
</tr>

<tr>
<th>
Address:
</th>
<td> 
<textarea name = "address" rows = "3" cols = "30" placeholder = "x" style = "margin:4px;font-size:14px;">
<?php echo $row ['Address'] ?>
</textarea>
</td>
</tr>



</table>
<input type="submit"  name = "submit" value = "Save" onclick = "Add()" style = "width:130px;height:45px;">
<input type = "button" name = "Cancel" onclick = "document.location.href ='display.php' " value = "Cancel" style = "width:130px;height:45px;">
</form>


</center>

</body>
</html>


