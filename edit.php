<?php
include "connect.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Edit Patient</title>
</head>
<body>
<div class="header">
    <h2>Update Patient</h2>
</div>

<form action="" method="post">
    <!--    displaying validation errors-->

    <?php include('errors.php'); ?>
    <div class="input-group">
        <input type="text"  name="id" placeholder="id" value="<?=$id; ?>">
        <input type="text"  name="title"  placeholder="Title" value="<?=$title; ?>">


    </div>


    <div class="input-group">
        <input type="text"  name="firstname"  placeholder="First Name" value="<?=$firstname; ?>">

        <input type="text"  name="lastname"  placeholder="Last Name" value="<?=$lastname; ?>">


    </div>

    <div class="input-group">
        <input type="email" name="email"  placeholder="Email" value="<?=$email; ?>" >

        <input type="text"  name="gender"  placeholder="Gender" value="<?=$gender; ?>" >


    </div>


    <div class="input-group">
        <input type="number" name="age"   placeholder="Age" value="<?=$age; ?>" >

        <input type="text" name="x_ray" placeholder="X-ray" value="<?=$x_ray; ?>" >
    </div>

    <div class="input-group">
        <input type="text" name="sickness" placeholder="current sickness" value="<?=$sickness; ?>" >

        <input type="text" name="prescription" placeholder="Medical Prescription" value="<?=$prescription; ?>" >

        <!--        <input type="date" name="date" placeholder="Date admitted" required>-->
    </div>

    <h2 class="h">Update Patient Username</h2>

    <div class="input-group">

        <label>Username</label>  <input type="text" name="username"   value="<?=$username; ?>"  >
    </div>


    <div class="input-group">
        <label>date</label> <input type="date" name="date"  value="<?=$date; ?>" >
    </div>

    <div class="input-group">
        <button type="submit" name="update" class="btn" style="visibility: visible">Update</button>

    </div>

    <!--    <p>-->
    <!--        already a member? <a href="login.php">Sign in</a>-->
    <!--    </p>-->
    <p align="right"><a href="view_all_record.php">View all Patient Record</a></p>
    <p align="right"><a href="registration.php">Register</a></p>
    <p align="right"><a href="profile.php?logout='1'" style="color: red  ">Logout</a></p>
</form>

</body>
</html>