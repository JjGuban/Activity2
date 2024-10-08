<?php require_once 'core/dbConfig.php'; ?> <!-- Include database configuration -->

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FETCH_ALL</title>
</head>
<body>

    <?php

    // Prepare the SQL statement to fetch all records from the customers table
    $stmt = $pdo->prepare("SELECT * FROM customers");

    // Execute the statement
    $stmt->execute();

    // Fetch all records as an associative array
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Display the results using print_r() wrapped in <pre> tags for better readability
    echo "<pre>";
    print_r($results);
    echo "</pre>";
    ?>

</body>
</html>
