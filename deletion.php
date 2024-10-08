<?php require_once 'core/dbConfig.php'; ?> <!-- Include database configuration -->

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETION</title>
</head>
<body>

<?php

$customer_id = 8; // Example customer_id of the record to delete

try {
    // Start a transaction
    $pdo->beginTransaction();

    // First, delete related records in the Purchases table
    $stmt = $pdo->prepare("DELETE FROM Purchases WHERE customer_id = :customer_id");
    $stmt->bindParam(':customer_id', $customer_id);
    $stmt->execute();

    // Then, delete related records in the Rentals table
    $stmt = $pdo->prepare("DELETE FROM Rentals WHERE customer_id = :customer_id");
    $stmt->bindParam(':customer_id', $customer_id);
    $stmt->execute();

    // Now, delete the customer record
    $stmt = $pdo->prepare("DELETE FROM Customers WHERE customer_id = :customer_id");
    $stmt->bindParam(':customer_id', $customer_id);
    $stmt->execute();

    // Commit the transaction
    $pdo->commit();

    echo "Customer record and all related purchases and rentals deleted successfully!";
} catch (Exception $e) {
    // Roll back the transaction if something fails
    $pdo->rollBack();
    echo "Failed to delete customer record: " . $e->getMessage();
}
?>


</body>
</html>
