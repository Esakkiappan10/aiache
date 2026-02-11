<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $description = $conn->real_escape_string($_POST['description']);
    $report_date = $conn->real_escape_string($_POST['report_date']);
    $category = $conn->real_escape_string($_POST['category']); // New field

    // File Upload Handling
    $target_dir = "../uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    $file_name = basename($_FILES["pdf_file"]["name"]);
    $target_file = $target_dir . $file_name;
    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Validate File Type
    if($file_type != "pdf") {
        echo "<script>alert('Only PDF files are allowed.'); window.location.href='../admin_dashboard.php';</script>";
        exit();
    }

    // Move File
    if (move_uploaded_file($_FILES["pdf_file"]["tmp_name"], $target_file)) {
        // Insert with Category
        $sql = "INSERT INTO adminpdfupload (title, filename, description, report_date, category) VALUES ('$title', '$file_name', '$description', '$report_date', '$category')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('File uploaded successfully!'); window.location.href='../admin_dashboard.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "<script>alert('Sorry, there was an error uploading your file.'); window.location.href='../admin_dashboard.php';</script>";
    }
}
?>
