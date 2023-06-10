<!DOCTYPE html>
<html>
<head>
  <title>Laundry Inventory</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Laundry Inventory</h1>

  <form action="process.php" method="post">
    <label for="item">Item:</label>
    <input type="text" id="item" name="item" required>

    <label for="Supply"> Supply:</label>
    <input type="Baking soda" id="Supply" name="Supply" required>
    <input type="submit" value="Add to Inventory">
  </form>
  
  <h2>Inventory List</h2>
  <table>
    <tr>
      <th>Item</th>
      <th>Supply</th>
    </tr>
<?php
@include'display Inventory.php';
?>
  </table>
</body>
</html>
<style>
        /* Add CSS styles here */
        body {
  font-family: Arial, sans-serif;
  padding: 20px;
}

h1 {
  text-align: center;
}

form {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
input[type="submit"] {
  padding: 5px;
  margin-bottom: 10px;
  width: 200px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}
    </style>