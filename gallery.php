<?php
include 'backend/db.php';
// Smart Gallery: Automatically fetches images from the gallery_photos table
$albums = [];
try {
    $check = $conn->query("SHOW TABLES LIKE 'gallery_photos'");
    if($check && $check->num_rows > 0) {
        $sql = "SELECT folder_name, image_path FROM gallery_photos ORDER BY uploaded_at DESC, id DESC";
        $result = $conn->query($sql);
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $albums[$row['folder_name']][] = $row['image_path'];
            }
        }
    }
} catch(Exception $e) {}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | AIACHE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: { blue: '#1e3a8a', dark: '#0f172a', light: '#f8fafc', gold: '#d97706', teal: '#0f766e' }
                    },
                    fontFamily: { sans: ['Outfit', 'sans-serif'], serif: ['Playfair Display', 'serif'] }
                }
            }
        }
    </script>
    <style>
        .hover-lift { transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s ease; }
        .hover-lift:hover { transform: translateY(-5px); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); }
        .gallery-overlay { background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%); }
    </style>
</head>
<body class="bg-brand-light text-slate-700 font-sans antialiased flex flex-col min-h-screen selection:bg-brand-gold selection:text-white">

    <div class="bg-brand-dark text-slate-300 py-2 text-xs border-b border-slate-800">
        <div class="container mx-auto px-4 md:px-8 flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <span class="hidden sm:flex items-center gap-2"><i class="fas fa-phone-alt text-brand-gold"></i>
                    +91-9444761101</span>
                <span class="flex items-center gap-2"><i class="fas fa-envelope text-brand-gold"></i>
                    aiache2011@gmail.com</span>
            </div>
            <div class="flex items-center space-x-4">
                <a href="login.html" class="hover:text-brand-gold transition flex items-center gap-1"><i
                        class="fas fa-lock"></i> Admin Login</a>
            </div>
        </div>
    </div>

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
                    </div>
                </div>

                <a href="editorial_board.php" class="hover:text-brand-blue transition">Editorial Board</a>
                <a href="members.php" class="hover:text-brand-blue transition">Members</a>
                <a href="events.php" class="hover:text-brand-blue transition">Events & News</a>
                <a href="#" class="text-brand-blue font-bold">Gallery</a>
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
                        <a href="founders.php"
                            class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Founders</a>
                        <a href="former_leaders.php"
                            class="block px-4 py-1.5 text-sm text-gray-600 hover:text-brand-blue">Former Leaders</a>
                    </div>
                </div>

                <a href="editorial_board.php"
                    class="px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-brand-blue transition text-gray-700">Editorial Board</a>
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

    <div class="bg-white border-b border-gray-200 sticky top-[73px] z-40 shadow-sm">
        <div class="container mx-auto px-4 md:px-8 py-6">
            <h1 class="text-3xl font-serif font-bold text-brand-blue">Media Gallery</h1>
            <p class="text-gray-500 text-sm mt-1">Capturing moments of excellence.</p>
        </div>
    </div>

    <section class="py-12 bg-gray-50 flex-grow">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
                <?php if (!empty($albums)): ?>
                    <?php $i=0; foreach($albums as $folder => $images): ?>
                    <div class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl hover-lift aspect-[4/3] bg-white" onclick="openAlbum('album-<?php echo $i; ?>')">
                        <img src="uploads/<?php echo htmlspecialchars($images[0]); ?>" alt="Gallery Album" class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 gallery-overlay opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-5">
                            <h3 class="text-white font-bold text-base leading-tight drop-shadow-md"><?php echo htmlspecialchars($folder); ?></h3>
                            <p class="text-gray-200 text-[10px] font-bold uppercase tracking-widest mt-1.5"><i class="fas fa-images mr-1"></i> <?php echo count($images); ?> Photos</p>
                        </div>
                    </div>

                    <!-- Album Lightbox Overlay -->
                    <div id="album-<?php echo $i; ?>" class="fixed inset-0 bg-brand-dark/95 backdrop-blur-md z-[100] hidden flex-col opacity-0 transition-opacity duration-300">
                        <div class="flex justify-between items-center p-5 border-b border-white/10 bg-black/20">
                            <div>
                                <h3 class="text-xl font-sans font-bold text-white tracking-wide flex items-center gap-3"><i class="fas fa-folder-open text-brand-gold"></i> <?php echo htmlspecialchars($folder); ?></h3>
                                <p class="text-gray-400 text-[10px] font-bold tracking-widest uppercase mt-1 ml-8"><?php echo count($images); ?> Photos</p>
                            </div>
                            <button onclick="closeAlbum('album-<?php echo $i; ?>', event)" class="w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition hover:rotate-90"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="flex-1 overflow-y-auto p-4 md:p-6 scroll-smooth">
                            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 max-w-7xl mx-auto">
                                <?php foreach($images as $img): ?>
                                    <div class="group/img relative rounded-xl overflow-hidden shadow-lg aspect-square bg-black/50 border border-white/10 cursor-pointer">
                                        <img src="uploads/<?php echo htmlspecialchars($img); ?>" class="w-full h-full object-cover group-hover/img:scale-110 transition duration-500 opacity-90 group-hover/img:opacity-100" alt="Gallery Photo">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endforeach; ?>
                <?php else: ?>
                    <div class="col-span-full text-center py-20 text-gray-400">
                        <i class="fas fa-images text-4xl mb-3 opacity-50"></i>
                        <p class="font-medium">No gallery images uploaded yet.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <footer class="bg-brand-dark text-white py-12 text-sm border-t border-slate-800 mt-auto">

        <!-- Main footer content -->
        <div class="container mx-auto px-4 md:px-8 flex flex-col md:flex-row justify-between items-center md:items-start gap-8">

            <!-- Left -->
            <div class="text-center md:text-left">
                <h3 class="font-serif font-extrabold tracking-wide text-3xl mb-4">AIACHE</h3>
                <p class="text-gray-400 text-sm">
                    All India Association for Christian Higher Education
                </p>
            </div>

            <!-- Center navigation -->
            <div class="flex gap-8 text-gray-400 font-medium">
                <a href="index.html" class="hover:text-white transition duration-300">Home</a>
                <a href="about.php" class="hover:text-white transition duration-300">About</a>
                <a href="members.php" class="hover:text-white transition duration-300">Members</a>
                <a href="contact.php" class="hover:text-white transition duration-300">Contact</a>
            </div>

            <!-- Right copyright + logo stacked -->
            <div class="flex flex-col items-center md:items-end text-gray-500 text-xs">

                <p class="mb-3">
                    &copy; 2026 AIACHE. All Rights Reserved.
                </p>

                <!-- Logo -->
                <a href="https://frontierwox.in" target="_blank" rel="noopener noreferrer">
                    <img src="images/new_logo.jpeg" alt="FWT Logo"
                        class="h-12 md:h-14 opacity-90 hover:opacity-100 transition duration-300 mix-blend-screen invert">
                </a>

            </div>

        </div>

    </footer>
<script>
    function openAlbum(id) {
        const el = document.getElementById(id);
        el.classList.remove('hidden');
        el.style.display = 'flex';
        document.body.style.overflow = 'hidden';
        setTimeout(() => el.classList.remove('opacity-0'), 10);
    }
    function closeAlbum(id, event) {
        if (event) event.stopPropagation();
        const el = document.getElementById(id);
        el.classList.add('opacity-0');
        document.body.style.overflow = 'auto';
        setTimeout(() => {
            el.classList.add('hidden');
            el.style.display = 'none';
        }, 300);
    }

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
