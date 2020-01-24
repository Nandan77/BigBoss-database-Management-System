


<html>
<head>
<title>Employeedel</title>
</head>
<body bgcolor="tomato">
<hr><h1 align="centre"><font color="blue">To delete employee details</font></h1>
<form action="employeedel.php">
enter the employeeid:<br>
<input type ="text" name="e_id"><br>

<input type ="submit" value="delete"><br>
</form>
</body>
</html>




<html>
<body >
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'big') or die (mysqli_error($dbh));

$e_id=$_REQUEST['e_id'];



$query="delete from employee where e_id='$e_id'";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data deleted successfully!!!!";

$var=mysqli_query($dbh,"SELECT * from employee");
echo"<table border size=1>";
echo"<tr><th>e_id</th> <th>e_name</th> <th>role</th> <th>salary</th></tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td>";
}
echo"</table>";

?>
<h4><font color="cyan"><a href="employee.php"> BACK  </a></font></h4>
<h4><font color="cyan"><a href="index.html"> HOME  </a></font></h4>
</body>
</html>