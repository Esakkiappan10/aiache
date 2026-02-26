<?php
include 'db.php';

// 1. Fetch all events with images
$res = $conn->query("SELECT event_name, image_path, additional_images FROM collegeevents WHERE image_path IS NOT NULL AND image_path != ''");
if($res && $res->num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        $folder = $conn->real_escape_string($row['event_name']);
        $img = $conn->real_escape_string($row['image_path']);
        
        // Insert main image
        $conn->query("INSERT INTO gallery_photos (folder_name, image_path) SELECT '$folder', '$img' FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM gallery_photos WHERE image_path='$img' AND folder_name='$folder')");

        // Insert additional images
        if(!empty($row['additional_images']) && $row['additional_images'] !== 'NULL') {
            $adds = json_decode($row['additional_images'], true);
            if(is_array($adds)) {
                foreach($adds as $add_img) {
                    $add_img_esc = $conn->real_escape_string($add_img);
                    $conn->query("INSERT INTO gallery_photos (folder_name, image_path) SELECT '$folder', '$add_img_esc' FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM gallery_photos WHERE image_path='$add_img_esc' AND folder_name='$folder')");
                }
            }
        }
    }
}
echo "Synced successfully.";
?>
