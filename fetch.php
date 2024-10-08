<?php require_once 'core/dbConfig.php'; ?> <!-- Include database configuration -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch</title>
</head>
<body>

   <?php
    // Prepare the SQL statement to fetch a single record from the customers table
    $stmt = $pdo->prepare("SELECT * FROM customers WHERE customer_id = 2"); // Fetching record with id 1

    // Execute the statement
    $stmt->execute();

    // Fetch a single record as an associative array
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Display the result using print_r() wrapped in <pre> tags for better readability
    echo "<pre>";
    print_r($result);
    echo "</pre>";
    ?>
</body>
</html>