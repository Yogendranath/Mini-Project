<?php
include 'connect.php';
include 'navbar_for_registration.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
	<div class="bg-img">
		<div class="d-flex flex-row justify-content-center">
			<form name="Registration" action="" method ="post" class="col-sm-5 col-md-5 col-lg-4">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h1 style="color:white;">Registration</h1>
							<p style="color:white;">Fill the form with the correct values</p>
							<hr class="mb-3">
							
							<label for="Name" style="color:white;">Name</label>
							<input class="form-control" type="text" name="name" placeholder="Name" required>
							
							<label for="email" style="color:white;">Email Address</label>
							<input class="form-control" type="text" name="email" placeholder="Email" placename="email" required>
							
							<label for="Password" style="color:white;">Password</label>
							<input class="form-control" type="password" name="password" placeholder="Password" required>

							<label for="confirmpassword"
							style="color:white;">Confirm Password</label>
							<input class="form-control" type="password" name="confirmpassword" placeholder="Confirm Password"required>
							<hr class="mb-3">
							<button class="btn btn-primary" name="submit" type="submit">SignUp</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<?php
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		$sql="INSERT INTO users (name,email,password) VALUES('$name','$email','$password')";
		mysqli_query($conn,$sql);
	?>
</body>
</html>