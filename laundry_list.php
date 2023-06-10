<!DOCTYPE html>
<html>
<head>
    <title>Laundry List</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Laundry List</h1>

    <form action="process_laundry.php" method="post">
        <label for="item">Item:</label>
        <input type="text" id="item" name="item" required>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>

        <button type="submit">Add to List</button>
    </form>

    <?php
        // Retrieve laundry items from session
        session_start();
        $laundryItems = isset($_SESSION['laundry_items']) ? $_SESSION['laundry_items'] : array();

        // Display the laundry list
        if (count($laundryItems) > 0) {
            echo "<ul>";
            foreach ($laundryItems as $item) {
                echo "<li>{$item['quantity']} x {$item['item']}</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No items added to the list yet.</p>";
        }
    ?>
    <style>
        /* Add CSS styles here */
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
input[type="number"] {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
}

button {
    padding: 5px 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

ul {
    list-style-type: none;
    padding-left: 0;
}

li {
    margin-bottom: 5px;
}
        
    </style>

</body>
</html>
