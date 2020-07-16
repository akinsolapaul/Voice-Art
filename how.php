<?php
$name="";
$email="";
if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$conn=new mysqli("mysql://b8c6b3fe091a3f:ed48b709@us-cdbr-east-02.cleardb.com/heroku_56fa774bbd1fe14?reconnect=true","b8c6b3fe091a3f","ed48b709","heroku_56fa774bbd1fe14");
	$cmd="INSERT into collect value('$name','$email');";
	if (mysqli_query($conn, $cmd))
	{
		echo "Successfully";
	}
	else
	{
		echo "Not Saved";
	}
}

?> 