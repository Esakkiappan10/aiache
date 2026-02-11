<?php
session_start();
include 'db.php'; // Optional if you rely only on hardcoded admin

$username = $_POST['username'];
$password = $_POST['password'];

// --- 1. MASTER KEY (Hardcoded Access) ---
// This ensures you can login even if the database table is missing
if ($username === 'admin' && $password === 'admin123') {
    $_SESSION['admin'] = true;
    $_SESSION['user'] = 'Administrator';
    header("Location: ../admin_dashboard.php");
    exit();
}

// --- 2. DATABASE CHECK (Optional: Only if you created admin_users table) ---
// Note: Your uploaded SQL file did NOT contain an 'admin_users' table.
// Unless you created it manually, this part would fail silently.
// We wrap it in a check to prevent crashes.

$table_check = $conn->query("SHOW TABLES LIKE 'admin_users'");
if($table_check && $table_check->num_rows > 0) {
    // Sanitize inputs to prevent SQL Injection
    $safe_user = $conn->real_escape_string($username);
    $safe_pass = $conn->real_escape_string($password);

    $sql = "SELECT * FROM admin_users WHERE username = '$safe_user' AND password = '$safe_pass'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $_SESSION['admin'] = true;
        $_SESSION['user'] = $safe_user;
        header("Location: ../admin_dashboard.php");
        exit();
    }
}

// --- 3. FAILED LOGIN ---
// If both checks fail:
echo "<script>
    alert('Invalid Username or Password. Try: admin / admin123');
    window.location.href='../login.html';
</script>";
?>
