<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<div class="bg-img">
		<br><br><br>
		<div class="forms d-flex flex-column justify-content-center">
			<h1 class="inside-box-heading">Login Details</h1>
			<br>
			<form name="login" action="" method="">
				<div class="login text-center">
					<input type="text" name="E-mail" placeholder="Username" required=""><br><br>
					<input type="password" name="Password" placeholder="password" required=""><br><br>
					<button class="btn btn-primary mb-3">Login</button><br>
				</div>
			</form>
			<div class="text-center">
				<button class="btn btn-primary"><a style="text-decoration: none;color: white; margin-right: auto" href="registration.php">Register Here</button>
			</div>
		</div>
	</div>
</body>
</html>