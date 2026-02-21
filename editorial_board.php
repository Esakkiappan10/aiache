<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editorial Board | AIACHE</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

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
    <style>
        .hover-lift {
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
    </style>
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
        <div class="absolute top-0 right-0 w-64 h-64 bg-brand-gold rounded-full opacity-10 blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-brand-teal rounded-full opacity-10 blur-3xl transform -translate-x-1/2 translate-y-1/2"></div>
        
        <div class="container mx-auto px-4 relative z-10" data-aos="fade-up">
            <span class="bg-brand-gold/20 text-brand-gold border border-brand-gold/30 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6 inline-block">Publications & Research</span>
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-6">Editorial Board</h1>
            <p class="text-blue-100 text-lg max-w-2xl mx-auto leading-relaxed">Fostering academic excellence through rigorous research and insightful publications.</p>
        </div>
    </section>

    <!-- About Journal Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col md:flex-row items-start gap-12">
                <div class="w-full md:w-1/2" data-aos="fade-right">
                    <div class="relative bg-blue-50 rounded-2xl p-8 border border-blue-100 shadow-lg">
                        <div class="absolute -top-6 -left-6 text-brand-blue text-6xl opacity-20"><i class="fas fa-quote-left"></i></div>
                        <h3 class="text-2xl font-serif font-bold text-brand-blue mb-4">New Frontiers in Education</h3>
                        <p class="text-gray-600 leading-relaxed italic mb-4">
                            "New Frontiers in Education" is a quarterly journal of AIACHE with (ISSN: 0972-1231). The "All India Association for Christian Higher Education" is a registered society of the Christian Higher Education Institutions in India and SE Asia. At Present it has more than 430 member institutions with 233 Life Members.
                        </p>
                        <div class="mt-6 flex items-center gap-4">
                            <span class="px-3 py-1 bg-brand-blue text-white text-xs font-bold rounded uppercase">ISSN: 0972-1231</span>
                            <span class="px-3 py-1 bg-brand-gold text-white text-xs font-bold rounded uppercase">Quarterly</span>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 space-y-6" data-aos="fade-left">
                    <span class="text-brand-gold font-bold tracking-widest uppercase text-xs">About the Journal</span>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-brand-dark leading-tight">53 Years of <br><span class="text-brand-blue">Unbroken Tradition</span></h2>
                    <p class="text-gray-600 leading-relaxed text-justify">
                        AIACHE has been publishing this quarterly journal since 1967, the year it was established. The purpose was to encourage research and study in Education in the disciplines of Arts, Science and Humanities as well as health and physical education by the thousands of faculty under AIACHE institutions. Its first issue appeared in 1967 under the title "Journal of Christian Colleges in India". The present name "New Frontiers in Education" was approved by the Registrar of Newspapers and was used first in January 1971. Since 1967, the Journal has been published with unfailing regularity every quarter of the year. Very few journals in India have such an unbroken tradition.
                        <br><br>
                        New Frontiers in Education, which is a referred, peer reviewed journal, has always upheld the values of academic excellence, journalistic ethics and emphasis on educational innovations. The Journal has sought to cover the full spectrum of education from pre-primary to higher education and research. It is published from New Delhi, the national capital.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Editorial Board Members -->
    <section class="py-20 bg-brand-light relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand-blue/5 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-brand-gold font-bold tracking-widest uppercase text-xs">Our Experts</span>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-brand-blue mt-2">Editorial Board</h2>
                <div class="w-20 h-1 bg-brand-gold mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Chief Editor -->
            <div class="bg-white rounded-xl shadow-xl p-8 max-w-4xl mx-auto mb-12 border border-blue-50 relative overflow-hidden group hover-lift" data-aos="zoom-in">
                <div class="absolute top-0 left-0 w-2 h-full bg-brand-gold"></div>
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="w-40 h-40 bg-gray-200 rounded-full flex items-center justify-center text-gray-400 text-6xl shadow-inner flex-shrink-0 border-4 border-white">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <div class="flex flex-col md:flex-row md:items-center gap-2 mb-2 justify-center md:justify-start">
                             <span class="bg-brand-blue text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider inline-block">Chief Editor</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">DR. FR. (PROF) GEORGE THADATHIL SDB</h3>
                        <p class="text-brand-gold font-medium text-sm mb-4">Principal, Salesian College, Sonada & Siliguri, West Bengal</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-2 text-sm text-gray-600 text-left border-t border-gray-100 pt-4">
                            <p><strong class="text-gray-900">Specialization:</strong> Humanities and Social Sciences – Cross Cultural Social Philosophy</p>
                            <p><strong class="text-gray-900">Email:</strong> georgethadathil@aiache.co.in</p>
                            <p><strong class="text-gray-900">Mobile:</strong> +91 934045539</p>
                            <p><strong class="text-gray-900">Languages:</strong> English, Malayalam, Nepali, Bengali, Hindi, Sanskrit, German</p>
                             <p class="md:col-span-2 mt-2"><strong class="text-gray-900">Bio:</strong> Founder editor of Salesian Journal of Humanities and Social Science. Specializes in identity formations in Darjeeling District.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Associate Editor -->
            <div class="bg-white rounded-xl shadow-lg p-8 max-w-4xl mx-auto mb-16 border border-blue-50 relative overflow-hidden group hover-lift" data-aos="zoom-in" data-aos-delay="100">
                <div class="absolute top-0 left-0 w-2 h-full bg-brand-teal"></div>
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="w-32 h-32 bg-gray-200 rounded-full flex items-center justify-center text-gray-400 text-5xl shadow-inner flex-shrink-0 border-4 border-white">
                         <i class="fas fa-user-circle"></i>
                    </div>
                    <div class="flex-1 text-center md:text-left">
                         <div class="flex flex-col md:flex-row md:items-center gap-2 mb-2 justify-center md:justify-start">
                             <span class="bg-brand-teal text-white text-[10px] font-bold px-2 py-0.5 rounded uppercase tracking-wider inline-block">Associate Editor</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Dr. GEORGE ABRAHAM</h3>
                        <p class="text-brand-teal font-medium text-sm mb-4">Principal, YMCA College of Physical Education, Chennai</p>
                        
                         <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-2 text-sm text-gray-600 text-left border-t border-gray-100 pt-4">
                            <p><strong class="text-gray-900">Email:</strong> profgeorgeabraham@gmail.com</p>
                            <p><strong class="text-gray-900">Phone:</strong> +91 99656 25502</p>
                             <p class="md:col-span-2"><strong class="text-gray-900">Languages:</strong> English, Tamil, Hindi and Malayalam</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Members Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- Member -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition group flex items-start gap-4">
                     <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-brand-blue text-lg flex-shrink-0">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-wider">Sub Editor</span>
                        <h4 class="font-bold text-gray-800 text-sm">PROF DR MARY ANGELINE</h4>
                        <p class="text-xs text-gray-500 mt-1">Principal, Nazareth College, Avadi, TN</p>
                    </div>
                </div>

                 <!-- Member -->
                 <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition group flex items-start gap-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-brand-blue text-lg flex-shrink-0">
                       <i class="fas fa-user"></i>
                   </div>
                   <div>
                       <h4 class="font-bold text-gray-800 text-sm">Dr MADHU SINGH</h4>
                       <p class="text-xs text-gray-500 mt-1">St. Xavier's College Of Education, Patna, Bihar</p>
                   </div>
               </div>

                <!-- Member -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition group flex items-start gap-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-brand-blue text-lg flex-shrink-0">
                       <i class="fas fa-user"></i>
                   </div>
                   <div>
                       <h4 class="font-bold text-gray-800 text-sm">Dr Fr PRASANTH PALAKKAPPILLIL CMI</h4>
                       <p class="text-xs text-gray-500 mt-1">Principal, S.H. College, Thevara, Kochi</p>
                   </div>
               </div>

                <!-- Member -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition group flex items-start gap-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-brand-blue text-lg flex-shrink-0">
                       <i class="fas fa-user"></i>
                   </div>
                   <div>
                       <h4 class="font-bold text-gray-800 text-sm">Dr SHEEPA PRINCESS</h4>
                       <p class="text-xs text-gray-500 mt-1">Trichy, TN</p>
                   </div>
               </div>

                <!-- Member -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition group flex items-start gap-4">
                    <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-brand-blue text-lg flex-shrink-0">
                       <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-800 text-sm">Dr SARAH THOMAS</h4>
                        <p class="text-xs text-gray-500 mt-1">St. Ann's College Of Education (Aut), Secunderabad</p>
                    </div>
                </div>

                <!-- Member -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition group flex items-start gap-4">
                     <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-brand-blue text-lg flex-shrink-0 overflow-hidden">
                        <img src="portfolio/1 Rev Dr Xavier Vedam SJ.png" alt="Rev. Dr. Fr. Xavier Vedam S.J." class="w-full h-full object-cover">
                     </div>
                     <div>
                         <h4 class="font-bold text-gray-800 text-sm">Rev. Dr. Fr. XAVIER VEDAM S.J.</h4>
                         <p class="text-xs text-gray-500 mt-1">Former Principal, Arul Anandar College, Karumathur & Loyola College, Mettala, TN</p>
                     </div>
                 </div>

                 <!-- Member -->
                 <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg transition group flex items-start gap-4">
                     <div class="w-12 h-12 bg-blue-50 rounded-full flex items-center justify-center text-brand-blue text-lg flex-shrink-0">
                     <i class="fas fa-user"></i>
                     </div>
                     <div>
                        <h4 class="font-bold text-gray-800 text-sm">PROF Fr JOESPH PUTHENPURA CMI</h4>
                        <p class="text-xs text-gray-500 mt-1">Former Principal, St. Aloysius Edathua, Kerala</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Themes & Guidelines -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                
                <!-- Guidelines & Info -->
                <div class="space-y-8" data-aos="fade-right">
                     <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100">
                        <h3 class="text-2xl font-serif font-bold text-brand-blue mb-4 flex items-center gap-2">
                            <i class="fas fa-calendar-alt text-brand-gold"></i> Themes & Deadlines
                        </h3>
                        <p class="text-gray-600 mb-4 text-sm">
                            New Frontiers in Education is a quarterly Journal on Education. It is published in March, June, September and December every year.
                        </p>
                         <div class="space-y-4">
                            <div class="flex items-center justify-between bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                <span class="font-bold text-gray-700">Submission Deadlines</span>
                                <span class="text-brand-blue font-semibold">January, April, July, October</span>
                            </div>
                         </div>
                    </div>

                    <div class="bg-white p-8 rounded-2xl border border-gray-200 shadow-sm">
                        <h3 class="text-2xl font-serif font-bold text-brand-blue mb-4 flex items-center gap-2">
                            <i class="fas fa-file-alt text-brand-gold"></i> Guidelines to Authors
                        </h3>
                        <p class="text-gray-600 mb-6 text-sm">
                            Educationists are invited to contribute research articles on contemporary issues in education. Articles may be sent to <a href="mailto:aiache2011@gmail.com" class="text-brand-blue font-bold hover:underline">aiache2011@gmail.com</a> in MS Word (12 pt TimesNewRoman) with an abstract and reference.
                        </p>
                        <h4 class="font-bold text-gray-800 mb-2 text-sm">Key Notes:</h4>
                        <ul class="space-y-3 text-sm text-gray-700">
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check text-brand-teal mt-1"></i>
                                <span>All articles should be original and unpublished.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check text-brand-teal mt-1"></i>
                                <span>Provide designation and complete mailing address.</span>
                            </li>
                             <li class="flex items-start gap-3">
                                <i class="fas fa-check text-brand-teal mt-1"></i>
                                <span>Explain all acronyms and abbreviations in full first.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fas fa-check text-brand-teal mt-1"></i>
                                <span>Cite illustrations and tables in sequence.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Policy -->
                <div class="h-full" data-aos="fade-left">
                    <div class="bg-brand-blue text-white p-10 rounded-3xl relative overflow-hidden flex flex-col justify-center h-full">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
                        
                        <h3 class="text-2xl font-serif font-bold mb-6">Peer Review & Publication Policy</h3>
                        
                        <div class="accordion space-y-4">
                            <!-- Process -->
                            <div class="border-b border-blue-800 pb-4">
                                <h4 class="font-bold text-brand-gold mb-2">Double-Blind Peer Review</h4>
                                <p class="text-blue-100 text-sm leading-relaxed">
                                    Articles are screened by the Chief Editor and then reviewed by a Subject Matter Expert and Editorial members. Authors are notified of acceptance, revision, or rejection within 1-3 months.
                                </p>
                            </div>
                            
                            <!-- Copyright -->
                            <div class="border-b border-blue-800 pb-4">
                                <h4 class="font-bold text-brand-gold mb-2">Copyright & Plagiarism</h4>
                                <p class="text-blue-100 text-sm leading-relaxed">
                                    AIACHE holds copyrights for published articles. Plagiarism and unethical practices are strictly prohibited and checked using authorized software, following UGC regulations.
                                </p>
                            </div>

                             <!-- Ethics -->
                             <div>
                                <h4 class="font-bold text-brand-gold mb-2">Ethics & Withdrawal</h4>
                                <p class="text-blue-100 text-sm leading-relaxed">
                                    We uphold values of truthfulness and ethics. Authors may withdraw before publication. AIACHE reserves the right to withdraw papers for unethical practices even after publication.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Newsletter Section (Vikasini Removed) -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-8">
             <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition group max-w-4xl mx-auto flex flex-col md:flex-row">
                <div class="md:w-1/3 bg-gradient-to-r from-brand-teal to-emerald-600 flex items-center justify-center relative overflow-hidden p-8">
                        <div class="absolute inset-0 bg-black opacity-10"></div>
                        <div class="text-center relative z-10">
                             <i class="far fa-newspaper text-5xl text-white mb-4"></i>
                            <h3 class="text-2xl font-serif font-bold text-white">Newsletter</h3>
                        </div>
                </div>
                <div class="p-8 md:w-2/3 flex flex-col justify-center">
                        <span class="text-brand-teal font-bold tracking-widest text-xs uppercase mb-2 block">Monthly Update</span>
                    <h4 class="text-2xl font-bold text-gray-800 mb-2">Christian Higher Education</h4>
                    <p class="text-gray-600 mb-6">
                        Stay updated with the latest news, events, achievements, and stories from our member institutions across India.
                    </p>
                        <a href="#" class="inline-flex items-center text-brand-teal font-bold hover:text-brand-teal/80 transition">
                        Subscribe Now <i class="fas fa-arrow-right ml-2 text-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Books Published -->
    <section class="py-20 bg-white border-t border-gray-100">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-12">
                 <span class="text-brand-gold font-bold tracking-widest uppercase text-xs">Knowledge Repository</span>
                 <h2 class="text-3xl md:text-4xl font-serif font-bold text-brand-blue mt-2">Books Published by AIACHE</h2>
            </div>
            
            <div class="max-w-4xl mx-auto bg-gray-50 rounded-2xl p-8 border border-gray-100 shadow-inner max-h-[600px] overflow-y-auto custom-scrollbar">
                <ul class="space-y-4">
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">1976</span>
                        <span class="text-gray-700 font-medium">Development of Personalities (three volumes)</span>
                    </li>
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">1990</span>
                        <span class="text-gray-700 font-medium">Value Education Today (Explorations in Social Ethics)</span>
                    </li>
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">1991</span>
                        <span class="text-gray-700 font-medium">Documentation on Women’s Concerns (Jan-June)</span>
                    </li>
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">1995</span>
                        <span class="text-gray-700 font-medium">Remedial Education At Tertiary Level</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">1996</span>
                        <span class="text-gray-700 font-medium">Changing Track</span>
                    </li>
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">1996</span>
                        <span class="text-gray-700 font-medium">Judgements on Minority Rights (4 volumes)</span>
                    </li>
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">1996</span>
                        <span class="text-gray-700 font-medium">Changing Track – Commmunity Colleges in India</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">1997</span>
                        <span class="text-gray-700 font-medium">How to Organize A Conference</span>
                    </li>
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">1998</span>
                        <span class="text-gray-700 font-medium">Organizations for Christian Higher Education Worldwide: A Directory</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">1999</span>
                        <span class="text-gray-700 font-medium">How to start and manage Women’s Development and Research Centres</span>
                    </li>
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">1999</span>
                        <span class="text-gray-700 font-medium">Organizations for Christian Higher Education Worldwide – A Directory 1998-99</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2000</span>
                        <span class="text-gray-700 font-medium">Documentation on Women, Children and Human Rights</span>
                    </li>
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2000</span>
                        <span class="text-gray-700 font-medium">Autonomous Colleges : History, Performance and Future</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2001</span>
                        <span class="text-gray-700 font-medium">Directory of Church-related Colleges in India</span>
                    </li>
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2001</span>
                        <span class="text-gray-700 font-medium">Elimination of Child Labour</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2004</span>
                        <span class="text-gray-700 font-medium">Sexual Harassment at the Workplace</span>
                    </li>
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2004</span>
                        <span class="text-gray-700 font-medium">Understanding HIV/AIDS To Prevent AIDS</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2005</span>
                        <span class="text-gray-700 font-medium">Documentation on Women & Children (Dec)</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">---</span>
                        <span class="text-gray-700 font-medium">Basics of Gender</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2006</span>
                        <span class="text-gray-700 font-medium">My Rights (Women and Law)</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2007</span>
                        <span class="text-gray-700 font-medium">Girls’ Education</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2007</span>
                        <span class="text-gray-700 font-medium">Resource Book for Value Education</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2008</span>
                        <span class="text-gray-700 font-medium">Human Values Development Programme</span>
                    </li>
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2009</span>
                        <span class="text-gray-700 font-medium">National Conference on Minority Rights and Responsibilities in Education</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2011</span>
                        <span class="text-gray-700 font-medium">Report of Regional Consultation 2011 towards a Road-Map for AIACHE</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2013</span>
                        <span class="text-gray-700 font-medium">Proceedings of the National Students’ Assembly</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2014</span>
                        <span class="text-gray-700 font-medium">Human Values</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2014</span>
                        <span class="text-gray-700 font-medium">Facilitator’s Manuel for Human Values</span>
                    </li>
                     <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">2016</span>
                        <span class="text-gray-700 font-medium">Building Institutions and Individuals – AIACHE’s Saga of Success 1967-2016</span>
                    </li>
                    <li class="flex gap-4 p-4 bg-white rounded-lg shadow-sm hover:shadow-md transition">
                        <span class="font-bold text-brand-blue shrink-0">---</span>
                        <span class="text-gray-700 font-medium">Human Rights and Values – A Hand Book</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-brand-dark text-white py-8 text-center text-sm border-t border-slate-800 mt-auto">
        <p>&copy; 2026 AIACHE. All Rights Reserved.</p>
    </footer>

    <script>
        AOS.init({ once: true, offset: 50, duration: 800 });
        
        // Mobile menu toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
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
