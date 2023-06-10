<?php
@include 'index.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laundry Items</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Laundry Items</h1>

    <?php
        // Array of laundry items
        $laundryItems = array(
            array("Shirt", 2),
            array("Pants", 3),
            array("Socks", 5),
            array("Towel", 1)
        );

        // Display the laundry items
        foreach ($laundryItems as $item) {
            $name = $item[0];
            $quantity = $item[1];

            echo "<div class='item'>";
            echo "<span class='name'>$name</span>";
            echo "<span class='quantity'>$quantity</span>";
            echo "</div>";
        }
    ?>
    <style>
        /* Add CSS styles here */
        h1 {
    text-align: center;
}

.item {
    display: flex;
    justify-content: space-between;
    padding: 10px;
    border-bottom: 1px solid #ccc;
}

.name {
    font-weight: bold;
}

.quantity {
    background-color: #ccc;
    padding: 5px;
    border-radius: 5px;
}

    </style>

</body>
</html>
