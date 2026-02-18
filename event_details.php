<?php
include 'backend/db.php';

// Get Event ID
$event_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch Event Details
$event = null;
if ($event_id > 0) {
    try {
        $stmt = $conn->prepare("SELECT * FROM collegeevents WHERE id = ?");
        $stmt->bind_param("i", $event_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $event = $result->fetch_assoc();
        }
    } catch (Exception $e) {
        // Handle error gracefully
    }
}

// Redirect if invalid ID
if (!$event) {
    header("Location: events.php");
    exit();
}

// Prepare Data
$title = htmlspecialchars($event['event_name']);
$desc = nl2br(htmlspecialchars($event['event_description'])); // Preserve line breaks
$date = isset($event['posted_date']) ? date("F d, Y", strtotime($event['posted_date'])) : 'Latest';
$hasImage = !empty($event['image_path']) && file_exists("uploads/".$event['image_path']);
$imageSrc = $hasImage ? "uploads/".htmlspecialchars($event['image_path']) : "";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> | AIACHE Events</title>
    
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
</head>
<body class="bg-gray-50 text-slate-700 font-sans antialiased flex flex-col min-h-screen">

    <!-- Navigation -->
    <nav class="sticky top-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100">
        <div class="container mx-auto px-4 md:px-8 py-3 flex justify-between items-center">
            <a href="index.html" class="flex items-center gap-3 group">
                <div class="w-10 h-10 bg-brand-blue rounded-lg flex items-center justify-center text-white font-serif font-bold text-xl shadow-lg transition-transform group-hover:scale-105">A</div>
                <div class="flex flex-col">
                    <h1 class="text-2xl font-serif font-bold text-brand-blue leading-none">AIACHE</h1>
                </div>
            </a>
            <div class="hidden md:flex items-center space-x-8 font-medium text-sm text-gray-600">
                <a href="index.html" class="hover:text-brand-blue transition">Home</a>
                <a href="events.php" class="text-brand-blue font-bold flex items-center gap-2">
                    <i class="fas fa-arrow-left"></i> Back to Events
                </a>
            </div>
            <a href="events.php" class="md:hidden text-brand-blue text-sm font-bold">
                <i class="fas fa-arrow-left"></i> Back
            </a>
        </div>
    </nav>

    <!-- Content Section -->
    <main class="flex-grow container mx-auto px-4 md:px-8 py-10 max-w-5xl">
        
        <article class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            
            <!-- Event Header -->
            <div class="p-8 md:p-12 border-b border-gray-100">
                <div class="flex items-center gap-4 mb-6">
                    <span class="bg-brand-blue/10 text-brand-blue text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">
                        Event Details
                    </span>
                    <div class="flex items-center gap-2 text-gray-500 text-sm font-medium">
                        <i class="far fa-calendar-alt text-brand-gold"></i>
                        <span>Posted on <?php echo $date; ?></span>
                    </div>
                </div>

                <h1 class="text-3xl md:text-5xl font-serif font-bold text-gray-900 leading-tight mb-6">
                    <?php echo $title; ?>
                </h1>
            </div>

            <!-- Featured Image -->
            <?php if ($hasImage): ?>
            <div class="w-full h-80 md:h-[500px] bg-gray-100 relative">
                <img src="<?php echo $imageSrc; ?>" alt="<?php echo $title; ?>" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
            </div>
            <?php endif; ?>

            <!-- Event Description -->
            <div class="p-8 md:p-12">
                <div class="prose prose-lg prose-blue max-w-none text-gray-600 leading-relaxed font-light">
                    <?php echo $desc; ?>
                </div>

                <!-- Call to Action / Footer -->
                <div class="mt-12 pt-8 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand-blue rounded-full flex items-center justify-center text-white text-xl">
                            <i class="fas fa-share-alt"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-900">Share this Event</p>
                            <p class="text-xs text-gray-500">Spread the word with your network</p>
                        </div>
                    </div>
                    
                    <a href="events.php" class="inline-flex items-center gap-2 px-6 py-3 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold rounded-xl transition-colors">
                        <i class="fas fa-th-large"></i> View All Events
                    </a>
                </div>
            </div>

        </article>

    </main>

    <!-- Footer -->
    <footer class="bg-brand-dark text-white py-8 text-center text-sm border-t border-slate-800 mt-12">
        <div class="container mx-auto px-4">
            <p>&copy; 2026 AIACHE. All Rights Reserved. <span class="text-slate-600 mx-2">|</span> Designed for Excellence.</p>
        </div>
    </footer>

</body>
</html>
