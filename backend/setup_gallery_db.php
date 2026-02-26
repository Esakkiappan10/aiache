<?php
include 'db.php';

$sql = "CREATE TABLE IF NOT EXISTS gallery_photos (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    folder_name VARCHAR(255) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    uploaded_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Gallery table created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>
