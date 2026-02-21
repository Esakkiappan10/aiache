<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration | AIACHE</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            blue: '#1e3a8a',
                            dark: '#0f172a',
                            light: '#f8fafc',
                            gold: '#d97706',
                            teal: '#0f766e',
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

    <!-- Navigation (Placeholder - will be updated globally) -->
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

    <!-- Header -->
    <section class="relative bg-brand-blue text-white py-24 text-center overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="container mx-auto px-4 relative z-10">
            <span class="bg-brand-gold/20 text-brand-gold border border-brand-gold/30 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6 inline-block">Leadership</span>
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-6">Administration</h1>
            <p class="text-blue-200 text-lg max-w-2xl mx-auto leading-relaxed">The guiding force behind AIACHE's mission and vision.</p>
        </div>
    </section>

    <!-- Current Administration Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            
            <!-- President -->
            <div class="flex justify-center mb-16">
                <div class="bg-white rounded-2xl overflow-hidden shadow-xl border border-gray-100 max-w-md w-full transform hover:-translate-y-2 transition duration-500 group">
                    <div class="h-80 bg-gray-200 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center text-gray-300 bg-slate-50 group-hover:scale-105 transition duration-700">
                             <!-- Placeholder for President Image -->
                            <i class="fas fa-user-tie text-[8rem]"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 pt-20">
                            <span class="bg-brand-gold text-white text-xs font-bold px-3 py-1 rounded shadow-sm uppercase tracking-wider">President</span>
                        </div>
                    </div>
                    <div class="p-8 text-center">
                        <h3 class="text-2xl font-serif font-bold text-brand-blue mb-2">Dr. M. Davamani Christober</h3>
                        <p class="text-gray-500 font-medium">(2022 - Present)</p>
                        <p class="text-sm text-gray-400 mt-2">Principal, The American College, Madurai</p>
                    </div>
                </div>
            </div>

            <!-- Key Office Bearers Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                
                <!-- VP 1 -->
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-lg transition flex flex-col items-center text-center group">
                    <div class="w-32 h-32 rounded-full bg-blue-50 mb-6 flex items-center justify-center text-brand-blue text-4xl group-hover:bg-brand-blue group-hover:text-white transition duration-300 overflow-hidden">
                        <img src="portfolio/3 Dr Paul Wilson vice president.png" alt="Dr. Paul Wilson" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-lg text-gray-800">Dr. Paul Wilson</h4>
                    <span class="text-xs font-bold text-brand-blue uppercase tracking-wide my-2">Vice President</span>
                    <p class="text-sm text-gray-500">Principal, Madras Christian College, Chennai</p>
                </div>

                <!-- Gen Sec -->
                <div class="bg-brand-blue rounded-xl p-6 shadow-lg border border-brand-blue transform md:-translate-y-4 flex flex-col items-center text-center relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full blur-2xl -mr-16 -mt-16"></div>
                    <div class="w-32 h-32 rounded-full bg-white/10 mb-6 flex items-center justify-center text-white text-4xl border-2 border-white/20 overflow-hidden">
                         <img src="portfolio/1 Rev Dr Xavier Vedam SJ.png" alt="Rev. Dr. Xavier Vedam S.J." class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-xl text-white">Rev. Dr. Xavier Vedam S.J.</h4>
                    <span class="text-xs font-bold text-brand-gold uppercase tracking-wide my-2">General Secretary</span>
                    <div class="mt-4 space-y-2 text-sm text-brand-light/80">
                         <p><i class="fas fa-phone-alt mr-2 text-brand-gold"></i> 0-94447 61101</p>
                         <p><i class="fas fa-envelope mr-2 text-brand-gold"></i> vedamvx@gmail.com</p>
                    </div>
                </div>

                <!-- VP 2 -->
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-lg transition flex flex-col items-center text-center group">
                    <div class="w-32 h-32 rounded-full bg-blue-50 mb-6 flex items-center justify-center text-brand-blue text-4xl group-hover:bg-brand-blue group-hover:text-white transition duration-300 overflow-hidden">
                        <img src="portfolio/4 Dr. Sr. A. Nirmala vice president.jpg" alt="Dr. Sr. A. Nirmala" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-lg text-gray-800">Dr. Sr. A. Nirmala</h4>
                    <span class="text-xs font-bold text-brand-blue uppercase tracking-wide my-2">Vice President</span>
                    <!-- <p class="text-sm text-gray-500">Principal, ...</p> -->
                </div>

                <!-- Treasurer -->
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-lg transition flex flex-col items-center text-center group md:col-start-1 md:col-end-3 lg:col-start-2 lg:col-end-auto">
                    <div class="w-32 h-32 rounded-full bg-amber-50 mb-6 flex items-center justify-center text-brand-gold text-4xl group-hover:bg-brand-gold group-hover:text-white transition duration-300 overflow-hidden">
                        <img src="portfolio/5 Dr. Chinkhanlun Guite.png" alt="Dr. Chinkhanlun Guite" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-lg text-gray-800">Dr. Chinkhanlun Guite</h4>
                    <span class="text-xs font-bold text-gray-500 uppercase tracking-wide my-2">Treasurer</span>
                    <p class="text-sm text-gray-500">Bursar, St. Stephen's College, Delhi</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
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
