<?php
session_start();
include 'db.php';

$status = "error";
$title = "Delete Failed";
$message = "Invalid request.";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // Get image path to delete
    $sql_get = "SELECT image_path, event_name FROM collegeevents WHERE id = $id";
    $result = $conn->query($sql_get);
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Delete image if exists
        if (!empty($row['image_path'])) {
            $image_path = "../uploads/" . $row['image_path'];
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        
        // Delete record
        $sql = "DELETE FROM collegeevents WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            $status = "success";
            $title = "Event Deleted";
            $message = "<strong>" . htmlspecialchars($row['event_name']) . "</strong> has been permanently removed.";
        } else {
            $status = "error";
            $title = "Database Error";
            $message = "Error deleting event: " . $conn->error;
        }
    } else {
        $title = "Event Not Found";
        $message = "The requested event does not exist.";
    }
}

$_SESSION['flash_message'] = [
    'type' => $status,
    'title' => $title,
    'message' => $message
];

header("Location: ../admin_dashboard.php?section=events");
exit();
?>
