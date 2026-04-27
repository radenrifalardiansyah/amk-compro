<?php
if (!isset($base_path)) {
    $base_path = '';
}
?>
<!DOCTYPE html>

<html class="scroll-smooth" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>PT. Adikara Mandala Kreasi (AMK) | Ethereal Architect of Digital Innovation</title>
    <meta name="description" content="PT. Adikara Mandala Kreasi (AMK) adalah Digital Creative Agency inovatif di Bogor sebagai One-Stop Solution untuk estetika visual, produksi video sinematik, dan strategi pemasaran berbasis data." />
    <meta name="keywords" content="Creative Agency Bogor, Video Production, Digital Marketing, PT. Adikara Mandala Kreasi" />
    <meta property="og:title" content="PT. Adikara Mandala Kreasi (AMK) | Ethereal Architect of Digital Innovation" />
    <meta property="og:description" content="Digital Creative Agency inovatif di Bogor sebagai One-Stop Solution untuk estetika visual, produksi video sinematik, dan strategi pemasaran." />
    <meta property="og:image" content="<?= $base_path ?>src/images/company.png" />
    <meta property="og:type" content="website" />
    <link rel="icon" href="<?= $base_path ?>src/images/logo.png" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="<?= $base_path ?>src/js/tailwind-config.js"></script>
    <link rel="stylesheet" href="<?= $base_path ?>src/css/style.css" />
</head>

<body
    class="bg-surface text-on-surface selection:bg-primary-container selection:text-on-primary-container overflow-x-hidden">
    <!-- TopNavBar -->
    <nav
        class="fixed top-0 w-full z-50 border-b border-outline-variant/20 bg-surface/80 backdrop-blur-[30px] shadow-[0_4px_30px_rgba(37,99,235,0.08)]">
        <div class="absolute bottom-0 left-0 w-full h-1 bg-gradient-to-r from-primary via-[#60a5fa] to-primary"></div>
        <div class="flex justify-between items-center w-full px-8 py-4 max-w-7xl mx-auto">
            <div class="flex items-center space-x-3 text-2xl font-bold tracking-tighter text-on-surface font-headline">
                <img alt="AMK Logo" class="h-16 w-auto object-contain mix-blend-multiply" src="<?= $base_path ?>src/images/logo.png" />
                <!-- <img alt="AMK Text" class="h-6 w-auto object-contain mix-blend-multiply hidden sm:block"
                    src="<?= $base_path ?>src/images/logo_name.png" /> -->
            </div>
            <div class="hidden md:flex space-x-8">
                <a class="nav-link font-headline tracking-[-0.04em] font-bold text-on-surface-variant hover:text-primary transition-all duration-500 ease-in-out"
                    href="<?= $base_path ?>index.php#home">Home</a>
                <a class="nav-link font-headline tracking-[-0.04em] font-bold text-on-surface-variant hover:text-primary transition-all duration-500 ease-in-out"
                    href="<?= $base_path ?>index.php#about">About</a>
                <a class="nav-link font-headline tracking-[-0.04em] font-bold text-on-surface-variant hover:text-primary transition-all duration-500 ease-in-out"
                    href="<?= $base_path ?>index.php#services">Services</a>
                <a class="nav-link font-headline tracking-[-0.04em] font-bold text-on-surface-variant hover:text-primary transition-all duration-500 ease-in-out"
                    href="<?= $base_path ?>index.php#portfolio">Portfolio</a>
                <a class="nav-link font-headline tracking-[-0.04em] font-bold text-on-surface-variant hover:text-primary transition-all duration-500 ease-in-out"
                    href="<?= $base_path ?>index.php#leadership">Leadership</a>
                <a class="nav-link font-headline tracking-[-0.04em] font-bold text-on-surface-variant hover:text-primary transition-all duration-500 ease-in-out"
                    href="<?= $base_path ?>index.php#contact">Contact</a>
            </div>
            <a class="hidden md:block font-headline tracking-[-0.04em] font-bold text-primary px-6 py-2 border border-primary/20 rounded-full hover:bg-primary hover:text-white hover:shadow-[0_0_20px_rgba(37,99,235,0.4)] transition-all duration-500 ease-in-out"
                href="<?= $base_path ?>index.php#contact">
                Mulai Kolaborasi
            </a>
            <button id="mobile-menu-btn" class="md:hidden text-primary p-2" aria-label="Toggle mobile menu" aria-expanded="false">
                <span class="material-symbols-outlined text-3xl transition-transform duration-300" id="mobile-menu-icon">menu</span>
            </button>
        </div>
    </nav>
    
    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-40 bg-surface/95 backdrop-blur-xl translate-x-full transition-transform duration-500 ease-in-out md:hidden flex flex-col justify-center items-center space-y-8">
        <a class="mobile-link text-3xl font-headline font-bold text-on-surface hover:text-primary transition-colors" href="<?= $base_path ?>index.php#home">Home</a>
        <a class="mobile-link text-3xl font-headline font-bold text-on-surface hover:text-primary transition-colors" href="<?= $base_path ?>index.php#about">About</a>
        <a class="mobile-link text-3xl font-headline font-bold text-on-surface hover:text-primary transition-colors" href="<?= $base_path ?>index.php#services">Services</a>
        <a class="mobile-link text-3xl font-headline font-bold text-on-surface hover:text-primary transition-colors" href="<?= $base_path ?>index.php#portfolio">Portfolio</a>
        <a class="mobile-link text-3xl font-headline font-bold text-on-surface hover:text-primary transition-colors" href="<?= $base_path ?>index.php#leadership">Leadership</a>
        <a class="mobile-link text-3xl font-headline font-bold text-on-surface hover:text-primary transition-colors" href="<?= $base_path ?>index.php#contact">Contact</a>
        <a class="mobile-link mt-8 px-8 py-4 bg-primary text-white font-headline font-bold rounded-full shadow-lg" href="<?= $base_path ?>index.php#contact">Mulai Kolaborasi</a>
    </div>
