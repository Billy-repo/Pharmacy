<?php
include 'connect.php';
// if user do not log in they can not access this page
if(empty($_SESSION['username'])) {
    header('location: login.php');
}


$query = "select* from admin";
$result = mysqli_query($conn, $query);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Admins</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form action="" class="content3" method="post">

    <table align="center" border="1px" style="width: 80%; line-height: 40px;">
        <tr>
            <th colspan="15"><h2>Admin Credentials</h2></th>
        </tr>
        <t>
            <th>ID</th>
            <th>Username</th>
            <th> Password</th>
        </t>

        <?php
        while($row2 = mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?=$row2['id']; ?></td>
                <td contenteditable="true"><?=$row2['user']; ?></td>
                <td contenteditable="true"><?=$row2['pass']; ?></td>
                <td><a href="super_admin.php?del=<?= $row2['id'];?>" class="btn btn-danger" name="del">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <p >
        <br>
        <a href="view_all_record.php">View All Record</a><br>
        <a href="profile.php?logout='1'" style="color: red  ">Logout</a>
    </p>
</form>
</body>
</html>
