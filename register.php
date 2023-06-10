<?php
@include 'index.php';
session_start();
$db= mysqli_connect('localhost', 'root','',' customer_db');
if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $pass=md5($_POST['password']);
    $cpass=md5($_POST['cpassword']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result)>0){
        $error[]= 'user already exist!';
    }else{
    if($pass!=$cpass){
        $error[]= 'password not matched!';
    }else{
        $insert="INSERT INTO user_form(Name,email,Password) VALUES('$name,$email,$pass')";
        mysqli_query($conn,$insert);
        header('location:login_process.php');
    }

    }
};
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laundry Management - Admin Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="register-container">
        <h1>Admin Registration</h1>
        <form action="register_process.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="Email" name="username" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <input type="submit" value="Register">
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>

