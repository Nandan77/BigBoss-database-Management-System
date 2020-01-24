


<html>
<head>
<title>Votingdel</title>
</head>
<body bgcolor="tomato">
<hr><h1 align="centre"><font color="blue">To delete voting details</font></h1>
<form action="votingdel.php">
enter the voting_id:<br>
<input type ="text" name="voting_id"><br>

<input type ="submit" value="delete"><br>
</form>
</body>
</html>




<html>
<body >
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'big') or die (mysqli_error($dbh));

$voting_id=$_REQUEST['voting_id'];



$query="delete from voting where voting_id='$voting_id'";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo " voting data deleted successfully!!!!";

$var=mysqli_query($dbh,"SELECT * from voting");
echo"<table border size=1>";
echo"<tr><th>voting_id</th> <th>cont_id</th> <th>review</th> </tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</tr>";
}
echo"</table>";

?>
<h4><font color="cyan"><a href="voting.php"> BACK  </a></font></h4>
<h4><font color="cyan"><a href="index.html"> HOME  </a></font></h4>
</body>
</html>