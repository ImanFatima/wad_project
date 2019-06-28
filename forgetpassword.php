<?php
session_start();
$cookie_name = "forgetpw";
$cookie_value = "page";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
setcookie("user", "", time() - 3600);
?>
<!DOCTYPE html>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="This page is used for reset the password">
    <meta name="Keywords" content="identification">
    <meta name="author" content="ImanFatima">
    <title> Forgot Password Form</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">



    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">







    <!-- CSS code from Bootply.com editor -->
    <link rel="stylesheet" href="css2/aboutstyle.css">
    <link rel="stylesheet" href="css2/forgetstyle.css">
    <link rel="stylesheet" href="css2/animate.css">
    <link rel="stylesheet" href="css2/headerfooter.css">
</head>

<!-- HTML code from Bootply.com editor -->

<body >
<div class="header">
    <img src="logo_transparent.png" class="header-left" height="150px" width="30%">

    <div class="header-right">
        <br><br><br>
        <a href="Homepage/homepage.html">Home</a>
        <a href="#contact">Contact</a>
        <a href="about3.php">About</a>
        <a href="#contact">Login</a>
        <a class="active" href="forgetpassword.php">Forget Password</a>
        <a href="register.php">Register</a>

    </div>
</div>


<br>
<br>

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                            <h2 class="text-center animated  heartBeat infinite " >Forgot Password?</h2>
                            <p>You can reset your password here.</p>
                            <div class="panel-body">

                                <form class="form">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>

                                                <input id="emailInput" placeholder="email address or phone number" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required pattern="[a-zA-Z0-9.!#$%&’*=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*" >

                                            </div>
                                           </div>
                                        <div class="form-group">
                                            <input class="btn btn-lg btn-primary btn-block animated delay-5s flash " value="Send My Password" type="submit">
                                        </div>
                                    </fieldset>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>



<!--<div class="footer">
    <h3><b>City Health Care Services (Pvt) Ltd.</b> <br>
        Peer Khursheed Colony Road,<br>
Lahore.<br>
Phone: 042-6510 367<br>
www.cityhospital.com</h3>
</div>-->

<section id="footer">
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            </hr>
        </div>

    </div>
</section>
<!-- ./Footer -->

<div class="seven">
    <h><b>City Health Care Services (Pvt) Ltd.</b> <br>
        Peer Khursheed Colony Road,<br>
        Lahore.<br>
        Phone: 042-6510 367</h><br>
    www.cityhospital.com
</div>
<div class="eight">
</div>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

?>


</body>
</html>