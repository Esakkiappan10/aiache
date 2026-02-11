<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Founders | AIACHE</title>
    
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
                        <a href="executive_board.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition">Executive Board</a>
                        <a href="founders.php" class="block px-4 py-2 text-brand-blue bg-blue-50 font-bold">Founders</a>
                        <a href="former_leaders.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition">Former Leaders</a>
                        <a href="editorial_board.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition">Editorial Board</a>
                    </div>
                </div>

                <a href="members.php" class="hover:text-brand-blue transition">Members</a>
                <a href="events.php" class="hover:text-brand-blue transition">Events</a>
                <a href="gallery.php" class="hover:text-brand-blue transition">Gallery</a>
                <a href="resources.php" class="hover:text-brand-blue transition">Downloads</a>
                <a href="contact.php" class="hover:text-brand-blue transition">Contact</a>
            </div>
            <button class="md:hidden text-brand-blue text-2xl"><i class="fas fa-bars"></i></button>
        </div>
    </nav>

    <!-- Header -->
    <section class="relative bg-brand-blue text-white py-24 text-center overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="container mx-auto px-4 relative z-10">
            <span class="bg-brand-gold/20 text-brand-gold border border-brand-gold/30 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6 inline-block">Legacy</span>
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-6">Our Founders</h1>
            <p class="text-blue-200 text-lg max-w-2xl mx-auto leading-relaxed">Honoring the visionaries who laid the foundation of excellence.</p>
        </div>
    </section>

    <!-- Founders Section -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Founder Card -->
                <div class="bg-white p-8 rounded-xl border-t-4 border-brand-blue shadow-sm hover:shadow-xl transition group transform hover:-translate-y-1">
                    <div class="text-brand-blue text-5xl mb-6 group-hover:scale-110 transition-transform origin-center"><i class="fas fa-church"></i></div>
                    <h4 class="font-bold text-gray-800 text-xl font-serif">Fr. T.A. Mathias</h4>
                    <p class="text-xs font-bold text-brand-gold uppercase mt-2 tracking-wide">General Secretary (1967-79)</p>
                     <div class="mt-4 w-10 h-1 bg-gray-100 rounded-full"></div>
                </div>
                
                <div class="bg-white p-8 rounded-xl border-t-4 border-gray-300 shadow-sm hover:shadow-xl transition group transform hover:-translate-y-1">
                    <div class="text-gray-400 text-5xl mb-6 group-hover:text-brand-blue transition"><i class="fas fa-user-graduate"></i></div>
                    <h4 class="font-bold text-gray-800 text-xl font-serif">Dr. Panavelil Thomas Chandy</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-2 tracking-wide">(1967-69)</p>
                     <div class="mt-4 w-10 h-1 bg-gray-100 rounded-full"></div>
                </div>

                <div class="bg-white p-8 rounded-xl border-t-4 border-gray-300 shadow-sm hover:shadow-xl transition group transform hover:-translate-y-1">
                    <div class="text-gray-400 text-5xl mb-6 group-hover:text-brand-blue transition"><i class="fas fa-user-graduate"></i></div>
                    <h4 class="font-bold text-gray-800 text-xl font-serif">Dr. Chandran Devanesan</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-2 tracking-wide">Co-Founder</p>
                     <div class="mt-4 w-10 h-1 bg-gray-100 rounded-full"></div>
                </div>

                <div class="bg-white p-8 rounded-xl border-t-4 border-gray-300 shadow-sm hover:shadow-xl transition group transform hover:-translate-y-1">
                    <div class="text-gray-400 text-5xl mb-6 group-hover:text-brand-blue transition"><i class="fas fa-user-graduate"></i></div>
                    <h4 class="font-bold text-gray-800 text-xl font-serif">Fr. Herbert D'Souza</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-2 tracking-wide">(1970-1972)</p>
                     <div class="mt-4 w-10 h-1 bg-gray-100 rounded-full"></div>
                </div>

                 <div class="bg-white p-8 rounded-xl border-t-4 border-gray-300 shadow-sm hover:shadow-xl transition group transform hover:-translate-y-1">
                    <div class="text-gray-400 text-5xl mb-6 group-hover:text-brand-blue transition"><i class="fas fa-cross"></i></div>
                    <h4 class="font-bold text-gray-800 text-xl font-serif">Archbishop Angelo Fernandes</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-2 tracking-wide">Co-Founder</p>
                     <div class="mt-4 w-10 h-1 bg-gray-100 rounded-full"></div>
                </div>

                <div class="bg-white p-8 rounded-xl border-t-4 border-gray-300 shadow-sm hover:shadow-xl transition group transform hover:-translate-y-1">
                    <div class="text-gray-400 text-5xl mb-6 group-hover:text-brand-blue transition"><i class="fas fa-cross"></i></div>
                    <h4 class="font-bold text-gray-800 text-xl font-serif">Bishop Paulos Mar Gregorios</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-2 tracking-wide">Co-Founder</p>
                     <div class="mt-4 w-10 h-1 bg-gray-100 rounded-full"></div>
                </div>

                <div class="bg-white p-8 rounded-xl border-t-4 border-gray-300 shadow-sm hover:shadow-xl transition group transform hover:-translate-y-1">
                    <div class="text-gray-400 text-5xl mb-6 group-hover:text-brand-blue transition"><i class="fas fa-user-graduate"></i></div>
                    <h4 class="font-bold text-gray-800 text-xl font-serif">Dr. Manuel A. Thangaraj</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-2 tracking-wide">(1973-1975)</p>
                     <div class="mt-4 w-10 h-1 bg-gray-100 rounded-full"></div>
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
