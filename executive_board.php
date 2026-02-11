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
                <a href="about.php" class="hover:text-brand-blue transition">About Us</a>
                
                <!-- Dropdown -->
                <div class="relative group">
                    <button class="flex items-center gap-1 text-brand-blue font-bold">
                        Our Team <i class="fas fa-chevron-down text-xs ml-1"></i>
                    </button>
                    <div class="absolute top-full left-0 w-56 bg-white shadow-xl rounded-xl mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top border border-gray-100">
                        <a href="administration.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition">Administration</a>
                        <a href="executive_board.php" class="block px-4 py-2 text-brand-blue bg-blue-50 font-bold">Executive Board</a>
                        <a href="founders.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition">Founders</a>
                        <a href="former_leaders.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition">Former Leaders</a>
                        <a href="editorial_board.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition">Editorial Board</a>
                    </div>
                </div>

                <a href="members.php" class="hover:text-brand-blue transition">Members</a>
                <a href="events.php" class="hover:text-brand-blue transition">Events</a>
                <a href="gallery.php" class="hover:text-brand-blue transition">Gallery</a>
                <a href="resources.php" class="hover:text-brand-blue transition">Downloads</a>

            </div>
            <button class="md:hidden text-brand-blue text-2xl"><i class="fas fa-bars"></i></button>
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
                    
                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue">
                            <i class="fas fa-user text-3xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Rev. Dr. Gigi Thomas</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Dean of Studies</p>
                        <p class="text-sm text-gray-600 mt-2">Mar Ivanios College, Kerala</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue">
                             <i class="fas fa-user text-3xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Dr. Sr. M. Rashmi A.C</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Principal</p>
                        <p class="text-sm text-gray-600 mt-2">Patna Women's College, Patna</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue">
                             <i class="fas fa-user text-3xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Rev. Dr. Sebastian Karottupuram</h4>
                        <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Principal</p>
                        <p class="text-sm text-gray-600 mt-2">Don Bosco College, Manipur</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue">
                             <i class="fas fa-user text-3xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Dr. Sr. Ananda Amritmahal</h4>
                         <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Principal</p>
                        <p class="text-sm text-gray-600 mt-2">Sophia College for Women, Mumbai</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue">
                             <i class="fas fa-user text-3xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Rev. Dr. Praveen Martis SJ</h4>
                         <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Principal</p>
                        <p class="text-sm text-gray-600 mt-2">St. Aloysius College, Mangalore</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue">
                             <i class="fas fa-user text-3xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Dr. Rudolf Manih</h4>
                         <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Principal</p>
                        <p class="text-sm text-gray-600 mt-2">Union Christian College, Meghalaya</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue">
                             <i class="fas fa-user text-3xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Dr. Sujo Mary Varghese</h4>
                         <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Principal</p>
                        <p class="text-sm text-gray-600 mt-2">Mar Thoma College, Kerala</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue">
                             <i class="fas fa-user text-3xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Dr. P. Nithila Devakarunyam</h4>
                         <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Principal</p>
                        <p class="text-sm text-gray-600 mt-2">St. Christopher's College, Chennai</p>
                    </div>

                     <!-- Member -->
                     <div class="bg-gray-50 rounded-xl p-6 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-24 h-24 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition border-2 border-transparent group-hover:border-brand-blue">
                             <i class="fas fa-user text-3xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1 text-lg">Prof. John Varghese</h4>
                         <p class="text-xs text-gray-500 font-medium uppercase tracking-wide">Principal</p>
                        <p class="text-sm text-gray-600 mt-2">St. Stephen's College, Delhi</p>
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

</body>
</html>
