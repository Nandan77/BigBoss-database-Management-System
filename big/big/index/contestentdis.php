<html>
<body bgcolor="#808000">
	<h1 align="centre"><font color="blue"> CONTESTANT DETAILS</font></h1><hr>
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'big') or die (mysqli_error($dbh));

$var=mysqli_query($dbh,"SELECT * from contestent");
echo"<table border size=1>";
echo"<tr><th>cont_id</th> <th>cont_name</th> <th>gender</th><th>dob</th> <th>address</th></tr>";
while ($arr = mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td><td>$arr[4]</td>  </tr>";
}
echo"</table>";

?>
<h4><font color="cyan"><a href="contestent.php"> BACK  </a></font></h4>

	<h4><font color="cyan"><a href="index.html"> HOME  </a></font></h4>
</body>
</html>