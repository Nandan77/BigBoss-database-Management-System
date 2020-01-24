<html>
<body bgcolor="#808000">
	<h1 align="centre"><font color="blue"> EMPLOYEE DETAILS</font></h1><hr>
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'big') or die (mysqli_error($dbh));

$var=mysqli_query($dbh,"SELECT * from employee");
echo"<table border size=1>";
echo"<tr><th>e_id</th> <th>e_name</th> <th>role</th> <th>salary</th> </tr>";
while ($arr = mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
}
echo"</table>";

?>

<?php
$db_host="localhost";
$db_name="big";
$db_user="root";
$db_pass="";
$con = mysqli_connect("$db_host","$db_user","$db_pass") or die ("could not connect");
mysqli_select_db($con,'big') or die(mysqli_error($con));
$p0=mysqli_query($con,"call total_salary(@out);");
$rs=mysqli_query($con,'SELECT @out');
	while ($arr=mysqli_fetch_row($rs))
	{
		echo 'Total salary paid is=Rs. '.$arr[0];
	}
	mysqli_close($con);

?>

<h4><font color="cyan"><a href="employee.php"> BACK  </a></font></h4>
<h4><font color="cyan"><a href="index.html"> HOME  </a></font></h4>

</body>
</html>