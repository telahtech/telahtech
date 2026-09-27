<?php
// 1. Get the current script name without the .php extension
$current_page = basename($_SERVER['PHP_SELF'], ".php");

// 2. Define default SEO Metadata (Fallbacks for index.php or any undefined pages)
$title = "TELAHTECH LIMITED | Enterprise ERP & System Reengineering";
$meta_title = "TELAHTECH LIMITED | Enterprise ERP & System Reengineering";
$meta_description = "TELAHTECH LIMITED specializes in custom ERP systems development, legacy system reengineering, workflow optimization, and premium enterprise IT solutions.";
$meta_keywords = "Telahtech Limited, Custom ERP Development, System Reengineering, Software Development, Enterprise Technology Kenya, Secure Authentication";

// 3. Dynamically assign tailored SEO metadata based on the specific page
switch ($current_page) {
    case 'about':
        $title = "About Us | TELAHTECH LIMITED";
        $meta_title = "About TELAHTECH LIMITED | Tech Consulting & Software Engineering";
        $meta_description = "Learn about TELAHTECH LIMITED, a premier technology consulting firm pioneering digital transformation, custom ERP architectures, and high-performing digital solutions.";
        $meta_keywords = "About Telahtech, Tech Consulting Kenya, Software Engineering Firm, Digital Transformation, Custom ERP Builders";
        break;

    case 'services':
        $title = "Our Expertise & Services | TELAHTECH LIMITED";
        $meta_title = "Enterprise Tech Services & Engineering Solutions | TELAHTECH LIMITED";
        $meta_description = "Explore our comprehensive tech solutions including Custom ERP Development, System Reengineering, Cloud Computing, Cybersecurity, and E-Commerce Platform builds.";
        $meta_keywords = "Tech Services Kenya, Cloud Computing, Cybersecurity, Process Automation, Web Development, E-Commerce Development, Mobile Money Integration";
        break;

    case 'products':
        $title = "Products & Active Deployments | TELAHTECH LIMITED";
        $meta_title = "Proprietary Software Products & Tech Deployments | TELAHTECH LIMITED";
        $meta_description = "Discover TELAHTECH LIMITED's active client deployments driving real-world value, including core web portals, enterprise authentication gateways, and security layers.";
        $meta_keywords = "Software Products, Active Tech Deployments, Enterprise Web Portals, Authentication Gateways, ABAC Security Engine";
        break;

    case 'booking':
        $title = "Book a Consultation | TELAHTECH LIMITED";
        $meta_title = "Scope Your Digital Transformation | TELAHTECH LIMITED";
        $meta_description = "Schedule a technical consultation and use our interactive project planner to estimate the scope and development sprints for your upcoming software or ERP deployment.";
        $meta_keywords = "Book Tech Consultation, Project Planner, Software Development Estimate, ERP Deployment Scope, IT Support Contact";
        break;
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Dynamic Primary SEO & Visibility Metadata -->
    <title><?php echo $title; ?></title>
    <meta name="title" content="<?php echo $meta_title; ?>">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    
    <meta name="robots" content="index, follow">
    <meta name="author" content="TELAHTECH LIMITED">
    
    <!-- Dynamic Canonical URL to prevent duplicate content indexing -->
    <link rel="canonical" href="https://www.telahtech.co.ke/<?php echo ($current_page == 'index' || $current_page == '') ? '' : $current_page . '.php'; ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/favicon_io/site.webmanifest">
    <!-- Tailwind CSS, Fonts & Icons -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Tailwind Configuration (Maroon & White Theme) -->
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
                950: '#310a0a',
              }
            },
            boxShadow: {
                'premium': '0 20px 40px -15px rgba(128, 0, 0, 0.1)',
                'glow': '0 0 20px rgba(128, 0, 0, 0.3)'
            }
          }
        }
      }
    </script>

    <style>
      body { background-color: #ffffff; color: #1f2937; }
      .bg-maroon-gradient { background: linear-gradient(135deg, #800000 0%, #4a0000 100%); }
      .text-gradient { background: linear-gradient(90deg, #800000, #b84d4d); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
      .glass-nav { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(12px); border-bottom: 1px solid rgba(128, 0, 0, 0.05); }
      .service-card { transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); }
      .service-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px -15px rgba(128, 0, 0, 0.15); border-color: rgba(128, 0, 0, 0.2); }
    </style>
</head>
<body class="antialiased selection:bg-maroon-700 selection:text-white">
      <!-- NAVBAR -->
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
    </header>
