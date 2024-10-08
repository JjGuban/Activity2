<?php require_once 'core/dbConfig.php'; ?> <!-- Include database configuration -->

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTION</title>
</head>
<body>

    <?php
    // Prepare an SQL statement to insert a new customer record into the Customers table
    $stmt = $pdo->prepare("
        INSERT INTO Customers (first_name, last_name, visit_date, membership_status, total_spent) 
        VALUES (:first_name, :last_name, :visit_date, :membership_status, :total_spent)
    ");

    // Bind parameters to the SQL query
    $first_name = "Alice"; // Example first name
    $last_name = "Johnson"; // Example last name
    $visit_date = "2023-10-08"; // Example visit date
    $membership_status = "Regular"; // Example membership status
    $total_spent = 75.50; // Example total spent

    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':visit_date', $visit_date);
    $stmt->bindParam(':membership_status', $membership_status);
    $stmt->bindParam(':total_spent', $total_spent);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New customer record created successfully!";
    } else {
        echo "Failed to insert customer record.";
    }
    ?>
    
</body>
</html>