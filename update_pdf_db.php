<?php
$servername = "localhost";
$username = "root";
$password = "Nulr2025@00#";
$dbname = "Newaiache";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 1. Create Table if not exists
$sql_create = "CREATE TABLE IF NOT EXISTS adminpdfupload (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    filename VARCHAR(255) NOT NULL,
    description TEXT,
    report_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql_create) === TRUE) {
    echo "Table adminpdfupload check/create successful.\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

// 2. Add columns if they don't exist
$columns = ['description' => 'TEXT', 'report_date' => 'DATE'];
foreach ($columns as $col => $type) {
    $check = $conn->query("SHOW COLUMNS FROM adminpdfupload LIKE '$col'");
    if ($check->num_rows == 0) {
        $conn->query("ALTER TABLE adminpdfupload ADD COLUMN $col $type");
        echo "Added column $col.\n";
    }
}

// 3. Seed Data
$data = [
    ['2020-01-11', 'One Day Workshop Report - CATHOLICATE COLLEGE, PATHANAMTHITTA', 'One_Day_Workshop_Report.pdf'],
    ['2020-03-05', 'AIACHE-UB Programme – LEADERSHIP DEVELOPMENT PROGRAMME FOR SENIOR MID-LEVEL FACULTY', 'AIACHE_UB_Programme_Report.pdf'],
    ['2021-02-01', 'GUIDELINES FOR INDIVIDUAL EXPERTS - AIACHE-ASIA Network', 'Guidelines_Individual_Experts.pdf'],
    ['2022-03-28', 'Letter to Principals ASIANetwork - 28th March 2022', 'Letter_to_Principals.pdf'],
    ['2021-02-01', 'GUIDELINES FOR NODAL MEMBERS - AIACHE-ASIANetwork', 'Guidelines_Nodal_Members.pdf'],
    ['2021-07-16', 'Updated Workbook - Resilience during Pandemic', 'Workbook_Resilience.pdf'],
    ['2022-03-30', 'AIACHE Think Tank - Invitation to the webinar', 'AIACHE_Think_Tank.pdf'],
    ['2023-07-22', '144th Executive Board Meet', '144th_Executive_Board_Meet.pdf'],
    ['2023-08-24', 'Academic Renewal Program', 'Academic_Renewal_Program.pdf'],
    ['2023-04-01', 'Vol. 56 No. 2&3, April-June 2023 and July-September 2023 New Frontiers in Education', 'New_Frontiers_in_Education_Vol56.pdf'],
    ['2024-11-03', 'AIACHE Task Force Committee Meet 2024 @MCC, Chennai', 'AIACHE_Task_Force_Meet_2024.pdf']
];

foreach ($data as $row) {
    $date = $row[0];
    $title = $conn->real_escape_string($row[1]);
    $file = $conn->real_escape_string($row[2]);
    
    // Check if exists to avoid duplicates
    $check = $conn->query("SELECT id FROM adminpdfupload WHERE title = '$title'");
    if ($check->num_rows == 0) {
        $sql = "INSERT INTO adminpdfupload (report_date, title, filename, description) VALUES ('$date', '$title', '$file', '$title')";
        if ($conn->query($sql) === TRUE) {
            echo "Inserted: $title\n";
        } else {
            echo "Error inserting $title: " . $conn->error . "\n";
        }
    } else {
        echo "Skipped (exists): $title\n";
    }
}

$conn->close();
?>
