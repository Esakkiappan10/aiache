<?php
include 'db.php';

// Initialize response variables
$status = ""; // 'success' or 'error'
$title = "";
$message = "";
$redirect = "../admin_dashboard.php"; // Default redirect

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
        default:
            $status = "error";
            $title = "Invalid Selection";
            $message = "The state you selected is not valid. Please go back and try again.";
            $redirect = "javascript:history.back()";
    }

    // 3. Process Database Insert (Only if table is valid)
    if ($table) {
        $sql = "INSERT INTO $table (LM_NO, Name_of_the_College, Principal_Name, Phone_No) 
                VALUES ('$lm', '$name', '$principal', '$phone')";

        if ($conn->query($sql) === TRUE) {
            $status = "success";
            $title = "Member Added Successfully";
            $message = "<strong>$name</strong> has been added to the <strong>$table</strong> database.";
        } else {
            $status = "error";
            $title = "Database Error";
            $message = "We could not save the data. <br>Technical Error: " . $conn->error;
        }
    }

} else {
    // If accessed directly without POST
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
                    <i class="fas fa-times text-3xl"></i>
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
        // Automatically redirect after 3 seconds for better UX
        setTimeout(function() {
            window.location.href = "<?php echo $redirect; ?>";
        }, 3000);
    </script>
    <?php endif; ?>

</body>
</html>