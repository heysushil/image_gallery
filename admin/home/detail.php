<?php
// include connection page
include('database.php');
session_start();
// login section
if(isset($_POST['login'])){
	$email = $_POST['email']; 
	$password = $_POST['password'];

	$data = mysqli_query($con, "SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
	$row = mysqli_fetch_assoc($data);
	// echo "<pre>";print_r($row);exit();
	if($row){
		$_SESSION['name'] = $row['name'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['password'] = $row['password'];
		header('Location:index.php?message=login-successfully');
	}else{
		header('Location:login.php?message=try-again');
	}
}else{
	header('Location:login.php?message=wrong-try');
}

// logout section
if($_GET['logout'] == 'yes'){
	session_destroy();
	header('Location:login.php?message=user-logout-successfully');
}

?>

