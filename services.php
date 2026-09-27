<?php
// Page metadata - FIXED and SEO Optimized for Telahtech
$title           = "Our Expertise & Services | TELAHTECH LIMITED";
$metaTitle       = "Premium Enterprise Tech Services & Software Engineering | TELAHTECH LIMITED";
$metaDescription = "Explore Telahtech Limited's premium services: Custom ERP Development, System Reengineering, Cloud Architecture, Cybersecurity, and robust full-stack web solutions.";
$metaKeywords    = "Enterprise Software Development, Custom ERP, Tech Services Kenya, Cloud Computing, Cybersecurity, ABAC, Web Development, Mobile Money Integration";
$metaImage       = ""; // set absolute URL in header.php
require 'includes/header.php';
?>

    <!-- SERVICES HERO SECTION -->
    <section class="relative pt-32 pb-20 overflow-hidden bg-maroon-950">
        <!-- Abstract Background -->
        <div class="absolute inset-0 z-0 opacity-20">
            <div class="absolute -top-[30%] -right-[10%] w-[70%] h-[100%] rounded-full bg-maroon-500 blur-[120px]"></div>
            <div class="absolute bottom-[10%] -left-[10%] w-[50%] h-[50%] rounded-full bg-red-900 blur-[100px]"></div>
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff0a_1px,transparent_1px),linear-gradient(to_bottom,#ffffff0a_1px,transparent_1px)] bg-[size:3rem_3rem]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <span class="px-4 py-1.5 rounded-full text-xs font-bold tracking-widest uppercase bg-maroon-800/50 text-maroon-200 border border-maroon-700 inline-block mb-6 shadow-sm backdrop-blur-md">
                Our Capabilities
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-extrabold text-white tracking-tight mb-6">
                Engineering <span class="text-transparent bg-clip-text bg-gradient-to-r from-maroon-300 to-red-400">Digital Excellence</span>
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto font-medium leading-relaxed mb-10">
                Delivering robust, full-stack solutions tailored to modernize your operations, secure your sensitive data, and scale your business globally. Explore our suite of premium technical services.
            </p>
        </div>
    </section>

    <!-- CORE SERVICES GRID -->
    <section class="py-24 bg-gray-50 relative z-20 -mt-10 rounded-t-[3rem] shadow-[0_-20px_40px_-15px_rgba(0,0,0,0.1)]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Highlight 1: Custom Enterprise Systems -->
                <div class="service-card bg-white p-8 rounded-3xl border border-gray-100 lg:col-span-2 relative overflow-hidden group hover:border-maroon-200">
                    <div class="absolute top-0 right-0 w-40 h-40 bg-maroon-50 rounded-bl-full z-0 transition-transform duration-500 group-hover:scale-125"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-maroon-700 text-white rounded-2xl flex items-center justify-center mb-6 shadow-glow">
                            <i data-lucide="cloud-cog" class="w-7 h-7"></i>
                        </div>
                        <h3 class="text-2xl font-heading font-bold text-gray-900 mb-4 group-hover:text-maroon-700 transition-colors">Cloud Computing & Custom ERP Systems</h3>
                        <p class="text-gray-600 leading-relaxed mb-6 text-lg">
                            We architect high-performance infrastructures and bespoke ERP solutions powered by robust backend frameworks like Django and PHP. We design highly scalable environments utilizing powerful PostgreSQL databases that streamline institutional operations and provide real-time resource tracking.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-maroon-50 border border-maroon-100 rounded-full text-xs font-bold text-maroon-700">Custom Blueprints</span>
                            <span class="px-3 py-1 bg-gray-50 border border-gray-100 rounded-full text-xs font-bold text-gray-600">Relational Databases</span>
                            <span class="px-3 py-1 bg-gray-50 border border-gray-100 rounded-full text-xs font-bold text-gray-600">Cloud Architecture</span>
                        </div>
                    </div>
                </div>

                <!-- Highlight 2: System Reengineering -->
                <div class="service-card bg-maroon-700 p-8 rounded-3xl relative overflow-hidden group shadow-xl">
                    <div class="absolute inset-0 bg-[linear-gradient(135deg,#800000_0%,#4a0000_100%)] z-0"></div>
                    <div class="absolute top-0 right-0 w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=')] opacity-50 z-0"></div>
                    <div class="relative z-10 h-full flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 bg-white/10 text-white rounded-2xl flex items-center justify-center mb-6 backdrop-blur-sm border border-white/20">
                                <i data-lucide="refresh-cw" class="w-7 h-7"></i>
                            </div>
                            <h3 class="text-2xl font-heading font-bold text-white mb-4">System Reengineering</h3>
                            <p class="text-white/80 leading-relaxed mb-6">
                                We audit and dismantle inefficient legacy systems, mapping out new workflows to translate complex business rules into highly functional software without downtime.
                            </p>
                        </div>
                        <a href="booking.php" class="inline-flex items-center text-sm font-bold text-white hover:text-maroon-200 gap-2 transition-colors">
                            Audit My System <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <!-- Web Development & UI/UX -->
                <div class="service-card bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-premium">
                    <div class="w-12 h-12 bg-maroon-50 text-maroon-700 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="layout" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Web Development & UI/UX</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Crafting responsive, interactive interfaces utilizing React and Bootstrap. We build sophisticated user portals, dynamic navigation footers, and floating chat widgets for seamless client engagement.
                    </p>
                </div>

                <!-- Cybersecurity & Compliance -->
                <div class="service-card bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-premium">
                    <div class="w-12 h-12 bg-maroon-50 text-maroon-700 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="shield-check" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Cybersecurity & Compliance</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Securing institutional data through dynamic Action-Based Access Control (ABAC), email OTP verifications, and forced password-change workflows for bulletproof authentication.
                    </p>
                </div>

                <!-- Sacco & Finance -->
                <div class="service-card bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-premium">
                    <div class="w-12 h-12 bg-maroon-50 text-maroon-700 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="landmark" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Financial Portals</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        End-to-end management systems. We engineer intricate business logic, such as proportionate loan guarantor release mechanisms for defaulted accounts, ensuring total compliance.
                    </p>
                </div>

                <!-- NGO Management -->
                <div class="service-card bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-premium">
                    <div class="w-12 h-12 bg-maroon-50 text-maroon-700 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="globe-2" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">NGO & Donor Frameworks</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Comprehensive ecosystems featuring donor registration, transparent contribution tracking, and real-time accounting ledgers to empower organizational missions.
                    </p>
                </div>

                <!-- E-Commerce -->
                <div class="service-card bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-premium">
                    <div class="w-12 h-12 bg-maroon-50 text-maroon-700 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="shopping-cart" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">E-Commerce Platforms</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Building secure digital storefronts designed for maximum conversion, featuring robust user controls, interactive catalogs, and encrypted data handling.
                    </p>
                </div>

                <!-- Mobile Money Integration -->
                <div class="service-card bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-premium">
                    <div class="w-12 h-12 bg-maroon-50 text-maroon-700 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="wallet" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Payment Portal Integration</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Seamlessly connecting platforms to major mobile payment APIs to ensure real-time transaction processing and secure ledger updates.
                    </p>
                </div>

                <!-- Process Automation -->
                <div class="service-card bg-white p-8 rounded-3xl border border-gray-100 hover:shadow-premium">
                    <div class="w-12 h-12 bg-maroon-50 text-maroon-700 rounded-xl flex items-center justify-center mb-6">
                        <i data-lucide="cpu" class="w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-gray-900 mb-3">Process Automation (RPA)</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Deploying intelligent scripts and secure SMTP notifications (via integrations like PHPMailer) to automate repetitive data entry and staff communication.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- METHODOLOGY / HOW WE WORK -->
    <section class="py-24 bg-white border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-maroon-700 font-bold text-sm tracking-widest uppercase block mb-3">Our Methodology</span>
                <h2 class="text-3xl md:text-4xl font-heading font-extrabold text-gray-900">How We Deliver Excellence</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
                <!-- Connecting Line for Desktop -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-0.5 bg-gray-100 -translate-y-1/2 z-0"></div>
                
                <!-- Step 1 -->
                <div class="relative z-10 bg-white p-6 rounded-2xl border border-gray-100 text-center shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-maroon-700 text-white rounded-full flex items-center justify-center font-bold text-lg mx-auto mb-4 border-4 border-white shadow-sm">1</div>
                    <h4 class="font-bold text-gray-900 mb-2">Discovery</h4>
                    <p class="text-xs text-gray-600">Deep dive into your business rules, logic, and existing bottlenecks.</p>
                </div>
                
                <!-- Step 2 -->
                <div class="relative z-10 bg-white p-6 rounded-2xl border border-gray-100 text-center shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-maroon-700 text-white rounded-full flex items-center justify-center font-bold text-lg mx-auto mb-4 border-4 border-white shadow-sm">2</div>
                    <h4 class="font-bold text-gray-900 mb-2">Architecture</h4>
                    <p class="text-xs text-gray-600">Drafting precise system blueprints, database schemas, and ABAC policies.</p>
                </div>
                
                <!-- Step 3 -->
                <div class="relative z-10 bg-white p-6 rounded-2xl border border-gray-100 text-center shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-maroon-700 text-white rounded-full flex items-center justify-center font-bold text-lg mx-auto mb-4 border-4 border-white shadow-sm">3</div>
                    <h4 class="font-bold text-gray-900 mb-2">Engineering</h4>
                    <p class="text-xs text-gray-600">Agile full-stack development using rigorous code standards.</p>
                </div>
                
                <!-- Step 4 -->
                <div class="relative z-10 bg-white p-6 rounded-2xl border border-gray-100 text-center shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-maroon-700 text-white rounded-full flex items-center justify-center font-bold text-lg mx-auto mb-4 border-4 border-white shadow-sm">4</div>
                    <h4 class="font-bold text-gray-900 mb-2">Deployment</h4>
                    <p class="text-xs text-gray-600">Seamless integration, staff training, and secure go-live protocols.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SALES TRIGGER / ENGAGEMENT CTA -->
    <section class="py-20 relative bg-maroon-50 border-t border-maroon-100">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-heading font-extrabold text-gray-900 mb-6">Ready to Build the Future?</h2>
            <p class="text-lg text-gray-600 mb-10">
                Whether you need a legacy system reengineered, a secure staff portal built from scratch, or a complex database architecture designed, our engineering team is ready to deliver.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="booking.php" class="px-8 py-4 bg-maroon-700 text-white font-bold rounded-full hover:bg-maroon-800 transition-all shadow-premium flex items-center gap-2">
                    Scope Your Project <i data-lucide="calculator" class="w-5 h-5"></i>
                </a>
                <a href="mailto:info@telahtech.co.ke" class="px-8 py-4 bg-white text-maroon-700 border border-maroon-200 font-bold rounded-full hover:bg-gray-50 transition-all flex items-center gap-2">
                    Contact Engineering <i data-lucide="mail" class="w-5 h-5"></i>
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>