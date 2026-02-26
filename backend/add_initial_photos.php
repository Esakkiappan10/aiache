<?php
include 'db.php';
$files = ['20260206_110019.jpg', '20260208_073039.jpg', 'WhatsApp Image 2026-02-05 at 9.26.16 AM.jpeg', 'WhatsApp Image 2026-02-05 at 9.44.38 PM.jpeg', 'WhatsApp Image 2026-02-06 at 10.45.25 PM.jpeg', 'WhatsApp Image 2026-02-06 at 11.52.40 PM.jpeg', 'WhatsApp Image 2026-02-06 at 6.26.50 AM.jpeg', 'WhatsApp Image 2026-02-07 at 6.40.07 AM.jpeg', 'WhatsApp Image 2026-02-08 at 5.46.10 PM.jpeg']; 
foreach ($files as $f) { 
    $stmt = $conn->prepare("INSERT INTO gallery_photos (folder_name, image_path) VALUES (?, ?)");
    $folder = 'AIACHE Sri Lanka 2026';
    $stmt->bind_param("ss", $folder, $f);
    $stmt->execute();
}
echo 'Photos added to DB!';
?>
