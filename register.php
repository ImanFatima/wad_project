<?php
session_start();
$cookie_name = "register";
$cookie_value = "page";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
setcookie("user", "", time() - 3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="This page is used for registration">
    <meta name="Keywords" content="booking,enrollment">
     <meta name="author" content="ImanFatima">
    <title>Registration</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css2/aboutstyle.css">
   <link rel="stylesheet" href="css2/registerstyle.css">
    <link rel="stylesheet" href="css2/headerfooter.css">
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>

<div class="header">
    <img src="logo_transparent.png" class="header-left" height="150px" width="30%">

    <div class="header-right">
        <br><br><br>
        <a href="Homepage/homepage.html">Home</a>
        <a href="#contact">Contact</a>
        <a href="about3.php">About</a>
        <a href="#contact">Login</a>
        <a href="forgetpassword.php">Forget Password</a>
        <a class="active" href="register.php">Register</a>

    </div>
</div>



<div class="blur">


<form class="form-horizontal" action='' method="POST">
    <fieldset>
        <div id="legend">
            <h1 class="h1style">Register</h1>
            <br> <br>
        </div>
        <div class="control-group">
            <!-- Username -->
            <label class="control-label"  for="username">Username</label>
            <div class="controls">
                <input type="text" id="username" name="username" placeholder="" class="input-xlarge" required pattern="[a-zA-Z0-9.?_]+\.?[a-zA-Z0-9]+(?:\.[a-zA-Z0-9-]+)*">
                <p class="help-block">Username can contain any letters or numbers, without spaces</p>
            </div>
        </div>

        <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
                <input type="text" id="email" name="email" placeholder="e.g:03314567890 or he12@gmail.com" class="input-xlarge" required pattern="[a-zA-Z0-9.!#$%&’*=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*">
                <p class="help-block">Please provide your E-mail or phone no.</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Password</label>
            <div class="controls">
                <input type="password" id="password" name="password" placeholder="e.g:Whatever12" class="input-xlarge" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                <p class="help-block">Password should be at least 8 characters</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Password -->
            <label class="control-label"  for="password_confirm">Password (Confirm)</label>
            <div class="controls">
                <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="retype password" required>
                <p class="help-block">Please confirm password</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Button -->
            <div class="controls">
                <button class="btn btn-success">Register</button>
            </div>
        </div>
    </fieldset>
</form>


    <div class="seven">
        <h><b>City Health Care Services (Pvt) Ltd.</b> <br>
            Peer Khursheed Colony Road,<br>
            Lahore.<br>
            Phone: 042-6510 367</h><br>
        www.cityhospital.com
    </div>
    <div class="eight">
    </div>


<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <?php
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    ?>
</body>
</html>