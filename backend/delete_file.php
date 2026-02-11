<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Get filename to delete from server
    $sql_get = "SELECT filename FROM adminpdfupload WHERE id = $id";
    $result = $conn->query($sql_get);
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $file_path = "../uploads/" . $row['filename'];
        
        // Delete file from folder
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        
        // Delete record
        $sql = "DELETE FROM adminpdfupload WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('File deleted successfully'); window.location.href='../admin_dashboard.php';</script>";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}
?>
