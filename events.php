<?php
include 'backend/db.php';

// Safe Database Fetch
$events_result = false;
$news_result = false;
try {
    $check = $conn->query("SHOW TABLES LIKE 'collegeevents'");
    if($check && $check->num_rows > 0) {
        $sql_events = "SELECT * FROM collegeevents WHERE event_type='Event' OR event_type IS NULL ORDER BY posted_date DESC, id DESC";
        $events_result = $conn->query($sql_events);

        $sql_news = "SELECT * FROM collegeevents WHERE event_type='News' ORDER BY posted_date DESC, id DESC";
        $news_result = $conn->query($sql_news);
    }
} catch(Exception $e) {
    // Silent fail for UI, admin knows to fix DB
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events & News | AIACHE</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            blue: '#1e3a8a',  /* Deep Navy */
                            dark: '#0f172a',  /* Slate 900 */
                            light: '#f8fafc', /* Slate 50 */
                            gold: '#d97706',  /* Gold Accent */
                            teal: '#0f766e',  /* Teal Accent */
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        .hover-lift { transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s ease; }
        .hover-lift:hover { transform: translateY(-5px); box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1); }
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</head>
<body class="bg-gray-50 text-slate-700 font-sans antialiased flex flex-col min-h-screen">

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
                <a href="#" class="text-brand-blue font-bold">Events & News</a>
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

    <section class="bg-brand-blue text-white py-16 text-center relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-brand-gold/10 rounded-full blur-2xl transform -translate-x-1/2 translate-y-1/2"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4">News & Events</h1>
            <div class="w-20 h-1 bg-brand-gold mx-auto rounded-full mb-4"></div>
            <p class="text-blue-200 text-lg font-light max-w-2xl mx-auto">
                Stay updated with the latest workshops, conferences, and official announcements from the association.
            </p>
        </div>
    </section>

    <!-- EVENTS SECTION -->
    <section class="py-16 bg-white flex-grow border-b border-gray-100">
        <div class="container mx-auto px-4 md:px-8">
            <div class="mb-10 flex flex-col items-center">
                <h2 class="text-3xl font-serif font-bold text-brand-blue mb-3">Upcoming & Recent Events</h2>
                <div class="w-16 h-1 bg-brand-gold rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php if ($events_result && $events_result->num_rows > 0): ?>
                    <?php while($row = $events_result->fetch_assoc()): 
                        // Prepare Data
                        $title = htmlspecialchars($row['event_name']);
                        $desc = strip_tags($row['event_description']); // Remove HTML tags
                        $date = isset($row['posted_date']) ? date("M d, Y", strtotime($row['posted_date'])) : 'Latest';
                        $hasImage = !empty($row['image_path']) && file_exists("uploads/".$row['image_path']);
                        $imageSrc = $hasImage ? "uploads/".htmlspecialchars($row['image_path']) : "";
                    ?>
                    
                    <article class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover-lift flex flex-col h-full group">
                        
                        <div class="relative h-56 bg-gray-100 overflow-hidden">
                            <?php if($hasImage): ?>
                                <img src="<?php echo $imageSrc; ?>" alt="<?php echo $title; ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <?php else: ?>
                                <div class="w-full h-full flex flex-col items-center justify-center text-gray-300 bg-slate-50">
                                    <i class="fas fa-calendar-check text-4xl mb-2"></i>
                                    <span class="text-xs uppercase tracking-widest font-bold">Event</span>
                                </div>
                            <?php endif; ?>
                            
                            <div class="absolute top-4 left-4 bg-brand-blue/90 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-lg">
                                <i class="far fa-calendar-alt mr-1 text-brand-gold"></i> <?php echo $date; ?>
                            </div>
                        </div>

                        <div class="p-6 flex-1 flex flex-col">
                            <div class="mb-3">
                                <span class="bg-blue-50 text-brand-blue text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded border border-blue-100">Event</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif leading-tight group-hover:text-brand-blue transition-colors">
                                <a href="event_details.php?id=<?php echo $row['id']; ?>" class="hover:underline">
                                    <?php echo $title; ?>
                                </a>
                            </h3>
                            <p class="text-gray-500 text-sm leading-relaxed mb-6 line-clamp-3">
                                <?php echo $desc; ?>
                            </p>
                            
                            <div class="mt-auto pt-6 border-t border-gray-50">
                                <a href="event_details.php?id=<?php echo $row['id']; ?>" class="inline-flex items-center text-sm font-bold text-brand-blue group-hover:text-brand-gold transition-colors">
                                    Read Full Details <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; ?>

                <?php else: ?>
                    <div class="col-span-full py-12 text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-blue-50 rounded-full mb-6 text-blue-200">
                            <i class="far fa-calendar-times text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-700">No Events Found</h3>
                        <p class="text-gray-500 mt-2">There are currently no active events scheduled.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- NEWS SECTION -->
    <section class="py-16 bg-gray-50 flex-grow">
        <div class="container mx-auto px-4 md:px-8">
            <div class="mb-10 flex flex-col items-center">
                <h2 class="text-3xl font-serif font-bold text-brand-blue mb-3">Latest News & Announcements</h2>
                <div class="w-16 h-1 bg-brand-gold rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php if ($news_result && $news_result->num_rows > 0): ?>
                    <?php while($row = $news_result->fetch_assoc()): 
                        // Prepare Data
                        $title = htmlspecialchars($row['event_name']);
                        $desc = strip_tags($row['event_description']); // Remove HTML tags
                        $date = isset($row['posted_date']) ? date("M d, Y", strtotime($row['posted_date'])) : 'Latest';
                        $hasImage = !empty($row['image_path']) && file_exists("uploads/".$row['image_path']);
                        $imageSrc = $hasImage ? "uploads/".htmlspecialchars($row['image_path']) : "";
                    ?>
                    
                    <article class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover-lift flex flex-col h-full group">
                        
                        <div class="relative h-56 bg-gray-100 overflow-hidden">
                            <?php if($hasImage): ?>
                                <img src="<?php echo $imageSrc; ?>" alt="<?php echo $title; ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <?php else: ?>
                                <div class="w-full h-full flex flex-col items-center justify-center text-gray-300 bg-slate-50">
                                    <i class="fas fa-newspaper text-4xl mb-2"></i>
                                    <span class="text-xs uppercase tracking-widest font-bold">News Update</span>
                                </div>
                            <?php endif; ?>
                            
                            <div class="absolute top-4 left-4 bg-brand-gold/90 backdrop-blur-sm text-white text-xs font-bold px-3 py-1.5 rounded-lg shadow-lg">
                                <i class="far fa-clock mr-1 text-white"></i> <?php echo $date; ?>
                            </div>
                        </div>

                        <div class="p-6 flex-1 flex flex-col">
                            <div class="mb-3">
                                <span class="bg-purple-50 text-purple-600 text-[10px] font-bold uppercase tracking-wider px-2 py-1 rounded border border-purple-100">News</span>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-3 font-serif leading-tight group-hover:text-brand-blue transition-colors">
                                <a href="event_details.php?id=<?php echo $row['id']; ?>" class="hover:underline">
                                    <?php echo $title; ?>
                                </a>
                            </h3>
                            <p class="text-gray-500 text-sm leading-relaxed mb-6 line-clamp-3">
                                <?php echo $desc; ?>
                            </p>
                            
                            <div class="mt-auto pt-6 border-t border-gray-50">
                                <a href="event_details.php?id=<?php echo $row['id']; ?>" class="inline-flex items-center text-sm font-bold text-brand-blue group-hover:text-brand-gold transition-colors">
                                    Read Full Story <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                    <?php endwhile; ?>

                <?php else: ?>
                    <div class="col-span-full py-12 text-center">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-purple-50 rounded-full mb-6 text-purple-200">
                            <i class="far fa-newspaper text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-700">No News Found</h3>
                        <p class="text-gray-500 mt-2">There are currently no news updates available.</p>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </section>

    <footer class="bg-brand-dark text-white py-8 text-center text-sm border-t border-slate-800 mt-auto">
        <div class="container mx-auto px-4">
            <p>&copy; 2026 AIACHE. All Rights Reserved. <span class="text-slate-600 mx-2">|</span> Designed for Excellence.</p>
        </div>
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
