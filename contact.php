<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | AIACHE</title>
    
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
    <section class="bg-brand-blue text-white py-16 text-center">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4">Get in Touch</h1>
            <p class="text-blue-200">We'd love to hear from you. Reach out to us for any queries.</p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <!-- Contact Info -->
                <div class="space-y-8">
                    <div class="bg-blue-50 p-8 rounded-2xl border border-blue-100">
                        <h2 class="text-2xl font-serif font-bold text-brand-blue mb-6">Contact Information</h2>
                        
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-brand-gold shadow-sm shrink-0">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800">Head Office</h3>
                                    <p class="text-gray-600 mt-1">
                                        Ecumenical Centre, 39, Institutional Area,<br>
                                        D-Block, Janakpuri, New Delhi - 110058
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-brand-gold shadow-sm shrink-0">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800">Phone</h3>
                                    <p class="text-gray-600 mt-1">+91-11-28524752</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white rounded-full flex items-center justify-center text-brand-gold shadow-sm shrink-0">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-800">Email</h3>
                                    <p class="text-gray-600 mt-1">aiache@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map Map Placeholder -->
                    <div class="rounded-2xl overflow-hidden shadow-md h-64 bg-gray-200 relative">
                         <!-- Embed Google Map Here -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.502947841108!2d77.08945631508218!3d28.61468698242491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04b6b6b6b6b7%3A0x6b6b6b6b6b6b6b6b!2sAIACHE!5e0!3m2!1sen!2sin!4v1625634567890!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                    <h2 class="text-2xl font-serif font-bold text-gray-800 mb-6">Send us a Message</h2>
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition" placeholder="John">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition" placeholder="Doe">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition" placeholder="john@example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition" placeholder="Inquiry about membership">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-brand-blue focus:border-brand-blue outline-none transition" placeholder="How can we help you?"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-brand-gold hover:bg-amber-600 text-white font-bold py-3.5 rounded-lg shadow-md transition transform hover:-translate-y-1">
                            Send Message
                        </button>
                    </form>
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
