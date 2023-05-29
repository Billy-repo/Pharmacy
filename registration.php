<?php


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Registration Form</title>
</head>
<body>
<div class="header">
    <h2>Register Patient</h2>
</div>

<form action="" method="post">
<!--    displaying validation errors-->

    <?php include('errors.php'); ?>
    <div class="input-group">
        <input type="text"  name="title" value="" placeholder="Title" required>

        <input type="text"  name="firstname" value="" placeholder="First Name" required>

    </div>


    <div class="input-group">

        <input type="text"  name="lastname" value="" placeholder="Last Name" required>

        <input type="text" name="email"  value="" placeholder="Email" required>

    </div>

    <div class="input-group">

        <input type="text"  name="gender" value="" placeholder="Gender" required>

        <input type="text" name="age"  value="" placeholder="Age" required>

    </div>


    <div class="input-group">

        <input type="text" name="sickness" placeholder="current sickness" required>

        <input type="text" name="x_ray" placeholder="X-ray" required>
    </div>

    <div class="input-group">

        <input type="text" style="width: 84%" name="prescription" placeholder="Medical Prescription" required>

        <!--        <input type="date" name="date" placeholder="Date admitted" required>-->
    </div>

    <h2 class="h">Set Patient Username and Password</h2>

    <div class="input-group">

        <label>Username</label>  <input type="text" name="username" value=""  required>
    </div>

    <div class="input-group">
        <label>Password</label>   <input type="password" name="password"  required>
    </div>

    <div class="input-group">

        <label>Confirm Password</label>  <input type="password" name="c_password"  required>
    </div>

    <div class="input-group">
        <label>date</label> <input type="date" name="date" value=""  required>
    </div>

    <div class="input-group">
        <button type="submit" name="submit" class="btn">Submit</button>
<!--        <button type="submit" name="update" class="btn" style="visibility: visible">Update</button>-->

    </div>

<!--    <p>-->
<!--        already a member? <a href="login.php">Sign in</a>-->
<!--    </p>-->
    <p align="right"><a href="view_all_record.php">View all Patient Record</a></p>
    <p align="right"><a href="profile.php?logout='1'" style="color: red  ">Logout</a></p>
</form>

</body>
</html>