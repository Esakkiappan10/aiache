<?php
include 'backend/db.php';
// Ideally, we'd fetch specific application forms from the DB or define them here.
// For now, we'll use a mix of static definition and DB fetching if available.
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applications | AIACHE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = { theme: { extend: { colors: { brand: { blue: '#1e3a8a', dark: '#0f172a', light: '#f8fafc', gold: '#d97706' } }, fontFamily: { sans: ['Inter', 'sans-serif'], serif: ['Playfair Display', 'serif'] } } } }
    </script>
</head>
<body class="bg-brand-light text-slate-700 font-sans antialiased flex flex-col min-h-screen">

    <!-- Navigation (Placeholder - to be updated globally) -->
    <nav class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100 transition-all duration-300"
        id="navbar">
        <div class="container mx-auto px-4 md:px-8 py-3 flex justify-between items-center">
            <a href="index.html" class="flex items-center gap-3 group">
                <!-- Logo Image -->
                <div class="w-12 h-12 flex items-center justify-center">
                    <img src="images/aiache_logo.png" alt="AIACHE Logo"
                        class="w-12 h-12 object-contain transition-transform duration-300 group-hover:scale-105">
                </div>

                <!-- Text -->
                <div class="flex flex-col">
                    <h1
                        class="text-4xl font-serif font-extrabold text-brand-blue leading-none tracking-wide group-hover:text-brand-dark transition-colors">
                        AIACHE
                    </h1>
                    <p class="text-[10px] uppercase tracking-widest text-gray-500 font-medium">
                        Est. 1967 • New Delhi
                    </p>
                </div>
            </a>

            <div class="hidden lg:flex items-center space-x-8 font-semibold text-sm text-gray-600">
                <a href="index.html" class="hover:text-brand-blue transition">Home</a>
                <a href="about.php" class="hover:text-brand-blue transition">About Us</a>

                <!-- Dropdown -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-brand-blue transition font-semibold">
                        Our Team <i class="fas fa-chevron-down text-xs ml-1"></i>
                    </button>
                    <div
                        class="absolute top-full left-0 w-56 bg-white shadow-xl rounded-xl mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top border border-gray-100 z-50 text-left">
                        <a href="administration.php"
                            class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Administration</a>
                        <a href="executive_board.php"
                            class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Executive
                            Board</a>
                        <a href="founders.php"
                            class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Founders</a>
                        <a href="former_leaders.php"
                            class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Former
                            Leaders</a>
                        <a href="editorial_board.php"
                            class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Editorial
                            Board</a>
                    </div>
                </div>

                <a href="members.php" class="hover:text-brand-blue transition">Members</a>
                <a href="events.php" class="hover:text-brand-blue transition">Events & News</a>
                <a href="gallery.php" class="hover:text-brand-blue transition">Gallery</a>
                <!-- Downloads Dropdown -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-brand-blue transition font-semibold">
                        Downloads <i class="fas fa-chevron-down text-xs ml-1"></i>
                    </button>
                    <div
                        class="absolute top-full left-0 w-56 bg-white shadow-xl rounded-xl mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top border border-gray-100 z-50 text-left">
                        <a href="resources.php"
                            class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Reports</a>
                        <a href="applications.php"
                            class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Applications</a>
                    </div>
                </div>

            </div>

            <div class="hidden lg:block">
                <a href="contact.php"
                    class="bg-brand-blue hover:bg-blue-800 text-white px-6 py-2.5 rounded-full text-sm font-semibold transition shadow-lg flex items-center gap-2">
                    Contact Us <i class="fas fa-arrow-right text-xs"></i>
                </a>
            </div>

            <button id="mobile-menu-btn" class="lg:hidden text-brand-blue text-2xl"><i class="fas fa-bars"></i></button>
        </div>

        <div id="mobile-menu"
            class="hidden lg:hidden bg-white border-t border-gray-100 absolute w-full left-0 shadow-xl z-50">
            <div class="p-4 space-y-3 flex flex-col font-medium max-h-[80vh] overflow-y-auto">
                <a href="index.html"
                    class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Home</a>
                <a href="about.php"
                    class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">About
                    Us</a>

                <div class="space-y-1">
                    <p class="px-4 text-[10px] font-bold text-gray-400 uppercase tracking-wider mt-2">Our Team</p>
                    <div class="pl-4 border-l-2 border-gray-100 ml-4 space-y-1">
                        <a href="administration.php"
                            class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Administration</a>
                        <a href="executive_board.php"
                            class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Executive Board</a>
                        <a href="editorial_board.php"
                            class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Editorial Board</a>
                        <a href="founders.php"
                            class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Founders</a>
                        <a href="former_leaders.php"
                            class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Former Leaders</a>
                    </div>
                </div>

                <a href="members.php"
                    class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Members</a>
                <a href="events.php"
                    class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Events
                    & News</a>
                <a href="gallery.php"
                    class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Gallery</a>

                <div class="space-y-1">
                    <p class="px-4 text-[10px] font-bold text-gray-400 uppercase tracking-wider mt-2">Downloads</p>
                    <div class="pl-4 border-l-2 border-gray-100 ml-4 space-y-1">
                        <a href="resources.php"
                            class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Reports &
                            Circulars</a>
                        <a href="applications.php"
                            class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Applications</a>
                    </div>
                </div>

                <a href="contact.php"
                    class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Contact</a>
            </div>
        </div>
    </nav>

    <section class="bg-brand-dark text-white py-16 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-brand-gold/10 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="container mx-auto px-4 md:px-8 relative z-10 text-center">
            <span class="text-brand-gold font-bold tracking-widest uppercase text-xs">Official Documents</span>
            <h1 class="text-3xl md:text-5xl font-serif font-bold mt-2">Application Forms</h1>
            <p class="text-blue-200 mt-4 max-w-xl mx-auto">Download official application forms for membership, grants, and other AIACHE initiatives.</p>
        </div>
    </section>

    <section class="py-16 flex-grow bg-gray-50">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Static Core Applications -->
                <!-- Life Membership -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl transition duration-300 hover:-translate-y-2 group relative overflow-hidden h-full flex flex-col">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gray-50 rounded-full blur-2xl transform translate-x-1/2 -translate-y-1/2 opacity-50"></div>
                    <div class="w-14 h-14 bg-blue-50 rounded-xl flex items-center justify-center text-brand-blue mb-6 group-hover:bg-brand-blue group-hover:text-white transition-colors duration-300 shadow-sm z-10">
                        <i class="fas fa-id-card text-2xl"></i>
                    </div>
                    <h3 class="font-serif font-bold text-gray-800 text-xl mb-3 z-10 min-h-[56px]">Life Membership Application</h3>
                    <p class="text-gray-500 text-sm mb-8 leading-relaxed z-10 flex-grow">
                        Become a lifetime member of AIACHE. Download the official application form here.
                    </p>
                    <a href="Life Membership Application form.pdf" download class="inline-flex items-center justify-center gap-2 text-white font-bold text-sm bg-brand-blue px-6 py-3 rounded-lg hover:bg-brand-gold transition-colors w-full shadow-md z-10 mt-auto">
                        <i class="fas fa-download"></i> Download Application
                    </a>
                </div>

                <!-- Annual Membership -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl transition duration-300 hover:-translate-y-2 group relative overflow-hidden h-full flex flex-col">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gray-50 rounded-full blur-2xl transform translate-x-1/2 -translate-y-1/2 opacity-50"></div>
                    <div class="w-14 h-14 bg-amber-50 rounded-xl flex items-center justify-center text-brand-gold mb-6 group-hover:bg-brand-gold group-hover:text-white transition-colors duration-300 shadow-sm z-10">
                        <i class="fas fa-calendar-check text-2xl"></i>
                    </div>
                    <h3 class="font-serif font-bold text-gray-800 text-xl mb-3 z-10 min-h-[56px]">Annual Membership Application</h3>
                    <p class="text-gray-500 text-sm mb-8 leading-relaxed z-10 flex-grow">
                        Apply for annual membership renewal or new registration. Download the form.
                    </p>
                    <a href="Annual Membership Application form.pdf" download class="inline-flex items-center justify-center gap-2 text-white font-bold text-sm bg-brand-blue px-6 py-3 rounded-lg hover:bg-brand-gold transition-colors w-full shadow-md z-10 mt-auto">
                        <i class="fas fa-download"></i> Download Application
                    </a>
                </div>

                <!-- Individual Friend -->
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl transition duration-300 hover:-translate-y-2 group relative overflow-hidden h-full flex flex-col">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gray-50 rounded-full blur-2xl transform translate-x-1/2 -translate-y-1/2 opacity-50"></div>
                    <div class="w-14 h-14 bg-teal-50 rounded-xl flex items-center justify-center text-teal-600 mb-6 group-hover:bg-teal-600 group-hover:text-white transition-colors duration-300 shadow-sm z-10">
                        <i class="fas fa-user-friends text-2xl"></i>
                    </div>
                    <h3 class="font-serif font-bold text-gray-800 text-xl mb-3 z-10 min-h-[56px]">Individual Friend's Application</h3>
                    <p class="text-gray-500 text-sm mb-8 leading-relaxed z-10 flex-grow">
                        Join as an individual friend of AIACHE. Download the application form.
                    </p>
                    <a href="Individual Friend's Application form.pdf" download class="inline-flex items-center justify-center gap-2 text-white font-bold text-sm bg-brand-blue px-6 py-3 rounded-lg hover:bg-brand-gold transition-colors w-full shadow-md z-10 mt-auto">
                        <i class="fas fa-download"></i> Download Application
                    </a>
                </div>

                <?php
                // Fetch dynamic applications
                $sql_apps = "SELECT * FROM adminpdfupload WHERE category = 'Application' ORDER BY id DESC";
                try {
                    $result_apps = $conn->query($sql_apps);
                } catch(Exception $e) { $result_apps = false; }
                
                if ($result_apps && $result_apps->num_rows > 0):
                    while($row = $result_apps->fetch_assoc()):
                        // Determine card style based on title keywords for variety (optional but nice)
                        $is_life = stripos($row['title'], 'Life') !== false;
                        $is_annual = stripos($row['title'], 'Annual') !== false;
                        
                        $icon = 'fas fa-file-alt';
                        $icon_bg = 'bg-blue-50';
                        $icon_text = 'text-brand-blue';
                        $hover_bg = 'group-hover:bg-brand-blue';
                        $hover_text = 'group-hover:text-white';
                        
                        if ($is_life) {
                            $icon = 'fas fa-id-card';
                        } elseif ($is_annual) {
                            $icon = 'fas fa-calendar-check';
                            $icon_bg = 'bg-amber-50';
                            $icon_text = 'text-brand-gold';
                            $hover_bg = 'group-hover:bg-brand-gold';
                        } elseif (stripos($row['title'], 'Friend') !== false) {
                            $icon = 'fas fa-user-friends';
                            $icon_bg = 'bg-teal-50';
                            $icon_text = 'text-teal-600';
                            $hover_bg = 'group-hover:bg-teal-600';
                        } elseif (stripos($row['title'], 'Grant') !== false) {
                            $icon = 'fas fa-hand-holding-usd';
                        } elseif (stripos($row['title'], 'Scholarship') !== false) {
                             $icon = 'fas fa-user-graduate';
                        }
                ?>
                <div class="bg-white rounded-xl shadow-lg border border-gray-100 p-8 hover:shadow-2xl transition duration-300 hover:-translate-y-2 group relative overflow-hidden h-full flex flex-col">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gray-50 rounded-full blur-2xl transform translate-x-1/2 -translate-y-1/2 opacity-50"></div>
                    
                    <div class="w-14 h-14 <?php echo $icon_bg; ?> rounded-xl flex items-center justify-center <?php echo $icon_text; ?> mb-6 <?php echo $hover_bg; ?> <?php echo $hover_text; ?> transition-colors duration-300 shadow-sm z-10">
                        <i class="<?php echo $icon; ?> text-2xl"></i>
                    </div>
                    
                    <h3 class="font-serif font-bold text-gray-800 text-xl mb-3 z-10 min-h-[56px]"><?php echo htmlspecialchars($row['title']); ?></h3>
                    
                    <p class="text-gray-500 text-sm mb-8 leading-relaxed z-10 flex-grow">
                        <?php echo !empty($row['description']) ? htmlspecialchars($row['description']) : 'Click below to download the official application form.'; ?>
                    </p>
                    
                    <a href="uploads/<?php echo htmlspecialchars($row['filename']); ?>" download class="inline-flex items-center justify-center gap-2 text-white font-bold text-sm bg-brand-blue px-6 py-3 rounded-lg hover:bg-brand-gold transition-colors w-full shadow-md z-10 mt-auto">
                        <i class="fas fa-download"></i> Download Application
                    </a>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-span-full text-center py-12 bg-white rounded-xl border border-dashed border-gray-300 text-gray-500">
                        <i class="fas fa-folder-open text-4xl mb-3 text-gray-300"></i>
                        <p>No application forms currently available.</p>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <footer class="bg-brand-dark text-white py-8 text-center text-sm border-t border-slate-800 mt-auto">
        <p>&copy; 2026 AIACHE. All Rights Reserved.</p>
    </footer>

<script>
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        if(mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>
