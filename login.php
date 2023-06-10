<?php
$db= mysqli_connect('localhost', 'root','',' customer_db');
if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn, $_POST['name']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $pass=md5($_POST['password']);
    $cpass=md5($_POST['cpassword']);

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass'";
    $result = mysqli_query($conn, $select);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_array($result);
       $_SESSION['admin_name']= $row['name'];
       header('location: login_process.php');
    }
};
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laundry Management - Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-container">
        <h1>Admin Login</h1>
        <form action="login_process.php" method="POST">
            <input type="Email" name="username" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
</body>
</html>
