
<html>
<body bgcolor="#00ffff">



<?php								 
    
	$dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'big') or die(mysqli_error($dbh));




if(isset($_POST['updatecontestent'])){
		$cont_id = $_POST['cont_id'];
		$cont_name = $_POST['cont_name'];
		$gender = $_POST['gender'];
		$dob =$_POST['dob'];
		$address =$_POST['address'];
	
		$query = "UPDATE `contestent` SET `cont_name`='$cont_name',`gender`='$gender',`dob`='$dob',`address`='$address' WHERE `cont_id`='$cont_id'";
		mysqli_query($dbh,$query) or die(mysqli_error($dbh));
		echo "Data Updated Successfully!!!";
	}
	
	
	   $var=mysqli_query($dbh,"SELECT * FROM contestent");

  echo"<table border size=1>";
 echo"<tr><th>cont_id</th> <th>cont_name</th> <th>gender</th> <th>dob</th> <th>address</th> </tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td>  </tr>";
   }
   echo"</table>";
	
	?>



	<h4><font color="cyan"><a href="contestent.php"> BACK  </a></font></h4>

	<h4><font color="cyan"><a href="index.html"> HOME  </a></font></h4>
</body>
</html>


