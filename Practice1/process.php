<?php  
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$log=$_POST['Login'];
/*
	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username=mysql_real_escape_string($username);
	$password=mysql_real_escape_string($password);
*/
if (isset($log))
	{
		$connection=mysqli_connect("localhost","root","","login");
		//$dB=mysqli_select_db("login");
	
		$result=mysqli_query($connection,"select * from login where username='$username' and password='$password'" )
				or die("Failed to query database".mysqli_error());
		$row=mysqli_fetch_array($result);
	
		if($row['username']==$username && $row['password']==$password)
		{
			echo "Login Success !!!  Welcome ".$row['username'];
		}
		else
		{
			echo "Failed to login !!!";
		}
	}
?>