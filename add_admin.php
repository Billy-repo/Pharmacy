
<?php
//include "connect.php";
//$username = "";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>login</title>
</head>
<body>
<div class="header1">
    <h2>Adding an Admin</h2>
</div>

<form action="" class="content1" method="post">
    <!--    displaying validation errors-->

    <?php include('errors.php'); ?>


    <div class="input-group">
        <label >Username</label>
        <input type="text"  name="username" style="width: 84%" value="<?=$username ?>" required>
    </div>

    <div class="input-group">
        <label >Password</label>
        <input type="password" name="password" style="width: 84%" required>
    </div>

    <div class="input-group">
        <label >Confirm Password</label>
        <input type="password" name="c_password" style="width: 84%" required>
    </div>

    <div class="input-group">
        <button type="submit" name="add_admin" class="btn">Add</button>
    </div>
    <p>
        <a href="index.php">Home Page</a> <br>
    </p>

</form>

</body>
</html>