<?php
include 'db.php';

// Initialize response variables
$status = ""; // 'success' or 'error'
$title = "";
$message = "";
$redirect = "../admin_dashboard.php"; // Default redirect

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitize Inputs
    $title = $conn->real_escape_string($_POST['title']);
    $desc = $conn->real_escape_string($_POST['description']);
    
    // 2. Setup Upload Directory
    $target_dir = "../uploads/";
    $upload_ok = true; // Flag to track upload status
    $image_path = "";  // Database value

    // Auto-create directory if missing
    if (!file_exists($target_dir)) {
        if (!mkdir($target_dir, 0777, true)) {
            $status = "error";
            $title = "Server Error";
            $message = "Failed to create upload directory. Please check server permissions.";
            $redirect = "javascript:history.back()";
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
                $redirect = "javascript:history.back()";
                $upload_ok = false;
            }
        } else {
            $status = "error";
            $title = "Invalid File Format";
            $message = "Only JPG, PNG, GIF, and WEBP files are allowed.";
            $redirect = "javascript:history.back()";
            $upload_ok = false;
        }
    }

    // 4. Insert into Database (Only if no upload errors occurred)
    if ($upload_ok) {
        $sql = "INSERT INTO collegeevents (event_name, event_description, image_path, posted_date) 
                VALUES ('$title', '$desc', '$image_path', NOW())";
                
        if ($conn->query($sql) === TRUE) {
            $status = "success";
            $title = "Event Published Successfully";
            $message = "<strong>$title</strong> is now live on the events page.";
        } else {
            $status = "error";
            $title = "Database Error";
            $message = "We could not save the event details.<br>Technical Error: " . $conn->error;
            $redirect = "javascript:history.back()";
        }
    }

} else {
    $status = "error";
    $title = "Access Denied";
    $message = "Invalid request method.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing Request | AIACHE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = { theme: { extend: { fontFamily: { sans: ['Inter', 'sans-serif'] }, colors: { brand: { blue: '#1e3a8a', green: '#059669', red: '#dc2626' } } } } }
    </script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <div class="bg-white rounded-2xl shadow-xl w-full max-w-md overflow-hidden transform transition-all scale-100">
        
        <div class="p-6 text-center <?php echo ($status === 'success') ? 'bg-green-50' : 'bg-red-50'; ?>">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full mb-4 <?php echo ($status === 'success') ? 'bg-green-100 text-brand-green' : 'bg-red-100 text-brand-red'; ?>">
                <?php if($status === 'success'): ?>
                    <i class="fas fa-check text-3xl"></i>
                <?php else: ?>
                    <i class="fas fa-cloud-upload-alt text-3xl"></i>
                <?php endif; ?>
            </div>
            <h2 class="text-2xl font-bold <?php echo ($status === 'success') ? 'text-green-800' : 'text-red-800'; ?>">
                <?php echo $title; ?>
            </h2>
        </div>

        <div class="p-8 text-center">
            <p class="text-gray-600 mb-8 text-sm leading-relaxed">
                <?php echo $message; ?>
            </p>

            <a href="<?php echo $redirect; ?>" class="inline-block w-full py-3 px-6 rounded-xl font-bold text-white shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1 <?php echo ($status === 'success') ? 'bg-brand-blue hover:bg-blue-900' : 'bg-gray-800 hover:bg-gray-900'; ?>">
                <?php echo ($status === 'success') ? 'Return to Dashboard' : 'Go Back & Try Again'; ?>
            </a>
        </div>

    </div>

    <?php if($status === 'success'): ?>
    <script>
        setTimeout(function() {
            window.location.href = "<?php echo $redirect; ?>";
        }, 3000);
    </script>
    <?php endif; ?>

</body>
</html>
