<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Former Leaders | AIACHE</title>
    
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
            <span class="bg-brand-gold/20 text-brand-gold border border-brand-gold/30 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6 inline-block">History</span>
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-6">Former Leaders</h1>
            <p class="text-blue-200 text-lg max-w-2xl mx-auto leading-relaxed">Celebrating the legacy of leadership that has shaped our journey.</p>
        </div>
    </section>

    <!-- Past Leaders Timeline -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                
                <!-- Past Presidents -->
                <div>
                    <h2 class="text-2xl font-serif font-bold text-brand-blue mb-8 border-l-4 border-brand-gold pl-4">Presidents Over the Years</h2>
                    <div class="relative border-l border-gray-200 ml-4 space-y-8">
                        
                        <!-- Timeline Item -->
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-brand-gold border-2 border-white shadow"></div>
                            <h4 class="font-bold text-gray-800">Dr. P.T. Chandy</h4>
                            <p class="text-sm text-gray-500 mb-1">1967 - 1969</p>
                        </div>
                         <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Fr. Herbert D'Souza</h4>
                            <p class="text-sm text-gray-500 mb-1">1970 - 1972</p>
                        </div>
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Dr. M.A. Thangaraj</h4>
                            <p class="text-sm text-gray-500 mb-1">1973 - 1975</p>
                        </div>
                         <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Fr. G. Francis SJ</h4>
                            <p class="text-sm text-gray-500 mb-1">1976 - 1978</p>
                        </div>
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Prof. Ninan Abraham</h4>
                            <p class="text-sm text-gray-500 mb-1">1979 - 1981</p>
                        </div>
                         <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Fr. J. Kuriakose</h4>
                            <p class="text-sm text-gray-500 mb-1">1982 - 1984</p>
                        </div>
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Dr. Mithra Augustine</h4>
                            <p class="text-sm text-gray-500 mb-1">1985 - 1987</p>
                        </div>
                         <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Fr. P.P. George SDB</h4>
                            <p class="text-sm text-gray-500 mb-1">1988 - 1990</p>
                        </div>
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Dr. P.S. Jacob</h4>
                            <p class="text-sm text-gray-500 mb-1">1991 - 1993</p>
                        </div>
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Fr. George Madathiparambil</h4>
                            <p class="text-sm text-gray-500 mb-1">1994 - 1996</p>
                        </div>
                         <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Dr. Moses Michael Farraday</h4>
                            <p class="text-sm text-gray-500 mb-1">1997 - 1999</p>
                        </div>
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Fr. Dr. Thomas P.D.</h4>
                            <p class="text-sm text-gray-500 mb-1">2000 - 2002</p>
                        </div>
                        <div class="ml-8 relative">
                             <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Dr. Stephen Matty</h4>
                            <p class="text-sm text-gray-500 mb-1">2003 - 2005</p>
                        </div>
                         <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Fr. Dr. Joseph Xavier SJ</h4>
                            <p class="text-sm text-gray-500 mb-1">2006 - 2008</p>
                        </div>
                         <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Dr. V.S. Prasad</h4>
                            <p class="text-sm text-gray-500 mb-1">2009 - 2011</p>
                        </div>
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Fr. Dr. Ignacimuthu SJ</h4>
                            <p class="text-sm text-gray-500 mb-1">2012 - 2014</p>
                        </div>
                         <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Dr. R.W. Alexander Jesudasan</h4>
                            <p class="text-sm text-gray-500 mb-1">2015 - 2017</p>
                        </div>
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Fr. Dr. G. Pushparaj SJ</h4>
                            <p class="text-sm text-gray-500 mb-1">2018 - 2021</p>
                        </div>

                    </div>
                </div>

                <!-- Past General Secretaries -->
                <div>
                    <h2 class="text-2xl font-serif font-bold text-brand-blue mb-8 border-l-4 border-brand-teal pl-4">General Secretaries</h2>
                    <div class="grid gap-4">
                        <div class="bg-slate-50 p-4 rounded-lg flex items-center justify-between hover:bg-white hover:shadow-md transition border border-gray-100">
                             <div>
                                <h5 class="font-bold text-gray-800">Fr. T.A. Mathias</h5>
                                <p class="text-xs text-brand-teal font-bold uppercase mt-1">Founding Gen. Secreatary</p>
                             </div>
                             <span class="text-sm text-gray-500 font-medium bg-white px-3 py-1 rounded-full shadow-sm">1967 - 1978</span>
                        </div>
                        
                         <div class="bg-slate-50 p-4 rounded-lg flex items-center justify-between hover:bg-white hover:shadow-md transition border border-gray-100">
                             <h5 class="font-bold text-gray-800">Dr. Mani Jacob</h5>
                             <span class="text-sm text-gray-500 font-medium bg-white px-3 py-1 rounded-full shadow-sm">1979 - 2010</span>
                        </div>
                        
                         <div class="bg-slate-50 p-4 rounded-lg flex items-center justify-between hover:bg-white hover:shadow-md transition border border-gray-100">
                             <h5 class="font-bold text-gray-800">Dr. Daniel Ezhilarasu</h5>
                             <span class="text-sm text-gray-500 font-medium bg-white px-3 py-1 rounded-full shadow-sm">2010 - 2017</span>
                        </div>

                    </div>
                    
                    <!-- Decorative element -->
                    <div class="mt-12 bg-blue-50 p-6 rounded-xl border border-blue-100 text-center">
                        <i class="fas fa-quote-left text-brand-blue/20 text-4xl mb-2"></i>
                        <p class="text-brand-blue font-serif italic">"Leadership is not about being in charge. It is about taking care of those in your charge."</p>
                    </div>

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
