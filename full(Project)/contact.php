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
	<title>Contact V15</title>
	<meta charset="UTF-8">
	<meta name="author" content="Zahida Tayyab">
	<meta name="keyword" content="Give us a call,contact number,contact account,contact database,">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">
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
        <a class="active" href="contact.php">Contact</a>
        <a  href="about3.php">About</a>
        <a href="admin/login.php">Login</a>
        <a href="forgetpassword.php">Forget Password</a>
        <a  href="register.php">Register</a>

    </div>
</div>

<div class="container-contact100">
	<div class="contact100-form-title" style="background-image: url(images/hospital.jpg);" > </div>

	<div class="wrap-contact100">
		<div class="contact100-form-title" style="background-image: url(images/contact.jpg);">
				<span class="contact100-form-title-1">
					Contact Us
				</span>

			<span class="contact100-form-title-2">
					Feel free To Contact Us!
				</span>
		</div>

		<form class="contact100-form validate-form" name="contact" onsubmit="return validateForm()" method="post">
			<div class="wrap-input100 validate-input" data-validate="Name is required">
				<span class="label-input100">Full Name:</span>
				<input class="input100" type="text" name="name" placeholder="Enter full name">
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
				<span class="label-input100">Email:</span>
				<input class="input100" type="text" name="email" placeholder="Enter email addess">
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate="Phone is required">
				<span class="label-input100">Phone:</span>
				<input class="input100" type="text" name="phone" placeholder="Enter phone number">
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 validate-input" data-validate = "Message is required">
				<span class="label-input100">Message:</span>
				<textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
				<span class="focus-input100"></span>
			</div>

			<div class="container-contact100-form-btn">
				<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
				</button>
			</div>
		</form>
	</div>
</div>


<div id="dropDownSelect1"></div>
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
