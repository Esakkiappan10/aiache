<?php
$index = file_get_contents('index.html');
preg_match('/<nav id="navbar".*?<\/nav>|<nav class="sticky.*?[^<]<\/nav>/s', $index, $matches);
// Wait, index.html <nav ...> ends with </nav>
// Let's use a simpler string search if regex is tricky, but regex is fine.
$pattern = '/<nav class="sticky top-0 z-50 bg-white\/95.*?<\/nav>/s';
preg_match($pattern, $index, $matches);
if (empty($matches)) {
    die("Could not find nav in index.html");
}
$nav_html = $matches[0];

$files = glob("*.{php,html}", GLOB_BRACE);
$skip = ['index.html', 'login.html', 'admin_dashboard.php', 'fix_nav.php', 'update_event_schema.php', 'update_nav_mobile.php', 'process_register.php'];

foreach ($files as $file) {
    if (in_array($file, $skip)) continue;

    $content = file_get_contents($file);
    
    // Some files might have different <nav> classes, we find <nav> to </nav>
    $new_content = preg_replace('/<nav class="sticky top-0 z-50[^>]*>.*?<\/nav>/s', $nav_html, $content);

    if ($new_content !== $content && $new_content !== null) {
        // Remove Home active state
        $new_content = str_replace('<a href="index.html" class="text-brand-blue font-bold">Home</a>', '<a href="index.html" class="hover:text-brand-blue transition">Home</a>', $new_content);

        // Add correct active state
        if ($file === 'about.php') {
            $new_content = str_replace('<a href="about.php" class="hover:text-brand-blue transition">About Us</a>', '<a href="#" class="text-brand-blue font-bold">About Us</a>', $new_content);
        } elseif ($file === 'members.php') {
            $new_content = str_replace('<a href="members.php" class="hover:text-brand-blue transition">Members</a>', '<a href="#" class="text-brand-blue font-bold">Members</a>', $new_content);
        } elseif ($file === 'events.php') {
            $new_content = str_replace('<a href="events.php" class="hover:text-brand-blue transition">Events & News</a>', '<a href="#" class="text-brand-blue font-bold">Events & News</a>', $new_content);
        } elseif ($file === 'gallery.php') {
            $new_content = str_replace('<a href="gallery.php" class="hover:text-brand-blue transition">Gallery</a>', '<a href="#" class="text-brand-blue font-bold">Gallery</a>', $new_content);
        }

        // Add JS if missing
        if (strpos($new_content, "mobileMenuBtn.addEventListener") === false) {
            $js = "<script>\n        const mobileMenuBtn = document.getElementById('mobile-menu-btn');\n        const mobileMenu = document.getElementById('mobile-menu');\n        if(mobileMenuBtn) {\n            mobileMenuBtn.addEventListener('click', () => {\n                mobileMenu.classList.toggle('hidden');\n            });\n        }\n    </script>\n</body>";
            $new_content = str_replace('</body>', $js, $new_content);
        }
        
        file_put_contents($file, $new_content);
        echo "Updated Nav in $file\n";
    }
}
?>
