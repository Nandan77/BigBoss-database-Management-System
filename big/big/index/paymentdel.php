


<html>
<head>
<title>PAymentdel</title>
</head>
<body bgcolor="tomato">
<hr><h1 align="centre"><font color="blue">To delete payment details</font></h1>
<form action="paymentdel.php">
enter the cont_id:<br>
<input type ="text" name="cont_id"><br>

<input type ="submit" value="delete"><br>
</form>
</body>
</html>




<html>
<body >
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'big') or die (mysqli_error($dbh));

$cont_id=$_REQUEST['cont_id'];



$query="delete from payment where cont_id='$cont_id'";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "payment data deleted successfully!!!!";

$var=mysqli_query($dbh,"SELECT * from payment");
echo"<table border size=1>";
echo"<tr><th>cont_id</th> <th>no_of_days</th> <th>amount</th></tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td></tr>";
}
echo"</table>";

?>
<h4><font color="cyan"><a href="payment.php"> BACK  </a></font></h4>
<h4><font color="cyan"><a href="index.html"> HOME  </a></font></h4>
</body>
</html>