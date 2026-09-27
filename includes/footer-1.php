    <!-- FOOTER & CONTACT -->
    <!--<footer id="contact" class="bg-gray-900 pt-20 pb-10 border-t border-maroon-700">-->
          <footer id="contact" class="bg-gray-900 pt-20 pb-10 border-t border-maroon-700">

        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            
            <div class="lg:col-span-2">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-maroon-700 flex items-center justify-center font-heading font-bold text-xl text-white">T</div>
                    <span class="text-2xl font-heading font-extrabold text-white">TELAHTECH<span class="text-maroon-500">.</span></span>
                </div>
                <p class="text-gray-400 leading-relaxed max-w-sm mb-8">
                    Premium software engineering and system reengineering for modern enterprises. We build technology that builds your business.
                </p>
                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-maroon-700 transition-colors"><i data-lucide="github" class="w-5 h-5"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-maroon-700 transition-colors"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-maroon-700 transition-colors"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                </div>
            </div>

            <div>
                <h4 class="text-white font-heading font-bold text-lg mb-6">Solutions</h4>
                <ul class="space-y-3 text-gray-400 font-medium">
                    <li><a href="#services" class="hover:text-maroon-400 transition-colors">Custom ERP Systems</a></li>
                    <li><a href="#services" class="hover:text-maroon-400 transition-colors">System Reengineering</a></li>
                    <li><a href="#services" class="hover:text-maroon-400 transition-colors">Cloud Architecture</a></li>
                    <li><a href="#services" class="hover:text-maroon-400 transition-colors">Cybersecurity</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-heading font-bold text-lg mb-6">Contact Us</h4>
                <ul class="space-y-4 text-gray-400 font-medium">
                    <li class="flex items-start gap-3">
                        <i data-lucide="mail" class="w-5 h-5 text-maroon-500 mt-0.5"></i>
                        <span>info@telahtech.co.ke</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="phone" class="w-5 h-5 text-maroon-500 mt-0.5"></i>
                        <span>+254 797 041911</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-maroon-500 mt-0.5"></i>
                        <span>Mombasa, Kenya<br>Global Remote Support</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-6 mt-16 pt-8 border-t border-white/10 text-center text-sm text-gray-500 font-medium">
            &copy; 2026 TELAHTECH LIMITED. All rights reserved.
        </div>
    </footer>

    <script>
        lucide.createIcons();
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
</html>