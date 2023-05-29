<?php
include "connect.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact (name,email, subject, message)
           VALUES ('$name','$email','$subject','$message')";
    mysqli_query($conn, $sql);
    echo '<script>alert("Message sent...").defaultChecked</script>';
    header('location: index.php');


//    $mailTo = "kingsleyuchezuba@gmail.com";
//    $headers = "From: ".$mailFrom;
//    $txt = "You have recieve an email from".$name.".\n\n".$message;
//
//    mail($mailTo, $subject, $txt, $headers);
//    header("Location: index.php?mailsent");

}