<?php
include 'backend/db.php';

// Safe fetch function
function getMembers($conn, $table) {
    $rows = [];
    // Try catching errors if table missing
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

$tn_members = getMembers($conn, "TAMILNADU");
$ka_members = getMembers($conn, "KARNATAKA");
$kl_members = getMembers($conn, "KERALA");
$ap_members = getMembers($conn, "ANDHRA");
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
    </style>
</head>
<body class="bg-gray-50 text-slate-700 font-sans antialiased flex flex-col min-h-screen">

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
                <a href="#" class="text-brand-blue font-bold">Members</a>
                <a href="events.php" class="hover:text-brand-blue transition">Events</a>
                <a href="gallery.php" class="hover:text-brand-blue transition">Gallery</a>
                <a href="resources.php" class="hover:text-brand-blue transition">Downloads</a>
            </div>
            <button class="md:hidden text-brand-blue text-2xl"><i class="fas fa-bars"></i></button>
        </div>
    </nav>

    <section class="bg-brand-blue text-white py-16 text-center relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-brand-gold/10 rounded-full blur-2xl transform -translate-x-1/2 translate-y-1/2"></div>

        <div class="container mx-auto px-4 relative z-10">
            <h1 class="text-3xl md:text-4xl font-serif font-bold mb-2">Member Institutions</h1>
            <p class="text-blue-200 text-sm md:text-base font-light max-w-xl mx-auto">
                A robust network of excellence uniting Christian higher education institutions across South India.
            </p>
        </div>
    </section>

    <div class="container mx-auto px-4 md:px-8 -mt-8 relative z-10">
        <div class="bg-white rounded-xl shadow-lg p-2 flex flex-wrap justify-center gap-2 border border-gray-100 overflow-x-auto no-scrollbar">
            <button onclick="switchTab('tn')" class="tab-btn active px-6 py-2.5 rounded-lg text-sm font-bold transition bg-brand-blue text-white shadow-md transform hover:-translate-y-0.5" id="btn-tn">Tamil Nadu</button>
            <button onclick="switchTab('ka')" class="tab-btn px-6 py-2.5 rounded-lg text-sm font-bold text-gray-600 hover:bg-gray-50 transition transform hover:-translate-y-0.5" id="btn-ka">Karnataka</button>
            <button onclick="switchTab('kl')" class="tab-btn px-6 py-2.5 rounded-lg text-sm font-bold text-gray-600 hover:bg-gray-50 transition transform hover:-translate-y-0.5" id="btn-kl">Kerala</button>
            <button onclick="switchTab('ap')" class="tab-btn px-6 py-2.5 rounded-lg text-sm font-bold text-gray-600 hover:bg-gray-50 transition transform hover:-translate-y-0.5" id="btn-ap">Andhra & TS</button>
        </div>
    </div>

    <section class="py-12 flex-grow">
        <div class="container mx-auto px-4 md:px-8">
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                
                <?php 
                $states = [
                    'tn' => $tn_members, 
                    'ka' => $ka_members, 
                    'kl' => $kl_members, 
                    'ap' => $ap_members
                ];
                
                foreach ($states as $key => $members): 
                    $hiddenClass = ($key === 'tn') ? '' : 'hidden';
                ?>
                <div id="content-<?php echo $key; ?>" class="state-content table-container overflow-x-auto <?php echo $hiddenClass; ?>">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs font-semibold text-gray-500 uppercase bg-gray-50 border-b border-gray-100">
                            <tr>
                                <th class="px-6 py-4 whitespace-nowrap">LM Number</th>
                                <th class="px-6 py-4">Institution Details</th>
                                <th class="px-6 py-4">Head of Institution</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <?php if (!empty($members)): ?>
                                <?php foreach ($members as $row): ?>
                                <tr class="bg-white hover:bg-brand-light transition duration-150 group">
                                    
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="font-mono text-xs font-bold text-brand-blue bg-blue-50 px-2 py-1 rounded border border-blue-100">
                                            <?php echo htmlspecialchars($row['LM_NO']); ?>
                                        </span>
                                    </td>
                                    
                                    <td class="px-6 py-4">
                                        <div class="font-bold text-gray-800 text-base group-hover:text-brand-blue transition-colors">
                                            <?php echo htmlspecialchars($row['Name_of_the_College']); ?>
                                        </div>
                                    </td>
                                    
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-400 shrink-0">
                                                <i class="fas fa-user-tie text-xs"></i>
                                            </div>
                                            <div>
                                                <div class="font-medium text-gray-900 text-sm">
                                                    <?php echo htmlspecialchars($row['Principal_Name']); ?>
                                                </div>
                                                <div class="text-xs text-gray-500 mt-0.5 flex items-center gap-1">
                                                    <i class="fas fa-phone-alt text-[10px] text-brand-gold"></i> 
                                                    <?php echo htmlspecialchars($row['Phone_No']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="3" class="px-6 py-12 text-center">
                                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gray-100 rounded-full mb-4 text-gray-400">
                                            <i class="fas fa-database text-2xl"></i>
                                        </div>
                                        <h3 class="text-gray-800 font-bold">No Records Found</h3>
                                        <p class="text-gray-500 text-xs mt-1">There are currently no members listed for this state.</p>
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
                btn.classList.remove('bg-brand-blue', 'text-white', 'shadow-md');
                btn.classList.add('text-gray-600', 'hover:bg-gray-50');
            });
            
            // Show selected content
            const content = document.getElementById(`content-${state}`);
            if(content) content.classList.remove('hidden');
            
            // Highlight selected button
            const btn = document.getElementById(`btn-${state}`);
            if(btn) {
                btn.classList.remove('text-gray-600', 'hover:bg-gray-50');
                btn.classList.add('bg-brand-blue', 'text-white', 'shadow-md');
            }
        }
    </script>
</body>
</html>