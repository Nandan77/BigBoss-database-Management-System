<html>
<body bgcolor="#808000">
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'big') or die (mysqli_error($dbh));

$var=mysqli_query($dbh,"SELECT * from voting");
echo"<table border size=1>";
echo"<tr><th>voting_id</th> <th>cont_id</th> <th>review</th> </tr>";
while ($arr = mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> </tr>";
}
echo"</table>";

?>
<h4><font color="cyan"><a href="voting.php"> BACK  </a></font></h4>
<h4><font color="cyan"><a href="index.html"> HOME  </a></font></h4>
</body>
</html>