<?php
include 'backend/db.php';

// Add event_type column to collegeevents
$sql = "ALTER TABLE collegeevents ADD COLUMN event_type VARCHAR(20) DEFAULT 'Event'";

try {
    if ($conn->query($sql) === TRUE) {
        echo "Successfully added event_type column to collegeevents table.";
    } else {
        echo "Error updating table: " . $conn->error;
    }
} catch (mysqli_sql_exception $e) {
    if (strpos($e->getMessage(), 'Duplicate column name') !== false) {
        echo "Column event_type already exists.";
    } else {
        echo "Error: " . $e->getMessage();
    }
}

$conn->close();
?>
