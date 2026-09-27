<?php
require 'includes/header.php';
?>

<!--<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TELAHTECH LIMITED | Enterprise ERP & System Reengineering</title>
    <meta name="title" content="TELAHTECH LIMITED | Enterprise ERP & System Reengineering">
    <meta name="description" content="TELAHTECH LIMITED specializes in custom ERP systems development, legacy system reengineering, workflow optimization, and premium enterprise IT solutions.">
    <meta name="keywords" content="Telahtech Limited, Custom ERP Development, System Reengineering, Software Development, Enterprise Technology Kenya, Secure Authentication">
    <meta name="robots" content="index, follow">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'], heading: ['Outfit', 'sans-serif'] },
            colors: { maroon: { 50: '#fdf8f8', 100: '#f8ebeb', 200: '#f0d4d4', 300: '#e3b3b3', 400: '#d18585', 500: '#b84d4d', 600: '#9e3434', 700: '#800000', 800: '#6b1d1d', 900: '#5c1c1c', 950: '#310a0a' } },
            boxShadow: { 'premium': '0 20px 40px -15px rgba(128, 0, 0, 0.1)', 'glow': '0 0 20px rgba(128, 0, 0, 0.3)' }
          }
        }
      }
    </script>
    <style>
      body { background-color: #ffffff; color: #1f2937; }
      .bg-maroon-gradient { background: linear-gradient(135deg, #800000 0%, #4a0000 100%); }
      .text-gradient { background: linear-gradient(90deg, #800000, #b84d4d); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
      .glass-nav { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(128, 0, 0, 0.05); }
    </style>
</head>
<body class="antialiased selection:bg-maroon-700 selection:text-white">-->

    <!-- NAVBAR --
    <header class="fixed top-0 w-full z-50 glass-nav transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="index.html" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-maroon-700 flex items-center justify-center font-heading font-bold text-xl text-white shadow-glow group-hover:scale-105 transition-transform">T</div>
                <span class="text-2xl font-heading font-extrabold tracking-tight text-gray-900">TELAHTECH<span class="text-maroon-700">.</span></span>
            </a>
            
            <nav class="hidden lg:flex items-center gap-8 text-sm font-semibold text-gray-600">
                <a href="about.html" class="hover:text-maroon-700 transition-colors">Who We Are</a>
                <a href="services.html" class="hover:text-maroon-700 transition-colors">Expertise & Services</a>
                <a href="products.html" class="hover:text-maroon-700 transition-colors">Products & Projects</a>
                <a href="booking.html" class="hover:text-maroon-700 transition-colors">Engagement</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="booking.html" class="hidden sm:inline-flex items-center justify-center px-6 py-2.5 text-sm font-bold text-white bg-maroon-700 rounded-full hover:bg-maroon-800 transition-all shadow-md hover:shadow-premium">
                    Schedule Consultation
                </a>
                <button class="lg:hidden text-gray-900 p-2" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
        
        <div id="mobileMenu" class="hidden lg:hidden bg-white border-t border-gray-100 px-6 py-4 space-y-4 shadow-xl">
            <a href="about.html" class="block text-sm font-semibold text-gray-700 hover:text-maroon-700">Who We Are</a>
            <a href="services.html" class="block text-sm font-semibold text-gray-700 hover:text-maroon-700">Expertise & Services</a>
            <a href="products.html" class="block text-sm font-semibold text-gray-700 hover:text-maroon-700">Products & Projects</a>
            <a href="booking.html" class="block text-sm font-semibold text-gray-700 hover:text-maroon-700">Engagement</a>
        </div>
    </header>

    HERO SECTION --
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden bg-maroon-50 min-h-screen flex items-center">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute -top-[20%] -right-[10%] w-[70%] h-[70%] rounded-full bg-maroon-200/40 blur-[100px]"></div>
            <div class="absolute top-[40%] -left-[10%] w-[50%] h-[50%] rounded-full bg-maroon-300/20 blur-[120px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="px-4 py-1.5 rounded-full text-xs font-bold tracking-widest uppercase bg-maroon-100 text-maroon-700 border border-maroon-200 inline-block mb-6">
                    Premium Enterprise Engineering
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-extrabold text-gray-900 tracking-tight leading-[1.1]">
                    Architecting the Future of <span class="text-gradient">Business Intelligence</span>
                </h1>
                <p class="mt-6 text-lg text-gray-600 max-w-lg font-medium leading-relaxed">
                    TELAHTECH LIMITED specializes in robust full-stack ERP systems, Action-Based Access Control (ABAC) architecture, and high-performance digital infrastructure to scale your enterprise gracefully.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row items-center gap-4">
                    <a href="services.html" class="w-full sm:w-auto px-8 py-4 text-base font-bold text-white bg-maroon-700 rounded-full hover:bg-maroon-800 transition-all shadow-premium flex items-center justify-center gap-2">
                        Explore Solutions <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>
            </div>
            
            <div class="relative hidden lg:block h-[500px] w-full rounded-3xl bg-white shadow-premium border border-gray-100 p-8 flex flex-col justify-between overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-maroon-gradient rounded-bl-full opacity-10"></div>
                <div class="flex justify-between items-start">
                    <div class="space-y-2">
                        <div class="h-3 w-24 bg-maroon-100 rounded-full"></div>
                        <div class="h-8 w-48 bg-maroon-700 rounded-lg"></div>
                    </div>
                    <div class="w-12 h-12 bg-gray-50 rounded-full border border-gray-100 flex items-center justify-center text-maroon-700">
                        <i data-lucide="activity" class="w-6 h-6"></i>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <div class="h-32 bg-gray-50 rounded-xl border border-gray-100 p-4">
                        <div class="w-8 h-8 rounded-md bg-maroon-100 flex items-center justify-center mb-4"><i data-lucide="database" class="w-4 h-4 text-maroon-700"></i></div>
                        <div class="h-2 w-16 bg-gray-200 rounded-full mb-2"></div>
                        <div class="h-2 w-12 bg-gray-200 rounded-full"></div>
                    </div>
                    <div class="h-32 bg-gray-50 rounded-xl border border-gray-100 p-4 mt-8">
                        <div class="w-8 h-8 rounded-md bg-maroon-100 flex items-center justify-center mb-4"><i data-lucide="git-merge" class="w-4 h-4 text-maroon-700"></i></div>
                        <div class="h-2 w-20 bg-gray-200 rounded-full mb-2"></div>
                        <div class="h-2 w-16 bg-gray-200 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <?php
// Include your dynamic header logic here (the SEO PHP block we built earlier)
?>
<!-- Make sure you have the <html> and <head> tags from the header included here -->

    <!-- NAVBAR --
    <header class="fixed top-0 w-full z-50 glass-nav transition-all duration-300 shadow-sm" id="navbar">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-xl bg-maroon-700 flex items-center justify-center font-heading font-bold text-xl text-white shadow-glow group-hover:scale-105 transition-transform">T</div>
                <span class="text-2xl font-heading font-extrabold tracking-tight text-gray-900">TELAHTECH<span class="text-maroon-700">.</span></span>
            </a>
            
            <nav class="hidden lg:flex items-center gap-8 text-sm font-semibold text-gray-600">
                <a href="about.php" class="hover:text-maroon-700 transition-colors">Who We Are</a>
                <a href="services.php" class="hover:text-maroon-700 transition-colors">Expertise & Services</a>
                <a href="products.php" class="hover:text-maroon-700 transition-colors">Products & Projects</a>
                <a href="booking.php" class="hover:text-maroon-700 transition-colors">Engagement</a>
            </nav>

            <div class="flex items-center gap-4">
                <a href="booking.php" class="hidden sm:inline-flex items-center justify-center px-6 py-2.5 text-sm font-bold text-white bg-maroon-700 rounded-full hover:bg-maroon-800 transition-all shadow-md hover:shadow-premium">
                    Schedule Consultation
                </a>
                <button class="lg:hidden text-gray-900 p-2" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
        
        <div id="mobileMenu" class="hidden lg:hidden bg-white border-t border-gray-100 px-6 py-4 space-y-4 shadow-xl absolute w-full">
            <a href="about.php" class="block text-sm font-semibold text-gray-700 hover:text-maroon-700">Who We Are</a>
            <a href="services.php" class="block text-sm font-semibold text-gray-700 hover:text-maroon-700">Expertise & Services</a>
            <a href="products.php" class="block text-sm font-semibold text-gray-700 hover:text-maroon-700">Products & Projects</a>
            <a href="booking.php" class="block text-sm font-semibold text-gray-700 hover:text-maroon-700">Engagement</a>
        </div>
    </header>-->

    <!-- PREMIUM HERO SECTION -->
    <section class="relative pt-32 pb-20 md:pt-48 md:pb-32 overflow-hidden bg-maroon-50 min-h-screen flex items-center">
        <!-- Abstract Background Geometry -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute -top-[20%] -right-[10%] w-[70%] h-[70%] rounded-full bg-maroon-200/40 blur-[100px]"></div>
            <div class="absolute top-[40%] -left-[10%] w-[50%] h-[50%] rounded-full bg-maroon-300/20 blur-[120px]"></div>
            <!-- Grid overlay for tech feel -->
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#8000000a_1px,transparent_1px),linear-gradient(to_bottom,#8000000a_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <span class="px-4 py-1.5 rounded-full text-xs font-bold tracking-widest uppercase bg-maroon-100 text-maroon-700 border border-maroon-200 inline-block mb-6 shadow-sm">
                    Premium Enterprise Engineering
                </span>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-extrabold text-gray-900 tracking-tight leading-[1.1]">
                    Architecting the Future of <br> <span class="text-gradient">Business Intelligence</span>
                </h1>
                <p class="mt-6 text-lg text-gray-600 max-w-lg font-medium leading-relaxed">
                    TELAHTECH LIMITED specializes in robust full-stack ERP systems, Action-Based Access Control (ABAC) architecture, and high-performance digital infrastructure to scale your enterprise gracefully globally.
                </p>
                <div class="mt-10 flex flex-col sm:flex-row items-center gap-4">
                    <a href="services.php" class="w-full sm:w-auto px-8 py-4 text-base font-bold text-white bg-maroon-700 rounded-full hover:bg-maroon-800 transition-all shadow-premium flex items-center justify-center gap-2 group">
                        Explore Solutions <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="products.php" class="w-full sm:w-auto px-8 py-4 text-base font-bold text-maroon-700 bg-white border border-gray-200 rounded-full hover:bg-gray-50 transition-all flex items-center justify-center gap-2">
                        View Active Deployments
                    </a>
                </div>
                
                <!-- Trust Indicators -->
                <div class="mt-12 pt-8 border-t border-maroon-200/50 flex items-center gap-8 opacity-80">
                    <div class="flex items-center gap-2">
                        <i data-lucide="shield-check" class="w-5 h-5 text-maroon-700"></i>
                        <span class="text-sm font-semibold text-gray-700">ABAC Secured</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="database" class="w-5 h-5 text-maroon-700"></i>
                        <span class="text-sm font-semibold text-gray-700">Unified Data</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i data-lucide="zap" class="w-5 h-5 text-maroon-700"></i>
                        <span class="text-sm font-semibold text-gray-700">99.9% Uptime</span>
                    </div>
                </div>
            </div>
            
            <!-- Hero Abstract Visual -->
            <div class="relative hidden lg:block h-[550px] w-full rounded-3xl bg-white shadow-premium border border-gray-100 p-8 flex flex-col justify-between overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-maroon-gradient rounded-bl-full opacity-10"></div>
                <div class="flex justify-between items-start relative z-10">
                    <div class="space-y-3">
                        <div class="h-3 w-24 bg-maroon-100 rounded-full"></div>
                        <div class="h-8 w-48 bg-maroon-700 rounded-lg"></div>
                        <div class="h-2 w-32 bg-gray-100 rounded-full mt-4"></div>
                    </div>
                    <div class="w-14 h-14 bg-maroon-50 rounded-2xl border border-maroon-100 flex items-center justify-center text-maroon-700 shadow-sm">
                        <i data-lucide="activity" class="w-7 h-7"></i>
                    </div>
                </div>
                
                <!-- Simulated Code/Data Flow block -->
                <div class="relative z-10 mt-8 p-6 bg-gray-900 rounded-2xl border border-gray-800 font-mono text-xs text-gray-400 overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-maroon-500 to-transparent opacity-50"></div>
                    <p><span class="text-maroon-400">const</span> system = <span class="text-blue-400">new</span> TelahtechEngine();</p>
                    <p class="mt-2 text-gray-500">// Initializing security protocols...</p>
                    <p class="mt-1">system.<span class="text-green-400">enableABAC</span>({ strict: true });</p>
                    <p class="mt-1">system.<span class="text-green-400">connectDatabase</span>('PostgreSQL_Cluster_01');</p>
                    <p class="mt-2 text-gray-500">// Syncing workflows...</p>
                    <p class="mt-1">await system.<span class="text-green-400">deploy</span>();</p>
                    <p class="mt-3 text-green-500">> Connection Established. Zero Bottlenecks.</p>
                </div>

                <div class="grid grid-cols-2 gap-4 mt-8 relative z-10">
                    <div class="h-32 bg-gray-50 rounded-xl border border-gray-100 p-4 transition-transform hover:-translate-y-1">
                        <div class="w-8 h-8 rounded-md bg-maroon-100 flex items-center justify-center mb-4"><i data-lucide="server" class="w-4 h-4 text-maroon-700"></i></div>
                        <div class="h-2 w-16 bg-gray-300 rounded-full mb-2"></div>
                        <div class="h-2 w-12 bg-gray-200 rounded-full"></div>
                    </div>
                    <div class="h-32 bg-gray-50 rounded-xl border border-gray-100 p-4 mt-8 transition-transform hover:-translate-y-1">
                        <div class="w-8 h-8 rounded-md bg-maroon-100 flex items-center justify-center mb-4"><i data-lucide="lock" class="w-4 h-4 text-maroon-700"></i></div>
                        <div class="h-2 w-20 bg-gray-300 rounded-full mb-2"></div>
                        <div class="h-2 w-16 bg-gray-200 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VALUE PROPOSITION SECTION -->
    <section class="py-24 bg-white border-b border-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-maroon-700 font-bold text-sm tracking-widest uppercase block mb-3">Why Telahtech?</span>
                <h2 class="text-3xl md:text-4xl font-heading font-extrabold text-gray-900">Engineering Beyond Code</h2>
                <p class="text-gray-600 mt-6 text-lg">We don't just build software; we engineer digital ecosystems. By embedding ourselves into your business rules, we create platforms that automate the mundane and secure the critical.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Prop 1 -->
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto bg-maroon-50 rounded-2xl flex items-center justify-center text-maroon-700 mb-6 shadow-sm">
                        <i data-lucide="network" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Deep Integration</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Seamlessly connecting Mobile Money Payment Portals, SMTP gateways, and E-commerce pipelines directly into a unified centralized dashboard.
                    </p>
                </div>
                <!-- Prop 2 -->
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto bg-maroon-50 rounded-2xl flex items-center justify-center text-maroon-700 mb-6 shadow-sm">
                        <i data-lucide="shield-alert" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Uncompromising Security</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Deploying rigorous OTP flows, forced password governance, and sophisticated Action-Based Access Control to shield your sensitive institutional data.
                    </p>
                </div>
                <!-- Prop 3 -->
                <div class="text-center p-6">
                    <div class="w-16 h-16 mx-auto bg-maroon-50 rounded-2xl flex items-center justify-center text-maroon-700 mb-6 shadow-sm">
                        <i data-lucide="refresh-cw" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Legacy Reengineering</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        Transforming slow, fragmented, and outdated ICT infrastructure into hyper-fast, scalable cloud-computed systems without losing historical data.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE SERVICES TEASER -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-maroon-700 font-bold text-sm tracking-widest uppercase block mb-3">Our Offerings</span>
                    <h2 class="text-3xl md:text-4xl font-heading font-extrabold text-gray-900">Capabilities at a Glance</h2>
                </div>
                <a href="services.php" class="mt-4 md:mt-0 text-maroon-700 font-bold text-sm flex items-center gap-2 hover:text-maroon-800 transition-colors">
                    View Full Services Catalog <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Mini Card 1 -->
                <div class="bg-white p-6 rounded-2xl border border-gray-100 hover:shadow-premium hover:-translate-y-1 transition-all">
                    <i data-lucide="layout" class="w-6 h-6 text-maroon-700 mb-4"></i>
                    <h4 class="font-bold text-gray-900 mb-2">Web Development</h4>
                    <p class="text-xs text-gray-600">Lightning-fast, responsive web interfaces and staff portals.</p>
                </div>
                <!-- Mini Card 2 -->
                <div class="bg-white p-6 rounded-2xl border border-gray-100 hover:shadow-premium hover:-translate-y-1 transition-all">
                    <i data-lucide="cloud" class="w-6 h-6 text-maroon-700 mb-4"></i>
                    <h4 class="font-bold text-gray-900 mb-2">Cloud Systems</h4>
                    <p class="text-xs text-gray-600">High-performance scalable cloud architectures & bespoke ERPs.</p>
                </div>
                <!-- Mini Card 3 -->
                <div class="bg-white p-6 rounded-2xl border border-gray-100 hover:shadow-premium hover:-translate-y-1 transition-all">
                    <i data-lucide="wallet" class="w-6 h-6 text-maroon-700 mb-4"></i>
                    <h4 class="font-bold text-gray-900 mb-2">Mobile Money</h4>
                    <p class="text-xs text-gray-600">Secure integration with major mobile payment APIs and ledgers.</p>
                </div>
                <!-- Mini Card 4 -->
                <div class="bg-white p-6 rounded-2xl border border-gray-100 hover:shadow-premium hover:-translate-y-1 transition-all">
                    <i data-lucide="code" class="w-6 h-6 text-maroon-700 mb-4"></i>
                    <h4 class="font-bold text-gray-900 mb-2">Software Design</h4>
                    <p class="text-xs text-gray-600">Translating complex business rules into elegant backend logic.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="py-20 relative overflow-hidden bg-maroon-900">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80')] bg-cover bg-center opacity-10 mix-blend-overlay"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-maroon-900 to-transparent"></div>
        
        <div class="max-w-7xl mx-auto px-6 relative z-10 flex flex-col md:flex-row items-center justify-between">
            <div class="text-left mb-8 md:mb-0 max-w-2xl">
                <h2 class="text-3xl md:text-4xl font-heading font-extrabold text-white mb-4">Ready to Reengineer Your Enterprise?</h2>
                <p class="text-maroon-200 text-lg">Partner with TELAHTECH LIMITED to audit your existing systems and deploy technology that actively scales your revenue.</p>
            </div>
            <a href="booking.php" class="px-8 py-4 bg-white text-maroon-900 font-bold rounded-full hover:bg-gray-100 transition-all shadow-glow whitespace-nowrap flex items-center gap-2">
                Start a Conversation <i data-lucide="calendar" class="w-5 h-5"></i>
            </a>
        </div>
    </section>

    <!-- FOOTER --
    <footer class="bg-gray-900 pt-16 pb-10 border-t border-maroon-700">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-10 mb-12">
            <div class="col-span-1 md:col-span-2">
                <a href="index.php" class="flex items-center gap-3 mb-6">
                    <div class="w-8 h-8 rounded-lg bg-maroon-700 flex items-center justify-center font-heading font-bold text-white">T</div>
                    <span class="text-xl font-heading font-extrabold tracking-tight text-white">TELAHTECH<span class="text-maroon-500">.</span></span>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed max-w-sm">Premium software engineering and system reengineering for modern enterprises. We build technology that builds your business.</p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a href="about.php" class="hover:text-maroon-400 transition-colors">About Us</a></li>
                    <li><a href="services.php" class="hover:text-maroon-400 transition-colors">Services</a></li>
                    <li><a href="products.php" class="hover:text-maroon-400 transition-colors">Products</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-4">Contact</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li>info@telahtech.com</li>
                    <li>+254 786 292373</li>
                    <li>Mombasa, Kenya</li>
                </ul>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 text-center text-sm text-gray-600 font-medium border-t border-white/5 pt-8">
            &copy; 2026 TELAHTECH LIMITED. All rights reserved.
        </div>
    </footer>

    <script>
        // Initialize Icons
        lucide.createIcons();

        // Navbar Scroll Effect
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 20) {
                nav.classList.add('shadow-md');
                nav.style.background = 'rgba(255, 255, 255, 0.98)';
            } else {
                nav.classList.remove('shadow-md');
                nav.style.background = 'rgba(255, 255, 255, 0.9)';
            }
        });
    </script>
</body>
</html>-->
<?php include 'includes/footer.php'; ?>