<?php
include 'backend/db.php';
$result = false;
try {
    $check = $conn->query("SHOW TABLES LIKE 'adminpdfupload'");
    if($check && $check->num_rows > 0) {
        $sql = "SELECT * FROM adminpdfupload WHERE category = 'Report' OR category IS NULL ORDER BY report_date DESC, id DESC"; 
        $result = $conn->query($sql);
    }
} catch(Exception $e) {}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources | AIACHE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = { theme: { extend: { colors: { brand: { blue: '#1e3a8a', dark: '#0f172a', light: '#f8fafc', gold: '#d97706' } }, fontFamily: { sans: ['Inter', 'sans-serif'], serif: ['Playfair Display', 'serif'] } } } }
    </script>
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
                <a href="gallery.php" class="hover:text-brand-blue transition">Gallery</a>
                <!-- Downloads Dropdown -->
                <div class="relative group">
                    <button class="flex items-center gap-1 text-brand-blue font-bold transition">
                        Downloads <i class="fas fa-chevron-down text-xs ml-1"></i>
                    </button>
                    <div class="absolute top-full left-0 w-56 bg-white shadow-xl rounded-xl mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top border border-gray-100 z-50 text-left">
                        <a href="resources.php" class="block px-4 py-2 text-brand-blue bg-blue-50 font-bold">Reports</a>
                        <a href="applications.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Applications</a>
                    </div>
                </div>


            </div>
            <button class="md:hidden text-brand-blue text-2xl"><i class="fas fa-bars"></i></button>
        </div>
    </nav>

    <section class="bg-slate-900 text-white py-12 relative overflow-hidden">
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <h1 class="text-3xl font-serif font-bold">Reports & Circulars</h1>
            <p class="text-blue-200 mt-2 text-sm">Official circulars, annual reports, and newsletters.</p>
        </div>
    </section>

    <section class="py-12 flex-grow bg-gray-50">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden">
                <div class="p-6 border-b border-gray-100 bg-white flex justify-between items-center">
                    <h2 class="text-lg font-bold text-gray-800">Public Documents</h2>
                </div>
                <ul class="divide-y divide-gray-100">
                    <?php if ($result && $result->num_rows > 0): ?>
                        <?php while($row = $result->fetch_assoc()): ?>
                        <li class="p-6 hover:bg-blue-50/50 transition flex flex-col md:flex-row items-start md:items-center justify-between gap-4 group">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 rounded-xl bg-red-50 text-red-500 border border-red-100 flex items-center justify-center shrink-0">
                                    <i class="fas fa-file-pdf text-2xl"></i>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2 mb-1">
                                        <h4 class="font-bold text-gray-800 text-base group-hover:text-brand-blue transition">
                                            <?php echo htmlspecialchars($row['title'] ?? 'Document'); ?>
                                        </h4>
                                        <?php if(!empty($row['report_date'])): ?>
                                        <span class="text-[10px] font-bold bg-gray-100 text-gray-600 px-2 py-0.5 rounded-full border border-gray-200">
                                            <?php echo date("d M Y", strtotime($row['report_date'])); ?>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(!empty($row['description']) && $row['description'] !== $row['title']): ?>
                                        <p class="text-sm text-gray-500 mb-1"><?php echo htmlspecialchars($row['description']); ?></p>
                                    <?php endif; ?>
                                    <p class="text-xs text-brand-gold font-medium">Official Download</p>
                                </div>
                            </div>
                            <a href="uploads/<?php echo htmlspecialchars($row['filename']); ?>" target="_blank" class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg text-sm font-bold hover:bg-brand-blue hover:text-white transition shadow-sm flex items-center gap-2 w-full md:w-auto justify-center">
                                <i class="fas fa-download"></i> Download
                            </a>
                        </li>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <li class="p-12 text-center text-gray-500">
                            <i class="fas fa-folder-open text-3xl mb-3 text-gray-300 block"></i>
                            No documents currently available.
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>

    <footer class="bg-brand-dark text-white py-8 text-center text-sm border-t border-slate-800">
        <p>&copy; 2026 AIACHE. All Rights Reserved.</p>
    </footer>
</body>
</html>
