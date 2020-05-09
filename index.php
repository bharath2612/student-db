<!DOCTYPE html>
<html> 
<head>
	<title> user login and registration </title>
    <link rel="stylesheet" type="text/css" href="styler.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class = "container">
   	<div class = "login-box">
		<div class = "row">
			<div style="margin: 100px auto;"class = "col-md-6 login-left">
					<h2>LOGIN</h2> 
					<form action="validation.php" method="post">
						<div class ="form-group">
							<label> USERNAME </label>
							<input type = "text" name = "user" class = "form-control" required>
						</div> 
						<div class="form-group">
							<label> PASSWORD</label>
							<input  type = "password" name = "password" class = "form-control" required>
						</div>
						<button type="submit" class="btn btn-primary"> LOGIN </button>
					</form>
						<form action="register.php" method="post">
							<div style="margin-left: 110px; margin-top: -40px;"class ="form group">
								<label> SIGN UP? </label>
								<button type="submit" class="btn btn-primary"> REGISTER </button>
							</div>
						</form>
				</div> 
			</div>
		</div>
	</div>
</body>
</html>
	 