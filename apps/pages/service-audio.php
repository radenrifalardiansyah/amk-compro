<?php 
$base_path = '../../';
include '../../includes/header.php'; 
?>

        <!-- Hero Section for Service -->
    <section class="relative pt-32 pb-20 overflow-hidden bg-surface">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,rgba(37,99,235,0.05),transparent_70%)] animate-fluid"></div>
        </div>
        <div class="max-w-7xl mx-auto px-8 relative z-10 text-center reveal-scale active">
            <span class="inline-block py-1 px-3 rounded-full bg-primary/10 text-primary font-bold text-xs uppercase tracking-widest mb-4">Core Pillar</span>
            <h1 class="text-5xl md:text-7xl font-headline font-bold text-primary mb-6">Pro Audio</h1>
            <p class="text-xl text-on-surface-variant max-w-3xl mx-auto">Bangun identitas suara yang kuat dengan produksi podcast, vodcast, dan sonic branding profesional.</p>
        </div>
    </section>

    <!-- Details Content -->
    <section class="py-20 bg-surface-container-lowest">
        <div class="max-w-7xl mx-auto px-8 grid lg:grid-cols-2 gap-16 items-center">
            <div class="reveal-left">
                <img src="../../src/images/office.png" alt="Audio Production" class="rounded-3xl shadow-2xl border border-outline-variant/20 w-full object-cover aspect-video">
            </div>
            <div class="space-y-8 reveal-right">
                <div>
                    <h3 class="text-3xl font-headline font-bold text-primary mb-4">Identitas Melalui Suara</h3>
                    <p class="text-on-surface-variant leading-relaxed">
                        Audio lebih dari sekadar pelengkap visual; ia adalah elemen yang langsung menyentuh emosi. Kami merancang strategi audio komprehensif untuk memastikan brand Anda terdengar jelas di tengah kebisingan digital.
                    </p>
                </div>
                <div class="grid gap-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="material-symbols-outlined text-primary">podcasts</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg text-on-surface">Podcast &amp; Vodcast</h4>
                            <p class="text-on-surface-variant text-sm">Fasilitas perekaman studio berstandar broadcast untuk menghasilkan konten perbincangan berkualitas tinggi.</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-1">
                            <span class="material-symbols-outlined text-primary">graphic_eq</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg text-on-surface">Sonic Branding</h4>
                            <p class="text-on-surface-variant text-sm">Menciptakan jingle, efek suara (SFX), dan identitas audio eksklusif yang membuat audiens langsung mengenali brand Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA -->
    <section class="py-20 bg-primary/5 text-center">
        <h2 class="text-3xl font-headline font-bold text-primary mb-6">Siap Untuk Terdengar Berbeda?</h2>
        <a href="../../index.php#contact" class="inline-flex px-8 py-4 hero-gradient text-on-primary font-bold rounded-xl hover:scale-105 transition-all shadow-lg">Jadwalkan Sesi Studio</a>
    </section>

<?php 
include '../../includes/footer.php'; 
?>
