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
				<div style="margin: -60px auto;" class = "col-md-6 login-right">
				<h2> REGISTER HERE </h2> 
				<form action="registration.php" method="post">
						<div class ="form-group">
							<label> USERNAME </label>
							<input type = "text" name = "user" class = "form-control" required>
						</div>
						<div class="form-group">
							<label> EMAIL </label>
							<input type = "text" name = "mail" class = "form-control" required>
						</div>
						<button type="submit" class="btn btn-primary"> SEND OTP </button>
						<div class ="form-group">
							<input type = "text" name = "user" class = "form-control" required>
						</div>
						<div class="form-group">
							<label> PASSWORD </label>
							<input type = "password" name = "password" class = "form-control" required>
						</div>
					<button type="submit" class="btn btn-primary"> REGISTER </button>
				</form>
			</div> 
		</div>
	</div>
</body>
</html>