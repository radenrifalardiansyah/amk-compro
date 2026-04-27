<?php 
$base_path = '../../';
include '../../includes/header.php'; 
?>

        <!-- Hero Section -->
    <section class="relative pt-32 pb-20 overflow-hidden bg-surface">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(37,99,235,0.05),transparent_70%)] animate-fluid"></div>
        </div>
        <div class="max-w-7xl mx-auto px-8 relative z-10 text-center reveal-scale active">
            <span class="inline-block py-1 px-3 rounded-full bg-primary/10 text-primary font-bold text-xs uppercase tracking-widest mb-4">Our Work</span>
            <h1 class="text-5xl md:text-7xl font-headline font-bold text-primary mb-6">Manifestations of Excellence</h1>
            <p class="text-xl text-on-surface-variant max-w-3xl mx-auto">Menelusuri jejak inovasi digital, strategi presisi, dan visual sinematik yang telah kami hasilkan untuk berbagai mitra terkemuka.</p>
        </div>
    </section>

    <!-- Gallery Grid -->
    <section class="py-20 bg-surface-container-lowest">
        <div class="max-w-7xl mx-auto px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Nippon -->
            <div class="reveal stagger-item group relative overflow-hidden rounded-3xl aspect-[4/5] bg-surface-bright shadow-xl">
                <a href="portfolio-nippon.php" class="absolute inset-0 z-20"></a>
                <img alt="Nippon Express" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" src="../../src/images/company.png" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8">
                    <p class="text-sm text-primary font-bold uppercase tracking-widest mb-2">Cinematic Visuals</p>
                    <h3 class="text-2xl font-headline font-bold text-white mb-2">Nippon Express Global</h3>
                    <p class="text-white/70 text-sm line-clamp-2">Produksi video profil korporat berstandar internasional yang merepresentasikan jaringan logistik raksasa Nippon Express.</p>
                </div>
            </div>
            
            <!-- Aston -->
            <div class="reveal stagger-item group relative overflow-hidden rounded-3xl aspect-[4/5] bg-surface-bright shadow-xl">
                <a href="portfolio-aston.php" class="absolute inset-0 z-20"></a>
                <img alt="Aston Bogor" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" src="../../src/images/office.png" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8">
                    <p class="text-sm text-primary font-bold uppercase tracking-widest mb-2">Brand Experience</p>
                    <h3 class="text-2xl font-headline font-bold text-white mb-2">Aston Bogor Hybrid Event</h3>
                    <p class="text-white/70 text-sm line-clamp-2">Manajemen acara hybrid berskala besar dengan eksekusi tata suara dan visual yang memukau untuk peluncuran fasilitas baru Aston Bogor.</p>
                </div>
            </div>

            <!-- JICA -->
            <div class="reveal stagger-item group relative overflow-hidden rounded-3xl aspect-[4/5] bg-surface-bright shadow-xl">
                <a href="portfolio-jica.php" class="absolute inset-0 z-20"></a>
                <img alt="JICA" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" src="../../src/images/tech.png" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8">
                    <p class="text-sm text-primary font-bold uppercase tracking-widest mb-2">Digital Strategy</p>
                    <h3 class="text-2xl font-headline font-bold text-white mb-2">JICA Innovation Hub</h3>
                    <p class="text-white/70 text-sm line-clamp-2">Kampanye pemasaran digital berbasis data yang meningkatkan kesadaran publik terhadap program inovasi JICA di Indonesia.</p>
                </div>
            </div>
            
            <!-- Dummy 1 -->
            <div class="reveal stagger-item group relative overflow-hidden rounded-3xl aspect-[4/5] bg-surface-bright shadow-xl">
                <a href="#" class="absolute inset-0 z-20"></a>
                <img alt="Balairung Hotel" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" src="../../src/images/teamwork.png" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8">
                    <p class="text-sm text-primary font-bold uppercase tracking-widest mb-2">Pro Audio & Podcast</p>
                    <h3 class="text-2xl font-headline font-bold text-white mb-2">Balairung Hotel Series</h3>
                    <p class="text-white/70 text-sm line-clamp-2">Produksi seri vodcast eksklusif untuk memperkuat citra budaya dan keramahan khas Balairung Hotel di era digital.</p>
                </div>
            </div>

            <!-- Dummy 2 -->
            <div class="reveal stagger-item group relative overflow-hidden rounded-3xl aspect-[4/5] bg-surface-bright shadow-xl">
                <a href="#" class="absolute inset-0 z-20"></a>
                <img alt="DPRD Kota Bogor" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" src="../../src/images/leader2.png" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent opacity-80 group-hover:opacity-100 transition-opacity flex flex-col justify-end p-8">
                    <p class="text-sm text-primary font-bold uppercase tracking-widest mb-2">Media Campaign</p>
                    <h3 class="text-2xl font-headline font-bold text-white mb-2">DPRD Kota Bogor</h3>
                    <p class="text-white/70 text-sm line-clamp-2">Strategi komunikasi publik dan kampanye media sosial untuk meningkatkan transparansi dan partisipasi masyarakat lokal.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA -->
    <section class="py-20 bg-primary/5 text-center">
        <h2 class="text-3xl font-headline font-bold text-primary mb-6">Siap Menjadi Kisah Sukses Berikutnya?</h2>
        <a href="../../index.php#contact" class="inline-flex px-8 py-4 hero-gradient text-on-primary font-bold rounded-xl hover:scale-105 transition-all shadow-lg">Konsultasi Proyek</a>
    </section>

<?php 
include '../../includes/footer.php'; 
?>
