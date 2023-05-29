<?php
if (!session_id()) session_start();

$host = "localhost";
$s_username = "root";
$s_password = "";
$dbname = "patient";



$conn =  new mysqli($host, $s_username, $s_password, $dbname);

$id = 0;
$title = "";
$firstname = "";
$lastname = "";
$email = "";
$gender = "";
$age = "";
$sickness = "";
$x_ray = "";
$prescription = "";
$username = "";
$email = "";
$date = "";
$errors = array();

//if the register button is clicked
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



    if(empty($title)){
        array_push($errors, "title is required !!");
    }
    if(empty($firstname)){
        array_push($errors, "first name is required !!");
    }
    if(empty($lastname)){
        array_push($errors, "last name is required !!");
    }
    if(empty($email)){
        array_push($errors, "email is required !!");
    }
    if(empty($gender)){
        array_push($errors, "gender is required !!");
    }
    if(empty($age)){
        array_push($errors, "age is required !!");
    }
    if(empty($sickness)){
        array_push($errors, "fill up this field !!");
    }
    if(empty($x_ray)){
        array_push($errors, "fill up this field !!");
    }
    if(empty($prescription)){
        array_push($errors, "fill up this field!!");
    }
    if(empty($username)){
        array_push($errors, "username is required !!");
    }
    if(empty($password)){
        array_push($errors, "password is required !!");
    }
    if(empty($confirm_password)){
        array_push($errors, "fill up this field !!");
    }
    if(empty($date)){
        array_push($errors, "date is required !!");
    }

    if($password !=$confirm_password){
        array_push($errors, "THE TWO PASSWORD DOES NOT MATCH...");

    }





    //if no error save patient to database\
    // registration form
    if(count($errors) == 0) {

        $sql = "select* from medical_history WHERE user = '$username'";
        $result = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_assoc($result);
        $result_check =  mysqli_num_rows($result);
        if($result_check > 0){
            array_push($errors, "USERNAME EXIST.. PLEASE TRY ANOTHER USERNAME");
        }else {
      //  $password = md5($password); // encrypting password
        $sql = "INSERT INTO medical_history (title, firstname,lastname, email, gender, age, sickness, x_ray, prescription, user, pass, date)
           VALUES ('$title','$firstname','$lastname','$email','$gender','$age','$sickness','$x_ray','$prescription','$username','$password','$date')";
        mysqli_query($conn, $sql);
        echo '<script>alert("Patient Successfully Added... go to login page").defaultChecked</script>';
            header('location: profile.php');
    }
    }
}


//log user in from log in page
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    //ensuring that form field are filled up

    if (empty($user)) {
        array_push($errors, "username required!!");

    }
    if (empty($pass)) {
        array_push($errors, "Password required!!");
    }

    if(count($errors) == 0) {
      //  $pass = md5($pass);// encripting password before saving in database(security

        $query = "SELECT * FROM medical_history WHERE user='$user' AND pass='$pass' ";
        $sql = "SELECT * FROM admin WHERE user='$user' AND pass='$pass' ";
        $sqll = "SELECT * FROM super_admin WHERE username='$user' AND password='$pass' ";

        $result = mysqli_query($conn, $query);
        $result2 = mysqli_query($conn, $sql);
        $result3 = mysqli_query($conn, $sqll);
        $result_check =  mysqli_num_rows($result);
        $result_check2 =  mysqli_num_rows($result2);
        $result_check3 =  mysqli_num_rows($result3);

        //Admin login code
        if($result_check2 == 1){
            //log in user
            $_SESSION['username'] = "$user";
              $_SESSION['login_session'] = true;
             $_SESSION['success'] = "YOU ARE LOGGED IN";
            header("Location: view_all_record.php"); // redirect to home page

            // the code below brings up a dublicate error

//        }else{
//            array_push($errors, "Incorrect username / password");
        }

        //patients login code
      //  var_dump($result_check);
        if ($result_check == 1) {
            //log in user
            $_SESSION['username'] = "$user";
            $_SESSION['login_session'] = true;
            $_SESSION['success'] = "YOU ARE LOGGED IN";
            header("Location: profile.php"); // redirect to home page
        } else {
            array_push($errors, "Incorrect username / password");
        }

        if ($result_check3 == 1) {
            //log in user
            $_SESSION['username'] = "$user";
            $_SESSION['login_session'] = true;
            $_SESSION['success'] = "YOU ARE LOGGED IN";
            header("Location: super_admin.php"); // redirect to home page
        } else {
            array_push($errors, "Incorrect username / password");
        }
    }

}

//updating
if(isset($_POST['update'])){
    $id = $_POST['id'];
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
    $date = $_POST['date'];

    $sql = "UPDATE medical_history SET title = '$title', firstname ='$firstname', lastname ='$lastname', email = '$email',
           gender = '$gender', age = '$age', sickness = '$sickness', x_ray = '$x_ray', prescription = '$prescription', user = '$username',
             date = '$date' WHERE id= '$id'";


    mysqli_query($conn, $sql);
    // $_SESSION['message'] = "updated..";
    header('location: view_all_record.php');
}



if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $sql = "SELECT * FROM medical_history WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    //$result = mysqli_query($conn, "SELECT * FROM employees WHERE id=$id");
    //  if(count($result) == 1){
    $row = mysqli_fetch_array($result);
    $title = $row['title'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $gender = $row['gender'];
    $age = $row['age'];
    $sickness = $row['sickness'];
    $x_ray = $row['x_ray'];
    $prescription = $row['prescription'];
    $username = $row['user'];
    $date = $row['date'];
    $id = $row['id'];
    // }

}

// delete for view messages
$query = "select* from contact";
$result = mysqli_query($conn, $query);

// delete for contact
if(isset($_GET['mes'])){
    $id = $_GET['mes'];

    $sql = "delete from contact Where id = '$id'";
    $result = mysqli_query($conn, $sql);
    header('location: view_messages.php');
}

// delete for admin record
if(isset($_GET['del'])){
    $id = $_GET['del'];

    $sql = "delete from admin Where id = '$id'";
    $result = mysqli_query($conn, $sql);
    header('location: super_admin.php');
}

//logout
if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

//adding admin
if(isset($_POST['add_admin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['c_password'];


    if(empty($username)){
        array_push($errors, "username is required !!");
    }
    if(empty($password)){
        array_push($errors, "password is required !!");
    }
    if(empty($confirm_password)) {
        array_push($errors, "fill up this field !!");
    }

    if($password !=$confirm_password){
        array_push($errors, "THE TWO PASSWORD DO NOT MATCH");

    }


    // adding an admin
    if(count($errors) == 0) {

        $sql = "select* from admin WHERE user = '$username'";
        $result = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_assoc($result);
        $result_check =  mysqli_num_rows($result);
        if($result_check > 0){
            array_push($errors, "USERNAME EXIST.. PLEASE TRY ANOTHER USERNAME");
        }else {
            //  $password = md5($password); // encrypting password
            $sql = "INSERT INTO admin (user, pass)
           VALUES ('$username','$password')";
            mysqli_query($conn, $sql);

            header('location: super_admin.php');
        }
    }

}
