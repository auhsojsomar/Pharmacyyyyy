<?php
if(isset($_POST['submit']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$con=mysqli_connect("localhost","root","","pharmacy");
	$query=mysqli_query($con,"Select status from loginform where username='$user' and password='$pass'");
	$row=mysqli_fetch_assoc($query);
	if($row['status']=="Administrator")
	{
	 header("Location: dashboard.php?admin");
	}
	else if($row['status']=="Member")
	{
		 header("Location: Medicine.php");
	} 
	   else
	{
		 header("Location: login2.php?error=1");
	}
	mysqli_close();
}
?>