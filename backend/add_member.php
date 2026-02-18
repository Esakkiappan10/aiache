<?php
session_start();
include 'db.php';

// Initialize response variables
$status = "error"; 
$title = "Processing Error";
$message = "An unexpected error occurred.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitize Inputs
    $lm = $conn->real_escape_string($_POST['lm_number']);
    $name = $conn->real_escape_string($_POST['name']);
    $principal = $conn->real_escape_string($_POST['principal']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $state_input = $_POST['state'] ?? '';

    // 2. Validate State Selection
    $table = "";
    switch(strtoupper($state_input)) {
        case 'TAMILNADU': $table = "TAMILNADU"; break;
        case 'KERALA':    $table = "KERALA"; break;
        case 'KARNATAKA': $table = "KARNATAKA"; break;
        case 'ANDHRA':    $table = "ANDHRA"; break;
        case 'NORTHERN':  $table = "NORTHERN"; break;
        case 'EASTERN':   $table = "EASTERN"; break;
        case 'NORTHEAST': $table = "NORTHEAST"; break;
        case 'WESTERN':   $table = "WESTERN"; break;
        case 'LIFEMEMBERS': $table = "LIFEMEMBERS"; break;
        default:
            $status = "error";
            $title = "Invalid Selection";
            $message = "The selected state is invalid.";
    }

    // 3. Process Database Insert (Only if table is valid)
    if ($table) {
        $website = isset($_POST['website']) ? $conn->real_escape_string($_POST['website']) : '';

        if (in_array($table, ['ANDHRA', 'NORTHERN', 'EASTERN', 'NORTHEAST', 'WESTERN', 'LIFEMEMBERS'])) {
             $sql = "INSERT INTO $table (LM_NO, Name_of_the_College, Principal_Name, Phone_No, Website) 
                VALUES ('$lm', '$name', '$principal', '$phone', '$website')";
        } else {
             $sql = "INSERT INTO $table (LM_NO, Name_of_the_College, Principal_Name, Phone_No) 
                VALUES ('$lm', '$name', '$principal', '$phone')";
        }

        if ($conn->query($sql) === TRUE) {
            $status = "success";
            $title = "Member Added";
            $message = "<strong>$name</strong> has been added to the <strong>$table</strong> database.";
        } else {
            $status = "error";
            $title = "Database Error";
            $message = "We could not save the data. Error: " . $conn->error;
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

// Redirect back to members section
header("Location: ../admin_dashboard.php?section=members");
exit();
?>
