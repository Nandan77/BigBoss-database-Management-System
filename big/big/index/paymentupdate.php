
<html>
<body bgcolor="#00ffff">


<?php								 
    
	$dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'big') or die(mysqli_error($dbh));




if(isset($_POST['updatepayment'])){
		$cont_id= $_POST['cont_id'];
		$no_of_days = $_POST['no_of_days'];
		$amount=$_POST['amount'];
		$query = "UPDATE `payment` SET `no_of_days`='$no_of_days',`amount`='$amount' WHERE `cont_id`='$cont_id'";
		mysqli_query($dbh,$query) or die(mysqli_error($dbh));
		echo "Payment Data Updated Successfully!!!";
	}
	
	
	   $var=mysqli_query($dbh,"SELECT * FROM payment");

  echo"<table border size=1>";
 echo"<tr><th>cont_id_id</th> <th>no_of_days</th> <th>amount</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td></tr>";
   }
   echo"</table>";
	
	
	?>

	<h4><font color="cyan"><a href="payment.php"> BACK  </a></font></h4>
<h4><font color="cyan"><a href="index.html"> HOME  </a></font></h4>

</body>
</html>