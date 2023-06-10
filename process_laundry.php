<?php
session_start();

// Get the submitted item and quantity
$item = $_POST['item'];
$quantity = $_POST['quantity'];

// Create an array for the new laundry item
$newItem = array(
    'item' => $item,
    'quantity' => $quantity
);

// Add the new item to the laundry list in the session
if (isset($_SESSION['laundry_items'])) {
    $_SESSION['laundry_items'][] = $newItem;
} else {
    $_SESSION['laundry_items'] = array($newItem);
}

// Redirect back to the laundry list page
header("Location: laundry_list.php");
exit();
?>
