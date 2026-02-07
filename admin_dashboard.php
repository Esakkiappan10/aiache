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
$total_members = $tn_count + $ka_count + $kl_count + $ap_count;

$total_events = getSafeCount($conn, "collegeevents");
$total_downloads = getSafeCount($conn, "adminpdfupload");
$total_pending = getSafeCount($conn, "viewcomments", "WHERE status = 0");

$recent_activity = getSafeRows($conn, "collegeevents", 5);
$members_list = getSafeRows($conn, "TAMILNADU", 15); // Default view
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

            <div id="section-members" class="admin-section hidden space-y-4">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                    <div class="flex gap-2 w-full sm:w-auto">
                        <select class="bg-gray-50 border border-gray-300 text-gray-700 text-xs rounded-lg focus:ring-brand-blue focus:border-brand-blue block p-2.5 outline-none">
                            <option value="TAMILNADU">Tamil Nadu</option>
                            <option value="KERALA">Kerala</option>
                            <option value="KARNATAKA">Karnataka</option>
                            <option value="ANDHRA">Andhra Pradesh</option>
                        </select>
                        <div class="relative w-full sm:w-64">
                            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-700 text-xs rounded-lg focus:ring-brand-blue focus:border-brand-blue block w-full p-2.5 pl-9 outline-none" placeholder="Search LM ID or Name...">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"><i class="fas fa-search text-gray-400"></i></div>
                        </div>
                    </div>
                    <button onclick="toggleModal('addMemberModal')" class="bg-brand-blue hover:bg-blue-800 text-white font-bold py-2 px-4 rounded-lg text-xs flex items-center gap-2 shadow-md transition transform hover:scale-105">
                        <i class="fas fa-plus"></i> Add New Member
                    </button>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead class="bg-gray-50 text-xs uppercase text-gray-500 font-semibold border-b border-gray-200">
                                <tr>
                                    <th class="px-6 py-3">LM ID</th>
                                    <th class="px-6 py-3">Institution Name</th>
                                    <th class="px-6 py-3">Principal</th>
                                    <th class="px-6 py-3 text-center">Status</th>
                                    <th class="px-6 py-3 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm">
                                <?php if ($members_list): ?>
                                    <?php while($row = $members_list->fetch_assoc()): ?>
                                    <tr class="hover:bg-blue-50/30 transition group">
                                        <td class="px-6 py-3 font-mono text-xs text-gray-500 font-bold"><?php echo htmlspecialchars($row['LM_NO']); ?></td>
                                        <td class="px-6 py-3 font-medium text-gray-800"><?php echo htmlspecialchars($row['Name_of_the_College']); ?></td>
                                        <td class="px-6 py-3 text-gray-600 text-xs"><?php echo htmlspecialchars($row['Principal_Name']); ?></td>
                                        <td class="px-6 py-3 text-center">
                                            <span class="bg-green-100 text-green-700 text-[10px] font-bold px-2 py-0.5 rounded-full">Active</span>
                                        </td>
                                        <td class="px-6 py-3 text-right">
                                            <div class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <button class="text-gray-400 hover:text-brand-blue p-1" title="Edit"><i class="fas fa-edit"></i></button>
                                                <a href="backend/delete_member.php?id=<?php echo $row['id']; ?>&table=TAMILNADU" class="text-gray-400 hover:text-red-500 p-1" onclick="return confirm('Confirm deletion?')" title="Delete"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                <?php else: ?>
                                    <tr><td colspan="5" class="px-6 py-12 text-center text-gray-400">No member data found.</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="section-events" class="admin-section hidden space-y-4">
                <div class="flex justify-between items-center bg-white p-4 rounded-xl border border-gray-200 shadow-sm">
                    <h2 class="font-bold text-gray-700">Events & News Management</h2>
                    <button onclick="toggleModal('addEventModal')" class="bg-brand-gold hover:bg-amber-600 text-white font-bold py-2 px-4 rounded-lg text-xs flex items-center gap-2 shadow-md transition transform hover:scale-105">
                        <i class="fas fa-bullhorn"></i> Post New Event
                    </button>
                </div>

                <div class="grid grid-cols-1 gap-4">
                    <?php if ($events_list): ?>
                        <?php while($row = $events_list->fetch_assoc()): ?>
                        <div class="bg-white p-4 rounded-xl border border-gray-200 hover:shadow-md transition flex gap-4 items-start group">
                            <div class="h-20 w-20 bg-gray-100 rounded-lg flex-shrink-0 overflow-hidden border border-gray-100">
                                <?php if(!empty($row['image_path'])): ?>
                                    <img src="uploads/<?php echo htmlspecialchars($row['image_path']); ?>" class="h-full w-full object-cover group-hover:scale-110 transition duration-500">
                                <?php else: ?>
                                    <div class="h-full w-full flex items-center justify-center text-gray-300"><i class="fas fa-image text-xl"></i></div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="flex-1 min-w-0">
                                <div class="flex justify-between items-start">
                                    <h3 class="font-bold text-gray-800 text-base truncate pr-4"><?php echo htmlspecialchars($row['event_name']); ?></h3>
                                    <span class="bg-blue-50 text-brand-blue text-[10px] font-bold px-2 py-0.5 rounded">
                                        <?php echo isset($row['posted_date']) ? date("M d", strtotime($row['posted_date'])) : 'New'; ?>
                                    </span>
                                </div>
                                <p class="text-xs text-gray-500 mt-1 line-clamp-2 leading-relaxed"><?php echo htmlspecialchars($row['event_description']); ?></p>
                                
                                <div class="mt-3 flex items-center gap-4 border-t border-gray-50 pt-2 opacity-60 group-hover:opacity-100 transition-opacity">
                                    <button class="text-xs font-bold text-brand-blue hover:underline flex items-center gap-1"><i class="fas fa-edit"></i> Edit</button>
                                    <a href="backend/delete_event.php?id=<?php echo $row['id']; ?>" class="text-xs font-bold text-red-500 hover:underline flex items-center gap-1" onclick="return confirm('Delete event?')"><i class="fas fa-trash"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="bg-white p-12 rounded-xl border border-dashed border-gray-300 text-center text-gray-400">
                            <i class="fas fa-newspaper text-3xl mb-2"></i>
                            <p>No events posted yet.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div id="section-files" class="admin-section hidden">
                <div class="bg-white p-12 rounded-xl border border-dashed border-gray-300 text-center text-gray-400">
                    <i class="fas fa-cloud-upload-alt text-4xl mb-4"></i>
                    <h3 class="text-gray-600 font-bold">File Manager</h3>
                    <p class="text-xs mt-1">Upload functionality coming in next update.</p>
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
                        <label class="text-[10px] font-bold text-gray-500 uppercase">State</label>
                        <select name="state" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm outline-none bg-white">
                            <option value="TAMILNADU">Tamil Nadu</option>
                            <option value="KARNATAKA">Karnataka</option>
                            <option value="KERALA">Kerala</option>
                            <option value="ANDHRA">Andhra</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="text-[10px] font-bold text-gray-500 uppercase">College Name</label>
                    <input type="text" name="name" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:border-brand-blue outline-none" required>
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
                    <label class="text-[10px] font-bold text-gray-500 uppercase">Content</label>
                    <textarea name="description" rows="4" class="w-full border border-gray-300 rounded-lg p-2.5 text-sm focus:border-brand-gold outline-none"></textarea>
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

    <script>
        function showSection(id) {
            document.querySelectorAll('.admin-section').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.nav-item').forEach(el => {
                el.classList.remove('bg-white/10', 'text-white', 'border-brand-gold');
                el.classList.add('text-gray-400', 'border-transparent');
            });
            document.getElementById(`section-${id}`).classList.remove('hidden');
            const navItem = document.querySelector(`.nav-item[onclick="showSection('${id}')"]`);
            if(navItem) {
                navItem.classList.add('bg-white/10', 'text-white', 'border-brand-gold');
                navItem.classList.remove('text-gray-400', 'border-transparent');
            }
            // Update Title
            const titles = { 'dashboard': 'Dashboard Overview', 'members': 'Manage Institutions', 'events': 'Events & News', 'files': 'File Repository' };
            document.getElementById('page-title').innerText = titles[id] || 'Admin Panel';
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
    </script>
</body>
</html>