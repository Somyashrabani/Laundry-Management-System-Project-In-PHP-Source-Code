<!DOCTYPE html>
<html>
<head>
  <title>Laundry Admin Logout</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Logout</h1>
    <p>Are you sure you want to logout?</p>
    <form action="process_logout.php" method="post">
      <input type="submit" value="Logout">
    </form>
  </div>
</body>
</html>
<style>
        /* Add CSS styles here */
        body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 400px;
  margin: 100px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  text-align: center;
}

h1 {
  margin-top: 0;
}

form {
  margin-top: 20px;
}

input[type="submit"] {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}
  </style>
  <?php
// Perform any necessary logout actions here

// Redirect to the login page or any other desired page
header("Location: login.php");
exit();
?>
