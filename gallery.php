<?php
include 'backend/db.php';
// Smart Gallery: Automatically fetches images uploaded to events
$result = false;
try {
    $check = $conn->query("SHOW TABLES LIKE 'collegeevents'");
    if($check && $check->num_rows > 0) {
        $sql = "SELECT event_name, image_path FROM collegeevents WHERE image_path IS NOT NULL AND image_path != '' ORDER BY id DESC";
        $result = $conn->query($sql);
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = { theme: { extend: { colors: { brand: { blue: '#1e3a8a', dark: '#0f172a', light: '#f8fafc', gold: '#d97706' } }, fontFamily: { sans: ['Inter', 'sans-serif'], serif: ['Playfair Display', 'serif'] } } } }
    </script>
    <style>
        .hover-lift { transition: transform 0.3s; }
        .hover-lift:hover { transform: translateY(-5px); }
        .gallery-overlay { background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%); }
    </style>
</head>
<body class="bg-brand-light text-slate-700 font-sans antialiased flex flex-col min-h-screen">

    <nav class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-md border-b border-gray-100">
        <div class="container mx-auto px-4 md:px-8 py-3 flex justify-between items-center">
            <a href="index.html" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-brand-blue rounded-lg flex items-center justify-center text-white font-serif font-bold text-xl shadow-lg">A</div>
                <div class="flex flex-col"><h1 class="text-2xl font-serif font-bold text-brand-blue leading-none">AIACHE</h1></div>
            </a>
            <div class="hidden md:flex items-center space-x-8 font-medium text-sm text-gray-600">
                <a href="index.html" class="hover:text-brand-blue transition">Home</a>
                <a href="about.php" class="hover:text-brand-blue transition">About Us</a>
                
                 <!-- Dropdown -->
                 <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-brand-blue transition font-medium text-gray-600">
                        Our Team <i class="fas fa-chevron-down text-xs ml-1"></i>
                    </button>
                    <div class="absolute top-full left-0 w-56 bg-white shadow-xl rounded-xl mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top border border-gray-100 z-50 text-left">
                        <a href="administration.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Administration</a>
                        <a href="executive_board.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Executive Board</a>
                        <a href="founders.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Founders</a>
                        <a href="former_leaders.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Former Leaders</a>
                        <a href="editorial_board.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Editorial Board</a>
                    </div>
                </div>

                <a href="members.php" class="hover:text-brand-blue transition">Members</a>
                <a href="events.php" class="hover:text-brand-blue transition">Events</a>
                <a href="#" class="text-brand-blue font-bold">Gallery</a>
                <!-- Downloads Dropdown -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-brand-blue transition font-medium">
                        Downloads <i class="fas fa-chevron-down text-xs ml-1"></i>
                    </button>
                    <div class="absolute top-full left-0 w-56 bg-white shadow-xl rounded-xl mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top border border-gray-100 z-50 text-left">
                        <a href="resources.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Reports</a>
                        <a href="applications.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Applications</a>
                    </div>
                </div>
                <a href="contact.php" class="hover:text-brand-blue transition">Contact</a>
            </div>
            <button class="md:hidden text-brand-blue text-2xl"><i class="fas fa-bars"></i></button>
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
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6 auto-rows-[200px]">
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                    <div class="group relative rounded-2xl overflow-hidden cursor-pointer shadow-md hover-lift h-64">
                        <img src="uploads/<?php echo htmlspecialchars($row['image_path']); ?>" alt="Gallery" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 gallery-overlay opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                            <h3 class="text-white font-bold text-lg leading-tight"><?php echo htmlspecialchars($row['event_name']); ?></h3>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <div class="col-span-full text-center py-20 text-gray-400">
                        <i class="fas fa-images text-4xl mb-3"></i>
                        <p>No gallery images uploaded yet.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <footer class="bg-brand-dark text-white py-8 text-center text-sm border-t border-slate-800">
        <p>&copy; 2026 AIACHE. All Rights Reserved.</p>
    </footer>
</body>
</html>