<?php require_once 'core/dbConfig.php'; ?> <!-- Include database configuration -->

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>

<?php

// Prepare an SQL statement to update a customer's membership status and total spent
$stmt = $pdo->prepare("
    UPDATE Customers 
    SET membership_status = :membership_status, total_spent = :total_spent 
    WHERE customer_id = :customer_id
");

// Bind parameters to the SQL query
$customer_id = 2; // Example customer_id of the record to update
$membership_status = "VIP"; // New membership status
$total_spent = 400.00; // New total spent

$stmt->bindParam(':customer_id', $customer_id);
$stmt->bindParam(':membership_status', $membership_status);
$stmt->bindParam(':total_spent', $total_spent);

// Execute the statement
if ($stmt->execute()) {
    echo "Customer record updated successfully!";
} else {
    echo "Failed to update customer record.";
}
?>


</body>
</html>
