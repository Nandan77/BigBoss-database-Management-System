

<html>
<body >
<?php								 
    
	$dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'big') or die(mysqli_error($dbh));
	
	if($_POST['submit']){
		
		$e_id = $_POST['e_id'];
		$e_name = $_POST['e_name'];
		$role=$_POST['role'];
		$salary = $_POST['salary'];
		
		if($e_id!="" && $e_name!="" && $role!="" && $salary!="" )
		{
			$query = "INSERT INTO employee VALUES ('$e_id','$e_name', '$role','$salary')";
			$result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
			if($result)
			{
				echo "employee Data Inserted Successfully!!!";
			}
		}
		else
		{
			echo "all fields are required";
		}		
	}


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

</body>
</html>


<html>
<head>
</head>
<body bgcolor="tomato">
<hr><h1 align="centre"><font color="blue">TO ALTER EMPLOYEE DETAILS</font></h1><hr>

<h4><font color="cyan"><a href="employeedis.php"><button> DISPLAY</button></a></font></h4>

<form action="employeedel.php">
enter the employeeid:<br>
<input type ="text" name="e_id"><br>
<input type ="submit" value="DELETE"><br>
</form>

<h4><font color="cyan"><a href="updateemployee.php"><button> UPDATE</button></a></font></h4>



<h4><font color="cyan"><a href="index.html"><button> HOME </button> </a></font></h4>
<table border size=56 color=#fcfcch>

</table>
</body>
</html>