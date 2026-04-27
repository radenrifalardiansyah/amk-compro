<?php 
$base_path = '';
include 'includes/header.php'; 
?>
<!-- Hero Section -->
    <section class="relative min-h-screen flex items-center pt-20 overflow-hidden" id="home">
        <div class="absolute inset-0 z-0">
            <div
                class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(37,99,235,0.08),transparent_70%)] animate-fluid">
            </div>
            <div class="absolute bottom-0 left-0 w-full h-64 bg-gradient-to-t from-surface to-transparent"></div>
        </div>
        <div class="max-w-7xl mx-auto px-8 grid lg:grid-cols-2 gap-12 items-center relative z-10">
            <div class="space-y-8 reveal-left active">
                <div
                    class="inline-flex items-center space-x-2 px-3 py-1 rounded-full border border-outline-variant/30 bg-surface-container-low/50">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    <span class="text-xs font-medium tracking-widest uppercase text-on-surface-variant">Creative Digital
                        Agency Bogor</span>
                </div>
                <h1
                    class="text-6xl md:text-8xl font-headline font-bold tracking-[-0.04em] text-primary leading-[0.9] flex flex-col">
                    <span>Collaboration</span>
                    <span>Meets</span>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-primary-container">Innovation</span>
                </h1>
                <p class="text-lg md:text-xl text-on-surface-variant max-w-lg leading-relaxed font-body">
                    Digital Creative Agency inovatif di Bogor sebagai One-Stop Solution untuk estetika visual, produksi
                    video sinematik, dan strategi pemasaran berbasis data.
                </p>
                <div class="flex items-center space-x-6 pt-4">
                    <a class="magnetic-btn btn-pulse px-8 py-4 hero-gradient text-on-primary font-headline font-extrabold text-lg rounded-xl hover:scale-105 transition-all duration-300 relative overflow-hidden flex items-center justify-center"
                        href="#contact" id="cta-magnetic">
                        <div class="shine-sweep"></div>
                        <span class="relative z-10">Mulai Kolaborasi</span>
                    </a>
                    <a class="group flex items-center space-x-3 text-primary font-headline font-bold" href="#services">
                        <span>Explore Services</span>
                        <span
                            class="material-symbols-outlined group-hover:translate-x-2 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </div>
            <div class="hidden lg:block relative reveal-right active">
                <div
                    class="aspect-square rounded-full border border-primary/10 absolute -inset-10 animate-[spin_20s_linear_infinite]">
                </div>
                <div
                    class="aspect-square rounded-full border border-primary/5 absolute -inset-20 animate-[spin_35s_linear_infinite_reverse]">
                </div>
                <img alt="Hero Visual"
                    class="relative z-10 rounded-[2rem] shadow-2xl shadow-primary/20 border border-outline-variant/20 object-cover w-full h-[600px] animate-float"
                    src="src/images/company.png" />
            </div>
        </div>
    </section>
    <!-- About Us -->
    <section class="py-24 bg-surface-container-lowest relative reveal" id="about">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <div class="space-y-8 reveal-left">
                    <h2 class="text-4xl font-headline font-bold text-primary">The Architects of Experience</h2>
                    <p class="text-on-surface-variant text-lg leading-relaxed">
                        PT. Adikara Mandala Kreasi (AMK) lahir dari visi untuk menyatukan presisi teknis dengan estetika
                        yang tak terbatas. Kami bukan sekadar agensi; kami adalah mitra strategis yang menerjemahkan
                        ambisi bisnis Anda menjadi realitas digital yang memukau.
                    </p>
                    <a class="inline-flex items-center space-x-2 text-primary font-headline font-bold hover:underline group"
                        href="#portfolio">
                        <span>Learn More About Us</span>
                        <span
                            class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
                    </a>
                    <div class="p-8 bg-surface rounded-2xl border border-outline-variant/10 space-y-4">
                        <div class="flex items-center space-x-4">
                            <span class="material-symbols-outlined text-primary text-3xl">verified</span>
                            <div>
                                <p class="text-xs text-on-surface-variant uppercase tracking-widest">Nomor Induk
                                    Berusaha</p>
                                <p class="text-xl font-bold font-headline text-primary">NIB: 2407250043491</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="material-symbols-outlined text-primary text-3xl">location_on</span>
                            <div>
                                <p class="text-xs text-on-surface-variant uppercase tracking-widest">Headquarters</p>
                                <p class="text-lg font-medium text-on-surface">Jl. Ring Road Jl. Raya Bubulak No.A-4,
                                    Kota Bogor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 h-full reveal-right">
                    <div class="space-y-4 mt-8">
                        <video autoplay loop muted playsinline
                            class="rounded-2xl h-64 w-full object-cover reveal-scale">
                            <source src="src/videos/logo_videos.mp4" type="video/mp4">
                        </video>
                        <div class="bg-primary-container/10 p-6 rounded-2xl border border-primary/20 reveal-scale">
                            <p class="text-4xl font-bold text-primary font-headline">100+</p>
                            <p class="text-sm text-on-surface-variant">Projects Delivered</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-surface-container-highest p-6 rounded-2xl reveal-scale">
                            <p class="text-4xl font-bold text-primary font-headline">2026</p>
                            <p class="text-sm text-on-surface-variant">Future Ready</p>
                        </div>
                        <img alt="Team Work"
                            class="rounded-2xl h-80 w-full object-cover grayscale hover:grayscale-0 transition-all duration-500 reveal-scale"
                            src="src/images/teamwork.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Core Pillars (Services) -->
    <section class="py-24" id="services">
        <div class="max-w-7xl mx-auto px-8">
            <div class="text-center mb-16 space-y-4 reveal">
                <h2 class="text-5xl font-headline font-bold text-primary tracking-tight">Core Pillars</h2>
                <p class="text-on-surface-variant max-w-2xl mx-auto">Kami menyediakan ekosistem terpadu untuk segala
                    kebutuhan transformasi digital Anda.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service 1 -->
                <div
                    class="reveal stagger-item group p-8 bg-surface-container-low rounded-3xl hover:bg-surface-container-highest transition-all duration-300 border border-outline-variant/5 hover-lift flex flex-col justify-between">
                    <div>
                        <span
                            class="material-symbols-outlined text-primary text-5xl mb-6 block group-hover:scale-110 transition-transform">movie</span>
                        <h3 class="text-2xl font-headline font-bold text-primary mb-4">Cinematic Visuals</h3>
                        <p class="text-on-surface-variant leading-relaxed mb-6">Video korporat, TVC, dan drone footage
                            berkualitas sinema untuk narasi brand yang kuat.</p>
                    </div>
                    <a class="text-primary font-headline font-bold flex items-center space-x-2 group-hover:text-primary-container transition-colors"
                        href="apps/pages/service-cinematic.php">
                        <span>View Details</span>
                        <span class="material-symbols-outlined text-sm">open_in_new</span>
                    </a>
                </div>
                <!-- Service 2 -->
                <div
                    class="reveal stagger-item group p-8 bg-surface-container-low rounded-3xl hover:bg-surface-container-highest transition-all duration-300 border border-outline-variant/5 hover-lift flex flex-col justify-between">
                    <div>
                        <span
                            class="material-symbols-outlined text-primary text-5xl mb-6 block group-hover:scale-110 transition-transform">mic_external_on</span>
                        <h3 class="text-2xl font-headline font-bold text-primary mb-4">Pro Audio</h3>
                        <p class="text-on-surface-variant leading-relaxed mb-6">Produksi Podcast/Vodcast dan Sonic
                            Branding untuk identitas suara yang tak terlupakan.</p>
                    </div>
                    <a class="text-primary font-headline font-bold flex items-center space-x-2 group-hover:text-primary-container transition-colors"
                        href="apps/pages/service-audio.php">
                        <span>View Details</span>
                        <span class="material-symbols-outlined text-sm">open_in_new</span>
                    </a>
                </div>
                <!-- Service 3 -->
                <div
                    class="reveal stagger-item group p-8 bg-surface-container-low rounded-3xl hover:bg-surface-container-highest transition-all duration-300 border border-outline-variant/5 hover-lift flex flex-col justify-between">
                    <div>
                        <span
                            class="material-symbols-outlined text-primary text-5xl mb-6 block group-hover:scale-110 transition-transform">query_stats</span>
                        <h3 class="text-2xl font-headline font-bold text-primary mb-4">Data-Driven Marketing</h3>
                        <p class="text-on-surface-variant leading-relaxed mb-6">Strategi Ads, SEO, dan Social Media
                            Management berbasis intelijen pasar yang akurat.</p>
                    </div>
                    <a class="text-primary font-headline font-bold flex items-center space-x-2 group-hover:text-primary-container transition-colors"
                        href="apps/pages/service-marketing.php">
                        <span>View Details</span>
                        <span class="material-symbols-outlined text-sm">open_in_new</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- The AMK Advantage -->
    <section class="py-32 bg-surface overflow-hidden relative" id="advantage">
        <div class="max-w-7xl mx-auto px-8 grid lg:grid-cols-2 gap-20 items-center">
            <div class="relative reveal-left">
                <div class="absolute -inset-4 bg-primary/20 blur-3xl opacity-20 animate-pulse"></div>
                <img alt="Tech Visual"
                    class="relative z-10 rounded-3xl shadow-[0_0_50px_rgba(37,99,235,0.15)] border border-primary/20 rotate-1 scale-105 hover:rotate-0 transition-all duration-700"
                    src="src/images/tech.png" />
                <div
                    class="absolute -bottom-10 -right-10 bg-surface-container-highest p-8 rounded-2xl border border-primary/30 shadow-2xl z-20 reveal-scale">
                    <span class="text-primary font-headline font-bold text-2xl">Innovation First</span>
                </div>
            </div>
            <div class="space-y-12 reveal-right">
                <div class="space-y-4">
                    <h2 class="text-5xl font-headline font-bold text-primary">The AMK Advantage</h2>
                    <p class="text-on-surface-variant text-lg">Keunggulan kompetitif yang mendefinisikan setiap langkah
                        strategis kami.</p>
                </div>
                <div class="grid gap-8 reveal">
                    <div
                        class="stagger-item flex items-start space-x-6 p-6 rounded-2xl bg-surface-container-low/50 border border-outline-variant/10 hover:border-primary/30 transition-all">
                        <div
                            class="mt-1 w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-primary text-3xl">target</span>
                        </div>
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary mb-2">Precision Execution</h4>
                            <p class="text-on-surface-variant">Detail yang sempurna dalam setiap piksel dan frame yang
                                kami hasilkan untuk output kelas dunia.</p>
                        </div>
                    </div>
                    <div
                        class="stagger-item flex items-start space-x-6 p-6 rounded-2xl bg-surface-container-low/50 border border-outline-variant/10 hover:border-primary/30 transition-all">
                        <div
                            class="mt-1 w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-primary text-3xl">auto_awesome</span>
                        </div>
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary mb-2">Predictive Creativity</h4>
                            <p class="text-on-surface-variant">Menggunakan data intelijen untuk memprediksi tren masa
                                depan sebelum kompetitor Anda menyadarinya.</p>
                        </div>
                    </div>
                    <div
                        class="stagger-item flex items-start space-x-6 p-6 rounded-2xl bg-surface-container-low/50 border border-outline-variant/10 hover:border-primary/30 transition-all">
                        <div
                            class="mt-1 w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-primary text-3xl">hub</span>
                        </div>
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary mb-2">Seamless Ecosystem</h4>
                            <p class="text-on-surface-variant">Integrasi tanpa hambatan antara produksi kreatif tingkat
                                tinggi dan strategi distribusi digital.</p>
                        </div>
                    </div>
                    <div
                        class="stagger-item flex items-start space-x-6 p-6 rounded-2xl bg-surface-container-low/50 border border-outline-variant/10 hover:border-primary/30 transition-all">
                        <div
                            class="mt-1 w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0">
                            <span class="material-symbols-outlined text-primary text-3xl">trending_up</span>
                        </div>
                        <div>
                            <h4 class="font-headline font-bold text-xl text-primary mb-2">Optimized Investment</h4>
                            <p class="text-on-surface-variant">Memastikan setiap rupiah anggaran pemasaran Anda
                                menghasilkan ROI yang maksimal secara berkelanjutan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Teaser Section -->
    <section class="py-24 bg-surface-container-low reveal" id="portfolio">
        <div class="max-w-7xl mx-auto px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6 reveal">
                <div class="space-y-4">
                    <h2 class="text-5xl font-headline font-bold text-primary tracking-tight">Recent Manifestations</h2>
                    <p class="text-on-surface-variant max-w-xl">Intip beberapa karya terpilih yang mendefinisikan
                        standar keunggulan kami.</p>
                </div>
                <a class="px-8 py-3 border border-primary/30 text-primary font-headline font-bold rounded-xl hover:bg-primary/10 transition-all flex items-center space-x-2"
                    href="apps/pages/portfolio.php">
                    <span>View Full Portfolio</span>
                    <span class="material-symbols-outlined">collections</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div
                    class="reveal-scale group relative overflow-hidden rounded-2xl aspect-video bg-surface-bright shadow-lg">
                    <img alt="Project 1"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        src="src/images/company.png" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
                        <div>
                            <p class="text-xs text-primary font-bold uppercase tracking-widest">Cinematic Visuals</p>
                            <h4 class="text-lg font-headline font-bold text-white">Nippon Express Global</h4>
                        </div>
                    </div>
                </div>
                <div class="reveal-scale group relative overflow-hidden rounded-2xl aspect-video bg-surface-bright shadow-lg"
                    style="transition-delay: 0.2s;">
                    <img alt="Project 2"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        src="src/images/office.png" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
                        <div>
                            <p class="text-xs text-primary font-bold uppercase tracking-widest">Brand Experience</p>
                            <h4 class="text-lg font-headline font-bold text-white">Aston Bogor Hybrid Event</h4>
                        </div>
                    </div>
                </div>
                <div class="reveal-scale group relative overflow-hidden rounded-2xl aspect-video bg-surface-bright shadow-lg"
                    style="transition-delay: 0.4s;">
                    <img alt="Project 3"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        src="src/images/tech.png" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
                        <div>
                            <p class="text-xs text-primary font-bold uppercase tracking-widest">Digital Strategy</p>
                            <h4 class="text-lg font-headline font-bold text-white">JICA Innovation Hub</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Leadership Team -->
    <section class="py-24" id="leadership">
        <div class="max-w-7xl mx-auto px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-5xl font-headline font-bold text-primary mb-4">Visionary Minds</h2>
                <p class="text-on-surface-variant">Pemimpin di balik inovasi PT. Adikara Mandala Kreasi.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Leader 1 -->
                <div
                    class="reveal-scale group relative overflow-hidden rounded-3xl bg-surface-container text-center pb-8 border border-outline-variant/10 hover-lift">
                    <div class="aspect-[3/4] overflow-hidden mb-6">
                        <img alt="Rizqi Maulana"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110"
                            src="src/images/risqi.jpeg" />
                    </div>
                    <h3 class="text-2xl font-headline font-bold text-primary">Rizqi Maulana</h3>
                    <p class="text-on-surface-variant font-medium">Leading Director</p>
                </div>
                <!-- Leader 2 -->
                <div class="reveal-scale group relative overflow-hidden rounded-3xl bg-surface-container text-center pb-8 border border-outline-variant/10 hover-lift"
                    style="transition-delay: 0.2s;">
                    <div class="aspect-[3/4] overflow-hidden mb-6">
                        <img alt="Meida Pitaloka"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110"
                            src="src/images/meida.jpeg" />
                    </div>
                    <h3 class="text-2xl font-headline font-bold text-primary">Meida Pitaloka</h3>
                    <p class="text-on-surface-variant font-medium">Commissioner</p>
                </div>
                <!-- Leader 3 -->
                <div class="reveal-scale group relative overflow-hidden rounded-3xl bg-surface-container text-center pb-8 border border-outline-variant/10 hover-lift"
                    style="transition-delay: 0.4s;">
                    <div class="aspect-[3/4] overflow-hidden mb-6">
                        <img alt="Luthfi Hafiz"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-110"
                            src="src/images/luthfi.jpeg" />
                    </div>
                    <h3 class="text-2xl font-headline font-bold text-primary">Luthfi Hafiz</h3>
                    <p class="text-on-surface-variant font-medium">Head of Operations</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Interactive Contact Form -->
    <section class="py-24 relative overflow-hidden" id="contact">
        <div class="absolute inset-0 bg-primary/5"></div>
        <div class="max-w-7xl mx-auto px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8 reveal-left">
                    <h2 class="text-5xl font-headline font-bold text-primary">Mari Berkarya Bersama</h2>
                    <p class="text-xl text-on-surface-variant leading-relaxed">Punya ide proyek luar biasa atau butuh konsultasi terkait strategi digital Anda? Jangan ragu untuk menyapa kami.</p>
                    
                    <div class="flex items-center space-x-4 p-6 bg-surface rounded-2xl border border-outline-variant/20 shadow-sm hover-lift">
                        <div class="w-12 h-12 rounded-full bg-[#25D366]/10 flex items-center justify-center">
                            <svg class="w-6 h-6 text-[#25D366]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-lg text-on-surface">Respon Cepat via WhatsApp</p>
                            <p class="text-sm text-on-surface-variant">Kami biasanya membalas dalam waktu 1 jam kerja.</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-surface p-8 md:p-12 rounded-3xl shadow-2xl border border-outline-variant/20 reveal-right">
                    <form id="wa-contact-form" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label for="wa-name" class="block text-sm font-bold text-on-surface-variant uppercase tracking-widest">Nama Lengkap</label>
                                <input type="text" id="wa-name" required class="w-full bg-surface-container-lowest border border-outline-variant/50 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors text-on-surface">
                            </div>
                            <div class="space-y-2">
                                <label for="wa-company" class="block text-sm font-bold text-on-surface-variant uppercase tracking-widest">Perusahaan / Instansi</label>
                                <input type="text" id="wa-company" class="w-full bg-surface-container-lowest border border-outline-variant/50 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors text-on-surface">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label for="wa-service" class="block text-sm font-bold text-on-surface-variant uppercase tracking-widest">Layanan yang Diminati</label>
                            <select id="wa-service" required class="w-full bg-surface-container-lowest border border-outline-variant/50 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors text-on-surface appearance-none">
                                <option value="" disabled selected>Pilih Layanan Utama</option>
                                <option value="Cinematic Visuals (Video Produksi)">Cinematic Visuals (Video Produksi)</option>
                                <option value="Pro Audio (Podcast/Sonic Branding)">Pro Audio (Podcast/Sonic Branding)</option>
                                <option value="Data-Driven Marketing (Ads/SEO)">Data-Driven Marketing (Ads/SEO)</option>
                                <option value="Konsultasi Umum">Konsultasi Umum / Lainnya</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label for="wa-message" class="block text-sm font-bold text-on-surface-variant uppercase tracking-widest">Pesan Singkat</label>
                            <textarea id="wa-message" rows="4" required class="w-full bg-surface-container-lowest border border-outline-variant/50 rounded-xl px-4 py-3 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors text-on-surface resize-none" placeholder="Ceritakan sedikit tentang kebutuhan Anda..."></textarea>
                        </div>
                        <button type="submit" class="w-full magnetic-btn py-4 bg-primary text-white font-headline font-bold rounded-xl shadow-lg hover:shadow-primary/30 hover:-translate-y-1 transition-all flex justify-center items-center space-x-2">
                            <span>Kirim ke WhatsApp Kami</span>
                            <span class="material-symbols-outlined">send</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Clients -->
    <section class="py-24 bg-surface-container-lowest reveal" id="clients">
        <div class="max-w-7xl mx-auto px-8 mb-12">
            <h2 class="text-center text-3xl font-headline font-bold text-primary opacity-60">Trusted By Industry Giants
            </h2>
                <div class="marquee py-12">
            <div class="marquee-content flex items-center">
                <img alt="Nippon Express" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/nippon.png" onerror="this.onerror=null; this.src='https://placehold.co/200x80/f1f5f9/475569?text=Nippon+Express'"/>
                <img alt="JICA" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/jica.png" onerror="this.onerror=null; this.src='https://placehold.co/150x80/f1f5f9/475569?text=JICA'"/>
                <img alt="Aston Bogor" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/aston.png" onerror="this.onerror=null; this.src='https://placehold.co/200x80/f1f5f9/475569?text=Aston+Bogor'"/>
                <img alt="Balairung Hotel" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/balairung.png" onerror="this.onerror=null; this.src='https://placehold.co/200x80/f1f5f9/475569?text=Balairung+Hotel'"/>
                <img alt="DPRD Kota Bogor" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/dprd.png" onerror="this.onerror=null; this.src='https://placehold.co/200x80/f1f5f9/475569?text=DPRD+Bogor'"/>
                <img alt="PKS" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/pks.png" onerror="this.onerror=null; this.src='https://placehold.co/100x80/f1f5f9/475569?text=PKS'"/>
                <img alt="Walikota Bogor 2024" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/walikota.png" onerror="this.onerror=null; this.src='https://placehold.co/200x80/f1f5f9/475569?text=Walikota'"/>
            </div>
            <div aria-hidden="true" class="marquee-content flex items-center">
                <img alt="Nippon Express" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/nippon.png" onerror="this.onerror=null; this.src='https://placehold.co/200x80/f1f5f9/475569?text=Nippon+Express'"/>
                <img alt="JICA" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/jica.png" onerror="this.onerror=null; this.src='https://placehold.co/150x80/f1f5f9/475569?text=JICA'"/>
                <img alt="Aston Bogor" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/aston.png" onerror="this.onerror=null; this.src='https://placehold.co/200x80/f1f5f9/475569?text=Aston+Bogor'"/>
                <img alt="Balairung Hotel" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/balairung.png" onerror="this.onerror=null; this.src='https://placehold.co/200x80/f1f5f9/475569?text=Balairung+Hotel'"/>
                <img alt="DPRD Kota Bogor" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/dprd.png" onerror="this.onerror=null; this.src='https://placehold.co/200x80/f1f5f9/475569?text=DPRD+Bogor'"/>
                <img alt="PKS" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/pks.png" onerror="this.onerror=null; this.src='https://placehold.co/100x80/f1f5f9/475569?text=PKS'"/>
                <img alt="Walikota Bogor 2024" class="h-12 w-auto object-contain grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-300" src="src/images/clients/walikota.png" onerror="this.onerror=null; this.src='https://placehold.co/200x80/f1f5f9/475569?text=Walikota'"/>
            </div>
        </div>  </div>
    </section>
    
<?php 
include 'includes/footer.php'; 
?>

