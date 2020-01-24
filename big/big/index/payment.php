





<html>
<body >
<?php								 
    
	$dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'big') or die(mysqli_error($dbh));
	
	if(isset($_POST['submit'])){
		
		$cont_id = $_POST['cont_id'];
		$no_of_days = $_POST['no_of_days'];
		$amount=$_POST['amount'];
		$cutoff_gst=null;
		
		$query = "INSERT INTO payment VALUES ('$cont_id','$no_of_days', '$amount','$cuttoff_gst')";
		$result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
		echo "payment Data Inserted Successfully!!!";
	}
	
	
	
	
	
	

   $var=mysqli_query($dbh,"SELECT * FROM payment");

  echo"<table border size=56>";
  echo"<tr><th>cont_id</th> <th>no_of_days</th> <th>amount</th> <th>cutoff_gst</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td></tr>";
   }
   echo"</table>";
?>



<table border size=56 color=#fcfcch>
</table>

</body>
</html>



<html>
<head>
</head>
<body bgcolor="tomato">
<hr><h1 align="centre"><font color="blue">TO ALTER PAYMENT DETAILS</font></h1>
<h4><font color="cyan"><a href="paymentdis.php"><button> DISPLAY</button></a></font></h4>


<form action="paymentdel.php">
enter the cont_id:<br>
<input type ="text" name="cont_id"><br>
<input type ="submit" value="DELETE"><br>
</form>

<h4><font color="cyan"><a href="updatepayment.php"><button> UPDATE</button></a></font></h4>


<h4><font color="cyan"><a href="index.html"><button> HOME </button> </a></font></h4>
<table border size=56 color=#fcfcch>

</table>
</body>
</html>