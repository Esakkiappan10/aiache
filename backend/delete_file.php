<?php
session_start();
include 'db.php';

$status = "error";
$title = "Delete Failed";
$message = "Invalid request.";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // Get filename to delete from server
    $sql_get = "SELECT filename, title FROM adminpdfupload WHERE id = $id";
    $result = $conn->query($sql_get);
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $file_path = "../uploads/" . $row['filename'];
        $file_title = $row['title'];
        
        // Delete file from folder
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        
        // Delete record
        $sql = "DELETE FROM adminpdfupload WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            $status = "success";
            $title = "File Deleted";
            $message = "<strong>$file_title</strong> has been permanently removed.";
        } else {
            $status = "error";
            $title = "Database Error";
            $message = "Error deleting record: " . $conn->error;
        }
    } else {
        $title = "File Not Found";
        $message = "The requested file does not exist.";
    }
}

$_SESSION['flash_message'] = [
    'type' => $status,
    'title' => $title,
    'message' => $message
];

header("Location: ../admin_dashboard.php?section=files");
exit();
?>
