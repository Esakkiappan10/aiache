<?php
session_start();
include 'db.php';

// Initialize response variables
$status = "error"; 
$title = "Update Failed";
$message = "An unexpected error occurred.";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitize Inputs
    $id = $conn->real_escape_string($_POST['id']);
    $original_table = $conn->real_escape_string($_POST['original_table']);
    
    $lm = $conn->real_escape_string($_POST['lm_number']);
    $name = $conn->real_escape_string($_POST['name']);
    $principal = $conn->real_escape_string($_POST['principal']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $website = isset($_POST['website']) ? $conn->real_escape_string($_POST['website']) : '';

    // 2. Validate Table Name (Whitelist approach for security)
    $valid_tables = ['TAMILNADU', 'KERALA', 'KARNATAKA', 'ANDHRA', 'NORTHERN', 'EASTERN', 'NORTHEAST', 'WESTERN', 'LIFEMEMBERS'];
    
    if (in_array($original_table, $valid_tables)) {
        
        // 3. Construct Update Query
        // Check if 'Website' column exists for this table (it usually does for all but better safe)
        // For simplicity, assuming all tables have the same structure based on previous `add_member.php` logic
        // But some might not have 'Website' if they are old legacy tables. 
        // Based on `add_member.php`:
        // Regions WITH Website: ANDHRA, NORTHERN, EASTERN, NORTHEAST, WESTERN, LIFEMEMBERS
        // Regions WITHOUT Website (default in add_member): TAMILNADU, KERALA, KARNATAKA (Wait, add_member.php logic was weird there)
        
        // Let's safe check column existence or just try update. 
        // Actually, looking at `add_member.php`, it seems only some tables got the website insert.
        // Let's assume we want to update it if it exists. 
        // A robust way is to try updating website, if it fails (silent/error), well.. 
        // The best way is to check the table schema, but we'll stick to the pattern used in `add_member.php` for consistency 
        // OR better, we try to update all fields. 
        
        // RE-CHECKING `add_member.php`:
        // if (in_array($table, ['ANDHRA', 'NORTHERN', 'EASTERN', 'NORTHEAST', 'WESTERN', 'LIFEMEMBERS'])) { INCLUDE WEBSITE } ELSE { EXCLUDE }
        
        $has_website = in_array($original_table, ['ANDHRA', 'NORTHERN', 'EASTERN', 'NORTHEAST', 'WESTERN', 'LIFEMEMBERS']);
        
        // However, the user might have added 'Website' column to others too manually? 
        // Let's stick to the safe list to avoid SQL errors if column missing.
        // Wait, the `admin_dashboard.php` loop tries to display `Website` for EVERYONE (`$row['Website']`).
        // If the column didn't exist, the SELECT * would fail or return nothing. 
        // So if the SELECT * works (which it does), the column likely exists or handled.
        // IF the column doesn't exist, `$row['Website']` would be null/warning.
        
        // Let's try to update Website for ALL tables. If it errors, we catch it? No, that's messy.
        // Let's follow the `add_member.php` pattern to be safe, assuming the schema matches that logic.
        // BUT, if the user added a website to Tamil Nadu manually in DB, we should update it.
        // Let's try to update `Website` for ALL. If the column is missing, MySQL will throw error.
        // To be safer, let's use the same list as `add_member.php` for now unless we know otherwise.
        // Actually, looking at `admin_dashboard.php`, it attempts to echo `$row['Website']` for everyone.
        // This suggests the column MIGHT exist for everyone, or the PHP warning is suppressed/ignored.
        
        // Let's trust `add_member.php` logic for now to avoid breaking inserts/updates on tables without the column.
        
        if ($has_website) {
            $sql = "UPDATE $original_table SET 
                    LM_NO = '$lm',
                    Name_of_the_College = '$name',
                    Principal_Name = '$principal',
                    Phone_No = '$phone',
                    Website = '$website'
                    WHERE id = '$id'";
        } else {
            // For tables that supposedly don't have Website column (TN, KA, KL) according to add_member.php
            // We won't include Website in UPDATE to avoid 'Unknown column' error
             $sql = "UPDATE $original_table SET 
                    LM_NO = '$lm',
                    Name_of_the_College = '$name',
                    Principal_Name = '$principal',
                    Phone_No = '$phone'
                    WHERE id = '$id'";
        }

        if ($conn->query($sql) === TRUE) {
            $status = "success";
            $title = "Update Successful";
            $message = "Member details for <strong>$name</strong> have been updated.";
        } else {
            $status = "error";
            $title = "Database Error";
            $message = "Error updating record: " . $conn->error;
        }

    } else {
        $status = "error";
        $title = "Invalid Request";
        $message = "Invalid table specified.";
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

// Redirect back to members section for the specific region
header("Location: ../admin_dashboard.php?section=members&region=" . urlencode($original_table));
exit();
?>
