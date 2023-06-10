<?php
@include 'index.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laundry Categories</title>
    <style>
        /* Add CSS styles here */
        .category {
            padding: 10px;
            background-color: #f0f0f0;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Laundry Categories</h1>

    <?php
    // Array of laundry categories
    $categories = [
        'Shirts',
        'Pants',
        'Underwear',
        'Socks',
        'Towels',
        'Bedding',
        'Delicates',
        'Outerwear',
        'Specialty Items'
    ];

    // Display each category
    foreach ($categories as $category) {
        echo "<div class='category'>$category</div>";
    }
    ?>
</body>
</html>
