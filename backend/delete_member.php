<?php
session_start();
include 'db.php';

$status = "error";
$title = "Delete Failed";
$message = "Invalid request.";

if (isset($_GET['id']) && isset($_GET['table'])) {
    $id = intval($_GET['id']);
    $table = $conn->real_escape_string($_GET['table']);
    
    // Whitelist allowed tables to prevent SQL injection
    $allowed_tables = ['TAMILNADU', 'KERALA', 'KARNATAKA', 'ANDHRA', 'NORTHERN', 'EASTERN', 'NORTHEAST', 'WESTERN', 'LIFEMEMBERS'];
    
    if (in_array($table, $allowed_tables)) {
        // Get member name for message
        $sql_get = "SELECT Name_of_the_College FROM $table WHERE id = $id";
        $result = $conn->query($sql_get);
        $member_name = "Member";
        
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $member_name = $row['Name_of_the_College'];
            
            // Delete record
            $sql = "DELETE FROM $table WHERE id = $id";
            if ($conn->query($sql) === TRUE) {
                $status = "success";
                $title = "Member Deleted";
                $message = "<strong>" . htmlspecialchars($member_name) . "</strong> has been removed from <strong>$table</strong>.";
            } else {
                $status = "error";
                $title = "Database Error";
                $message = "Error deleting member: " . $conn->error;
            }
        } else {
            $title = "Member Not Found";
            $message = "The requested member record does not exist.";
        }
    } else {
        $title = "Invalid Table";
        $message = "The specified region/category is invalid.";
    }
}

$_SESSION['flash_message'] = [
    'type' => $status,
    'title' => $title,
    'message' => $message
];

header("Location: ../admin_dashboard.php?section=members");
exit();
?>
