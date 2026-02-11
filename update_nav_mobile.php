<?php
$files = glob("*.{php,html}", GLOB_BRACE);
$new_menu = '<div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-100 absolute w-full left-0 shadow-xl z-50">
            <div class="p-4 space-y-3 flex flex-col font-medium max-h-[80vh] overflow-y-auto">
                <a href="index.html" class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Home</a>
                <a href="about.php" class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">About Us</a>
                
                <div class="space-y-1">
                    <p class="px-4 text-[10px] font-bold text-gray-400 uppercase tracking-wider mt-2">Our Team</p>
                    <div class="pl-4 border-l-2 border-gray-100 ml-4 space-y-1">
                        <a href="administration.php" class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Administration</a>
                        <a href="executive_board.php" class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Executive Board</a>
                        <a href="editorial_board.php" class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Editorial Board</a>
                        <a href="founders.php" class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Founders</a>
                        <a href="former_leaders.php" class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Former Leaders</a>
                    </div>
                </div>

                <a href="members.php" class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Members</a>
                <a href="events.php" class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Events & News</a>
                <a href="gallery.php" class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Gallery</a>
                
                <div class="space-y-1">
                    <p class="px-4 text-[10px] font-bold text-gray-400 uppercase tracking-wider mt-2">Downloads</p>
                    <div class="pl-4 border-l-2 border-gray-100 ml-4 space-y-1">
                        <a href="resources.php" class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Reports & Circulars</a>
                        <a href="applications.php" class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Applications</a>
                    </div>
                </div>

                <a href="contact.php" class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Contact</a>
            </div>
        </div>';

foreach ($files as $file) {
    if ($file == 'update_nav.php' || $file == 'backend/update_nav_mobile.php') continue;
    
    $content = file_get_contents($file);
    
    // Regex to find the existing mobile-menu div
    // Matches <div id="mobile-menu" ... > ... </div>
    // We assume the div ends with </div> and is followed by </nav> OR is inside nav.
    // The previous view showed it is the Last element in nav.
    // So we match: <div id="mobile-menu".*?<\/div>\s*<\/nav>
    
    // Using s modifier for dot matches newline
    $pattern = '/<div id="mobile-menu".*?<\/div>\s*<\/nav>/s';
    $replacement = $new_menu . "\n    </nav>";
    
    // Check if file has mobile menu
    if (strpos($content, 'id="mobile-menu"') !== false) {
        $new_content = preg_replace($pattern, $replacement, $content);
        if ($new_content && $new_content != $content) {
            file_put_contents($file, $new_content);
            echo "Updated $file\n";
        } else {
            echo "Pattern no match or error in $file\n";
        }
    }
}
?>
