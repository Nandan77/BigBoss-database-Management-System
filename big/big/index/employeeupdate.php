<html>
<body bgcolor="#00ffff">



<?php								 
    
	$dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    mysqli_select_db($dbh,'big') or die(mysqli_error($dbh));




if(isset($_POST['updateemployee'])){
		$e_id = $_POST['e_id'];
		$e_name = $_POST['e_name'];
		$role=$_POST['role'];
		$salary=$_POST['salary'];
		$query = "UPDATE `employee` SET `e_name`='$e_name',`role`='$role',`salary`='$salary'  WHERE `e_id`='$e_id'";
		mysqli_query($dbh,$query) or die(mysqli_error($dbh));
		echo "Data Updated Successfully!!!";
	}
	
	
	   $var=mysqli_query($dbh,"SELECT * FROM employee");

  echo"<table border size=1>";
 echo"<tr><th>e_id</th> <th>e_name</th> <th>role</th> <th>salary</th> </tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
   }
   echo"</table>";
	

	
	?>

	<h4><font color="cyan"><a href="employee.php"> BACK  </a></font></h4>
<h4><font color="cyan"><a href="index.html"> HOME  </a></font></h4>

</body>
</html>