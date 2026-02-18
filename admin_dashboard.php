<?php
session_start();

// 1. Security Check
if (!isset($_SESSION['admin'])) {
    header("Location: login.html");
    exit();
}

include 'backend/db.php';

// Helper Functions (Same as before, ensuring stability)
function getSafeCount($conn, $table, $condition = "") {
    try {
        $check = $conn->query("SHOW TABLES LIKE '$table'");
        if ($check && $check->num_rows > 0) {
            $sql = "SELECT COUNT(*) as count FROM $table $condition";
            $result = $conn->query($sql);
            if ($result) return $result->fetch_assoc()['count'];
        }
    } catch (Exception $e) { return 0; }
    return 0;
}

function getSafeRows($conn, $table, $limit = 10) {
    try {
        $check = $conn->query("SHOW TABLES LIKE '$table'");
        if ($check && $check->num_rows > 0) {
            $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT $limit";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) return $result;
        }
    } catch (Exception $e) { return false; }
    return false;
}

// Fetch Data
$tn_count = getSafeCount($conn, "TAMILNADU");
$ka_count = getSafeCount($conn, "KARNATAKA");
$kl_count = getSafeCount($conn, "KERALA");
$ap_count = getSafeCount($conn, "ANDHRA");
$north_count = getSafeCount($conn, "NORTHERN");
$east_count = getSafeCount($conn, "EASTERN");
$ne_count = getSafeCount($conn, "NORTHEAST");
$west_count = getSafeCount($conn, "WESTERN");
$life_count = getSafeCount($conn, "LIFEMEMBERS");

$total_members = $tn_count + $ka_count + $kl_count + $ap_count + $north_count + $east_count + $ne_count + $west_count + $life_count;

$total_events = getSafeCount($conn, "collegeevents");
$total_downloads = getSafeCount($conn, "adminpdfupload");
$total_pending = getSafeCount($conn, "viewcomments", "WHERE status = 0");

$recent_activity = getSafeRows($conn, "collegeevents", 5);

// Dynamic Member Fetching
$region = isset($_GET['region']) ? $_GET['region'] : 'TAMILNADU';
$valid_regions = ['TAMILNADU', 'KERALA', 'KARNATAKA', 'ANDHRA', 'NORTHERN', 'EASTERN', 'NORTHEAST', 'WESTERN', 'LIFEMEMBERS'];
if (!in_array($region, $valid_regions)) { $region = 'TAMILNADU'; }

$members_list = getSafeRows($conn, $region, 50); 
$events_list = getSafeRows($conn, "collegeevents", 10);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | AIACHE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { brand: { blue: '#1e3a8a', dark: '#0f172a', gold: '#d97706', light: '#f8fafc' } },
                    fontFamily: { sans: ['Inter', 'sans-serif'] }
                }
            }
        }
    </script>
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
        .hover-lift { transition: transform 0.2s; }
        .hover-lift:hover { transform: translateY(-2px); }
    </style>
</head>
<body class="bg-gray-50 font-sans antialiased flex h-screen overflow-hidden text-sm">

    <aside class="w-64 bg-brand-dark text-white flex flex-col shadow-2xl z-20 hidden md:flex flex-shrink-0">
        <div class="h-16 flex items-center px-6 bg-brand-blue shadow-lg">
            <div class="font-bold text-lg tracking-wide flex items-center gap-2">
                <i class="fas fa-shield-alt text-brand-gold"></i> AIACHE Admin
            </div>
        </div>
        
        <nav class="flex-1 py-6 space-y-1 overflow-y-auto">
            <a href="#" onclick="showSection('dashboard')" class="nav-item active flex items-center px-6 py-3 bg-white/10 text-white border-l-4 border-brand-gold">
                <i class="fas fa-th-large w-6 opacity-70"></i> <span class="font-medium">Dashboard</span>
            </a>
            <div class="px-6 pt-6 pb-2 text-[10px] font-bold text-gray-500 uppercase tracking-widest">Modules</div>
            <a href="#" onclick="showSection('members')" class="nav-item flex items-center px-6 py-3 text-gray-400 hover:text-white hover:bg-white/5 transition border-l-4 border-transparent hover:border-brand-gold">
                <i class="fas fa-university w-6 opacity-70"></i> <span class="font-medium">Members</span>
            </a>
            <a href="#" onclick="showSection('events')" class="nav-item flex items-center px-6 py-3 text-gray-400 hover:text-white hover:bg-white/5 transition border-l-4 border-transparent hover:border-brand-gold">
                <i class="fas fa-calendar-alt w-6 opacity-70"></i> <span class="font-medium">Events</span>
            </a>
            <a href="#" onclick="showSection('files')" class="nav-item flex items-center px-6 py-3 text-gray-400 hover:text-white hover:bg-white/5 transition border-l-4 border-transparent hover:border-brand-gold">
                <i class="fas fa-folder-open w-6 opacity-70"></i> <span class="font-medium">Resources</span>
            </a>
        </nav>

        <div class="p-4 border-t border-gray-800">
            <a href="backend/logout.php" class="flex items-center gap-3 text-gray-400 hover:text-red-400 transition text-xs font-bold uppercase tracking-wide">
                <i class="fas fa-power-off"></i> <span>Secure Logout</span>
            </a>
        </div>
    </aside>

    <div class="flex-1 flex flex-col h-screen overflow-hidden relative w-full">
        <header class="h-16 bg-white shadow-sm flex items-center justify-between px-6 z-10 flex-shrink-0 border-b border-gray-200">
            <div class="flex items-center gap-4">
                <button class="md:hidden text-gray-600 text-lg"><i class="fas fa-bars"></i></button>
                <h1 class="text-gray-700 font-bold text-lg hidden sm:block" id="page-title">Dashboard Overview</h1>
            </div>
            <div class="flex items-center gap-4">
                <div class="relative">
                    <i class="far fa-bell text-gray-400 text-lg"></i>
                    <?php if($total_pending > 0): ?>
                    <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full animate-pulse"></span>
                    <?php endif; ?>
                </div>
                <div class="h-8 w-8 rounded-full bg-brand-blue text-white flex items-center justify-center font-bold text-xs shadow-md">A</div>
            </div>
        </header>

        <main class="flex-1 overflow-y-auto p-6 bg-gray-50 w-full scroll-smooth">
            
            <div id="section-dashboard" class="admin-section space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between hover-lift">
                        <div>
                            <p class="text-gray-400 text-[10px] uppercase font-bold tracking-wider">Total Members</p>
                            <h3 class="text-2xl font-bold text-brand-blue mt-1"><?php echo number_format($total_members); ?></h3>
                        </div>
                        <div class="h-10 w-10 bg-blue-50 text-brand-blue rounded-lg flex items-center justify-center"><i class="fas fa-users"></i></div>
                    </div>
                    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between hover-lift">
                        <div>
                            <p class="text-gray-400 text-[10px] uppercase font-bold tracking-wider">Active Events</p>
                            <h3 class="text-2xl font-bold text-teal-600 mt-1"><?php echo number_format($total_events); ?></h3>
                        </div>
                        <div class="h-10 w-10 bg-teal-50 text-teal-600 rounded-lg flex items-center justify-center"><i class="fas fa-calendar-check"></i></div>
                    </div>
                    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between hover-lift">
                        <div>
                            <p class="text-gray-400 text-[10px] uppercase font-bold tracking-wider">Pending Approvals</p>
                            <h3 class="text-2xl font-bold text-brand-gold mt-1"><?php echo number_format($total_pending); ?></h3>
                        </div>
                        <div class="h-10 w-10 bg-amber-50 text-brand-gold rounded-lg flex items-center justify-center"><i class="fas fa-clock"></i></div>
                    </div>
                    <div class="bg-white p-5 rounded-xl shadow-sm border border-gray-100 flex items-center justify-between hover-lift">
                        <div>
                            <p class="text-gray-400 text-[10px] uppercase font-bold tracking-wider">Resources</p>
                            <h3 class="text-2xl font-bold text-purple-600 mt-1"><?php echo number_format($total_downloads); ?></h3>
                        </div>
                        <div class="h-10 w-10 bg-purple-50 text-purple-600 rounded-lg flex items-center justify-center"><i class="fas fa-file-download"></i></div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                        <h3 class="font-bold text-gray-700">Recent Activity</h3>
                        <button class="text-brand-blue text-xs font-bold hover:underline">View All</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <tbody class="divide-y divide-gray-50">
                                <?php if ($recent_activity): ?>
                                    <?php while($row = $recent_activity->fetch_assoc()): ?>
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-6 py-3">
                                            <div class="flex items-center gap-3">
                                                <div class="h-8 w-8 rounded bg-blue-50 text-brand-blue flex items-center justify-center flex-shrink-0"><i class="fas fa-plus text-xs"></i></div>
                                                <div>
                                                    <p class="font-medium text-gray-800 text-xs sm:text-sm truncate w-48 sm:w-auto">New Event: "<?php echo htmlspecialchars($row['event_name']); ?>"</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-3 text-right text-xs text-gray-400">
                                            <?php echo isset($row['posted_date']) ? date("M d, H:i", strtotime($row['posted_date'])) : 'Just now'; ?>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr><td class="px-6 py-8 text-center text-gray-400">No recent activity.</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="section-members" class="admin-section hidden space-y-6">
                <!-- Data Filters & Actions -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-5 rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition">
                    <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                        <select onchange="updateMemberRegion(this.value)" class="bg-gray-50 border border-gray-200 text-gray-700 text-sm rounded-xl focus:ring-2 focus:ring-brand-blue focus:border-brand-blue block p-2.5 outline-none font-medium transition cursor-pointer hover:bg-white">
                            <option value="TAMILNADU" <?php echo ($region == 'TAMILNADU') ? 'selected' : ''; ?>>Tamil Nadu Region</option>
                            <option value="KERALA" <?php echo ($region == 'KERALA') ? 'selected' : ''; ?>>Kerala Region</option>
                            <option value="KARNATAKA" <?php echo ($region == 'KARNATAKA') ? 'selected' : ''; ?>>Karnataka Region</option>
                            <option value="ANDHRA" <?php echo ($region == 'ANDHRA') ? 'selected' : ''; ?>>Andhra Pradesh Region</option>
                            <option value="NORTHERN" <?php echo ($region == 'NORTHERN') ? 'selected' : ''; ?>>Northern Region</option>
                            <option value="EASTERN" <?php echo ($region == 'EASTERN') ? 'selected' : ''; ?>>Eastern Region</option>
                            <option value="NORTHEAST" <?php echo ($region == 'NORTHEAST') ? 'selected' : ''; ?>>North East Region</option>
                            <option value="WESTERN" <?php echo ($region == 'WESTERN') ? 'selected' : ''; ?>>Western Region</option>
                            <option value="LIFEMEMBERS" <?php echo ($region == 'LIFEMEMBERS') ? 'selected' : ''; ?>>Life Members</option>
                        </select>
                        <div class="relative w-full sm:w-72">
                            <input type="text" class="bg-white border border-gray-200 text-gray-700 text-sm rounded-xl focus:ring-2 focus:ring-brand-blue focus:border-brand-blue block w-full p-2.5 pl-10 outline-none transition shadow-sm" placeholder="Search LM ID, College or Principal...">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"><i class="fas fa-search text-gray-400"></i></div>
                        </div>
                    </div>
                    <button onclick="toggleModal('addMemberModal')" class="bg-brand-blue hover:bg-blue-800 text-white font-bold py-2.5 px-6 rounded-xl text-sm flex items-center gap-2 shadow-lg hover:shadow-brand-blue/30 transition transform hover:-translate-y-0.5 active:scale-95">
                        <i class="fas fa-plus"></i> Add Member
                    </button>
                </div>

                <!-- Members Table -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead class="bg-gray-50/50 text-xs uppercase text-gray-500 font-bold border-b border-gray-100 tracking-wider">
                                <tr>
                                    <th class="px-6 py-4">Institution Details</th>
                                    <th class="px-6 py-4">LM ID</th>
                                    <th class="px-6 py-4">Principal / Contact</th>
                                    <th class="px-6 py-4 text-center">Status</th>
                                    <th class="px-6 py-4 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50 text-sm">
                                <?php if ($members_list): ?>
                                    <?php while($row = $members_list->fetch_assoc()): ?>
                                    <tr class="hover:bg-blue-50/40 transition duration-200 group">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-4">
                                                <div class="h-10 w-10 rounded-full bg-gradient-to-br from-blue-50 to-blue-100 text-brand-blue flex items-center justify-center flex-shrink-0 border border-blue-200 shadow-sm">
                                                    <i class="fas fa-university"></i>
                                                </div>
                                                <div>
                                                    <h4 class="font-bold text-gray-800 flex items-center gap-1.5">
                                                        <?php echo htmlspecialchars($row['Name_of_the_College']); ?>
                                                        <i class="fas fa-check-circle text-green-500 text-xs" title="Verified Member Application"></i>
                                                    </h4>
                                                    <?php if(!empty($row['Website'])): ?>
                                                        <a href="<?php echo htmlspecialchars($row['Website']); ?>" target="_blank" class="text-xs text-brand-blue hover:underline flex items-center gap-1 mt-0.5"><i class="fas fa-link text-[10px]"></i> Visit Website</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="font-mono text-xs font-bold text-gray-500 bg-gray-100 px-2 py-1 rounded border border-gray-200">
                                                <?php echo htmlspecialchars($row['LM_NO']); ?>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-gray-700 font-medium"><?php echo htmlspecialchars($row['Principal_Name']); ?></div>
                                            <?php if(!empty($row['Phone_No'])): ?>
                                                <div class="text-xs text-gray-400 mt-0.5"><i class="fas fa-phone-alt text-[10px] mr-1"></i> <?php echo htmlspecialchars($row['Phone_No']); ?></div>
                                            <?php endif; ?>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <span class="inline-flex items-center gap-1 bg-green-50 text-green-700 text-[10px] font-bold px-2.5 py-1 rounded-full border border-green-100 shadow-sm">
                                                <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span> Active
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <div class="flex justify-end gap-1 opacity-60 group-hover:opacity-100 transition-opacity">
                                                <button onclick="openEditModal({
                                                    id: '<?php echo $row['id']; ?>',
                                                    lm_no: '<?php echo addslashes($row['LM_NO']); ?>',
                                                    name: '<?php echo addslashes($row['Name_of_the_College']); ?>',
                                                    principal: '<?php echo addslashes($row['Principal_Name']); ?>',
                                                    phone: '<?php echo addslashes($row['Phone_No']); ?>',
                                                    website: '<?php echo addslashes($row['Website'] ?? ''); ?>',
                                                    table: '<?php echo $region; ?>'
                                                })" class="w-8 h-8 rounded-lg flex items-center justify-center text-gray-400 hover:text-brand-blue hover:bg-blue-50 transition" title="Edit Details"><i class="fas fa-edit"></i></button>
                                                <a href="backend/delete_member.php?id=<?php echo $row['id']; ?>&table=<?php echo $region; ?>" class="w-8 h-8 rounded-lg flex items-center justify-center text-gray-400 hover:text-red-500 hover:bg-red-50 transition" onclick="return confirm('Confirm deletion? This cannot be undone.')" title="Delete Member"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr><td colspan="5" class="px-6 py-16 text-center text-gray-400 flex flex-col items-center"><i class="fas fa-search text-3xl mb-2 opacity-20"></i>No member records found in this region.</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination (Mock UI) -->
                    <div class="bg-gray-50 px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                        <span class="text-xs text-gray-500">Showing recent entries</span>
                        <div class="flex gap-2">
                            <button class="px-3 py-1 text-xs font-medium text-gray-500 hover:text-brand-blue disabled:opacity-50" disabled>Previous</button>
                            <button class="px-3 py-1 text-xs font-medium text-gray-500 hover:text-brand-blue">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="section-events" class="admin-section hidden space-y-6">
                <!-- Header Actions -->
                <div class="flex justify-between items-center bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
                    <div>
                        <h2 class="font-bold text-gray-800 text-lg">Events & News Management</h2>
                        <p class="text-xs text-gray-500 mt-1">Manage all upcoming events and latest news posts.</p>
                    </div>
                    <button onclick="toggleModal('addEventModal')" class="bg-gradient-to-r from-brand-gold to-amber-600 hover:from-amber-600 hover:to-amber-700 text-white font-bold py-2.5 px-6 rounded-xl text-sm flex items-center gap-2 shadow-lg hover:shadow-amber-500/30 transition transform hover:-translate-y-0.5 active:scale-95">
                        <i class="fas fa-plus"></i> Published New Event
                    </button>
                </div>

                <!-- Events Grid/List -->
                <div class="grid grid-cols-1 gap-4">
                    <?php if ($events_list): ?>
                        <?php while($row = $events_list->fetch_assoc()): ?>
                        <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm hover:shadow-lg transition duration-300 flex flex-col md:flex-row gap-6 items-start group relative overflow-hidden">
                             <!-- Decoration -->
                            <div class="absolute top-0 right-0 w-24 h-24 bg-brand-gold/5 rounded-bl-full -mr-4 -mt-4 transition group-hover:bg-brand-gold/10"></div>

                            <div class="h-32 w-full md:w-48 bg-gray-100 rounded-xl flex-shrink-0 overflow-hidden border border-gray-100 shadow-inner relative">
                                <?php if(!empty($row['image_path'])): ?>
                                    <img src="uploads/<?php echo htmlspecialchars($row['image_path']); ?>" class="h-full w-full object-cover group-hover:scale-105 transition duration-500">
                                <?php else: ?>
                                    <div class="h-full w-full flex flex-col items-center justify-center text-gray-300 bg-gray-50">
                                        <i class="fas fa-image text-2xl mb-1"></i>
                                        <span class="text-[10px] uppercase font-bold tracking-wider">No Image</span>
                                    </div>
                                <?php endif; ?>
                                <div class="absolute top-2 left-2 bg-white/90 backdrop-blur text-xs font-bold px-2 py-1 rounded-lg text-gray-700 shadow-sm border border-white/50">
                                    <?php echo isset($row['posted_date']) ? date("M d", strtotime($row['posted_date'])) : 'Draft'; ?>
                                </div>
                            </div>
                            
                            <div class="flex-1 min-w-0 z-10 w-full">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="font-bold text-gray-800 text-lg group-hover:text-brand-blue transition truncate pr-4"><?php echo htmlspecialchars($row['event_name']); ?></h3>
                                    <div class="flex items-center gap-2">
                                        <span class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-0.5 rounded-full border border-green-200">Published</span>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 line-clamp-2 leading-relaxed mb-4"><?php echo htmlspecialchars($row['event_description']); ?></p>
                                
                                <div class="flex items-center gap-4 text-xs font-medium border-t border-gray-50 pt-3 mt-auto">
                                    <button class="text-gray-500 hover:text-brand-blue flex items-center gap-1.5 transition"><i class="fas fa-pencil-alt"></i> Edit Details</button>
                                    <button class="text-gray-500 hover:text-brand-gold flex items-center gap-1.5 transition"><i class="fas fa-image"></i> Change Image</button>
                                    <div class="flex-grow"></div>
                                    <a href="backend/delete_event.php?id=<?php echo $row['id']; ?>" class="text-red-400 hover:text-red-600 flex items-center gap-1.5 transition px-2 py-1 hover:bg-red-50 rounded-lg" onclick="return confirm('Delete this event permanently?')"><i class="fas fa-trash-alt"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="bg-white p-12 rounded-2xl border border-dashed border-gray-300 text-center text-gray-400">
                            <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-300">
                                <i class="fas fa-calendar-times text-2xl"></i>
                            </div>
                            <h3 class="text-gray-600 font-bold mb-1">No Events Found</h3>
                            <p class="text-sm">Get started by posting your first event or news update.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div id="section-files" class="admin-section hidden space-y-6">
                 <!-- Header Actions -->
                 <div class="flex justify-between items-center bg-white p-5 rounded-2xl border border-gray-100 shadow-sm">
                    <div>
                        <h2 class="font-bold text-gray-800 text-lg">Resource Library</h2>
                        <p class="text-xs text-gray-500 mt-1">Manage downloadable reports, applications, and archives.</p>
                    </div>
                    <button onclick="toggleModal('uploadFileModal')" class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2.5 px-6 rounded-xl text-sm flex items-center gap-2 shadow-lg hover:shadow-purple-500/30 transition transform hover:-translate-y-0.5 active:scale-95">
                        <i class="fas fa-cloud-upload-alt"></i> Upload PDF
                    </button>
                </div>

                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead class="bg-gray-50/50 text-xs uppercase text-gray-500 font-bold border-b border-gray-100 tracking-wider">
                                <tr>
                                    <th class="px-6 py-4">Document Details</th>
                                    <th class="px-6 py-4">Category</th>
                                    <th class="px-6 py-4">Date</th>
                                    <th class="px-6 py-4 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-50 text-sm">
                                <?php 
                                $files_list = getSafeRows($conn, "adminpdfupload", 20); 
                                if ($files_list): 
                                    while($row = $files_list->fetch_assoc()): ?>
                                    <tr class="hover:bg-purple-50/30 transition duration-200 group">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-4">
                                                <div class="h-10 w-10 rounded-lg bg-red-50 text-red-500 border border-red-100 flex items-center justify-center flex-shrink-0">
                                                    <i class="fas fa-file-pdf text-lg"></i>
                                                </div>
                                                <div>
                                                    <h4 class="font-bold text-gray-800 text-sm group-hover:text-purple-600 transition"><?php echo htmlspecialchars($row['title']); ?></h4>
                                                    <?php if(!empty($row['description'])): ?>
                                                        <p class="text-xs text-gray-500 mt-0.5 truncate max-w-xs"><?php echo htmlspecialchars($row['description']); ?></p>
                                                    <?php else: ?>
                                                        <p class="text-xs text-gray-400 mt-0.5 font-mono"><?php echo htmlspecialchars($row['filename']); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-[10px] font-bold uppercase tracking-wide
                                                <?php 
                                                    if($row['category'] == 'Application') echo 'bg-teal-50 text-teal-700 border border-teal-100';
                                                    elseif($row['category'] == 'Archive') echo 'bg-amber-50 text-amber-700 border border-amber-100';
                                                    else echo 'bg-blue-50 text-blue-700 border border-blue-100';
                                                ?>">
                                                <i class="fas fa-tag mr-1.5 opacity-70"></i> <?php echo htmlspecialchars($row['category'] ?? 'Report'); ?>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-gray-500 text-xs font-medium">
                                            <?php echo !empty($row['report_date']) ? date("M d, Y", strtotime($row['report_date'])) : '-'; ?>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <div class="flex justify-end gap-2">
                                                <a href="uploads/<?php echo htmlspecialchars($row['filename']); ?>" target="_blank" class="w-8 h-8 rounded-lg flex items-center justify-center text-gray-400 hover:text-brand-blue hover:bg-blue-50 transition border border-transparent hover:border-blue-100" title="View PDF">
                                                    <i class="fas fa-external-link-alt"></i>
                                                </a>
                                                <a href="backend/delete_file.php?id=<?php echo $row['id']; ?>" class="w-8 h-8 rounded-lg flex items-center justify-center text-gray-400 hover:text-red-500 hover:bg-red-50 transition border border-transparent hover:border-red-100" onclick="return confirm('Delete verified file?')" title="Delete File">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr><td colspan="4" class="px-6 py-16 text-center text-gray-400">No documents uploaded yet.</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <div id="addMemberModal" class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center backdrop-blur-sm p-4 transition-opacity opacity-0 pointer-events-none">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform">
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                <h3 class="font-bold text-gray-800">Add Institution</h3>
                <button onclick="toggleModal('addMemberModal')" class="text-gray-400 hover:text-gray-600"><i class="fas fa-times"></i></button>
            </div>
            <form action="backend/add_member.php" method="POST" class="p-6 space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-[10px] font-bold text-gray-500 uppercase">LM ID</label>
                        <input type="text" name="lm_number" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:border-brand-blue outline-none" required>
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-gray-500 uppercase">State/Region</label>
                        <select name="state" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm outline-none bg-white">
                            <option value="TAMILNADU">Tamil Nadu</option>
                            <option value="KARNATAKA">Karnataka</option>
                            <option value="KERALA">Kerala</option>
                            <option value="ANDHRA">Andhra Pradesh</option>
                            <option value="NORTHERN">Northern Region</option>
                            <option value="EASTERN">Eastern Region</option>
                            <option value="NORTHEAST">North East Region</option>
                            <option value="WESTERN">Western Region</option>
                            <option value="LIFEMEMBERS">Life Members</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="text-[10px] font-bold text-gray-500 uppercase">College Name</label>
                    <input type="text" name="name" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:border-brand-blue outline-none" required>
                </div>
                <div>
                     <label class="text-[10px] font-bold text-gray-500 uppercase">Website</label>
                     <input type="text" name="website" placeholder="http://..." class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:border-brand-blue outline-none">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-[10px] font-bold text-gray-500 uppercase">Principal</label>
                        <input type="text" name="principal" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm outline-none">
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-gray-500 uppercase">Contact</label>
                        <input type="text" name="phone" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm outline-none">
                    </div>
                </div>
                <div class="pt-4 flex justify-end gap-3">
                    <button type="button" onclick="toggleModal('addMemberModal')" class="px-4 py-2 text-gray-500 hover:bg-gray-100 rounded-lg font-medium text-sm">Cancel</button>
                    <button type="submit" class="bg-brand-blue text-white px-6 py-2 rounded-lg font-bold text-sm hover:bg-blue-800 shadow-lg">Save Record</button>
                </div>
            </form>
        </div>
    </div>


    <div id="uploadFileModal" class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center backdrop-blur-sm p-4 transition-opacity opacity-0 pointer-events-none">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform">
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                <h3 class="font-bold text-gray-800">Upload Document</h3>
                <button onclick="toggleModal('uploadFileModal')" class="text-gray-400 hover:text-gray-600"><i class="fas fa-times"></i></button>
            </div>
            <form action="backend/upload_pdf.php" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                <div>
                     <label class="text-[10px] font-bold text-gray-500 uppercase">Document Title</label>
                     <input type="text" name="title" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:border-purple-600 outline-none" required>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-[10px] font-bold text-gray-500 uppercase">Category</label>
                        <select name="category" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm outline-none bg-white">
                            <option value="Report">Report / Circular</option>
                            <option value="Application">Application Form</option>
                            <option value="Archive">Archive</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-gray-500 uppercase">Date</label>
                        <input type="date" name="report_date" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm outline-none" required value="<?php echo date('Y-m-d'); ?>">
                    </div>
                </div>
                <div>
                    <label class="text-[10px] font-bold text-gray-500 uppercase">Description (Optional)</label>
                    <textarea name="description" rows="3" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:border-purple-600 outline-none"></textarea>
                </div>
                <div>
                    <label class="text-[10px] font-bold text-gray-500 uppercase">PDF File</label>
                    <input type="file" name="pdf_file" accept=".pdf" class="w-full text-xs text-gray-500 border border-gray-300 rounded-lg p-2 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100" required>
                </div>
                <div class="pt-4 flex justify-end gap-3">
                    <button type="button" onclick="toggleModal('uploadFileModal')" class="px-4 py-2 text-gray-500 hover:bg-gray-100 rounded-lg font-medium text-sm">Cancel</button>
                    <button type="submit" class="bg-purple-600 text-white px-6 py-2 rounded-lg font-bold text-sm hover:bg-purple-700 shadow-lg">Upload File</button>
                </div>
            </form>
        </div>
    </div>

    <div id="addEventModal" class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center backdrop-blur-sm p-4 transition-opacity opacity-0 pointer-events-none">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform">
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                <h3 class="font-bold text-gray-800">Publish News / Event</h3>
                <button onclick="toggleModal('addEventModal')" class="text-gray-400 hover:text-gray-600"><i class="fas fa-times"></i></button>
            </div>
            <form action="backend/add_event.php" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
                <div>
                    <label class="text-[10px] font-bold text-gray-500 uppercase">Headline</label>
                    <input type="text" name="title" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:border-brand-gold outline-none" required>
                </div>
                <div>
                    <label class="text-[10px] font-bold text-gray-500 uppercase">Content (Full Description)</label>
                    <textarea name="description" rows="10" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:border-brand-gold outline-none" placeholder="Enter full event details here..."></textarea>
                </div>
                <div>
                    <label class="text-[10px] font-bold text-gray-500 uppercase">Featured Image</label>
                    <input type="file" name="event_image" class="w-full text-xs text-gray-500 border border-gray-300 rounded-lg p-2 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-xs file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>
                <div class="pt-4 flex justify-end gap-3">
                    <button type="button" onclick="toggleModal('addEventModal')" class="px-4 py-2 text-gray-500 hover:bg-gray-100 rounded-lg font-medium text-sm">Cancel</button>
                    <button type="submit" class="bg-brand-gold text-white px-6 py-2 rounded-lg font-bold text-sm hover:bg-amber-700 shadow-lg">Publish Now</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Flash Message Container -->
    <?php if (isset($_SESSION['flash_message'])): ?>
    <div id="flash-message" class="fixed top-6 right-6 z-50 animate-fade-in-down">
        <div class="bg-white border-l-4 <?php echo ($_SESSION['flash_message']['type'] == 'success') ? 'border-green-500' : 'border-red-500'; ?> rounded-lg shadow-2xl p-4 flex items-start gap-3 max-w-sm">
            <div class="<?php echo ($_SESSION['flash_message']['type'] == 'success') ? 'text-green-500' : 'text-red-500'; ?>">
                <i class="fas <?php echo ($_SESSION['flash_message']['type'] == 'success') ? 'fa-check-circle' : 'fa-exclamation-circle'; ?> text-xl"></i>
            </div>
            <div>
                <h4 class="font-bold text-gray-800 text-sm"><?php echo htmlspecialchars($_SESSION['flash_message']['title']); ?></h4>
                <p class="text-xs text-gray-600 mt-1"><?php echo $_SESSION['flash_message']['message']; ?></p>
            </div>
            <button onclick="document.getElementById('flash-message').remove()" class="text-gray-400 hover:text-gray-600 ml-auto"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <?php unset($_SESSION['flash_message']); ?>
    <?php endif; ?>

    <script>
        // Check URL for section parameter
        const urlParams = new URLSearchParams(window.location.search);
        const section = urlParams.get('section');
        if (section) {
            showSection(section);
        } else {
            showSection('dashboard');
        }

        // Auto-hide flash message after 5 seconds
        const flashMsg = document.getElementById('flash-message');
        if (flashMsg) {
            setTimeout(() => {
                flashMsg.style.transition = 'opacity 0.5s ease';
                flashMsg.style.opacity = '0';
                setTimeout(() => flashMsg.remove(), 500);
            }, 5000);
        }

        function showSection(id) {
            document.querySelectorAll('.admin-section').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.nav-item').forEach(el => {
                el.classList.remove('bg-white/10', 'text-white', 'border-brand-gold');
                el.classList.add('text-gray-400', 'border-transparent');
            });
            const targetSection = document.getElementById(`section-${id}`);
            if (targetSection) {
                targetSection.classList.remove('hidden');
                const navItem = document.querySelector(`.nav-item[onclick="showSection('${id}')"]`);
                if(navItem) {
                    navItem.classList.add('bg-white/10', 'text-white', 'border-brand-gold');
                    navItem.classList.remove('text-gray-400', 'border-transparent');
                }
                // Update Title
                const titles = { 'dashboard': 'Dashboard Overview', 'members': 'Manage Institutions', 'events': 'Events & News', 'files': 'File Repository' };
                document.getElementById('page-title').innerText = titles[id] || 'Admin Panel';
                
                // Update URL without reloading (unless region change)
                const url = new URL(window.location);
                url.searchParams.set('section', id);
                if(id !== 'members' && url.searchParams.has('region')) { 
                    // Optional: could remove region param if switching away from members, but keeping it is also fine
                }
                window.history.pushState({}, '', url);
            }
        }

        function updateMemberRegion(region) {
            const url = new URL(window.location);
            url.searchParams.set('section', 'members');
            url.searchParams.set('region', region);
            window.location.href = url.toString(); // Reload page to fetch new data
        }

        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            if (modal.classList.contains('hidden')) {
                modal.classList.remove('hidden');
                setTimeout(() => { modal.classList.remove('opacity-0', 'pointer-events-none'); }, 10);
            } else {
                modal.classList.add('opacity-0', 'pointer-events-none');
                setTimeout(() => { modal.classList.add('hidden'); }, 300);
            }
        }

        function openEditModal(data) {
            // Populate form fields
            document.getElementById('edit_id').value = data.id;
            document.getElementById('edit_lm').value = data.lm_no;
            document.getElementById('edit_name').value = data.name;
            document.getElementById('edit_principal').value = data.principal;
            document.getElementById('edit_phone').value = data.phone;
            document.getElementById('edit_website').value = data.website || '';
            document.getElementById('edit_original_table').value = data.table;

            toggleModal('editMemberModal');
        }
    </script>

    <!-- Edit Member Modal -->
    <div id="editMemberModal" class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center backdrop-blur-sm p-4 transition-opacity opacity-0 pointer-events-none">
        <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden transform scale-95 transition-transform">
            <div class="bg-gray-50 px-6 py-4 border-b border-gray-100 flex justify-between items-center">
                <h3 class="font-bold text-gray-800">Edit Institution Details</h3>
                <button onclick="toggleModal('editMemberModal')" class="text-gray-400 hover:text-gray-600"><i class="fas fa-times"></i></button>
            </div>
            <form action="backend/edit_member.php" method="POST" class="p-6 space-y-4">
                <input type="hidden" name="id" id="edit_id">
                <input type="hidden" name="original_table" id="edit_original_table">
                
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-[10px] font-bold text-gray-500 uppercase">LM ID</label>
                        <input type="text" name="lm_number" id="edit_lm" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:border-brand-blue outline-none" required>
                    </div>
                </div>
                <div>
                    <label class="text-[10px] font-bold text-gray-500 uppercase">College Name</label>
                    <input type="text" name="name" id="edit_name" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:border-brand-blue outline-none" required>
                </div>
                <div>
                     <label class="text-[10px] font-bold text-gray-500 uppercase">Website</label>
                     <input type="text" name="website" id="edit_website" placeholder="http://..." class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:border-brand-blue outline-none">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-[10px] font-bold text-gray-500 uppercase">Principal</label>
                        <input type="text" name="principal" id="edit_principal" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm outline-none">
                    </div>
                    <div>
                        <label class="text-[10px] font-bold text-gray-500 uppercase">Contact</label>
                        <input type="text" name="phone" id="edit_phone" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm outline-none">
                    </div>
                </div>
                <div class="pt-4 flex justify-end gap-3">
                    <button type="button" onclick="toggleModal('editMemberModal')" class="px-4 py-2 text-gray-500 hover:bg-gray-100 rounded-lg font-medium text-sm">Cancel</button>
                    <button type="submit" class="bg-brand-blue text-white px-6 py-2 rounded-lg font-bold text-sm hover:bg-blue-800 shadow-lg">Update Changes</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
