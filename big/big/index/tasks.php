
<html>
<body >
<?php								 
    
	$dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'big') or die(mysqli_error($dbh));
	
	if($_POST['submit'])
	{
		$task_no = $_POST['task_no'];
		$task_name = $_POST['task_name'];
		$cont_id = $_POST['cont_id'];
		$performance=$_POST['performance'];
		
		if($task_no!="" && $task_name!="" && $cont_id!="" && $performance!="" )
		{
			$query = "INSERT INTO tasks VALUES ('$task_no','$task_name','$cont_id', '$performance')";
			$result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
			{
				echo "tasks Data Inserted Successfully!!!";
			}
		}
		else
		{
			echo "all fields are required";
		}
	}
		
	
?>






</body>
</html>


<html>
<head>
</head>
<body bgcolor="tomato">
<hr><h1 align="centre"><font color="blue">TO ALTER TASKS DETAILS</font></h1>
<h4><font color="cyan"><a href="tasksdis.php"><button> DISPLAY</button></a></font></h4>

<form action="tasksdel.php">
enter the task_no:<br>
<input type ="text" name="task_no"><br>

<input type ="submit" value="DELETE"><br>

</form>



<h4><font color="cyan"><a href="index.html"><button> HOME </button> </a></font></h4>
<table border size=56 color=#fcfcch>

</table>
</body>
</html>
