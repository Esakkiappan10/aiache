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
                        <a href="founders.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition">Founders</a>
                        <a href="former_leaders.php" class="block px-4 py-2 text-brand-blue bg-blue-50 font-bold">Former Leaders</a>
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

</body>
</html>
