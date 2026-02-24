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
    $event_type = isset($_POST['event_type']) ? $conn->real_escape_string($_POST['event_type']) : 'Event';
    
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

    // Process Multiple Additional Images (Only if main upload ok and directory exists)
    $additional_images_arr = [];
    if ($upload_ok && isset($_FILES["additional_images"]) && is_array($_FILES["additional_images"]["name"])) {
        
        $total_files = count($_FILES["additional_images"]["name"]);
        
        for ($i = 0; $i < $total_files; $i++) {
            if ($_FILES["additional_images"]["error"][$i] == 0) {
                
                $add_ext = strtolower(pathinfo($_FILES["additional_images"]["name"][$i], PATHINFO_EXTENSION));
                $allowed_add_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
                
                if (in_array($add_ext, $allowed_add_ext)) {
                    $new_add_filename = "add_" . time() . "_" . uniqid() . "." . $add_ext;
                    $add_target_file = $target_dir . $new_add_filename;
                    
                    if (move_uploaded_file($_FILES["additional_images"]["tmp_name"][$i], $add_target_file)) {
                        $additional_images_arr[] = $new_add_filename;
                    }
                }
            }
        }
    }
    
    // Convert array to JSON for database storage
    $additional_images_json = !empty($additional_images_arr) ? $conn->real_escape_string(json_encode($additional_images_arr)) : 'NULL';

    // 4. Insert into Database (Only if no upload errors occurred)
    if ($upload_ok) {
        $sql = "INSERT INTO collegeevents (event_name, event_description, image_path, posted_date, event_type, additional_images) 
                VALUES ('$title_input', '$desc', '$image_path', NOW(), '$event_type', " . ($additional_images_json == 'NULL' ? "NULL" : "'$additional_images_json'") . ")";
                
        if ($conn->query($sql) === TRUE) {
            $status = "success";
            $title = "Published";
            $message = "<strong>$title_input</strong> is now live.";
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
