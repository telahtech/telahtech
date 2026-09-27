<!-- PREMIUM FOOTER STYLES -->
    <style>
        /* Swiss Typography & High Contrast Base */
        .footer-premium {
            background-color: #0c0e12; /* Ultra-dark premium background */
            color: #a1a1aa; /* High legibility light gray */
            font-family: 'Plus Jakarta Sans', 'Inter', -apple-system, sans-serif;
            border-top: 2px solid #800000;
        }
        
        .footer-premium .brand-text, 
        .footer-premium h4 {
            color: #ffffff;
            font-weight: 700;
            letter-spacing: -0.02em; /* Swiss style tight tracking */
        }

        /* Interactive Links */
        .footer-link {
            color: #a1a1aa;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-block;
            font-size: 0.95rem;
        }
        
        .footer-link:hover {
            color: #b84d4d;
            transform: translateX(5px);
        }

        /* Social Icons with Depth Hover */
        .social-icon {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            transition: all 0.4s ease;
        }
        
        .social-icon:hover {
            background: #800000;
            border-color: #800000;
            color: #ffffff;
            transform: translateY(-4px);
            box-shadow: 0 12px 24px -6px rgba(128, 0, 0, 0.4);
        }

        /* Glassmorphism Newsletter Widget */
        .glass-widget {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            padding: 2rem;
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .glass-widget:hover {
            border-color: rgba(128, 0, 0, 0.4);
            transform: translateY(-2px);
        }

        .glass-input {
            background: rgba(0, 0, 0, 0.2) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            color: #ffffff !important;
            border-radius: 8px;
            padding: 0.75rem 1rem;
        }

        .glass-input:focus {
            background: rgba(0, 0, 0, 0.4) !important;
            border-color: #800000 !important;
            box-shadow: 0 0 0 4px rgba(128, 0, 0, 0.15) !important;
        }

        .glass-input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        /* Premium Buttons */
        .btn-maroon {
            background-color: #800000;
            color: #ffffff;
            border: none;
            font-weight: 600;
            border-radius: 8px;
            padding: 0.75rem 1.5rem;
            transition: all 0.3s ease;
        }

        .btn-maroon:hover {
            background-color: #a31010;
            color: #ffffff;
            box-shadow: 0 8px 16px rgba(128, 0, 0, 0.2);
        }

        .icon-maroon { color: #b84d4d; }
    </style>

    <!-- FOOTER & CONTACT -->
    <footer id="contact" class="footer-premium pt-5 pb-4">
        <div class="container py-5">
            <!-- Structured Bootstrap Grid -->
            <div class="row g-5">
                
                <!-- Brand & Bio (Col 1) -->
                <div class="col-lg-4 col-md-12 pe-lg-5">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="d-flex align-items-center justify-content-center text-white fw-bold rounded shadow-sm" style="width: 44px; height: 44px; background-color: #800000; font-size: 1.4rem; font-family: 'Outfit', sans-serif;">T</div>
                        <span class="fs-3 brand-text" style="font-family: 'Outfit', sans-serif;">TELAHTECH<span class="text-danger">.</span></span>
                    </div>
                    <p class="mb-4" style="line-height: 1.8; font-size: 0.95rem;">
                        Premium software engineering and system reengineering for modern enterprises. We build technology that builds your business.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="social-icon" aria-label="GitHub"><i data-lucide="github" style="width: 20px; height: 20px;"></i></a>
                        <a href="#" class="social-icon" aria-label="LinkedIn"><i data-lucide="linkedin" style="width: 20px; height: 20px;"></i></a>
                        <a href="#" class="social-icon" aria-label="Twitter"><i data-lucide="twitter" style="width: 20px; height: 20px;"></i></a>
                    </div>
                </div>

                <!-- Quick Links (Col 2) -->
                <div class="col-lg-2 col-md-6">
                    <h4 class="mb-4 fs-5">Solutions</h4>
                    <ul class="list-unstyled d-flex flex-column gap-3 m-0">
                        <li><a href="#services" class="footer-link">Custom ERP Systems</a></li>
                        <li><a href="#services" class="footer-link">System Reengineering</a></li>
                        <li><a href="#services" class="footer-link">Cloud Architecture</a></li>
                        <li><a href="#services" class="footer-link">Cybersecurity</a></li>
                        <li><a href="#products" class="footer-link mt-2 text-white fw-semibold">View All Products &rarr;</a></li>
                    </ul>
                </div>

                <!-- Contact Details (Col 3) -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="mb-4 fs-5">Contact Us</h4>
                    <ul class="list-unstyled d-flex flex-column gap-4 m-0" style="font-size: 0.95rem;">
                        <li class="d-flex align-items-start gap-3">
                            <i data-lucide="mail" class="icon-maroon mt-1" style="width: 20px; height: 20px; flex-shrink: 0;"></i>
                            <span>info@telahtech.co.ke</span>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i data-lucide="phone" class="icon-maroon mt-1" style="width: 20px; height: 20px; flex-shrink: 0;"></i>
                            <span>+254 797 041911</span>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i data-lucide="map-pin" class="icon-maroon mt-1" style="width: 20px; height: 20px; flex-shrink: 0;"></i>
                            <span>Mombasa, Kenya<br><small class="text-secondary">Global Remote Support</small></span>
                        </li>
                    </ul>
                </div>

                <!-- Newsletter Widget (Col 4) -->
                <div class="col-lg-3 col-md-12">
                    <div class="glass-widget">
                        <h4 class="mb-3 fs-5">Stay Ahead</h4>
                        <p class="mb-4 text-secondary" style="font-size: 0.85rem; line-height: 1.6;">
                            Get the latest enterprise tech insights and engineering blueprints delivered to your inbox.
                        </p>
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <input type="email" class="form-control glass-input shadow-none" placeholder="Enter your email address" required>
                            </div>
                            <button type="submit" class="btn btn-maroon w-100 d-flex align-items-center justify-content-center gap-2">
                                Subscribe <i data-lucide="arrow-right" style="width: 18px; height: 18px;"></i>
                            </button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Copyright & Bottom Nav -->
        <div class="container border-top mt-2 pt-4" style="border-color: rgba(255,255,255,0.06) !important;">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span style="font-size: 0.85rem; color: #6b7280;">&copy; 2026 TELAHTECH LIMITED. All rights reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="d-flex gap-4 justify-content-center justify-content-md-end" style="font-size: 0.85rem;">
                        <a href="#" class="footer-link">Privacy Policy</a>
                        <a href="#" class="footer-link">Terms of Service</a>
                        <a href="#" class="footer-link">Cookie Settings</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Interactive Scripts -->
    <!-- Bootstrap JS (Optional, requires Popper.js if using dropdowns/modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Icons
        lucide.createIcons();
        
        // Sticky Navbar Effect (Retained from original script)
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if(nav) {
                if (window.scrollY > 20) {
                    nav.classList.add('shadow-md');
                    nav.style.background = 'rgba(255, 255, 255, 0.98)';
                } else {
                    nav.classList.remove('shadow-md');
                    nav.style.background = 'rgba(255, 255, 255, 0.9)';
                }
            }
        });
    </script>