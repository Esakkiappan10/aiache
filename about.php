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
                <a href="#" class="text-brand-blue font-bold">About Us</a>
                <a href="board.php" class="hover:text-brand-blue transition">Our Team</a>
                <a href="members.php" class="hover:text-brand-blue transition">Members</a>
                <a href="events.php" class="hover:text-brand-blue transition">Events</a>
                <a href="gallery.php" class="hover:text-brand-blue transition">Gallery</a>
                <!-- Downloads Dropdown -->
                <div class="relative group">
                    <button class="flex items-center gap-1 hover:text-brand-blue transition font-medium">
                        Downloads <i class="fas fa-chevron-down text-xs ml-1"></i>
                    </button>
                    <div class="absolute top-full left-0 w-56 bg-white shadow-xl rounded-xl mt-2 py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top border border-gray-100 z-50 text-left">
                        <a href="resources.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Reports</a>
                        <a href="applications.php" class="block px-4 py-2 hover:bg-gray-50 hover:text-brand-blue transition text-gray-600">Applications</a>
                    </div>
                </div>

            </div>
            <button class="md:hidden text-brand-blue text-2xl"><i class="fas fa-bars"></i></button>
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
                    <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Education" class="relative rounded-2xl shadow-xl w-full h-auto object-cover">
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
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8">
            <h2 class="text-3xl font-serif font-bold text-center text-brand-blue mb-12">Our Structure & Assemblies</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <!-- TGA -->
                <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border-t-4 border-brand-gold relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-brand-gold/5 rounded-full -translate-y-1/2 translate-x-1/2 transition-transform group-hover:scale-150"></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 flex items-center"><i class="fas fa-users text-brand-gold mr-3"></i> Triennial General Assembly (TGA)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed relative z-10">
                        Once in three years, all member institutions gather (Chairman/Manager, Principal, Staff Representative) for an ecumenical celebration of Christian fraternity. It is a public proclamation of our unity in Jesus Christ. We deliberate, pray, listen to the Word of God, and elect the Executive Board Members for the next term.
                    </p>
                </div>
                <!-- AGM -->
                <div class="bg-gray-50 p-8 rounded-2xl shadow-sm border-t-4 border-brand-blue relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-brand-blue/5 rounded-full -translate-y-1/2 translate-x-1/2 transition-transform group-hover:scale-150"></div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3 flex items-center"><i class="fas fa-calendar-alt text-brand-blue mr-3"></i> Annual General Body Meeting (AGM)</h3>
                    <p class="text-gray-600 text-sm leading-relaxed relative z-10">
                        As a registered Society, we fulfill our statutory obligation by meeting annually. Representatives deliberate on current challenges, form committees for follow-up, ratify Executive Board decisions, approve annual reports, and propose relevant action plans.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div>
                     <h3 class="text-2xl font-serif font-bold text-gray-800 mb-6">Operational Levels</h3>
                     <div class="space-y-8">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-brand-blue shrink-0 font-bold text-lg">01</div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Regional Level</h4>
                                <p class="text-gray-600 text-sm mt-2 leading-relaxed">
                                    Coordinate activities through an elected Regional President, Secretary, and Treasurer. Annual meetings organize faculty and student leadership programs, funded by regional resources.
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-full bg-amber-100 flex items-center justify-center text-brand-gold shrink-0 font-bold text-lg">02</div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-lg">Institutional Level</h4>
                                <p class="text-gray-600 text-sm mt-2 leading-relaxed">
                                    The root of our faith formation. We follow the path of Dharma ("Satyam Vada, Dharmam Chara"). Principals and faculty serve as models of nobility. A Co-ordinator assists in organizing programs and communicating with the AIACHE office.
                                </p>
                            </div>
                        </div>
                        <div class="bg-blue-50 p-6 rounded-xl border border-blue-100">
                            <h4 class="font-bold text-brand-blue text-sm uppercase tracking-wide mb-2">Office & Administration</h4>
                            <p class="text-sm text-gray-600">The AIACHE office gives direction to members, follows national education policies (MHRD, UGC, NAAC), and publicizes relevant information. It manages endowments, awards, and the official website.</p>
                        </div>
                     </div>
                </div>

                <!-- Policies -->
                 <div class="bg-brand-dark text-white p-8 md:p-10 rounded-3xl relative overflow-hidden shadow-xl flex flex-col justify-center">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-brand-blue/30 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-brand-gold/10 rounded-full blur-2xl translate-y-1/3 -translate-x-1/4"></div>
                    
                    <div class="relative z-10">
                        <div class="w-12 h-1 bg-brand-gold mb-6"></div>
                        <h3 class="text-2xl font-serif font-bold mb-4">Constitutional Directives</h3>
                        <p class="text-sm text-brand-light/80 mb-6">AIACHE specially upholds the following Constitutional rights for our member institutions:</p>
                        
                        <div class="space-y-4">
                            <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg border border-white/10 transform hover:translate-x-1 transition">
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-balance-scale text-brand-gold mt-1"></i>
                                    <div>
                                        <div class="font-bold text-white text-sm">Article 30(1)</div>
                                        <div class="text-xs text-brand-light/70 mt-1">Right of minorities to establish and administer educational institutions of their choice.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white/10 backdrop-blur-sm p-4 rounded-lg border border-white/10 transform hover:translate-x-1 transition">
                                <div class="flex items-start gap-3">
                                    <i class="fas fa-gavel text-brand-gold mt-1"></i>
                                    <div>
                                        <div class="font-bold text-white text-sm">Article 19(1)(g)</div>
                                        <div class="text-xs text-brand-light/70 mt-1">Freedom of citizens regarding speech, assembly, association, movement, residence, and profession.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 pt-6 border-t border-white/10">
                            <div class="flex items-center gap-2 mb-1">
                                <i class="fas fa-award text-brand-gold"></i>
                                <span class="text-sm font-bold text-white">Membership in Perpetuity</span>
                            </div>
                            <p class="text-xs text-brand-light/60">Life Membership with Certificate of eligibility to Minority Rights.</p>
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

</body>
</html>
