<?php
session_start();
include 'db.php';

// Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.html");
    exit();
}

// Initialize response variables
$status = "error"; 
$title = "Processing Error";
$message = "An unexpected error occurred.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitize Inputs
    $id = intval($_POST['event_id']);
    $title_input = $conn->real_escape_string($_POST['title']);
    $desc = $conn->real_escape_string($_POST['description']);
    $event_type = isset($_POST['event_type']) ? $conn->real_escape_string($_POST['event_type']) : 'Event';
    
    // 2. Setup Upload Directory
    $target_dir = "../uploads/";
    $upload_ok = true; 
    $image_path = "";  

    // Handle File Upload if a new image is provided
    if (isset($_FILES["event_image"]) && $_FILES["event_image"]["error"] == 0) {
        $file_ext = strtolower(pathinfo($_FILES["event_image"]["name"], PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        // Validate Extension
        if (in_array($file_ext, $allowed_ext)) {
            $new_filename = time() . "_" . uniqid() . "." . $file_ext;
            $target_file = $target_dir . $new_filename;
            
            if (move_uploaded_file($_FILES["event_image"]["tmp_name"], $target_file)) {
                $image_path = $new_filename;
                
                // Get old image to delete it (optional clean up)
                $old_img_sql = "SELECT image_path FROM collegeevents WHERE id = $id";
                $res = $conn->query($old_img_sql);
                if($res && $res->num_rows > 0) {
                    $row = $res->fetch_assoc();
                    $old_file = $target_dir . $row['image_path'];
                    if(file_exists($old_file) && is_file($old_file)) {
                        @unlink($old_file);
                    }
                }
            } else {
                $status = "error";
                $title = "Upload Failed";
                $message = "The new image could not be saved.";
                $upload_ok = false;
            }
        } else {
            $status = "error";
            $title = "Invalid File Format";
            $message = "Only JPG, PNG, GIF, and WEBP files are allowed.";
            $upload_ok = false;
        }
    }

    // Process Multiple Additional Images
    $new_additional_images = [];
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
                        $new_additional_images[] = $new_add_filename;
                    }
                }
            }
        }
    }

    // 4. Update Database
    if ($upload_ok) {
        // Fetch existing additional images
        $existing_images_sql = "SELECT additional_images FROM collegeevents WHERE id = $id";
        $existing_res = $conn->query($existing_images_sql);
        $current_additional = [];
        if ($existing_res && $existing_res->num_rows > 0) {
            $row = $existing_res->fetch_assoc();
            if (!empty($row['additional_images'])) {
                $decoded = json_decode($row['additional_images'], true);
                if (is_array($decoded)) {
                    $current_additional = $decoded;
                }
            }
        }
        
        // Handle deletions
        if (isset($_POST['delete_additional_images']) && is_array($_POST['delete_additional_images'])) {
            $delete_images = $_POST['delete_additional_images'];
            foreach ($delete_images as $del_img) {
                // Remove from JSON array
                $key = array_search($del_img, $current_additional);
                if ($key !== false) {
                    unset($current_additional[$key]);
                }
                // Try to delete file from disk securely
                $del_path = $target_dir . basename($del_img);
                if (file_exists($del_path) && is_file($del_path)) {
                    @unlink($del_path);
                }
            }
            // Re-index array after unsetting
            $current_additional = array_values($current_additional);
        }
        
        // Merge new images
        if (!empty($new_additional_images)) {
            $current_additional = array_merge($current_additional, $new_additional_images);
        }
        
        $additional_images_json = !empty($current_additional) ? $conn->real_escape_string(json_encode($current_additional)) : 'NULL';
        $additional_update = $additional_images_json == 'NULL' ? "additional_images=NULL" : "additional_images='$additional_images_json'";

        if ($image_path != "") {
            // Update with new image
            $sql = "UPDATE collegeevents SET event_name='$title_input', event_description='$desc', event_type='$event_type', image_path='$image_path', $additional_update WHERE id=$id";
        } else {
            // Update without changing image
            $sql = "UPDATE collegeevents SET event_name='$title_input', event_description='$desc', event_type='$event_type', $additional_update WHERE id=$id";
        }
                
        if ($conn->query($sql) === TRUE) {
            $status = "success";
            $title = "Updated Successfully";
            $message = "<strong>$title_input</strong> has been updated.";
        } else {
            $status = "error";
            $title = "Database Error";
            $message = "We could not save the changes. Error: " . $conn->error;
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
