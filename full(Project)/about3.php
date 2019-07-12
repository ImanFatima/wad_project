<?php
session_start();
$cookie_name = "about";
$cookie_value = "page";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
setcookie($cookie_name, "", time() - 3600);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <meta name="description" content="This page is used for reset the password">
    <meta name="Keywords" content="identification">
    <meta name="author" content="ImanFatima">
    <title> ABOUT </title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">



    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="css2/aboutstyle.css">
    <link rel="stylesheet" href="css2/headerfooter.css">
</head>
<body>

<div class="header">
     <img src="logo_transparent.png" class="header-left" height="150px" width="30%">

    <div class="header-right">
       <br><br><br>
        <a  href="Homepage/homepage.html">Home</a>
        <a href="contact.php">Contact</a>
        <a class="active" href="about3.php">About</a>
        <a href="admin/login.php">Login</a>
        <a href="forgetpassword.php">Forget Password</a>
        <a href="register.php">Register</a>

    </div>
</div>


<br><br>



<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 6</div>
        <img src="images/img1.png" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 6</div>
        <img src="images/img2.png" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 6</div>
        <img src="images/img3.png" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 6</div>
        <img src="images/img4.png" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">5 / 6</div>
        <img src="images/img5.png" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">6/ 6</div>
        <img src="images/img6.png" style="width:100%">
        <div class="text">Caption Three</div>
    </div>


</div>
<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>
<div class="col-6">
    <h1>About Us</h1>
    <p>Since Its opening, City Hospital.has been expanding Its services and equipment to meet the growing healthcare needs of the human community.<br>
        Objectives of City Hospital are to provide a tertiary level patient care and serve as referral hospital also to conduct teaching/ training of doctors and other health workers at various level in the field of medicine and surgery.<br>
        The establishment of the City Hospital, Lahore heralds a bright new era for the citizens of South Punjab, especially the residents of the Multan.

        Apart from providing medical facilities to the resident of Lahore and surrounding areas, the City Hospital will function as a National Reference Centre for providing specialized diagnostic and curative services to the patients referred by other hospitals/institution</p>

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

<script src="js/aboutjs.js"></script>
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

?>
</body>
</html>
