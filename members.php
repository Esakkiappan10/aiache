<?php
include 'backend/db.php';

// Safe fetch function
function getMembers($conn, $table) {
    $rows = [];
    try {
        $check = $conn->query("SHOW TABLES LIKE '$table'");
        if($check && $check->num_rows > 0) {
            $sql = "SELECT * FROM $table ORDER BY id ASC";
            $result = $conn->query($sql);
            if ($result) { while($row = $result->fetch_assoc()) { $rows[] = $row; } }
        }
    } catch(Exception $e) {}
    return $rows;
}

function formatUrl($url) {
    if (empty($url)) return '';
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        return "http://" . $url;
    }
    return $url;
}

$tn_members = getMembers($conn, "TAMILNADU");
$ka_members = getMembers($conn, "KARNATAKA");
$kl_members = getMembers($conn, "KERALA");
$ap_members = getMembers($conn, "ANDHRA"); // Updated Table
$north_members = getMembers($conn, "NORTHERN");
$east_members = getMembers($conn, "EASTERN");
$ne_members = getMembers($conn, "NORTHEAST");
$west_members = getMembers($conn, "WESTERN");
$life_members = getMembers($conn, "LIFEMEMBERS");
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Institutions | AIACHE</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700;800&display=swap" rel="stylesheet">
    
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
        .hover-lift { transition: transform 0.2s; }
        .hover-lift:hover { transform: translateY(-2px); }
        /* Custom Scrollbar for Table */
        .table-container::-webkit-scrollbar { height: 6px; }
        .table-container::-webkit-scrollbar-track { background: #f1f1f1; }
        .table-container::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        .table-container::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        
        .tab-btn.active {
            background-color: #1e3a8a;
            color: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
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

                <a href="#" class="text-brand-blue font-bold">Members</a>
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

    <section class="bg-brand-blue text-white py-16 text-center relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-brand-gold/10 rounded-full blur-2xl transform -translate-x-1/2 translate-y-1/2"></div>

        <div class="container mx-auto px-4 relative z-10">
            <h1 class="text-3xl md:text-4xl font-serif font-bold mb-2">Member Institutions</h1>
            <p class="text-blue-200 text-sm md:text-base font-light max-w-xl mx-auto">
                A robust network of excellence uniting Christian higher education institutions across India.
            </p>
        </div>
    </section>

    <div class="container mx-auto px-4 md:px-8 -mt-8 relative z-10 sm:max-w-6xl">
        <div class="bg-white rounded-xl shadow-lg p-3 flex gap-2 border border-gray-100 overflow-x-auto no-scrollbar justify-start md:justify-center snap-x whitespace-nowrap">
            <button onclick="switchTab('ap')" class="tab-btn active px-5 py-2.5 rounded-lg text-xs md:text-sm font-bold transition text-gray-600 hover:bg-gray-50 snap-center" id="btn-ap">Andhra Region</button>
            <button onclick="switchTab('tn')" class="tab-btn px-5 py-2.5 rounded-lg text-xs md:text-sm font-bold transition text-gray-600 hover:bg-gray-50 snap-center" id="btn-tn">Tamil Nadu</button>
            <button onclick="switchTab('ka')" class="tab-btn px-5 py-2.5 rounded-lg text-xs md:text-sm font-bold transition text-gray-600 hover:bg-gray-50 snap-center" id="btn-ka">Karnataka</button>
            <button onclick="switchTab('kl')" class="tab-btn px-5 py-2.5 rounded-lg text-xs md:text-sm font-bold transition text-gray-600 hover:bg-gray-50 snap-center" id="btn-kl">Kerala</button>
            <button onclick="switchTab('north')" class="tab-btn px-5 py-2.5 rounded-lg text-xs md:text-sm font-bold transition text-gray-600 hover:bg-gray-50 snap-center" id="btn-north">Northern</button>
            <button onclick="switchTab('east')" class="tab-btn px-5 py-2.5 rounded-lg text-xs md:text-sm font-bold transition text-gray-600 hover:bg-gray-50 snap-center" id="btn-east">Eastern</button>
            <button onclick="switchTab('ne')" class="tab-btn px-5 py-2.5 rounded-lg text-xs md:text-sm font-bold transition text-gray-600 hover:bg-gray-50 snap-center" id="btn-ne">North East</button>
            <button onclick="switchTab('west')" class="tab-btn px-5 py-2.5 rounded-lg text-xs md:text-sm font-bold transition text-gray-600 hover:bg-gray-50 snap-center" id="btn-west">Western</button>
            <button onclick="switchTab('life')" class="tab-btn px-5 py-2.5 rounded-lg text-xs md:text-sm font-bold transition text-gray-600 hover:bg-gray-50 snap-center" id="btn-life">Life Members</button>
        </div>
    </div>

    <section class="py-12 flex-grow">
        <div class="container mx-auto px-4 md:px-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden min-h-[400px]">
                
                <?php 
                $states = [
                    'ap' => $ap_members,
                    'tn' => $tn_members, 
                    'ka' => $ka_members, 
                    'kl' => $kl_members, 
                    'north' => $north_members,
                    'east' => $east_members,
                    'ne' => $ne_members,
                    'west' => $west_members,
                    'life' => $life_members
                ];
                
                foreach ($states as $key => $members): 
                    $hiddenClass = ($key === 'ap') ? '' : 'hidden'; // Default to AP as per request to see changes
                ?>
                <div id="content-<?php echo $key; ?>" class="state-content table-container overflow-x-auto <?php echo $hiddenClass; ?>">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs font-semibold text-gray-500 uppercase bg-gray-50 border-b border-gray-100">
                            <tr>
                                <th class="px-6 py-4 whitespace-nowrap w-24">LM Number</th>
                                <th class="px-6 py-4">Institution Details</th>
                                <th class="px-6 py-4 w-64">Contact Info</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <?php if (!empty($members)): ?>
                                <?php foreach ($members as $row): ?>
                                <tr class="bg-white hover:bg-brand-light transition duration-150 group">
                                    
                                    <td class="px-6 py-4 whitespace-nowrap align-top">
                                        <span class="font-mono text-xs font-bold text-brand-blue bg-blue-50 px-2 py-1 rounded border border-blue-100 inline-block">
                                            <?php echo htmlspecialchars($row['LM_NO']); ?>
                                        </span>
                                    </td>
                                    
                                    <td class="px-6 py-4 align-top">
                                        <div class="font-bold text-gray-900 text-base mb-1">
                                            <?php echo htmlspecialchars($row['Name_of_the_College']); ?>
                                        </div>
                                        <?php if (!empty($row['Website'])): ?>
                                            <a href="<?php echo htmlspecialchars(formatUrl($row['Website'])); ?>" target="_blank" class="inline-flex items-center gap-1 text-xs text-brand-blue hover:underline font-medium bg-blue-50/50 px-2 py-0.5 rounded-full mt-1">
                                                <i class="fas fa-globe text-[10px]"></i> Visit Website
                                            </a>
                                        <?php endif; ?>
                                    </td>
                                    
                                    <td class="px-6 py-4 align-top">
                                        <div class="flex flex-col gap-2">
                                            <?php if (!empty($row['Principal_Name'])): ?>
                                            <div class="flex items-start gap-2">
                                                <div class="w-5 h-5 rounded bg-gray-100 flex items-center justify-center text-gray-400 shrink-0 mt-0.5">
                                                    <i class="fas fa-user text-[10px]"></i>
                                                </div>
                                                <span class="text-sm text-gray-700 font-medium"><?php echo htmlspecialchars($row['Principal_Name']); ?></span>
                                            </div>
                                            <?php endif; ?>

                                            <?php if (!empty($row['Phone_No'])): ?>
                                            <div class="flex items-center gap-2">
                                                <div class="w-5 h-5 rounded bg-gray-100 flex items-center justify-center text-gray-400 shrink-0">
                                                    <i class="fas fa-phone text-[10px]"></i>
                                                </div>
                                                <span class="text-xs text-gray-500 font-mono"><?php echo htmlspecialchars($row['Phone_No']); ?></span>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </td>

                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" class="px-6 py-16 text-center">
                                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-50 rounded-full mb-4 text-gray-300">
                                            <i class="fas fa-folder-open text-2xl"></i>
                                        </div>
                                        <h3 class="text-gray-800 font-bold">No Records Found</h3>
                                        <p class="text-gray-500 text-xs mt-1">There are currently no members listed for this region.</p>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <footer class="bg-brand-dark text-white py-8 text-center text-sm border-t border-slate-800 mt-auto">
        <div class="container mx-auto px-4">
            <p class="opacity-80">&copy; 2026 AIACHE. All Rights Reserved. <span class="mx-2 text-slate-600">|</span> Designed for Excellence.</p>
        </div>
    </footer>

    <script>
        function switchTab(state) {
            // Hide all content areas
            document.querySelectorAll('.state-content').forEach(el => el.classList.add('hidden'));
            
            // Reset all buttons to default style
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            
            // Show selected content
            const content = document.getElementById(`content-${state}`);
            if(content) content.classList.remove('hidden');
            
            // Highlight selected button
            const btn = document.getElementById(`btn-${state}`);
            if(btn) btn.classList.add('active');
        }
    </script>
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
