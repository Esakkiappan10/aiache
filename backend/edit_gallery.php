<?php
session_start();
include 'db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $folder_name = trim($conn->real_escape_string($_POST['folder_name']));

    // Update folder name only
    $sql = "UPDATE gallery_photos SET folder_name='$folder_name' WHERE id=$id";
    
    if ($conn->query($sql)) {
         $_SESSION['flash_message'] = [
            'type' => 'success',
            'title' => 'Updated Successfully',
            'message' => "Gallery photo updated."
        ];
    } else {
         $_SESSION['flash_message'] = [
            'type' => 'error',
            'title' => 'Update Failed',
            'message' => "Could not update the photo details."
        ];
    }

    header("Location: ../admin_dashboard.php?section=gallery");
    exit();
}
?>
