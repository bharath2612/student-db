
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
    <link rel="stylesheet" type="text/css" href="styler.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class = "container">
   		<div class = "login-box">
			<div class = "row">
				<div style="margin: 30px auto;" class = "col-md-6 login-right">
				<h2> Register Here</h2> 
				<form action="registration.php" method="post">
						<div class ="form-group">
							<label> Username </label>
							<input type = "text" name = "user" class = "form-control" required placeholder="Username">
						</div>
						<div class="form-group">
							<label> Password </label>
							<input type = "password" name = "password" class = "form-control" required placeholder="Password">
						</div>
						<div class="form-group">
							<label> Email </label>
							<input type = "text" name = "mail" class = "form-control" required placeholder="Email Id">
						</div>
						
					<button type="submit" class="btn btn-primary"> Register </button>
				</form>
			</div> 
		</div>
	</div>
</body>
</html>