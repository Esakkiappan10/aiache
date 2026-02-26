<?php
session_start();
include 'db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.html");
    exit();
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Fetch image path to delete from folder
    $query = "SELECT image_path FROM gallery_photos WHERE id = $id";
    $result = $conn->query($query);
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = '../uploads/' . $row['image_path'];
        
        // Delete physical file
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete from Database
        $sql = "DELETE FROM gallery_photos WHERE id = $id";
        if ($conn->query($sql)) {
             $_SESSION['flash_message'] = [
                'type' => 'success',
                'title' => 'Deleted Successfully',
                'message' => "The photo has been removed from the gallery."
            ];
        } else {
             $_SESSION['flash_message'] = [
                'type' => 'error',
                'title' => 'Deletion Failed',
                'message' => "Could not delete from database."
            ];
        }
    }
}

header("Location: ../admin_dashboard.php?section=gallery");
exit();
?>
