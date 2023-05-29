<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>king development</title>
    <link rel="stylesheet" href="style.css">

    <!--    <link rel="stylesheet" href="css/bootstrap.css">-->
    <link rel="stylesheet" href="style.css">
    <!--    <link rel="stylesheet" href="css/dataTables.bootstrap.css">-->
    <script type="text/javascript" src="js/jQuery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>welcome</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark " style="font-family: Verdana; font-size: 13px;"  >

    <a class="navbar-brand" href="#">
        <img src="images/kc3.png" alt="Logo" style="width:80px;">
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#contact" tabindex="-1" >Contact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <button class="btn btn-secondary"><a href="login.php">Login</a></button>
        </form>
    </div>
</nav>

<img src="images/p1.jpg" alt="Logo" style="width:1355px; height: 600px">


<br /><br>


<div id="about-div">
    <h2 align="center" id="about">About</h2>
    <div class="about-div1">
        <p>King Pharmacy</p>

        Not simply one more online pharmacy. Our all-around supplied available and inviting pharmacy and treatment rooms are based in Windhoek.

        King Pharmacy has been putting forth pharmacy administrations to our clients for more than 100 years. We know the pharmacy and wellbeing
        and magnificence industry back to front, continually guaranteeing we offer the most breakthrough items and medications.

        We bring our customers the best quality administration and give the nearby network and neighboring wards a brilliant, understanding-centered
        administration.

        <p>
            Thank you for visiting my website. You can signup to download some of my project
            and please free to contact me. my details will be in the contact page below.
        </p>
    </div>
</div>



<table width="960" border="0" cellspacing="10" cellpadding="0" align="center">
    <tr align="justify">
        <td valign="top" width="220px">
            <a href="#"><p><img src="images/p1.jpg" class="animated tada"  alt="Logo" style="width:200px; height: 100px"></p></a>
        </td>
        <td valign="top">
            <a href="#"><img src="images/p2.jpg" class="animated bounce" alt="Logo" style="width:200px; height: 100px"></a>
        </td>
        <td valign="top">
            <a href="#"><img src="images/p3.jpg" alt="Logo" class="animated bounceInDown" style="width:200px; height: 100px"></a>
        <td valign="top">
            <a href="#"><img src="images/p4.jpg" alt="Logo" class="animated fadeInUp" style="width:200px; height: 100px"></a>
        </td>
    </tr>
    <tr><td colspan="4" style="border-bottom:1px solid #CCCCCC;"></td></tr>
</table>

<!-- The Contact Section -->
<div class="contact-container">
    <h2 class="mb-4" id="contact">CONTACT</h2>
    <i class="" style="width:30px"></i> Windhoek, Namibia<br>
    <i class="" style="width:30px"></i> Phone: +264 817101114<br>
    <i class="" style="width:30px"></i> cell: +264 812344165<br>

    <form action="contact.php"  method="post">
        <p><input type="text" name="name" placeholder="Full name"></p>
        <p><input type="email" name="mail" placeholder="Your e-mail"></p>
        <p><input type="text" name="subject" placeholder="Subject"></p>
        <textarea name="message"placeholder="Type Message"></textarea><br>
        <p><button type="submit" class="btn btn-primary" name="submit">SEND MAIL</button></p>
    </form>
</div>


<!-- End Page Content -->


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
</footer>



</body>
</html>