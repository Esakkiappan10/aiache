<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team | AIACHE</title>
    
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
                   <div class="absolute top-full left-0 w-56 bg-white shadow-xl rounded-xl mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top border border-gray-100 z-50 text-left">
                       <a href="administration.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Administration</a>
                       <a href="executive_board.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Executive Board</a>
                       <a href="founders.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Founders</a>
                       <a href="former_leaders.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Former Leaders</a>
                       <a href="editorial_board.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Editorial Board</a>
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
            <span class="bg-brand-gold/20 text-brand-gold border border-brand-gold/30 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-widest mb-6 inline-block">Leadership & Legacy</span>
            <h1 class="text-4xl md:text-6xl font-serif font-bold mb-6">Our Administration</h1>
            <p class="text-blue-200 text-lg max-w-2xl mx-auto leading-relaxed">Guiding AIACHE with vision, wisdom, and a commitment to excellence in higher education.</p>
        </div>
    </section>

    <!-- Navigation Tabs (Internal Page Nav) -->
    <div class="sticky top-[73px] z-40 bg-white/95 backdrop-blur-md border-b border-gray-200 shadow-sm hidden md:block">
        <div class="container mx-auto px-4">
            <div class="flex justify-center space-x-12">
                <a href="#administration" class="py-4 text-sm font-bold text-brand-blue border-b-2 border-brand-blue">Administration</a>
                <a href="#board" class="py-4 text-sm font-bold text-gray-500 hover:text-brand-blue transition border-b-2 border-transparent hover:border-brand-blue/30">Executive Board</a>
                <a href="#founders" class="py-4 text-sm font-bold text-gray-500 hover:text-brand-blue transition border-b-2 border-transparent hover:border-brand-blue/30">Founders</a>
                <a href="#presidents" class="py-4 text-sm font-bold text-gray-500 hover:text-brand-blue transition border-b-2 border-transparent hover:border-brand-blue/30">Past Presidents</a>
                <a href="#gensecs" class="py-4 text-sm font-bold text-gray-500 hover:text-brand-blue transition border-b-2 border-transparent hover:border-brand-blue/30">General Secretaries</a>
            </div>
        </div>
    </div>

    <!-- Current Administration Section -->
    <section id="administration" class="py-20 bg-white scroll-mt-32">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-serif font-bold text-gray-800">Current Administration</h2>
                <div class="w-20 h-1 bg-brand-gold mx-auto mt-4 rounded-full"></div>
            </div>

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
                    <div class="w-32 h-32 rounded-full bg-blue-50 mb-6 flex items-center justify-center text-brand-blue text-4xl group-hover:bg-brand-blue group-hover:text-white transition duration-300">
                        <i class="fas fa-user"></i>
                    </div>
                    <h4 class="font-bold text-lg text-gray-800">Rev. Dr. Arockiasamy Xavier SJ</h4>
                    <span class="text-xs font-bold text-brand-blue uppercase tracking-wide my-2">Vice President</span>
                    <p class="text-sm text-gray-500">Principal, St. Joseph's College, Tiruchirappalli</p>
                </div>

                <!-- Gen Sec -->
                <div class="bg-brand-blue rounded-xl p-6 shadow-lg border border-brand-blue transform md:-translate-y-4 flex flex-col items-center text-center relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full blur-2xl -mr-16 -mt-16"></div>
                    <div class="w-32 h-32 rounded-full bg-white/10 mb-6 flex items-center justify-center text-white text-4xl border-2 border-white/20">
                        <i class="fas fa-user-tie"></i>
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
                    <div class="w-32 h-32 rounded-full bg-blue-50 mb-6 flex items-center justify-center text-brand-blue text-4xl group-hover:bg-brand-blue group-hover:text-white transition duration-300">
                        <i class="fas fa-user"></i>
                    </div>
                    <h4 class="font-bold text-lg text-gray-800">Dr. Madhumanjari Mandal</h4>
                    <span class="text-xs font-bold text-brand-blue uppercase tracking-wide my-2">Vice President</span>
                    <p class="text-sm text-gray-500">Principal, Scottish Church College, Kolkata</p>
                </div>

                <!-- Treasurer (Centered in wide view or just flow) -->
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-lg transition flex flex-col items-center text-center group md:col-start-1 md:col-end-3 lg:col-start-2 lg:col-end-auto">
                    <div class="w-32 h-32 rounded-full bg-amber-50 mb-6 flex items-center justify-center text-brand-gold text-4xl group-hover:bg-brand-gold group-hover:text-white transition duration-300">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h4 class="font-bold text-lg text-gray-800">Dr. Chinkhanlun Guite</h4>
                    <span class="text-xs font-bold text-gray-500 uppercase tracking-wide my-2">Treasurer</span>
                    <p class="text-sm text-gray-500">Bursar, St. Stephen's College, Delhi</p>
                </div>

            </div>

            <!-- Executive Board Members -->
            <div id="board" class="mb-16 scroll-mt-32">
                <h2 class="text-2xl font-serif font-bold text-gray-800 text-center mb-10 border-b border-gray-100 pb-4 w-max mx-auto px-10">Board Members</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-5 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition">
                            <i class="fas fa-user text-2xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Rev. Dr. Gigi Thomas</h4>
                        <p class="text-xs text-gray-500">Dean of Studies, Mar Ivanios College, Kerala</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-5 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition">
                            <i class="fas fa-user text-2xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Dr. Sr. M. Rashmi A.C</h4>
                        <p class="text-xs text-gray-500">Principal, Patna Women's College, Patna</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-5 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition">
                            <i class="fas fa-user text-2xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Rev. Dr. Sebastian Karottupuram</h4>
                        <p class="text-xs text-gray-500">Principal, Don Bosco College, Manipur</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-5 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition">
                            <i class="fas fa-user text-2xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Dr. Sr. Ananda Amritmahal</h4>
                        <p class="text-xs text-gray-500">Principal, Sophia College for Women, Mumbai</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-5 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition">
                            <i class="fas fa-user text-2xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Rev. Dr. Praveen Martis SJ</h4>
                        <p class="text-xs text-gray-500">Principal, St. Aloysius College, Mangalore</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-5 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition">
                            <i class="fas fa-user text-2xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Dr. Rudolf Manih</h4>
                        <p class="text-xs text-gray-500">Principal, Union Christian College, Meghalaya</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-5 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition">
                            <i class="fas fa-user text-2xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Dr. Sujo Mary Varghese</h4>
                        <p class="text-xs text-gray-500">Principal, Mar Thoma College, Kerala</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-gray-50 rounded-xl p-5 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition">
                            <i class="fas fa-user text-2xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Dr. P. Nithila Devakarunyam</h4>
                        <p class="text-xs text-gray-500">Principal, St. Christopher's College, Chennai</p>
                    </div>

                     <!-- Member -->
                     <div class="bg-gray-50 rounded-xl p-5 hover:bg-white hover:shadow-lg transition border border-gray-100 text-center group">
                        <div class="w-20 h-20 mx-auto bg-white rounded-full flex items-center justify-center mb-4 shadow-sm group-hover:scale-110 transition">
                            <i class="fas fa-user text-2xl text-gray-300"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-1">Prof. John Varghese</h4>
                        <p class="text-xs text-gray-500">Principal, St. Stephen's College, Delhi</p>
                    </div>

                </div>
            </div>

            <!-- Co-opted Members -->
            <div>
                <h2 class="text-2xl font-serif font-bold text-gray-800 text-center mb-10 border-b border-gray-100 pb-4 w-max mx-auto px-10">Co-opted Members</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    
                     <!-- Member -->
                     <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition text-center">
                        <div class="w-16 h-16 mx-auto bg-blue-50 text-brand-blue rounded-full flex items-center justify-center mb-3">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h4 class="font-bold text-gray-800">Rev. Dr. Joseph Xavier SJ</h4>
                        <p class="text-xs text-gray-500 mt-1">St. Joseph's College, Tiruchirappalli<br>(Former Principal, Loyola College)</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition text-center">
                        <div class="w-16 h-16 mx-auto bg-blue-50 text-brand-blue rounded-full flex items-center justify-center mb-3">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h4 class="font-bold text-gray-800">Rev. Dr. Valan Arasu</h4>
                        <p class="text-xs text-gray-500 mt-1">Principal, St. Aloysius College, Jabalpur</p>
                    </div>

                    <!-- Member -->
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition text-center">
                        <div class="w-16 h-16 mx-auto bg-blue-50 text-brand-blue rounded-full flex items-center justify-center mb-3">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h4 class="font-bold text-gray-800">Dr. Paul Wilson</h4>
                        <p class="text-xs text-gray-500 mt-1">Principal, Madras Christian College, Chennai</p>
                    </div>

                </div>
            </div>
    </section>

    <!-- Founders Section -->
    <section id="founders" class="py-20 bg-slate-50 scroll-mt-32">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
                <div>
                    <span class="text-brand-gold font-bold tracking-widest uppercase text-xs">Our Origins</span>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-brand-blue mt-2">Visionary Founders</h2>
                </div>
                <div class="h-px bg-gray-200 flex-grow ml-8 mb-2 hidden md:block"></div>
                <p class="text-gray-500 text-sm max-w-sm text-right hidden md:block">Pioneers who laid the foundation for excellence in Christian Higher Education.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Founder Card -->
                <div class="bg-white p-6 rounded-lg border-b-4 border-brand-blue shadow-sm hover:shadow-md transition group">
                    <div class="text-brand-blue text-4xl mb-4 group-hover:scale-110 transition-transform origin-left"><i class="fas fa-church"></i></div>
                    <h4 class="font-bold text-gray-800 text-lg">Fr. T.A. Mathias</h4>
                    <p class="text-xs font-bold text-brand-gold uppercase mt-1">General Secretary (1967-79)</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg border-b-4 border-gray-300 shadow-sm hover:shadow-md transition group">
                    <div class="text-gray-400 text-4xl mb-4 group-hover:text-brand-blue transition"><i class="fas fa-user-graduate"></i></div>
                    <h4 class="font-bold text-gray-800 text-lg">Dr. Panavelil Thomas Chandy</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-1">(1967-69)</p>
                </div>

                <div class="bg-white p-6 rounded-lg border-b-4 border-gray-300 shadow-sm hover:shadow-md transition group">
                    <div class="text-gray-400 text-4xl mb-4 group-hover:text-brand-blue transition"><i class="fas fa-user-graduate"></i></div>
                    <h4 class="font-bold text-gray-800 text-lg">Dr. Chandran Devanesan</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-1">Co-Founder</p>
                </div>

                <div class="bg-white p-6 rounded-lg border-b-4 border-gray-300 shadow-sm hover:shadow-md transition group">
                    <div class="text-gray-400 text-4xl mb-4 group-hover:text-brand-blue transition"><i class="fas fa-user-graduate"></i></div>
                    <h4 class="font-bold text-gray-800 text-lg">Fr. Herbert D'Souza</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-1">(1970-1972)</p>
                </div>

                 <div class="bg-white p-6 rounded-lg border-b-4 border-gray-300 shadow-sm hover:shadow-md transition group">
                    <div class="text-gray-400 text-4xl mb-4 group-hover:text-brand-blue transition"><i class="fas fa-cross"></i></div>
                    <h4 class="font-bold text-gray-800 text-lg">Archbishop Angelo Fernandes</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-1">Co-Founder</p>
                </div>

                <div class="bg-white p-6 rounded-lg border-b-4 border-gray-300 shadow-sm hover:shadow-md transition group">
                    <div class="text-gray-400 text-4xl mb-4 group-hover:text-brand-blue transition"><i class="fas fa-cross"></i></div>
                    <h4 class="font-bold text-gray-800 text-lg">Bishop Paulos Mar Gregorios</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-1">Co-Founder</p>
                </div>

                <div class="bg-white p-6 rounded-lg border-b-4 border-gray-300 shadow-sm hover:shadow-md transition group">
                    <div class="text-gray-400 text-4xl mb-4 group-hover:text-brand-blue transition"><i class="fas fa-user-graduate"></i></div>
                    <h4 class="font-bold text-gray-800 text-lg">Dr. Manuel A. Thangaraj</h4>
                    <p class="text-xs font-bold text-gray-500 uppercase mt-1">(1973-1975)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Past Leaders Timeline -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                
                <!-- Past Presidents -->
                <div id="presidents" class="scroll-mt-32">
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
                        <!-- Skipped a few for brevity/layout, listing full requested: -->
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
                            <h4 class="font-bold text-gray-800">Dr. Peter Jayapandian</h4>
                            <p class="text-sm text-gray-500 mb-1">1997 - 1999</p>
                        </div>
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Fr. Stephen Mavely</h4>
                            <p class="text-sm text-gray-500 mb-1">2000 - 2002</p>
                        </div>
                         <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Rev. (Prof.) Dr. R.B. Lal</h4>
                            <p class="text-sm text-gray-500 mb-1">2003 - 2005</p>
                        </div>
                         <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Prof. Newman Fernandes</h4>
                            <p class="text-sm text-gray-500 mb-1">2006 - 2008</p>
                        </div>
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Rev. (Prof). Dr. R.B. Lal</h4>
                            <p class="text-sm text-gray-500 mb-1">2009 - 2011</p>
                        </div>
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Rev. Fr. Leslie Moras</h4>
                            <p class="text-sm text-gray-500 mb-1">2012 - 2014</p>
                        </div>
                        <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Dr. R.W. Alexander Jesudasan</h4>
                            <p class="text-sm text-gray-500 mb-1">2015 - 2017</p>
                        </div>
                         <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-gray-300 border-2 border-white"></div>
                            <h4 class="font-bold text-gray-800">Rev. Dr. George Thadathil SDB</h4>
                            <p class="text-sm text-gray-500 mb-1">2018 - 2022</p>
                        </div>
                         <div class="ml-8 relative">
                            <div class="absolute -left-10 mt-1 w-4 h-4 rounded-full bg-brand-gold border-2 border-white shadow"></div>
                            <h4 class="font-bold text-brand-blue">Dr. M. Davamani Christober</h4>
                            <p class="text-sm text-brand-gold font-bold mb-1">2022 - Present</p>
                        </div>
                    </div>
                </div>

                <!-- Past General Secretaries -->
                <div id="gensecs" class="scroll-mt-32">
                    <h2 class="text-2xl font-serif font-bold text-brand-blue mb-8 border-l-4 border-brand-teal pl-4">General Secretaries</h2>
                    <div class="grid gap-4">
                        <div class="bg-gray-50 p-4 rounded-lg flex justify-between items-center hover:bg-white hover:shadow-md transition border border-transparent hover:border-gray-100">
                            <div>
                                <h4 class="font-bold text-gray-800">Fr. T.A. Mathias</h4>
                                <span class="bg-blue-100 text-brand-blue text-[10px] font-bold px-2 py-0.5 rounded-full">1967 - 1979</span>
                            </div>
                            <i class="fas fa-history text-gray-300"></i>
                        </div>

                         <div class="bg-gray-50 p-4 rounded-lg flex justify-between items-center hover:bg-white hover:shadow-md transition border border-transparent hover:border-gray-100">
                            <div>
                                <h4 class="font-bold text-gray-800">Dr. Manuel A. Thangaraj</h4>
                                <span class="bg-gray-100 text-gray-500 text-[10px] font-bold px-2 py-0.5 rounded-full">1979 - 1981</span>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg flex justify-between items-center hover:bg-white hover:shadow-md transition border border-transparent hover:border-gray-100">
                            <div>
                                <h4 class="font-bold text-gray-800">Rev. Sr. Mary Braganza</h4>
                                <span class="bg-gray-100 text-gray-500 text-[10px] font-bold px-2 py-0.5 rounded-full">1982 - 1987</span>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg flex justify-between items-center hover:bg-white hover:shadow-md transition border border-transparent hover:border-gray-100">
                            <div>
                                <h4 class="font-bold text-gray-800">Mrs. Marie Correa (BB)</h4>
                                <span class="bg-gray-100 text-gray-500 text-[10px] font-bold px-2 py-0.5 rounded-full">1988 - 1990</span>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg flex justify-between items-center hover:bg-white hover:shadow-md transition border border-transparent hover:border-gray-100">
                            <div>
                                <h4 class="font-bold text-gray-800">Dr. Mani Jacob</h4>
                                <span class="bg-gray-100 text-gray-500 text-[10px] font-bold px-2 py-0.5 rounded-full">1991 - 2011</span>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg flex justify-between items-center hover:bg-white hover:shadow-md transition border border-transparent hover:border-gray-100">
                            <div>
                                <h4 class="font-bold text-gray-800">Dr. D. Daniel Ezhilarasu</h4>
                                <span class="bg-gray-100 text-gray-500 text-[10px] font-bold px-2 py-0.5 rounded-full">2011 - 2018</span>
                            </div>
                        </div>

                        <div class="bg-gray-50 p-4 rounded-lg flex justify-between items-center hover:bg-white hover:shadow-md transition border border-transparent hover:border-gray-100">
                            <div>
                                <h4 class="font-bold text-gray-800">Fr. Joseph Puthenpura CMI</h4>
                                <span class="bg-gray-100 text-gray-500 text-[10px] font-bold px-2 py-0.5 rounded-full">2018 - 2020</span>
                            </div>
                        </div>

                         <div class="bg-brand-teal p-4 rounded-lg flex justify-between items-center shadow-lg text-white">
                            <div>
                                <h4 class="font-bold">Fr. Xavier Vedam SJ</h4>
                                <span class="bg-white/20 text-white text-[10px] font-bold px-2 py-0.5 rounded-full">2020 - Present</span>
                            </div>
                            <i class="fas fa-check-circle text-white/50"></i>
                        </div>

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
