<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executive Board | AIACHE</title>
    
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

    <!-- Navigation -->
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
            <span class="bg-brand-gold/20 text-brand-gold border border-brand-gold/30 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6 inline-block">Governance</span>
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-6">Executive Board</h1>
            <p class="text-blue-200 text-lg max-w-2xl mx-auto leading-relaxed">Distinguished leaders from member institutions guiding our strategic direction.</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            
            <!-- Executive Board Members -->
            <div class="mb-20">
                <h2 class="text-2xl font-serif font-bold text-gray-800 text-center mb-10 border-b border-gray-100 pb-4 w-max mx-auto px-10">Board Members</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Member 2 -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                            <img src="portfolio/2 Dr. Sr. M. Rashmi A.C..jpg" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Dr. Sr. M. Rashmi A.C.</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                        <p class="text-sm text-gray-600 mt-2">Patna Women's College, Patna</p>
                    </div>

                    <!-- Member 6 -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                            <img src="portfolio/6 Dr. Sr. Shiny K.P.jfif" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Dr. Sr. Shiny K.P.</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                    </div>

                    <!-- Member 7 -->
                     <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                            <img src="portfolio/7 Rev. Dr. Charles Lasrado SJ,.jfif" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Rev. Dr. Charles Lasrado S.J.</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                    </div>

                    <!-- Member 8 -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                             <img src="portfolio/8 Fr. Dr. Jestin K Kuriakose,.jpg" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Fr. Dr. Jestin K Kuriakose</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                    </div>

                    <!-- Member 9 -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                             <img src="portfolio/9 Dr. Letha P Cheriyan,.jpg" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Dr. Letha P Cheriyan</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                    </div>

                    <!-- Member 10 -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                             <img src="portfolio/10 Rev. Dr A. Louis Arockiaraj SJ,.jpeg" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Rev. Dr. A. Louis Arockiaraj S.J.</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                    </div>

                    <!-- Member 11 -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                             <img src="portfolio/11 Dr Regina.jpg" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Dr. Regina</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                    </div>

                    <!-- Member 12 -->
                     <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                             <img src="portfolio/12 Dr. Madhumanjari Mandal.jpg" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Dr. Madhumanjari Mandal</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                         <p class="text-sm text-gray-600 mt-2">Scottish Church College, Kolkata</p>
                    </div>

                     <!-- Member 13 -->
                     <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                             <img src="portfolio/13 Dr. Fr. Jesu Ben Anton Rose,.jpg" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Dr. Fr. Jesu Ben Anton Rose</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                    </div>

                    <!-- Member 14 -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                             <img src="portfolio/14 Prof. Shailendra Pratap Singh.jpeg" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Prof. Shailendra Pratap Singh</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                    </div>

                    <!-- Member 15 -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                             <img src="portfolio/15 Fr Marriodoss.jpg" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Fr. Marriodoss</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                    </div>

                    <!-- Member 16 -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                             <img src="portfolio/16 Dr Rudolf Manih.jpg" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Dr. Rudolf Manih</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                         <p class="text-sm text-gray-600 mt-2">Union Christian College, Meghalaya</p>
                    </div>

                    <!-- Member 17 -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue overflow-hidden">
                             <img src="portfolio/17 Fr Sebastian.jpg" alt="Member" class="w-full h-full object-cover">
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Fr. Sebastian</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Executive Member</p>
                         <p class="text-sm text-gray-600 mt-2">Don Bosco College, Manipur</p>
                    </div>

                </div>
            </div>

            <!-- Co-opted Members -->
            <div>
                <h2 class="text-2xl font-serif font-bold text-gray-800 text-center mb-10 border-b border-gray-100 pb-4 w-max mx-auto px-10">Co-opted Members</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    
                     <!-- Member -->
                     <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition text-center hover:-translate-y-1">
                        <div class="w-20 h-20 mx-auto bg-brand-light text-brand-blue rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-user-plus text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 text-lg">Rev. Dr. Joseph Xavier SJ</h4>
                        <p class="text-sm text-gray-600 mt-2">St. Joseph's College, Tiruchirappalli<br><span class="text-xs text-gray-500">(Former Principal, Loyola College)</span></p>
                    </div>

                    <!-- Member -->
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition text-center hover:-translate-y-1">
                        <div class="w-20 h-20 mx-auto bg-brand-light text-brand-blue rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-user-plus text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 text-lg">Rev. Dr. Valan Arasu</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide mt-1">Principal</p>
                        <p class="text-sm text-gray-600 mt-2">St. Aloysius College, Jabalpur</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition text-center hover:-translate-y-1">
                        <div class="w-20 h-20 mx-auto bg-brand-light text-brand-blue rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-user-plus text-2xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 text-lg">Dr. Paul Wilson</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide mt-1">Principal</p>
                        <p class="text-sm text-gray-600 mt-2">Madras Christian College, Chennai</p>
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
