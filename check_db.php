<?php
include 'backend/db.php';

$table = 'adminpdfupload';
$result = $conn->query("DESCRIBE $table");

if ($result) {
    echo "Table '$table' exists. Columns:\n";
    while ($row = $result->fetch_assoc()) {
        echo $row['Field'] . " - " . $row['Type'] . "\n";
    }
} else {
    echo "Table '$table' does not exist.\n";
}
?>
