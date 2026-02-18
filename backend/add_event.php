<?php
session_start();
include 'db.php';

// Initialize response variables
$status = "error"; 
$title = "Processing Error";
$message = "An unexpected error occurred.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitize Inputs
    $title_input = $conn->real_escape_string($_POST['title']);
    $desc = $conn->real_escape_string($_POST['description']);
    
    // 2. Setup Upload Directory
    $target_dir = "../uploads/";
    $upload_ok = true; 
    $image_path = "";  

    // Auto-create directory if missing
    if (!file_exists($target_dir)) {
        if (!mkdir($target_dir, 0777, true)) {
            $status = "error";
            $title = "Server Error";
            $message = "Failed to create upload directory. Please check server permissions.";
            $upload_ok = false;
        }
    }

    // 3. Handle File Upload (Only if directory check passed)
    if ($upload_ok && isset($_FILES["event_image"]) && $_FILES["event_image"]["error"] == 0) {
        
        $file_ext = strtolower(pathinfo($_FILES["event_image"]["name"], PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        // Validate Extension
        if (in_array($file_ext, $allowed_ext)) {
            // Generate clean filename to prevent errors
            $new_filename = time() . "_" . uniqid() . "." . $file_ext;
            $target_file = $target_dir . $new_filename;
            
            // Move File
            if (move_uploaded_file($_FILES["event_image"]["tmp_name"], $target_file)) {
                $image_path = $new_filename;
            } else {
                $status = "error";
                $title = "Upload Failed";
                $message = "The image could not be saved. Check folder permissions.";
                $upload_ok = false;
            }
        } else {
            $status = "error";
            $title = "Invalid File Format";
            $message = "Only JPG, PNG, GIF, and WEBP files are allowed.";
            $upload_ok = false;
        }
    }

    // 4. Insert into Database (Only if no upload errors occurred)
    if ($upload_ok) {
        $sql = "INSERT INTO collegeevents (event_name, event_description, image_path, posted_date) 
                VALUES ('$title_input', '$desc', '$image_path', NOW())";
                
        if ($conn->query($sql) === TRUE) {
            $status = "success";
            $title = "Event Published";
            $message = "<strong>$title_input</strong> is now live on the events page.";
        } else {
            $status = "error";
            $title = "Database Error";
            $message = "We could not save the event details. Error: " . $conn->error;
        }
    }

} else {
    $status = "error";
    $title = "Access Denied";
    $message = "Invalid request method.";
}

// Set Flash Message
$_SESSION['flash_message'] = [
    'type' => $status,
    'title' => $title,
    'message' => $message
];

// Redirect back to events section
header("Location: ../admin_dashboard.php?section=events");
exit();
?>
