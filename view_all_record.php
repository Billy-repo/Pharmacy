<?php
include 'connect.php';
// if user do not log in they can not access this page
if(empty($_SESSION['username'])){
    header('location: login.php');
}


$query = "select* from medical_history";
$result = mysqli_query($conn, $query);

// for deleting a record

if(isset($_GET['del'])){
     $id = $_GET['del'];

    $sql = "delete from medical_history Where id = '$id'";
    $result = mysqli_query($conn, $sql);
    header('location: view_all_record.php');
}

//editing a record
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $sickness = $_POST['sickness'];
    $x_ray = $_POST['x_ray'];
    $prescription = $_POST['prescription'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['c_password'];
    $date = $_POST['date'];

    $sql = "update medical_history SET title ='$title', firstname =' $firstname', lastname = '$lastname',
            email = '$email', gender = '$gender', age = '$age', sickness = '$sickness', x_ray ='$x_ray', prescription = '$prescription',
            user ='$user',pass = '$pass', date = '$date',  Where id = '$id'";

    $result = mysqli_query($conn, $sql);
    header('location: view_all_record.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View All Patient Record</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form action="" class="content3" method="post">

<table align="center" border="1px" style="width: 1300px; line-height: 40px;">
<tr>
    <th colspan="15"><h2>Patients Record</h2></th>
</tr>
    <t>
        <th>ID</th>
        <th>Title</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Sickness</th>
        <th>X-Ray</th>
        <th>Medical Prescription</th>
        <th>Username</th>
        <th>Password</th>
        <th>Date Registered</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </t>

    <?php
    while($rows = mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
        <td><?=$rows['id']; ?></td>
        <td contenteditable="true"><?=$rows['title']; ?></td>
        <td contenteditable="true"><?=$rows['firstname']; ?></td>
        <td contenteditable="true"><?=$rows['lastname']; ?></td>
        <td contenteditable="true"><?=$rows['email']; ?></td>
        <td contenteditable="true"><?=$rows['gender']; ?></td>
        <td contenteditable="true"><?=$rows['age']; ?></td>
        <td contenteditable="true"><?=$rows['sickness']; ?></td>
        <td contenteditable="true"><?=$rows['x_ray']; ?></td>
        <td contenteditable="true"><?=$rows['prescription']; ?></td>
        <td contenteditable="true"><?=$rows['user']; ?></td>
        <td contenteditable="true"><?=$rows['pass']; ?></td>
        <td contenteditable="true"><?=$rows['date']; ?></td>
        <td><a class="btn btn-info" name="edit" href="edit.php?edit=<?=$rows['id']; ?>">Edit</a></td>
        <td><a href="view_all_record.php?del=<?= $rows['id'];?>" class="btn btn-danger" name="del">Delete</a></td>
    </tr>
    <?php
    }
    ?>
</table>
<p >
    <br>
    <a href="registration.php">Register</a><br>
    <a href="view_messages.php">View Messages</a><br>
    <a href="profile.php?logout='1'" style="color: red  ">Logout</a>
</p>
</form>
</body>
</html>
