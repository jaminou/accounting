<?php
include 'connect.php'; // Include the database connection script

$sql = "SELECT PriceLevelCode, Margin FROM PriceLevels";
$result = $conn->query($sql);

$priceLevels = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $priceLevels[] = $row;
    }
}

echo json_encode($priceLevels);

$conn->close();
?>