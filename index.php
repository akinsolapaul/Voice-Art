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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="styles/main.css">

	<title>Voive Art</title>
</head>
<body>
	<section class="container">
		<section class="row">
			<article class="col-md-6 one">
				<aside class="three"><br><br><br><br><br>
					<div class="four">
						<form method="post">
							Name: <input type="text" name="name"><br>
							Email: <input type="text" name="email"><br>
							<input type="submit" name="submit">
						</form>

					</div>
				</aside>
			<!--	<aside class="col-md-2">
					
					
				</aside>
				<aside class="col-md-2 two">
					
				</aside>
-->
			</article>

			<article class="col-md-6">
				<button>Coming Soon</button>
				<h1>Design<br>With Speech</h1>
				<p>Embrace the new comfort - no effort, no stress, just<br> speaking. The soon to be launched voiceart app allows<br> you create amazing designs with just speech.</p>
			</article>
		</section>

		<section>
			<aside>
				
			</aside>
			<aside>
				
			</aside>
			<aside>
				
			</aside>
		</section>
	</section>












	
</body>
</html>
