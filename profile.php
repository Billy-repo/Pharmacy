
<?php
include 'connect.php';
//
//// if user do not log in they can not access this page
if(empty($_SESSION['username'])){
    header('location: login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>login</title>
</head>
<body>
<div class="header">
    <h2>Your Profile</h2>
</div>

<div class="content">
    <?php if(isset($_SESSION['success'])): ?>
<div class="success">
    <h3>

        <?php
             echo $_SESSION['success'];
             unset($_SESSION['success']);
         ?>

    </h3>
</div>
    <?php endif ?>

    <?php if(isset($_SESSION["username"])): ?>
        <?php
        $user = $_SESSION['username'];
        $sql = "SELECT* FROM medical_history WHERE user = '$user'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>
        <table align="center" border="1px" style="width: 680px; line-height: 30px;">
            <tr>
                <th colspan="2"><h3><strong>Welcome <?=$row['title']; echo " ";?><?= $row['user']; ?></strong></h3></th>
            </tr>
            <tr>
                <td>ID</td>
                <td><strong><?= $row['id']; ?></strong></td>
            </tr>

            <tr>
                <td>Title</td>
                <td><?= $row['title']; ?></strong></td>
            </tr>
            <tr>
                <td>First NameFirst Name</td>
                <td><strong><?= $row['firstname']; ?></strong></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><strong><?= $row['lastname']; ?></strong></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><strong><?= $row['email']; ?></strong></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><strong><?= $row['gender']; ?></strong></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><strong><?= $row['age']; ?></strong></td>
            </tr>
            <tr>
                <td>Sickness </td>
                <td><strong><?= $row['sickness']; ?></strong></td>
            </tr>
            <tr>
                <td>X-ray</td>
                <td><strong><?= $row['x_ray']; ?></strong></td>
            </tr>
            <tr>
                <td>Medical Prescription</td>
                <td><strong><?= $row['prescription']; ?></strong></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><strong><?= $row['user']; ?></strong></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><strong><?= $row['pass']; ?></strong></td>
            </tr>
            <tr>
                <td>Date registered</td>
                <td><strong><?= $row['date']; ?></strong></td>
            </tr>

    <?php endif ?>
        </table>
    <p><a href="profile.php?logout='1'" style="color: red  ">Logout</a></p>
</div>


</body>
</html>