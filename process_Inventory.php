<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the item and quantity values from the form
  $item = $_POST['item'];
  $quantity = $_POST['Supply'];

  // Append the new item and quantity to the inventory file
  $inventoryFile = 'inventory.txt';
  $file = fopen($inventoryFile, 'a');
  fwrite($file, $item . ',' . $Supply . PHP_EOL);
  fclose($file);
}

// Read the inventory file and display the inventory list
$inventory = file($inventoryFile, FILE_IGNORE_NEW_LINES);
foreach ($inventory as $item) {
  list($itemName, $itemSupply) = explode(',', $item);
  echo "<tr><td>$itemName</td><td>$itemSupply</td></tr>";
}
// Redirect back to the Inventory page
header("Location: Inventory.php");
exit();
?>
