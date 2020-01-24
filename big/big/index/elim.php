
<html>
<head>
<title>Nomination</title>
</head>
<body>
<hr><h1 align="centre"><font color="red">To delete nominate contestent details</font></h1>
<form action="nominationdel.php">
enter the cont_id:<br>
<input type ="text" name="cont_id"><br>

<input type ="submit" value="delete"><br>
</form>
</body>
</html>





<html>
<body >
<?php								 
    
	$dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'big') or die(mysqli_error($dbh));
	
	if(isset($_POST['submit'])){
		
		$nomination_no = $_POST['nomination_no'];
		$cont_id= $_POST['cont_id'];
		$reason=$_POST['reason'];
		
		$query = "INSERT INTO nomination VALUES ('$nomination_no','$cont_id', '$reason')";
		$result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
		echo "nomination Data Inserted Successfully!!!";
	}
	
	
	
	
	
	

   $var=mysqli_query($dbh,"SELECT * FROM nomination");

  echo"<table border size=56>";
  echo"<tr><th>nomination_no</th> <th>cont_id</th> <th>reason</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td></tr>";
   }
   echo"</table>";
?>
<h4><font color="cyan"><a href="nominationdel.php"><button> delete </button> </a></font></h4>
<h4><font color="cyan"><a href="updatenomination.php"><button> update</button></a></font></h4>
<h4><font color="cyan"><a href="nominationdis.php"><button> display</button></a></font></h4>
<h4><font color="cyan"><a href="index.html"><button> home </button> </a></font></h4>

<table border size=56 color=#fcfcch>
</table>

</body>
</html>
