
<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'logon');
$name = $_POST['user'];
$pass = $_POST['password'];
$email = $_POST['mail'];
$s="SELECT * FROM registration where name='$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
	echo "Username already taken";
}
else{
	$reg = "insert into registration(name, password, email) values ('$name' , '$pass' , '$email')";
	mysqli_query($con, $reg);
	echo "Registration successful";
}


?>