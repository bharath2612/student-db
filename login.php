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
			<div style="margin: 90px auto;"class = "col-md-6 login-left">
					<h2>Login</h2> 
					<form action="validation.php" method="post" autocomplete="off">
						<div class ="form-group">
							<label> Username </label>
							<input type = "text" name = "user" class = "form-control" required placeholder="Username">
						</div>
						<div class="form-group">
							<label> Password</label>
							<input  type = "password" name = "password" class = "form-control" required placeholder="Password">
						</div>
						<button type="submit" class="btn btn-primary"> Login </button>
					</form>
						<form action="register.php" method="post">
							<div style="margin-left: 110px; margin-top: -40px;"class ="form group">
							
								<label> Sign Up?     <td></td> </label>
								<button type="submit" class="btn btn-primary"> Register </button>
							</div>
						</form>
				</div> 
			</div>
		</div>
	</div>
</body>
</html>