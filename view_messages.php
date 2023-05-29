<?php
include 'connect.php';
// if user do not log in they can not access this page
if(empty($_SESSION['username'])) {
    header('location: login.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Messages</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form action="" class="content3" method="post">

    <table align="center" border="1px" style="width: 1300px; line-height: 40px;">
        <tr>
            <th colspan="15"><h2>Messages</h2></th>
        </tr>
        <t>
            <th>ID</th>
            <th>name</th>
            <th> Name</th>
            <th>Email</th>
            <th>Subject</th>
            <th>Message</th>
        </t>

        <?php
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <tr>
                <td><?=$row['id']; ?></td>
                <td contenteditable="true"><?=$row['name']; ?></td>
                <td contenteditable="true"><?=$row['email']; ?></td>
                <td contenteditable="true"><?=$row['subject']; ?></td>
                <td contenteditable="true"><?=$row['message']; ?></td>
                <td><a href="view_messages.php?mes=<?= $row['id'];?>" class="btn btn-danger" name="mes">Delete</a></td>
            </tr>
            <?php
        }
        ?>
    </table>
    <p >
        <br>
        <a href="registration.php">Register</a><br>
        <a href="view_all_record.php">View All Record</a><br>
        <a href="profile.php?logout='1'" style="color: red  ">Logout</a>
    </p>
</form>
</body>
</html>
