<?php require_once 'core/dbConfig.php'; ?> <!-- Include database configuration -->

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE</title>
</head>
<body>

<?php

// Prepare the SQL statement to fetch all customer records
$stmt = $pdo->prepare("SELECT * FROM Customers");

// Execute the statement
$stmt->execute();

// Fetch all records
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Render the results in an HTML table
echo "<table border='1'>";
echo "<tr><th>Customer ID</th><th>First Name</th><th>Last Name</th><th>Visit Date</th><th>Membership Status</th><th>Total Spent</th></tr>"; // Table headers

// Loop through each record and create a new row in the table
foreach ($results as $row) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['customer_id']) . "</td>"; // Escape output for security
    echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['visit_date']) . "</td>";
    echo "<td>" . htmlspecialchars($row['membership_status']) . "</td>";
    echo "<td>" . htmlspecialchars($row['total_spent']) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>


</body>
</html>
