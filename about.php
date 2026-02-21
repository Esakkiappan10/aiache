<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | AIACHE</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            blue: '#1e3a8a',  /* Deep Navy */
                            dark: '#0f172a',  /* Slate 900 */
                            light: '#f8fafc', /* Slate 50 */
                            gold: '#d97706',  /* Gold Accent */
                            teal: '#0f766e',  /* Teal Accent */
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
                <a href="#" class="text-brand-blue font-bold">About Us</a>

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

    <!-- Hero Section -->
    <section class="bg-brand-blue text-white py-16 text-center relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-48 h-48 bg-brand-gold/10 rounded-full blur-2xl transform -translate-x-1/2 translate-y-1/2"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <h1 class="text-3xl md:text-5xl font-serif font-bold mb-4">About AIACHE</h1>
            <div class="w-20 h-1 bg-brand-gold mx-auto rounded-full mb-6"></div>
            <p class="text-blue-100 text-lg font-light max-w-2xl mx-auto">
                All India Association for Christian Higher Education - Fostering Excellence since 1967.
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <h2 class="text-3xl font-serif font-bold text-gray-800">Our History & Legacy</h2>
                    <p class="text-gray-600 leading-relaxed">
                        The All India Association for Christian Higher Education (AIACHE) is an Ecumenical professional Association for 500+ Christian Higher Education colleges in India, founded in 1967. AIACHE aimsat the promotion of quality in Higher Education, preservation of human and social values and production of character formation, value inculcation and co-operative skill training for a better altruistic society.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Our professors are from all around the country and represent a wide range of academic fields. Faculty members at our member institutions have interests and experience in a wide range of fields, including the arts and humanities, social sciences, and natural sciences. Their Pedagogy, Andragogy and Heutagogy are deep-rooted fromteacher-centric lecture methods and learner-centric hybrid pedagogy to active teaching, training solutions, online education, and digital technology. Our faculty supports immersive and hands-on learning via social sciences, religion, culture, and the arts as well as through scientific inquiry.
                    </p>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 bg-brand-gold/10 rounded-2xl transform translate-x-4 translate-y-4"></div>
                    <img src="education.png" alt="Education" class="relative rounded-2xl shadow-xl w-full h-auto object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Vision -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-brand-blue mb-6">
                        <i class="fas fa-eye text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-gray-800 mb-4">Our Vision</h3>
                    <p class="text-gray-600 leading-relaxed">
                        To be a transformative force in higher education, empowering institutions to mold students into intellectually competent, morally upright, socially committed, and spiritually inspired citizens of India.
                    </p>
                </div>

                <!-- Mission -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition">
                    <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center text-brand-gold mb-6">
                        <i class="fas fa-bullseye text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-gray-800 mb-4">Our Mission</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start gap-3"><i class="fas fa-check text-green-500 mt-1"></i> <span>Promote collaboration among member institutions.</span></li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-green-500 mt-1"></i> <span>Enhance quality through faculty development programs.</span></li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-green-500 mt-1"></i> <span>Advocate for policies that strengthen higher education.</span></li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-green-500 mt-1"></i> <span>Foster holistic development of students.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Structure & Governance -->
    <section class="py-20 bg-white relative">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute top-[10%] left-[-5%] w-[30%] h-[30%] bg-brand-blue/5 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-[10%] right-[-5%] w-[30%] h-[30%] bg-brand-gold/5 rounded-full blur-[100px]"></div>
        </div>

        <div class="container mx-auto px-4 md:px-8 relative z-10">
            <div class="text-center mb-16">
                <span class="bg-brand-blue/10 text-brand-blue px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4 inline-block">Governance</span>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-gray-900 mb-6">Our Structure & Assemblies</h2>
                <div class="w-20 h-1 bg-brand-gold mx-auto rounded-full"></div>
            </div>
            
            <!-- TGA & AGM Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
                <!-- TGA -->
                <div class="bg-white p-10 rounded-3xl shadow-lg shadow-gray-100/50 border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-gold/10 rounded-full blur-2xl -mr-10 -mt-10 transition-transform group-hover:scale-150"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-brand-gold/10 rounded-2xl flex items-center justify-center text-brand-gold text-2xl mb-6 group-hover:bg-brand-gold group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="text-2xl font-serif font-bold text-gray-900 mb-4">Triennial General Assembly (TGA)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Once in three years, all member institutions gather (Chairman/Manager, Principal, Staff Representative) for an ecumenical celebration of Christian fraternity. It is a public proclamation of our unity in Jesus Christ. We deliberate, pray, listen to the Word of God, and elect the Executive Board Members for the next term.
                        </p>
                    </div>
                </div>
                <!-- AGM -->
                <div class="bg-white p-10 rounded-3xl shadow-lg shadow-gray-100/50 border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-blue/10 rounded-full blur-2xl -mr-10 -mt-10 transition-transform group-hover:scale-150"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-brand-blue/10 rounded-2xl flex items-center justify-center text-brand-blue text-2xl mb-6 group-hover:bg-brand-blue group-hover:text-white transition-colors duration-300">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h3 class="text-2xl font-serif font-bold text-gray-900 mb-4">Annual General Body Meeting (AGM)</h3>
                        <p class="text-gray-600 leading-relaxed">
                            As a registered Society, we fulfill our statutory obligation by meeting annually. Representatives deliberate on current challenges, form committees for follow-up, ratify Executive Board decisions, approve annual reports, and propose relevant action plans.
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <!-- Main Content: Operational Levels (Left 8 Cols) -->
                <div class="lg:col-span-8 space-y-12">
                     <div class="flex items-center gap-4 mb-2">
                         <div class="h-px bg-gray-200 flex-grow"></div>
                         <h3 class="text-2xl font-serif font-bold text-gray-900 whitespace-nowrap">Operational Levels</h3>
                         <div class="h-px bg-gray-200 flex-grow"></div>
                     </div>

                     <!-- Regional Level -->
                     <div class="relative pl-8 md:pl-12 py-2 group">
                        <!-- Timeline Line -->
                        <div class="absolute left-0 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-brand-blue/30 to-brand-blue/30 lg:via-brand-blue/30 lg:to-transparent"></div>
                        <div class="absolute left-[-20px] top-6 w-10 h-10 bg-white border-4 border-brand-blue/10 text-brand-blue rounded-full flex items-center justify-center shadow-sm z-10 font-bold text-sm">01</div>

                        <div class="bg-white p-8 md:p-10 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                            <h4 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-brand-blue text-sm"><i class="fas fa-map-marked-alt"></i></span>
                                Regional Level
                            </h4>
                            <p class="text-gray-600 leading-relaxed text-justify">
                                At the regional level, a Regional President, Secretary and Treasurer are elected before or after every Triennial to co-ordinate the regional activities, to strengthen AIACHE and to bring in new members. Regional expenses shall be met from the regional resources and no bank account is to be opened. Every year one meeting of the Chairman/Manager, Principal and Faculty representatives shall be convened and as per the regional planning, faculty and student leadership shall be organized.
                            </p>
                        </div>
                     </div>

                     <!-- Institutional Level -->
                     <div class="relative pl-8 md:pl-12 py-2 group">
                        <!-- Timeline Line -->
                        <div class="absolute left-0 top-0 bottom-0 w-px bg-gradient-to-b from-brand-blue/30 via-brand-blue/30 to-transparent"></div>
                        <div class="absolute left-[-20px] top-6 w-10 h-10 bg-white border-4 border-brand-gold/10 text-brand-gold rounded-full flex items-center justify-center shadow-sm z-10 font-bold text-sm">02</div>

                        <div class="bg-white p-8 md:p-10 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                            <h4 class="text-xl font-bold text-gray-900 mb-6 flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-amber-50 flex items-center justify-center text-brand-gold text-sm"><i class="fas fa-university"></i></span>
                                Institutional Level
                            </h4>
                            
                            <div class="space-y-6 text-gray-600 leading-relaxed text-justify">
                                <p>
                                    Member Institutions are the base and root of our faith formation unit where Jesus Christ is projected as the Saviour of human race and all of us are saved through His Passion, Crucifixion and Resurrection. He is Truth incarnate and we have to be truthful in a country whose motto is <span class="font-medium text-brand-blue">"Satyameva Jayate"</span>. We have to follow the path of Dharma as Gandhiji instructed: <span class="italic">"Satyam Vada, Dharmam Chara"</span> (Speak Truth and Move in Dharma).
                                </p>
                                <div class="bg-brand-light p-6 rounded-2xl border border-brand-blue/10">
                                    <p class="text-sm md:text-base font-medium text-gray-700 italic">
                                        "It is AIACHE's concern that all our Principals and faculty are models of nobility and excellence to be imitated by students."
                                    </p>
                                </div>
                                <p>
                                    Students are to be formed with excellent character traits, skill performance and social concern. Bible study is to be encouraged for their growth in Biblical values and altruistic behaviour. Every student is helped to grow in his/her own spiritual/religious practices and respect for other's religious aspirations. The Christian model of brotherhood should be inherited with an attitude that every living being is a brother or sister to all.
                                </p>
                                <p>
                                    Hence, in all our member institutions, some programmes should be organized to attain these objectives of AIACHE such that they become good leaders in society developing their skills and respecting one another and concerned in other's well being and progress. Our faculty and students should have awareness that all are precious gifts of God and try to consider everyone else as another precious gift to be respected as brother or sister.
                                </p>
                                <p>
                                    When national or regional programmes are organized, all the member institutions are expected to send participants and later make use of their training for the edification of others in the campus and send them as regional resource persons. Members are also expected to contribute to the development of AIACHE as a unifying ecumenical body.
                                </p>
                                <div class="flex flex-col md:flex-row gap-4 mt-6">
                                    <div class="flex-1 bg-amber-50 p-4 rounded-xl border border-amber-100">
                                        <div class="font-bold text-brand-gold text-sm uppercase mb-1">Mandate</div>
                                        <p class="text-sm text-gray-700">At least, one programme should be organized every year in all the member institutions, under the banner of AIACHE.</p>
                                    </div>
                                    <div class="flex-1 bg-blue-50 p-4 rounded-xl border border-blue-100">
                                        <div class="font-bold text-brand-blue text-sm uppercase mb-1">Coordination</div>
                                        <p class="text-sm text-gray-700">A Co-ordinator assists the Principal in organizing programmes and communicating with the AIACHE office.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>

                <!-- Sidebar: Constitutional Directives (Right 4 Cols) -->
                <div class="lg:col-span-4 space-y-8">
                    <div class="lg:sticky lg:top-24">
                        <!-- Policies Card -->
                        <div class="bg-brand-dark text-white p-8 rounded-3xl relative overflow-hidden shadow-2xl">
                            <!-- Artistic Blobs -->
                            <div class="absolute top-0 right-0 w-64 h-64 bg-brand-blue/30 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                            <div class="absolute bottom-0 left-0 w-48 h-48 bg-brand-gold/10 rounded-full blur-2xl translate-y-1/3 -translate-x-1/4"></div>
                            
                            <div class="relative z-10">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-brand-gold"><i class="fas fa-scroll"></i></div>
                                    <h3 class="text-xl font-serif font-bold">Constitutional Directives</h3>
                                </div>
                                
                                <p class="text-sm text-brand-light/80 mb-8 leading-relaxed">AIACHE specially upholds the following Constitutional rights for our member institutions:</p>
                                
                                <div class="space-y-4">
                                    <div class="bg-white/5 backdrop-blur-sm p-4 rounded-xl border border-white/10 hover:bg-white/10 transition cursor-default">
                                        <div class="flex items-start gap-4">
                                            <div class="mt-1"><i class="fas fa-balance-scale text-brand-gold"></i></div>
                                            <div>
                                                <div class="font-bold text-white text-sm">Article 30(1)</div>
                                                <div class="text-xs text-brand-light/70 mt-1 leading-relaxed">Right of minorities to establish and administer educational institutions of their choice.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white/5 backdrop-blur-sm p-4 rounded-xl border border-white/10 hover:bg-white/10 transition cursor-default">
                                        <div class="flex items-start gap-4">
                                            <div class="mt-1"><i class="fas fa-gavel text-brand-gold"></i></div>
                                            <div>
                                                <div class="font-bold text-white text-sm">Article 19(1)(g)</div>
                                                <div class="text-xs text-brand-light/70 mt-1 leading-relaxed">Freedom of citizens regarding speech, assembly, association, movement, residence, and profession.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-8 pt-6 border-t border-white/10">
                                    <div class="flex items-center gap-2 mb-2">
                                        <i class="fas fa-award text-brand-gold"></i>
                                        <span class="text-sm font-bold text-white">Membership in Perpetuity</span>
                                    </div>
                                    <p class="text-xs text-brand-light/60 leading-relaxed">Life Membership with Certificate of eligibility to Minority Rights.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Office & Admin Mini Card -->
                        <div class="bg-white p-6 rounded-2xl border border-gray-100 shadow-sm mt-6">
                            <h4 class="font-bold text-brand-blue text-sm uppercase tracking-wide mb-3 flex items-center gap-2">
                                <i class="fas fa-building"></i> Office & Administration
                            </h4>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                The AIACHE office directs members, follows national education policies (MHRD, UGC, NAAC), and manages endowments, awards, and the official website.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- AIACHE Leadership Section -->
    <section class="py-20 bg-white relative border-t border-gray-100">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center mb-16">
                <span class="bg-brand-blue/10 text-brand-blue px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4 inline-block">Leadership</span>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-gray-900 mb-6">Our Office Bearers</h2>
                <div class="w-20 h-1 bg-brand-gold mx-auto rounded-full"></div>
            </div>

            <!-- General Secretary & President (Top Tier) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16 max-w-5xl mx-auto">
                <!-- General Secretary -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border-l-4 border-brand-blue flex flex-col items-center text-center transform hover:-translate-y-1 transition duration-300 group relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-32 h-32 bg-brand-blue/5 rounded-full blur-2xl -mr-16 -mt-16 group-hover:bg-brand-blue/10 transition"></div>
                    <div class="w-24 h-24 bg-blue-50 rounded-full flex items-center justify-center text-brand-blue text-3xl mb-6 group-hover:scale-110 transition shadow-sm border-4 border-white">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-gray-900">Rev. Dr. Xavier Vedam SJ</h3>
                    <span class="text-brand-gold font-bold text-sm uppercase tracking-wider mt-2 mb-4">General Secretary</span>
                    <div class="text-gray-600 text-sm space-y-1 bg-gray-50/50 p-4 rounded-xl w-full">
                        <p class="font-bold text-brand-blue">AIACHE</p>
                        <p>39 Institutional Area, D-Block, Janakpuri</p>
                        <p>New Delhi – 110 058</p>
                        <div class="pt-3 flex flex-col gap-1 text-gray-500 text-xs border-t border-gray-200 mt-2">
                             <a href="tel:9444761101" class="hover:text-brand-blue transition"><i class="fas fa-phone mr-1"></i> 94447 61101, 97870 01209</a>
                             <a href="mailto:aiache2011@gmail.com" class="hover:text-brand-blue transition"><i class="fas fa-envelope mr-1"></i> aiache2011@gmail.com</a>
                             <a href="mailto:vedamvx@gmail.com" class="hover:text-brand-blue transition"><i class="fas fa-envelope mr-1"></i> vedamvx@gmail.com</a>
                        </div>
                    </div>
                </div>

                <!-- President -->
                <div class="bg-white rounded-2xl p-8 shadow-lg border-l-4 border-brand-gold flex flex-col items-center text-center transform hover:-translate-y-1 transition duration-300 group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-gold/5 rounded-full blur-2xl -mr-16 -mt-16 group-hover:bg-brand-gold/10 transition"></div>
                    <div class="w-24 h-24 bg-amber-50 rounded-full flex items-center justify-center text-brand-gold text-3xl mb-6 group-hover:scale-110 transition shadow-sm border-4 border-white">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-2xl font-serif font-bold text-gray-900">Dr. Sr. M. Rashmi A.C.</h3>
                    <span class="text-brand-blue font-bold text-sm uppercase tracking-wider mt-2 mb-4">President</span>
                    <div class="text-gray-600 text-sm space-y-1 bg-gray-50/50 p-4 rounded-xl w-full">
                        <p class="font-bold text-brand-blue">Principal</p>
                        <p>Patna Women's College (Autonomous)</p>
                        <p>Bailey Road, Patna – 800001, Bihar</p>
                        <div class="pt-3 flex flex-col gap-1 text-gray-500 text-xs border-t border-gray-200 mt-2">
                             <a href="tel:9473027965" class="hover:text-brand-blue transition"><i class="fas fa-phone mr-1"></i> 94730 27965</a>
                             <a href="mailto:principalpwc@patnawomenscollege.in" class="hover:text-brand-blue transition"><i class="fas fa-envelope mr-1"></i> principalpwc@patnawomenscollege.in</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vice Presidents & Treasurer -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-20">
                <!-- Vice President 1 -->
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex flex-col items-center text-center hover:shadow-lg transition group">
                     <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center text-brand-blue text-lg mb-4 group-hover:bg-brand-blue group-hover:text-white transition">
                        <i class="fas fa-user"></i>
                    </div>
                    <h4 class="font-bold text-gray-800 text-lg">Rev. Dr. Praveen Martis SJ</h4>
                    <span class="text-xs font-bold text-brand-blue uppercase tracking-wide mb-3">Vice President</span>
                    <div class="text-sm text-gray-600 space-y-1 w-full border-t border-gray-50 pt-3 mt-1">
                        <p class="font-medium text-gray-700">Principal</p>
                        <p>St Aloysius College (Autonomous), Mangalore</p>
                         <div class="text-xs text-gray-400 mt-2 flex flex-col gap-1 items-center">
                            <span><i class="fas fa-phone mr-1"></i> 99014 83231</span>
                            <span>aloysius.principal@gmail.com</span>
                        </div>
                    </div>
                </div>

                <!-- Vice President 2 -->
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex flex-col items-center text-center hover:shadow-lg transition group">
                    <div class="w-16 h-16 bg-blue-50 rounded-full flex items-center justify-center text-brand-blue text-lg mb-4 group-hover:bg-brand-blue group-hover:text-white transition">
                        <i class="fas fa-user"></i>
                    </div>
                    <h4 class="font-bold text-gray-800 text-lg">Dr. Paul Wilson</h4>
                    <span class="text-xs font-bold text-brand-blue uppercase tracking-wide mb-3">Vice President</span>
                    <div class="text-sm text-gray-600 space-y-1 w-full border-t border-gray-50 pt-3 mt-1">
                        <p class="font-medium text-gray-700">Principal</p>
                        <p>Madras Christian College, Chennai</p>
                         <div class="text-xs text-gray-400 mt-2 flex flex-col gap-1 items-center">
                            <span><i class="fas fa-phone mr-1"></i> 98414 26693</span>
                            <span>wilson@mcc.edu.in</span>
                        </div>
                    </div>
                </div>

                <!-- Treasurer -->
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 flex flex-col items-center text-center hover:shadow-lg transition group">
                    <div class="w-16 h-16 bg-amber-50 rounded-full flex items-center justify-center text-brand-gold text-lg mb-4 group-hover:bg-brand-gold group-hover:text-white transition">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h4 class="font-bold text-gray-800 text-lg">Dr. Chinkhanlun Guite</h4>
                    <span class="text-xs font-bold text-brand-gold uppercase tracking-wide mb-3">Treasurer</span>
                    <div class="text-sm text-gray-600 space-y-1 w-full border-t border-gray-50 pt-3 mt-1">
                        <p class="font-medium text-gray-700">Bursar</p>
                        <p>St. Stephen’s College, Delhi</p>
                         <div class="text-xs text-gray-400 mt-2 flex flex-col gap-1 items-center">
                            <span><i class="fas fa-phone mr-1"></i> 97177 33405</span>
                            <span>bursar@ststephens.edu</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Regional Members Section -->
             <div class="text-center mb-12 relative z-10">
                 <span class="bg-gray-100 text-gray-500 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-3 inline-block">Representatives</span>
                 <h2 class="text-2xl md:text-4xl font-serif font-bold text-gray-900 mb-6">Regional Members</h2>
                 <div class="w-16 h-1 bg-brand-blue/20 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-20">
                
                <!-- Andhra Region -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-20 h-20 bg-blue-50 rounded-bl-full -mr-4 -mt-4 opacity-50"></div>
                    <h4 class="font-bold text-brand-blue text-lg mb-4 flex items-center gap-2"><i class="fas fa-map-marker-alt text-brand-gold"></i> Andhra Region</h4>
                    <div class="space-y-4 relative z-10">
                        <div class="bg-gray-50 p-4 rounded-xl">
                            <p class="font-bold text-gray-900">Dr. Sr. Shiny K.P.</p>
                            <p class="text-xs uppercase font-bold text-gray-400 mb-1">Principal</p>
                            <p class="text-sm text-gray-600 italic">JMJ College for Women (Autonomous), Tenali</p>
                            <div class="text-xs text-gray-500 mt-3 pt-3 border-t border-gray-200">
                                <p class="mb-1"><i class="fas fa-phone text-gray-300 w-4"></i> 94416 13054</p>
                                <p><i class="fas fa-envelope text-gray-300 w-4"></i> jmjtenali@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Karnataka Region -->
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition group relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-20 h-20 bg-blue-50 rounded-bl-full -mr-4 -mt-4 opacity-50"></div>
                     <h4 class="font-bold text-brand-blue text-lg mb-4 flex items-center gap-2"><i class="fas fa-map-marker-alt text-brand-gold"></i> Karnataka Region</h4>
                    <div class="space-y-4 relative z-10">
                        <div class="bg-gray-50 p-4 rounded-xl">
                            <p class="font-bold text-gray-900">Rev. Dr. Charles Lasrado SJ</p>
                            <p class="text-xs uppercase font-bold text-gray-400 mb-1">Principal</p>
                            <p class="text-sm text-gray-600 italic">St. Joseph’s College of Commerce (Autonomous), Bengaluru</p>
                             <div class="text-xs text-gray-500 mt-3 pt-3 border-t border-gray-200">
                                <p class="mb-1"><i class="fas fa-phone text-gray-300 w-4"></i> 94480 55264</p>
                                <p><i class="fas fa-envelope text-gray-300 w-4"></i> principal@sjcc.edu.in</p>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Kerala Region -->
                 <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition group relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-20 h-20 bg-blue-50 rounded-bl-full -mr-4 -mt-4 opacity-50"></div>
                     <h4 class="font-bold text-brand-blue text-lg mb-4 flex items-center gap-2"><i class="fas fa-map-marker-alt text-brand-gold"></i> Kerala Region</h4>
                    <div class="space-y-4 relative z-10">
                        <div class="bg-gray-50 p-4 rounded-xl">
                            <p class="font-bold text-gray-900">Fr. Dr. Jestin K Kuriakose</p>
                            <p class="text-xs uppercase font-bold text-gray-400 mb-1">Principal</p>
                            <p class="text-sm text-gray-600 italic">Nirmala College Muvattupuza (Autonomous)</p>
                            <div class="text-xs text-gray-500 mt-2">
                                <p><i class="fas fa-phone text-gray-300 w-4"></i> 94462 76764</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-xl">
                            <p class="font-bold text-gray-900">Dr. Letha P Cheriyan</p>
                            <p class="text-xs uppercase font-bold text-gray-400 mb-1">Principal</p>
                            <p class="text-sm text-gray-600 italic">Mar Thoma College for Women, Perumbavoor</p>
                             <div class="text-xs text-gray-500 mt-2">
                                <p><i class="fas fa-phone text-gray-300 w-4"></i> 94974 87331</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tamil Nadu Region -->
                 <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition group relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-20 h-20 bg-blue-50 rounded-bl-full -mr-4 -mt-4 opacity-50"></div>
                     <h4 class="font-bold text-brand-blue text-lg mb-4 flex items-center gap-2"><i class="fas fa-map-marker-alt text-brand-gold"></i> Tamil Nadu Region</h4>
                    <div class="space-y-4 relative z-10">
                        <div class="bg-gray-50 p-4 rounded-xl">
                            <p class="font-bold text-gray-900">Rev. Dr. A. Louis Arockiaraj SJ</p>
                            <p class="text-xs uppercase font-bold text-gray-400 mb-1">Principal</p>
                            <p class="text-sm text-gray-600 italic">Loyola College, Chennai</p>
                            <div class="text-xs text-gray-500 mt-2">
                                <p><i class="fas fa-envelope text-gray-300 w-4"></i> principal@loyolacollege.edu</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-xl">
                            <p class="font-bold text-gray-900">Dr. V. Regina</p>
                            <p class="text-xs uppercase font-bold text-gray-400 mb-1">Principal</p>
                            <p class="text-sm text-gray-600 italic">Bishop Newbegin College of Education</p>
                             <div class="text-xs text-gray-500 mt-2">
                                <p><i class="fas fa-phone text-gray-300 w-4"></i> 87544 82049</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Eastern Region -->
                 <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition group relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-20 h-20 bg-blue-50 rounded-bl-full -mr-4 -mt-4 opacity-50"></div>
                     <h4 class="font-bold text-brand-blue text-lg mb-4 flex items-center gap-2"><i class="fas fa-map-marker-alt text-brand-gold"></i> Eastern Region</h4>
                    <div class="space-y-4 relative z-10">
                         <div class="bg-gray-50 p-4 rounded-xl">
                            <p class="font-bold text-gray-900">Dr. Madhumanjari Mandal</p>
                            <p class="text-xs uppercase font-bold text-gray-400 mb-1">Principal</p>
                            <p class="text-sm text-gray-600 italic">Scottish Church College, Kolkata</p>
                             <div class="text-xs text-gray-500 mt-2">
                                <p><i class="fas fa-phone text-gray-300 w-4"></i> 98300 75960</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-xl">
                            <p class="font-bold text-gray-900">Dr. Sr. A. Nirmala</p>
                            <p class="text-xs uppercase font-bold text-gray-400 mb-1">Principal</p>
                            <p class="text-sm text-gray-600 italic">Loreto College, Kolkata</p>
                             <div class="text-xs text-gray-500 mt-2">
                                <p><i class="fas fa-phone text-gray-300 w-4"></i> 6291 230 514</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Northern Region -->
                 <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:shadow-md transition group relative overflow-hidden">
                     <div class="absolute top-0 right-0 w-20 h-20 bg-blue-50 rounded-bl-full -mr-4 -mt-4 opacity-50"></div>
                     <h4 class="font-bold text-brand-blue text-lg mb-4 flex items-center gap-2"><i class="fas fa-map-marker-alt text-brand-gold"></i> Northern Region</h4>
                    <div class="space-y-4 relative z-10">
                        <div class="bg-gray-50 p-4 rounded-xl">
                            <p class="font-bold text-gray-900">Dr. Fr. Jesu Ben Anton Rose</p>
                            <p class="text-xs uppercase font-bold text-gray-400 mb-1">Principal</p>
                            <p class="text-sm text-gray-600 italic">St. Aloysius College (Autonomous), Jabalpur</p>
                            <div class="text-xs text-gray-500 mt-2">
                                <p><i class="fas fa-envelope text-gray-300 w-4"></i> staloysiuscollege1951@gmail.com</p>
                            </div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-xl">
                            <p class="font-bold text-gray-900">Prof. Shailendra Pratap Singh</p>
                            <p class="text-xs uppercase font-bold text-gray-400 mb-1">Principal</p>
                            <p class="text-sm text-gray-600 italic">St. John's College, Agra</p>
                             <div class="text-xs text-gray-500 mt-2">
                                <p><i class="fas fa-phone text-gray-300 w-4"></i> 99977 68866</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Co-opted Members -->
            <div class="bg-brand-light rounded-3xl p-8 md:p-12 border border-brand-blue/5">
                <div class="text-center mb-10">
                    <span class="bg-white border border-gray-100 text-gray-500 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-3 inline-block shadow-sm">Advisors</span>
                    <h3 class="text-2xl md:text-3xl font-serif font-bold text-gray-900">Co-Opted Members</h3>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <!-- Co-opted 1 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition text-center border border-transparent hover:border-brand-blue/10">
                        <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center text-gray-400 text-xl mb-4 mx-auto">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 text-lg">Fr. Mariadoss SJ</h4>
                        <p class="text-sm text-gray-500 uppercase font-bold mb-2">Principal</p>
                        <p class="text-sm text-gray-600">St. Joseph’s College, Tiruchirappali</p>
                        <div class="text-xs text-gray-400 mt-4 space-y-1">
                            <p>94433 43324</p>
                            <p>sjcprincipal.trichy@gmail.com</p>
                        </div>
                    </div>

                    <!-- Co-opted 2 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition text-center border border-transparent hover:border-brand-blue/10">
                        <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center text-gray-400 text-xl mb-4 mx-auto">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 text-lg">Dr. Rudolf Manih</h4>
                        <p class="text-sm text-gray-500 uppercase font-bold mb-2">Principal</p>
                        <p class="text-sm text-gray-600">Union Christian College, Barapani, Mehghalaya</p>
                        <div class="text-xs text-gray-400 mt-4 space-y-1">
                            <p>94361 08697</p>
                            <p>manih11@yahoo.co.in</p>
                        </div>
                    </div>

                    <!-- Co-opted 3 -->
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-lg transition text-center border border-transparent hover:border-brand-blue/10">
                        <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center text-gray-400 text-xl mb-4 mx-auto">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h4 class="font-bold text-gray-900 text-lg">Rev. Dr. Sebastian Karottupuram</h4>
                        <p class="text-sm text-gray-500 uppercase font-bold mb-2">Principal</p>
                        <p class="text-sm text-gray-600">Don Bosco College Maram, Manipur - 795 015</p>
                        <div class="text-xs text-gray-400 mt-4 space-y-1">
                            <p>94360 31127</p>
                            <p>dbcmaram@gmail.com</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Education Module -->
    <section class="py-16 bg-brand-light">
        <div class="container mx-auto px-4 md:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="bg-white border border-brand-blue/20 text-brand-blue px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider mb-4 inline-block shadow-sm">Our Pedagogy</span>
                <h2 class="text-3xl md:text-4xl font-serif font-bold text-gray-800 mt-2">The Education Module</h2>
                <div class="w-24 h-1.5 bg-brand-gold mx-auto rounded-full mt-4 mb-4"></div>
                <p class="text-gray-600 text-lg">In all AIACHE member institutions, we form, inform, and transform students through these core principles.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- 01 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition group">
                    <span class="text-4xl font-bold text-gray-100 group-hover:text-brand-blue/10 transition mb-2 block">01</span>
                    <h4 class="font-bold text-gray-800 mb-2">Inclusive Excellence</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Providing quality education for all, preferring the poor, marginalized, and first-generation students without excluding excellence and skill development.</p>
                </div>

                <!-- 02 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition group">
                    <span class="text-4xl font-bold text-gray-100 group-hover:text-brand-blue/10 transition mb-2 block">02</span>
                    <h4 class="font-bold text-gray-800 mb-2">Liberating Education</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Education that frees persons from discrimination, illiteracy, and whatever endangers life, adhering to respect for life and values.</p>
                </div>

                <!-- 03 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition group">
                    <span class="text-4xl font-bold text-gray-100 group-hover:text-brand-blue/10 transition mb-2 block">03</span>
                    <h4 class="font-bold text-gray-800 mb-2">Social Responsibility</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Humanizing education that allows all to play their rightful role, understand economic/political systems, and promote transparency.</p>
                </div>

                <!-- 04 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition group">
                    <span class="text-4xl font-bold text-gray-100 group-hover:text-brand-blue/10 transition mb-2 block">04</span>
                    <h4 class="font-bold text-gray-800 mb-2">Eco-Consciousness</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Promoting respect for diversity, inclusiveness, and a deep love for nature and its protection.</p>
                </div>

                <!-- 05 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition group">
                    <span class="text-4xl font-bold text-gray-100 group-hover:text-brand-blue/10 transition mb-2 block">05</span>
                    <h4 class="font-bold text-gray-800 mb-2">Nation Building</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Imparting education that energizes the young, promoting nation-building, skill development, and social relations.</p>
                </div>

                <!-- 06 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition group">
                    <span class="text-4xl font-bold text-gray-100 group-hover:text-brand-blue/10 transition mb-2 block">06</span>
                    <h4 class="font-bold text-gray-800 mb-2">Holistic Growth</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Shaping character, providing competence, and promoting qualities of the heart, head, and hands.</p>
                </div>

                <!-- 07 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition group">
                    <span class="text-4xl font-bold text-gray-100 group-hover:text-brand-blue/10 transition mb-2 block">07</span>
                    <h4 class="font-bold text-gray-800 mb-2">Relevant Issues</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Addressing climate change, women's safety, gender discrimination, and Sustainable Development Goals scientifically.</p>
                </div>

                <!-- 08 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition group">
                    <span class="text-4xl font-bold text-gray-100 group-hover:text-brand-blue/10 transition mb-2 block">08</span>
                    <h4 class="font-bold text-gray-800 mb-2">Value Education</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Attending to paradigm shifts, Christian formation, multi-religious context, and concern for all people through inclusive education.</p>
                </div>

                <!-- 09 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition group">
                    <span class="text-4xl font-bold text-gray-100 group-hover:text-brand-blue/10 transition mb-2 block">09</span>
                    <h4 class="font-bold text-gray-800 mb-2">Transformative Shift</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Moving from management to animation, maintenance to mission mode, success to effectiveness, and knowledge to wisdom.</p>
                </div>

                <!-- 10 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition group">
                    <span class="text-4xl font-bold text-gray-100 group-hover:text-brand-blue/10 transition mb-2 block">10</span>
                    <h4 class="font-bold text-gray-800 mb-2">Ecumenical Unity</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Ensuring ecumenical unity, linking, collaboration, and cooperation among all members.</p>
                </div>

                <!-- 11 -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 hover:shadow-lg hover:-translate-y-1 transition group">
                    <span class="text-4xl font-bold text-gray-100 group-hover:text-brand-blue/10 transition mb-2 block">11</span>
                    <h4 class="font-bold text-gray-800 mb-2">Spiritual Nourishment</h4>
                    <p class="text-sm text-gray-600 leading-relaxed">Nurturing an encounter with God that nourishes faith and values, looking for the faith formation of Christians and value formation of all.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-brand-dark text-white py-12 border-t border-slate-800 mt-auto">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-center items-center gap-4 mb-8">
                <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-brand-blue transition"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-brand-blue transition"><i class="fab fa-twitter"></i></a>
                <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-brand-blue transition"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <p class="text-slate-400 text-sm">&copy; 2026 AIACHE. All Rights Reserved. | Designed for Excellence.</p>
        </div>
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
