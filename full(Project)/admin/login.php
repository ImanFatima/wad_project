<?php
session_start();
require_once 'db_connection.php';
$error_msg = '';
if(isset($_POST['login'])){
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];
    $sel_user = "select * from admin where user_email='$email' AND user_pass='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg = 'Password or Email is wrong, try again';
    }
    else{
        $_SESSION['user_email'] = $email;
        if(!empty($_POST['remember'])) {
            setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('user_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));

        } else {
            setcookie('user_email','' );
            setcookie('user_pass', '');
        }
        header('location:index.php?logged_in=You have successfully logged in!');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="author" content="Zahida Tayyab">
    <meta name="keyword" content="login form,login page,login gmail,login activity,signup,add details,profile">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="../css2/aboutstyle.css">
    <link rel="stylesheet" href="../css2/registerstyle.css">
    <link rel="stylesheet" href="../css2/headerfooter.css">
</head>
<body class="text-center">

<div class="header">
    <img src="../logo_transparent.png" class="header-left" height="150px" width="30%">

    <div class="header-right">
        <br><br><br>
        <a href="../Homepage/homepage.html">Home</a>
        <a  href="../contact.php">Contact</a>
        <a  href="../about3.php">About</a>
        <a class="active" href="login.php">Login</a>
        <a href="../forgetpassword.php">Forget Password</a>
        <a  href="../register.php">Register</a>

    </div>
</div>

<div class="limiter">
    <div class="contact100-form-title" style="background-image: url('images/hospital.jpg');">
        <div class="wrap-login100 p-t-190 p-b-30">
            <form class="login100-form validate-form" action="login.php" method="post">
                <h2 class="text-danger"><?php echo @$_GET['not_admin']?></h2>
                <h2 class="text-primary"><?php echo @$_GET['logged_out']?></h2>
					<span class="login100-form-title p-t-20 p-b-45">
						Login
					</span>
                <div><?php echo $error_msg;?></div>
                <div class="wrap-input100 validate-input m-b-10" data-validate = "User Email is required">
                    <input class="input100"  type="text" id="user_email" value="<?php echo @$_COOKIE['user_email']?>" name="user_email" placeholder="User Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                    <input class="input100" type="password" id="user_pass" name="user_pass"
                           value="<?php echo @$_COOKIE['user_pass']?>" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
                </div>

                <div class="container-login100-form-btn p-t-10">
                    <button class="login100-form-btn"  type="submit" name="login">
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
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>