<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'backend/db.php';

$table = 'adminpdfupload';
$result = $conn->query("SHOW COLUMNS FROM $table");

if ($result && $result->num_rows > 0) {
    echo "Table '$table' exists. Columns:\n";
    while ($row = $result->fetch_assoc()) {
        echo $row['Field'] . " - " . $row['Type'] . "\n";
    }
} else {
    echo "Table '$table' does not exist or error: " . $conn->error . "\n";
}
?>
