<?php
// Page metadata for Telahtech Limited
$title           = "Products & Active Deployments | TELAHTECH LIMITED";
$metaTitle       = "Proprietary Software Products & Tech Deployments | TELAHTECH LIMITED";
$metaDescription = "Discover TELAHTECH LIMITED's comprehensive suite of proprietary products including ShanaRent, RahisiEZ ERP, Telah CBS, T-Mkopo, and more industry-specific solutions.";
$metaKeywords    = "Telahtech Products, ShanaRent, RahisiEZ ERP, Telah CBS, T-Mkopo, Telah-Soma, T-Afya, Enterprise Software Kenya";
$metaImage       = ""; // set absolute URL in header.php
require 'includes/header.php';
?>

    <!-- ADVANCED SEO: JSON-LD Schema Markup for Software Products -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ItemList",
      "itemListElement": [
        {
          "@type": "SoftwareApplication",
          "name": "ShanaRent",
          "applicationCategory": "BusinessApplication",
          "operatingSystem": "Web, iOS, Android",
          "description": "A powerful Property Management System designed to automate tenant billing, lease tracking, and real estate portfolio accounting."
        },
        {
          "@type": "SoftwareApplication",
          "name": "RahisiEZ ERP",
          "applicationCategory": "EnterpriseApplication",
          "operatingSystem": "Web, Desktop",
          "description": "An all-in-one Point of Sale (POS) and Enterprise Resource Planning tool tailored for scaling businesses."
        },
        {
          "@type": "SoftwareApplication",
          "name": "Telah CBS",
          "applicationCategory": "FinanceApplication",
          "operatingSystem": "Web",
          "description": "Core Banking System engineered specifically for Saccos, Micro-finance institutions, and mid-tier banks."
        }
      ]
    }
    </script>
    
<!-- PRODUCTS HERO SECTION -->
<section class="relative pt-32 pb-16 overflow-hidden bg-maroon-950">
    <div class="absolute inset-0 z-0 opacity-20">
        <div class="absolute -top-[30%] -right-[10%] w-[70%] h-[100%] rounded-full bg-maroon-500 blur-[120px]"></div>
        <div class="absolute bottom-[10%] -left-[10%] w-[50%] h-[50%] rounded-full bg-red-900 blur-[100px]"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff0a_1px,transparent_1px),linear-gradient(to_bottom,#ffffff0a_1px,transparent_1px)] bg-[size:3rem_3rem]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
        <span class="px-4 py-1.5 rounded-full text-xs font-bold tracking-widest uppercase bg-maroon-800/50 text-maroon-200 border border-maroon-700 inline-block mb-6 shadow-sm backdrop-blur-md">
            Portfolio & Products
        </span>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-heading font-extrabold text-white tracking-tight mb-6">
            Active <span class="text-transparent bg-clip-text bg-gradient-to-r from-maroon-300 to-red-400">Deployments</span>
        </h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto font-medium leading-relaxed mb-10">
            Discover our proprietary products and active client deployments currently driving real-world value across real estate, finance, healthcare, legal, and agribusiness sectors.
        </p>
    </div>
</section>

<section class="py-20 bg-gray-50 relative z-20 -mt-10 rounded-t-[3rem] shadow-[0_-20px_40px_-15px_rgba(0,0,0,0.1)]">
    <div class="max-w-7xl mx-auto px-6">
        
        <!-- Upgraded to a 3-column grid to accommodate the extensive product line gracefully -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Zemel Technologies Core Portal -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-full h-full bg-white rounded-xl shadow-sm border border-gray-100 p-4 transform translate-y-8 group-hover:translate-y-4 transition-transform duration-500 flex flex-col">
                        <div class="flex items-center gap-2 border-b border-gray-50 pb-2 mb-2">
                            <div class="w-3 h-3 rounded-full bg-red-400"></div>
                            <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                            <div class="w-3 h-3 rounded-full bg-green-400"></div>
                        </div>
                        <div class="flex-1 bg-gray-50 rounded border border-gray-100 flex items-center justify-center text-maroon-700">
                            <i data-lucide="layout-dashboard" class="w-10 h-10 opacity-50"></i>
                        </div>
                    </div>
                    <div class="absolute top-4 right-4 bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-bold flex items-center gap-1.5 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span> Live System
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">Zemel Core Portal</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed flex-1">
                        A highly optimized, centralized web portal designed for real-time resource tracking and inter-departmental workflow coordination with comprehensive user management.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">Web Architecture</span>
                    </div>
                </div>
            </div>

            <!-- Telahtec Auth & Security Gateway -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-32 h-32 bg-white rounded-full shadow-sm border border-gray-100 flex items-center justify-center transform group-hover:scale-105 transition-transform duration-500">
                         <i data-lucide="shield" class="w-12 h-12 text-maroon-700 opacity-80"></i>
                    </div>
                    <div class="absolute top-4 right-4 bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full font-bold flex items-center gap-1.5 shadow-sm">
                        <i data-lucide="check-circle" class="w-3 h-3"></i> Active Layer
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">Telah Auth & Security</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed flex-1">
                        An enterprise-grade authentication engine providing dynamic ABAC rules, OTP verification flows, forced password changes, and deep cryptographic security.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">Cybersecurity</span>
                    </div>
                </div>
            </div>

            <!-- ShanaRent Property Management -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-full h-full border-2 border-dashed border-maroon-200 rounded-xl flex items-center justify-center bg-white/50 group-hover:bg-white transition-colors">
                        <i data-lucide="building" class="w-16 h-16 text-maroon-700 opacity-70 group-hover:scale-110 transition-transform"></i>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">ShanaRent</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed flex-1">
                        A powerful Property Management System designed to automate tenant billing, lease tracking, maintenance requests, and comprehensive real estate portfolio accounting.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">Real Estate</span>
                        <span class="text-xs font-bold uppercase tracking-wide bg-gray-100 text-gray-600 px-3 py-1.5 rounded-md">Property Tech</span>
                    </div>
                </div>
            </div>

            <!-- RahisiEZ ERP -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-32 h-32 bg-white rounded-2xl shadow-sm border border-gray-100 flex items-center justify-center transform group-hover:-rotate-3 transition-transform duration-500">
                         <i data-lucide="shopping-bag" class="w-12 h-12 text-maroon-700 opacity-80"></i>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">RahisiEZ ERP</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed flex-1">
                        A comprehensive, all-in-one Point of Sale (POS) and Enterprise Resource Planning tool tailored for scaling businesses to manage inventory, sales, and supply chains.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">Retail & POS</span>
                        <span class="text-xs font-bold uppercase tracking-wide bg-gray-100 text-gray-600 px-3 py-1.5 rounded-md">ERP Solution</span>
                    </div>
                </div>
            </div>

            <!-- Telah CBS -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-full h-full bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-center transform group-hover:translate-y-2 transition-transform duration-500">
                        <i data-lucide="landmark" class="w-16 h-16 text-maroon-700 opacity-80"></i>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">Telah CBS</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed flex-1">
                        Core Banking System engineered specifically for Saccos, Micro-finance institutions, and mid-tier banks. Handles complex credit logic, guarantor tracking, and ledger accounting.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">FinTech</span>
                        <span class="text-xs font-bold uppercase tracking-wide bg-gray-100 text-gray-600 px-3 py-1.5 rounded-md">Core Banking</span>
                    </div>
                </div>
            </div>

            <!-- Telah Kundi ERP -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-32 h-32 bg-white rounded-full shadow-sm border border-gray-100 flex items-center justify-center transform group-hover:scale-110 transition-transform duration-500">
                         <i data-lucide="users" class="w-12 h-12 text-maroon-700 opacity-80"></i>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">Telah Kundi ERP</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed flex-1">
                        A specialized ERP designed for Chamas and investment groups to transparently manage informal banking, group biashara, member contributions, and dividends.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">Chamas</span>
                        <span class="text-xs font-bold uppercase tracking-wide bg-gray-100 text-gray-600 px-3 py-1.5 rounded-md">Group Finance</span>
                    </div>
                </div>
            </div>

            <!-- T-Mkopo Platform -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-24 h-40 bg-white rounded-2xl shadow-md border-4 border-gray-800 flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-500">
                         <i data-lucide="smartphone" class="w-10 h-10 text-maroon-700 opacity-80"></i>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">T-Mkopo</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed flex-1">
                        A robust platform for digital lenders featuring an integrated iOS and Android application. Automates loan origination, disbursements, and collection workflows.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">Mobile App</span>
                        <span class="text-xs font-bold uppercase tracking-wide bg-gray-100 text-gray-600 px-3 py-1.5 rounded-md">Digital Lending</span>
                    </div>
                </div>
            </div>

            <!-- T-Wakili -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-32 h-32 bg-white rounded-full shadow-sm border border-gray-100 flex items-center justify-center transform group-hover:-translate-y-2 transition-transform duration-500">
                         <i data-lucide="scale" class="w-12 h-12 text-maroon-700 opacity-80"></i>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">T-Wakili</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed flex-1">
                        A highly secure practice management system for law firms to manage client cases, document repositories, billable hours, and court scheduling.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">Legal Tech</span>
                    </div>
                </div>
            </div>

            <!-- T-Afya -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-full h-full bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-center group-hover:bg-maroon-50 transition-colors duration-500">
                        <i data-lucide="stethoscope" class="w-16 h-16 text-maroon-700 opacity-80 group-hover:scale-110 transition-transform"></i>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">T-Afya</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed flex-1">
                        A comprehensive hospital management and electronic health records (EHR) system for health facilities to manage patient data, billing, and pharmacy inventories.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">HealthTech</span>
                    </div>
                </div>
            </div>

            <!-- T-Mkulima -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-32 h-32 bg-white rounded-full shadow-sm border border-gray-100 flex items-center justify-center transform group-hover:scale-110 transition-transform duration-500">
                         <i data-lucide="tractor" class="w-12 h-12 text-maroon-700 opacity-80"></i>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">T-Mkulima</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed flex-1">
                        An agribusiness platform built to streamline farm operations, supply chain logistics, crop yield tracking, and out-grower payment processing.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">AgriTech</span>
                    </div>
                </div>
            </div>

            <!-- T-Zuru -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-full h-full bg-white rounded-xl shadow-sm border border-gray-100 flex items-center justify-center transform group-hover:-translate-y-2 transition-transform duration-500">
                        <i data-lucide="plane" class="w-16 h-16 text-maroon-700 opacity-80"></i>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">T-Zuru</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed flex-1">
                        A dynamic operational portal for hospitality firms and tour operators to manage itinerary scheduling, booking reservations, and fleet logistics.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">Hospitality</span>
                    </div>
                </div>
            </div>

            <!-- T-Zabuni -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-32 h-32 bg-white rounded-lg shadow-sm border border-gray-100 flex items-center justify-center transform group-hover:rotate-3 transition-transform duration-500">
                         <i data-lucide="briefcase" class="w-12 h-12 text-maroon-700 opacity-80"></i>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">T-Zabuni</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed flex-1">
                        A tailored software solution for tenderpreneurs to track bidding pipelines, manage compliance documentation, and monitor procurement opportunities.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">Procurement</span>
                    </div>
                </div>
            </div>

            <!-- Telah-Soma -->
            <div class="group cursor-pointer rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-premium transition-all duration-300 flex flex-col bg-white lg:col-span-3">
                <div class="h-56 bg-gray-50 flex items-center justify-center p-8 relative overflow-hidden border-b border-gray-100">
                    <div class="absolute inset-0 bg-maroon-gradient opacity-5 group-hover:opacity-10 transition-opacity"></div>
                    <div class="w-32 h-32 bg-white rounded-full shadow-sm border border-gray-100 flex items-center justify-center transform group-hover:scale-110 transition-transform duration-500">
                         <i data-lucide="graduation-cap" class="w-12 h-12 text-maroon-700 opacity-80"></i>
                    </div>
                </div>
                <div class="p-8 flex-1 flex flex-col items-center text-center">
                    <h3 class="text-2xl font-heading font-bold text-gray-900">Telah-Soma</h3>
                    <p class="text-gray-600 mt-3 leading-relaxed max-w-3xl mx-auto">
                        An advanced e-learning and school administration framework designed for learning institutions. Seamlessly run operations, manage student records, process fee collections, and deploy digital teaching environments.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-2 justify-center">
                        <span class="text-xs font-bold uppercase tracking-wide bg-maroon-50 text-maroon-700 px-3 py-1.5 rounded-md">EdTech</span>
                        <span class="text-xs font-bold uppercase tracking-wide bg-gray-100 text-gray-600 px-3 py-1.5 rounded-md">School Administration</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php
require_once 'includes/footer.php';
?>