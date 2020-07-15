<?php
$name="";
$email="";
if (isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$conn=new mysqli("localhost","root","","mysite");
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