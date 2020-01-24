

<html>
<head>  <link rel="stylesheet" href="style.css"></head>
<body >
<?php								 
    
	$dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'big') or die(mysqli_error($dbh));
	
	if($_POST['submit']){
		
		$cont_id = $_POST['cont_id'];
		$cont_name = $_POST['cont_name'];
		$gender = $_POST['gender'];
		$dob=$_POST['dob'];
		$address=$_POST['address'];

		if($cont_id!="" && $cont_name!="" && $gender!="" && $dob!="" && $address!="")
		{
			$query = "INSERT INTO contestent VALUES ('$cont_id','$cont_name','$gender','$dob','$address')";
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
<hr><h1 align="centre"><font color="blue">TO ALTER CONTESTANT DETAILS</font></h1>
<h4><font color="cyan"><a href="contestentdis.php"><button> display </button></a></font></h4>

<form action="contestentdel.php">
enter the cont_id:<br>
<input type ="text" name="cont_id"><br>

<input type ="submit" value="delete"><br>

</form>
<h4><font color="cyan"><a href="updatecontestent.php"><button> update </button></a></font></h4>

<h4><font color="cyan"><a href="index.html"><button> home </button> </a></font></h4>
<table border size=56 color=#fcfcch>

</table>
</body>
</html>

