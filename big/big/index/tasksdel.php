


<html>
<head>
<title>delete the task info</title>
</head>
<body bgcolor="tomato">
<hr><h1 align="centre"><font color="red">To delete task details</font></h1>
<form action="tasksdel.php">
enter the task_no:<br>
<input type ="text" name="task_no"><br>

<input type ="submit" value="delete"><br>
</form>
</body>
</html>




<html>
<body >
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'big') or die (mysqli_error($dbh));

$task_no=$_REQUEST['task_no'];



$query="delete from tasks where task_no='$task_no'";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "task deleted successfully!!!!";

$var=mysqli_query($dbh,"SELECT * from tasks");
echo"<table border size=1>";
echo"<tr><th>task_no</th> <th>task_name</th> <th>cont_id</th> <th>performance</th> </tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td></tr>";
}
echo"</table>";

?>
<h4><font color="cyan"><a href="tasks.php"> BACK  </a></font></h4>
<h4><font color="cyan"><a href="index.html"> home  </a></font></h4>
</body>
</html>