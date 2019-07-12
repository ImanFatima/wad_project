<?php
session_start();
$cookie_name = "contact";
$cookie_value = "page";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
setcookie($cookie_name, "", time() - 3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="author" content="Zahida Tayyab">
	<meta name="keyword" content="login form,login page,login gmail,login activity,signup,add details,profile">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="admin/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="admin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="admin/css/util.css">
	<link rel="stylesheet" type="text/css" href="admin/css/main.css">
    <link rel="stylesheet" href="css2/aboutstyle.css">
    <link rel="stylesheet" href="css2/registerstyle.css">
    <link rel="stylesheet" href="css2/headerfooter.css">
</head>
<body>

<div class="header">
    <img src="logo_transparent.png" class="header-left" height="150px" width="30%">

    <div class="header-right">
        <br><br><br>
        <a href="Homepage/homepage.html">Home</a>
        <a  href="contact.php">Contact</a>
        <a  href="about3.php">About</a>
        <a class="active" href="login.php">Login</a>
        <a href="forgetpassword.php">Forget Password</a>
        <a  href="register.php">Register</a>

    </div>
</div>
<div class="limiter">
	<div class="contact100-form-title" style="background-image: url('../admin/images/hospital.jpg');">
		<div class="wrap-login100 p-t-190 p-b-30">
			<form class="login100-form validate-form" name="login" onsubmit="return validateForm()" method="post">
					<span class="login100-form-title p-t-20 p-b-45">
						Login
					</span>

				<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
					<input class="input100" type="text" name="username" placeholder="Username">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
				</div>

				<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
					<input class="input100" type="password" name="pass" placeholder="Password">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
				</div>

				<div class="container-login100-form-btn p-t-10">
					<button class="login100-form-btn">
						Login
					</button>
				</div>

				<div class="text-center w-full p-t-25 p-b-230">
					<a href="#" class="txt1">
						Forgot Username / Password?
					</a>
					<br>
					<a class="txt1" href="#">
						Create new account
						<i class="fa fa-long-arrow-right"></i>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="seven">
    <h><b>City Health Care Services (Pvt) Ltd.</b> <br>
        Peer Khursheed Colony Road,<br>
        Lahore.<br>
        Phone: 042-6510 367</h><br>
    www.cityhospital.com
</div>
<div class="eight">
</div>

<script src="js/main.js"></script>
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

?>
</body>

</html>