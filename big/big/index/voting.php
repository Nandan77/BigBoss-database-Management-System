

<html>
<body >
<?php								 
    
	$dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'big') or die(mysqli_error($dbh));
	
	if($_POST['submit'])
	{
		
		$voting_id = $_POST['voting_id'];
		$cont_id = $_POST['cont_id'];
		$review=$_POST['review'];

		if($voting_id!="" && $cont_id!="" && $review!="")
		{
			$query = "INSERT INTO voting VALUES ('$voting_id','$cont_id', '$review')";
			$result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
			if($result)
			{
				echo "Contestent Data Inserted Successfully!!!";
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
<hr><h1 align="centre"><font color="blue">TO ALTER VOTING DETAILS</font></h1>

<h4><font color="cyan"><a href="votingdis.php"><button> DISPLAY</button></a></font></h4>



<form action="votingdel.php">
enter the voting_id:<br>
<input type ="text" name="voting_id"><br>
<input type ="submit" value="delete"><br>
</form>


<h4><font color="cyan"><a href="index.html"><button> HOME </button> </a></font></h4>
<table border size=56 color=#fcfcch>

</table>
</body>
</html>
