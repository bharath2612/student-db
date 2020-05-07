<!DOCTYPE html>
<html> 
<head>
	<title> user login and registration </title>
    <link rel="stylesheet" type="text/css" href="loginstyler.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
		</script>
</head>
<body>
<div class = "container">
   	<div class = "login-box">
		<div class = "row">
			<div style="margin: 90px auto;" class = "col-md-6 login-left">
					<h1>Login</h1> 
					<form action="validation.php" method="post" autocomplete="off">
						<div class ="form-group">
							
							<input type = "text" name = "user" class = "form-control" >
							<span data-placeholder="Username"></span>
						</div>
						<div class="form-group">
							
							<input  type = "password" name = "password" class = "form-control" >
							<span data-placeholder="Password"></span>
						</div>
						<button type="submit" class="btn btn-primary" onclick="validation.php"> Login </button>
					</form>
						<form action="register.php" method="post" autocomplete="off">
							<div style="margin-left: 110px; margin-top: -40px;"class ="form group">
							
								<label> Sign Up?     <td></td> </label>
								<button type="submit" class="btn btn-primary" onclick="register.php"> Register </button>
							</div>
						</form>
							<script type="text/javascript">
								$(".form-group input").on("focus",function(){
									$(this).addClass("focus");
								});


								$(".form-group input").on("blur",function(){
									if($(this).val()=='')
									$(this).removeClass("focus");
								});
							</script>
				</div> 
			</div>
		</div>
	</div>
</body>
</html>
