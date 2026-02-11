<?php
include 'backend/db.php';

// 1. Add Category Column
$col = 'category';
$check = $conn->query("SHOW COLUMNS FROM adminpdfupload LIKE '$col'");
if ($check->num_rows == 0) {
    // Add column
    $conn->query("ALTER TABLE adminpdfupload ADD COLUMN category VARCHAR(50) DEFAULT 'Report'");
    echo "Added column 'category'.\n";
    
    // Update existing to Report
    $conn->query("UPDATE adminpdfupload SET category = 'Report' WHERE category IS NULL");
}

// 2. Seed Application Forms
$apps = [
    ['Life Membership', 'Life_Membership_Form.pdf', 'Application form for institutions seeking permanent life membership Status.', 'Application'],
    ['Annual Membership', 'Annual_Membership_Form.pdf', 'Application form for institutions renewing or applying for annual membership.', 'Application'],
    ['Individual Friend\'s', 'Individual_Friends_Form.pdf', 'Application form for individuals wishing to join as Friends of AIACHE.', 'Application']
];

foreach ($apps as $row) {
    $title = $conn->real_escape_string($row[0]);
    $file = $conn->real_escape_string($row[1]);
    $desc = $conn->real_escape_string($row[2]);
    $cat = $row[3];
    
    // Check if exists
    $check = $conn->query("SELECT id FROM adminpdfupload WHERE title = '$title' AND category = 'Application'");
    if ($check->num_rows == 0) {
        $sql = "INSERT INTO adminpdfupload (title, filename, description, category, report_date) VALUES ('$title', '$file', '$desc', '$cat', NOW())";
        if ($conn->query($sql) === TRUE) {
            echo "Inserted Application: $title\n";
        } else {
            echo "Error inserting $title: " . $conn->error . "\n";
        }
    } else {
        echo "Skipped (exists): $title\n";
    }
}
?>
