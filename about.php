<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | TELAHTECH LIMITED - Premium Tech Solutions</title>
    <meta name="description" content="Discover TELAHTECH LIMITED. We engineer scalable custom ERPs, secure architectures, and digital transformations for enterprises in Kenya and globally.">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <script>
        tailwind.config = { 
            theme: { 
                extend: { 
                    fontFamily: { 
                        sans: ['Plus Jakarta Sans', 'sans-serif'], 
                        heading: ['Outfit', 'sans-serif'] 
                    }, 
                    colors: { 
                        maroon: { 
                            50: '#fdf8f8', 
                            100: '#f8ebeb', 
                            200: '#f0d4d4', 
                            300: '#e3b3b3', 
                            400: '#d18585', 
                            500: '#b84d4d', 
                            600: '#9e3434', 
                            700: '#800000', 
                            800: '#6b1d1d', 
                            900: '#5c1c1c', 
                            950: '#310a0a' 
                        } 
                    },
                    boxShadow: { 
                        'premium': '0 20px 40px -15px rgba(128, 0, 0, 0.08)', 
                        'glow': '0 0 25px rgba(128, 0, 0, 0.25)',
                        'card-hover': '0 30px 60px -12px rgba(128, 0, 0, 0.12)'
                    }
                } 
            } 
        }
    </script>
    
    <style>
        .glass-nav { 
            background: rgba(255, 255, 255, 0.85); 
            backdrop-filter: blur(16px); 
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(128, 0, 0, 0.08); 
        }
        .glass-card-dark {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }
        .bg-maroon-gradient { 
            background: linear-gradient(135deg, #800000 0%, #4a0000 100%); 
        }
        .text-gradient { 
            background: linear-gradient(110deg, #800000 0%, #b84d4d 100%); 
            -webkit-background-clip: text; 
            -webkit-text-fill-color: transparent; 
        }
    </style>
</head>
<body class="antialiased bg-white text-gray-800 selection:bg-maroon-700 selection:text-white relative">

    <!-- NAVBAR -->
    <header class="fixed top-0 w-full z-50 glass-nav transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="index.html" class="flex items-center gap-3 group focus:outline-none focus:ring-2 focus:ring-maroon-700 rounded-xl p-1">
                <div class="w-10 h-10 rounded-xl bg-maroon-700 flex items-center justify-center font-heading font-bold text-xl text-white shadow-glow group-hover:scale-105 transition-transform duration-300">
                    T
                </div>
                <span class="text-2xl font-heading font-extrabold tracking-tight text-gray-900">
                    TELAHTECH<span class="text-maroon-700">.</span>
                </span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-8 text-sm font-semibold text-gray-600">
                <a href="about.html" class="text-maroon-700 font-bold transition-colors relative after:absolute after:-bottom-1 after:left-0 after:w-full after:h-0.5 after:bg-maroon-700">Who We Are</a>
                <a href="services.html" class="hover:text-maroon-700 transition-colors">Expertise & Services</a>
                <a href="products.html" class="hover:text-maroon-700 transition-colors">Products & Projects</a>
                <a href="booking.html" class="hover:text-maroon-700 transition-colors">Engagement</a>
            </nav>

            <!-- Actions & Mobile Trigger -->
            <div class="flex items-center gap-4">
                <a href="booking.html" class="hidden sm:inline-flex px-6 py-2.5 text-sm font-bold text-white bg-maroon-700 rounded-full hover:bg-maroon-800 transition-all shadow-md hover:shadow-glow hover:-translate-y-0.5">
                    Schedule Consultation
                </a>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" aria-label="Toggle Navigation Menu" aria-expanded="false" class="lg:hidden p-2 rounded-xl bg-maroon-50 text-maroon-700 hover:bg-maroon-100 transition-colors focus:outline-none focus:ring-2 focus:ring-maroon-700">
                    <i data-lucide="menu" id="menu-icon-open" class="w-6 h-6"></i>
                    <i data-lucide="x" id="menu-icon-close" class="w-6 h-6 hidden"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-100 bg-white/95 backdrop-blur-xl px-6 py-6 space-y-4 shadow-xl">
            <nav class="flex flex-col gap-4 font-semibold text-gray-700">
                <a href="about.html" class="text-maroon-700 py-2 border-b border-gray-50 flex items-center justify-between">
                    <span>Who We Are</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>
                <a href="services.html" class="hover:text-maroon-700 py-2 border-b border-gray-50 flex items-center justify-between transition-colors">
                    <span>Expertise & Services</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>
                <a href="products.html" class="hover:text-maroon-700 py-2 border-b border-gray-50 flex items-center justify-between transition-colors">
                    <span>Products & Projects</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>
                <a href="booking.html" class="hover:text-maroon-700 py-2 flex items-center justify-between transition-colors">
                    <span>Engagement</span>
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </a>
            </nav>
            <div class="pt-4">
                <a href="booking.html" class="block w-full text-center px-6 py-3 text-sm font-bold text-white bg-maroon-700 rounded-full hover:bg-maroon-800 transition-all shadow-md">
                    Schedule Consultation
                </a>
            </div>
        </div>
    </header>

    <!-- PREMIUM HERO SECTION -->
    <section class="relative pt-44 pb-28 overflow-hidden bg-gradient-to-b from-maroon-50/80 via-maroon-50/30 to-white">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden z-0 pointer-events-none">
            <div class="absolute -top-[20%] -right-[10%] w-[70%] h-[70%] rounded-full bg-maroon-200/30 blur-[120px]"></div>
            <div class="absolute top-[40%] -left-[10%] w-[50%] h-[50%] rounded-full bg-maroon-300/20 blur-[120px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <span class="px-4 py-1.5 rounded-full text-xs font-bold tracking-widest uppercase bg-maroon-100/80 text-maroon-700 border border-maroon-200/60 inline-flex items-center gap-2 mb-6 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-maroon-700 animate-pulse"></span> Company Profile
            </span>
            
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold text-gray-900 tracking-tight leading-[1.12] mb-6 max-w-4xl mx-auto">
                Pioneering the Future of <br class="hidden sm:inline"><span class="text-gradient">Digital Transformation</span>
            </h1>
            
            <div class="inline-block mb-6 px-5 py-2 rounded-2xl bg-white/80 border border-maroon-100 shadow-sm backdrop-blur-sm">
                <p class="text-base sm:text-lg text-maroon-700 font-heading font-semibold tracking-wide flex items-center gap-2">
                    <i data-lucide="sparkles" class="w-4 h-4 text-maroon-600"></i>
                    "Technology that Builds Your Business."
                </p>
            </div>
            
            <p class="text-lg text-gray-600 max-w-2xl mx-auto font-medium leading-relaxed mb-10">
                TELAHTECH LIMITED is a premier technology consulting and software engineering firm. We bridge the gap between complex enterprise bottlenecks and elegant, high-performing digital architecture.
            </p>
        </div>
    </section>

    <!-- WHO WE ARE & MOTTO -->
    <section class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative group">
                    <div class="absolute inset-0 bg-maroon-700 rounded-3xl transform translate-x-4 translate-y-4 opacity-10 group-hover:translate-x-6 group-hover:translate-y-6 transition-transform duration-500"></div>
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Telahtech Engineering Team" class="relative z-10 rounded-3xl shadow-xl object-cover h-[480px] w-full grayscale-[20%] group-hover:grayscale-0 transition-all duration-500">
                    
                    <!-- Floating Badge -->
                    <div class="absolute -bottom-6 -left-6 bg-white/90 backdrop-blur-md p-6 rounded-2xl shadow-premium z-20 border border-maroon-100/50 hidden md:block">
                        <div class="text-4xl font-heading font-black text-maroon-700">99.9%</div>
                        <p class="text-xs font-bold text-gray-500 uppercase tracking-wider mt-1">Uptime Reliability</p>
                    </div>
                </div>

                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="h-[2px] w-10 bg-maroon-700"></div>
                        <span class="text-maroon-700 font-bold text-xs tracking-widest uppercase">Who We Are</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-heading font-extrabold text-gray-900 leading-tight mb-6">
                        Engineering Beyond Code
                    </h2>
                    <p class="text-gray-600 leading-relaxed text-lg mb-6">
                        Rather than applying one-size-fits-all software, we embed ourselves in your operations. From analyzing granular bottlenecks to deploying massive-scale custom ERPs, our mission is to orchestrate technology that actively drives your revenue.
                    </p>
                    
                    <div class="bg-maroon-50/70 border-l-4 border-maroon-700 p-6 rounded-r-2xl mt-8 shadow-sm">
                        <h4 class="text-base font-bold text-gray-900 mb-2 flex items-center gap-2">
                            <i data-lucide="zap" class="w-5 h-5 text-maroon-700"></i> Our Motto
                        </h4>
                        <p class="text-gray-700 italic font-medium text-lg">
                            "Precision in Architecture, Excellence in Execution."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VISION & MISSION -->
    <section class="py-24 bg-gray-950 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80')] bg-cover bg-center opacity-10 mix-blend-overlay"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                
                <!-- Vision Card -->
                <div class="glass-card-dark p-10 rounded-3xl hover:border-white/25 transition-all duration-300 transform hover:-translate-y-1 group">
                    <div class="w-14 h-14 bg-maroon-700 rounded-2xl flex items-center justify-center mb-6 shadow-glow group-hover:scale-105 transition-transform">
                        <i data-lucide="eye" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-heading font-extrabold text-white mb-4">Our Vision</h3>
                    <p class="text-gray-300 leading-relaxed text-base sm:text-lg font-normal">
                        To be the premier catalyst for digital transformation in Africa and beyond. We envision a business landscape where scalable, intelligent technology empowers enterprises to operate seamlessly, securely, and profitably in a digital-first world.
                    </p>
                </div>

                <!-- Mission Card -->
                <div class="glass-card-dark p-10 rounded-3xl hover:border-white/25 transition-all duration-300 transform hover:-translate-y-1 group">
                    <div class="w-14 h-14 bg-maroon-700 rounded-2xl flex items-center justify-center mb-6 shadow-glow group-hover:scale-105 transition-transform">
                        <i data-lucide="target" class="w-7 h-7 text-white"></i>
                    </div>
                    <h3 class="text-2xl sm:text-3xl font-heading font-extrabold text-white mb-4">Our Mission</h3>
                    <p class="text-gray-300 leading-relaxed text-base sm:text-lg font-normal">
                        To deliver uncompromising, custom-tailored software architectures and enterprise systems. We are committed to dismantling legacy bottlenecks and building highly secure, automated frameworks that drive sustainable growth for our clients.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- VALUE PROPOSITION -->
    <section class="py-24 bg-gray-50/60 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-maroon-700 font-bold text-xs tracking-widest uppercase block mb-3">Value Proposition</span>
                <h2 class="text-3xl md:text-4xl font-heading font-extrabold text-gray-900">Why We Are The Benchmark</h2>
                <p class="text-gray-600 mt-4 text-lg">We don't just write code; we deliver measurable Return on Investment (ROI) through strategic engineering.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Prop 1 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-card-hover transition-all duration-300 group hover:-translate-y-1">
                    <div class="w-14 h-14 bg-maroon-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maroon-700 transition-colors">
                        <i data-lucide="shield-check" class="w-7 h-7 text-maroon-700 group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Military-Grade Security</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Through Action-Based Access Control (ABAC), forced OTP authentication, and deep cryptographic practices, we ensure your institutional data is bulletproof.
                    </p>
                </div>
                
                <!-- Prop 2 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-card-hover transition-all duration-300 group hover:-translate-y-1">
                    <div class="w-14 h-14 bg-maroon-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maroon-700 transition-colors">
                        <i data-lucide="cpu" class="w-7 h-7 text-maroon-700 group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">100% Custom Architecture</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We build entirely from scratch based on your specific workflows. Off-the-shelf software restricts you; our bespoke ERPs adapt and scale with your exact business model.
                    </p>
                </div>

                <!-- Prop 3 -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-card-hover transition-all duration-300 group hover:-translate-y-1">
                    <div class="w-14 h-14 bg-maroon-50 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maroon-700 transition-colors">
                        <i data-lucide="network" class="w-7 h-7 text-maroon-700 group-hover:text-white transition-colors"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Seamless Integration</h3>
                    <p class="text-gray-600 leading-relaxed">
                        From Mobile Money APIs and core banking systems to robust E-commerce platforms, we unify your disjointed systems into one centralized, high-speed dashboard.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US (LOCAL & GLOBAL) -->
    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-maroon-700 font-bold text-xs tracking-widest uppercase block mb-3">Global Standards, Local Insight</span>
                    <h2 class="text-3xl md:text-4xl font-heading font-extrabold text-gray-900 mb-6">
                        The Preferred Tech Partner Within Kenya & Beyond
                    </h2>
                    
                    <div class="space-y-8 mt-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-maroon-700 rounded-2xl flex items-center justify-center shrink-0 shadow-glow">
                                <i data-lucide="map-pin" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Unmatched Local Expertise</h3>
                                <p class="text-gray-600 mt-2 leading-relaxed">
                                    Operating from Kenya, we intimately understand the domestic landscape. From engineering compliant frameworks for Saccos and Chamas (Telah Kundi) to integrating regional Mobile Money portals, our local business acumen is unparalleled.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-gray-900 rounded-2xl flex items-center justify-center shrink-0">
                                <i data-lucide="globe-2" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">World-Class Global Delivery</h3>
                                <p class="text-gray-600 mt-2 leading-relaxed">
                                    Our tech stack knows no borders. We deploy high-availability cloud architectures, advanced relational databases, and secure cross-border E-commerce systems that allow international enterprises to scale gracefully.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Metrics Grid -->
                <div class="relative bg-gradient-to-br from-maroon-50 to-white rounded-3xl p-8 sm:p-10 border border-maroon-100 shadow-sm overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-maroon-200/30 rounded-full blur-[80px]"></div>
                    <h3 class="text-2xl font-heading font-extrabold text-gray-900 mb-8 relative z-10">By The Numbers</h3>
                    
                    <div class="grid grid-cols-2 gap-4 sm:gap-6 relative z-10">
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:border-maroon-200 transition-colors">
                            <div class="text-3xl sm:text-4xl font-heading font-black text-maroon-700 mb-1">10+</div>
                            <div class="text-xs font-bold text-gray-500 uppercase tracking-wider">Proprietary Platforms</div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:border-maroon-200 transition-colors">
                            <div class="text-3xl sm:text-4xl font-heading font-black text-maroon-700 mb-1">24/7</div>
                            <div class="text-xs font-bold text-gray-500 uppercase tracking-wider">Remote Support</div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:border-maroon-200 transition-colors">
                            <div class="text-3xl sm:text-4xl font-heading font-black text-maroon-700 mb-1">100%</div>
                            <div class="text-xs font-bold text-gray-500 uppercase tracking-wider">Code Ownership</div>
                        </div>
                        <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 hover:border-maroon-200 transition-colors">
                            <div class="text-3xl sm:text-4xl font-heading font-black text-maroon-700 mb-1 flex items-center">
                                <i data-lucide="infinity" class="w-8 h-8"></i>
                            </div>
                            <div class="text-xs font-bold text-gray-500 uppercase tracking-wider">Scalability</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HIGH-CONVERTING SALES CTA -->
    <section class="py-24 relative bg-maroon-950 overflow-hidden">
        <div class="absolute inset-0 bg-maroon-gradient opacity-90"></div>
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-heading font-extrabold text-white mb-6 leading-tight">
                Ready to Reengineer Your Business?
            </h2>
            <p class="text-lg text-maroon-100 mb-10 max-w-2xl mx-auto leading-relaxed">
                Stop adapting your business to fit off-the-shelf software. Let TELAHTECH build the technology that empowers your exact vision.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="booking.html" class="w-full sm:w-auto px-8 py-4 bg-white text-maroon-950 font-bold rounded-full hover:bg-maroon-50 transition-all shadow-glow flex items-center justify-center gap-2 transform hover:-translate-y-0.5">
                    Start Your Project <i data-lucide="rocket" class="w-5 h-5"></i>
                </a>
                <a href="products.html" class="w-full sm:w-auto px-8 py-4 bg-transparent border-2 border-white/80 text-white font-bold rounded-full hover:bg-white/10 transition-all flex items-center justify-center gap-2">
                    Explore Our Products <i data-lucide="layout-grid" class="w-5 h-5"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact" class="bg-gray-950 pt-20 pb-10 border-t border-maroon-900/50">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            
            <div class="lg:col-span-2">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-maroon-700 flex items-center justify-center font-heading font-bold text-xl text-white">T</div>
                    <span class="text-2xl font-heading font-extrabold text-white">TELAHTECH<span class="text-maroon-500">.</span></span>
                </div>
                <p class="text-gray-400 leading-relaxed max-w-sm mb-8">
                    Premium software engineering and system reengineering for modern enterprises. We build technology that builds your business.
                </p>
                <div class="flex gap-3">
                    <a href="#" aria-label="Github Profile" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-300 hover:text-white hover:bg-maroon-700 hover:border-maroon-700 transition-all"><i data-lucide="github" class="w-5 h-5"></i></a>
                    <a href="#" aria-label="LinkedIn Profile" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-300 hover:text-white hover:bg-maroon-700 hover:border-maroon-700 transition-all"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                    <a href="#" aria-label="Twitter Profile" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-300 hover:text-white hover:bg-maroon-700 hover:border-maroon-700 transition-all"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                </div>
            </div>

            <div>
                <h3 class="text-white font-heading font-bold text-lg mb-6">Solutions</h3>
                <ul class="space-y-3 text-gray-400 font-medium text-sm">
                    <li><a href="services.html" class="hover:text-maroon-400 transition-colors">Custom ERP Systems</a></li>
                    <li><a href="services.html" class="hover:text-maroon-400 transition-colors">System Reengineering</a></li>
                    <li><a href="services.html" class="hover:text-maroon-400 transition-colors">Cloud Architecture</a></li>
                    <li><a href="services.html" class="hover:text-maroon-400 transition-colors">Cybersecurity</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-white font-heading font-bold text-lg mb-6">Contact Us</h3>
                <ul class="space-y-4 text-gray-400 font-medium text-sm">
                    <li class="flex items-start gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-maroon-500 shrink-0 mt-0.5"></i>
                        <a href="mailto:info@telahtech.co.ke" class="hover:text-white transition-colors">info@telahtech.co.ke</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="phone" class="w-5 h-5 text-maroon-500 shrink-0 mt-0.5"></i>
                        <a href="tel:+254797041911" class="hover:text-white transition-colors">+254 797 041911</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-maroon-500 shrink-0 mt-0.5"></i>
                        <span>Mombasa, Kenya<br><span class="text-xs text-gray-500">Global Remote Support</span></span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-6 mt-16 pt-8 border-t border-white/10 text-center text-sm text-gray-500 font-medium">
            &copy; 2026 TELAHTECH LIMITED. All rights reserved.
        </div>
    </footer>
    
    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Render Lucide Icons
            lucide.createIcons();

            // Mobile Menu Toggle Logic
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const iconOpen = document.getElementById('menu-icon-open');
            const iconClose = document.getElementById('menu-icon-close');

            menuBtn.addEventListener('click', () => {
                const isExpanded = menuBtn.getAttribute('aria-expanded') === 'true';
                menuBtn.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                iconOpen.classList.toggle('hidden');
                iconClose.classList.toggle('hidden');
            });

            // Navbar Scroll Effect
            const nav = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    nav.classList.add('shadow-md');
                } else {
                    nav.classList.remove('shadow-md');
                }
            });
        });
    </script>
</body>
</html>