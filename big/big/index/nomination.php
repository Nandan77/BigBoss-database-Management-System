
<html>
<body >
<?php								 
    
	$dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'big') or die(mysqli_error($dbh));
	
	if($_POST['submit'])
	{
		
		$nomination_no = $_POST['nomination_no'];
		$cont_id= $_POST['cont_id'];
		$reason=$_POST['reason'];

		if($nomination_no!=""  && $cont_id!=""  && $reason!="" )
		{
			$query = "INSERT INTO nomination VALUES ('$nomination_no','$cont_id', '$reason')";
			$result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
			if($result)
			{
				echo "nomination Data Inserted Successfully!!!";
			}
		}
		else
		{
			echo "all fields required";
		}
	}
?>


</body>
</html>


<html>
<head>
</head>
<body bgcolor="tomato">
<hr><h1 align="centre"><font color="blue">TO ALTER NOMINATION DETAILS</font></h1>
<h4><font color="cyan"><a href="nominationdis.php"><button> DISPLAY</button></a></font></h4>

<form action="nominationdel.php">
enter the cont_id:<br>
<input type ="text" name="cont_id"><br>

<input type ="submit" value="DELETE"><br>
</form>




<h4><font color="cyan"><a href="index.html"><button> HOME </button> </a></font></h4>
<table border size=56 color=#fcfcch>

</table>
</body>
</html>