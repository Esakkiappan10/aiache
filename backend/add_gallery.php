<?php
session_start();
include 'db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: ../login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $existing = trim($conn->real_escape_string($_POST['existing_folder'] ?? ''));
    $new_folder = trim($conn->real_escape_string($_POST['folder_name'] ?? ''));
    
    $folder_name = (!empty($existing) && $existing !== 'NEW_FOLDER') ? $existing : $new_folder;
    if(empty($folder_name)) $folder_name = 'Uncategorized';
    
    // Handle Multiple File Uploads
    if (isset($_FILES['gallery_images']) && count($_FILES['gallery_images']['name']) > 0) {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        $uploadDir = '../uploads/';
        $successCount = 0;
        $fileCount = count($_FILES['gallery_images']['name']);

        for ($i = 0; $i < $fileCount; $i++) {
            $fileName = $_FILES['gallery_images']['name'][$i];
            $fileTmp = $_FILES['gallery_images']['tmp_name'][$i];
            $fileType = $_FILES['gallery_images']['type'][$i];
            $fileError = $_FILES['gallery_images']['error'][$i];

            if ($fileError === UPLOAD_ERR_OK && in_array($fileType, $allowedTypes)) {
                $uniqueName = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9.\-_]/', '', basename($fileName));
                $targetPath = $uploadDir . $uniqueName;

                if (move_uploaded_file($fileTmp, $targetPath)) {
                    $sql = "INSERT INTO gallery_photos (folder_name, image_path) VALUES ('$folder_name', '$uniqueName')";
                    if ($conn->query($sql)) {
                        $successCount++;
                    }
                }
            }
        }

        if ($successCount > 0) {
            $_SESSION['flash_message'] = [
                'type' => 'success',
                'title' => 'Upload Successful',
                'message' => "$successCount image(s) uploaded to '$folder_name' successfully."
            ];
        } else {
             $_SESSION['flash_message'] = [
                'type' => 'error',
                'title' => 'Upload Failed',
                'message' => "Images could not be uploaded. Please check file types."
            ];
        }
    }

    header("Location: ../admin_dashboard.php?section=gallery");
    exit();
}
?>
