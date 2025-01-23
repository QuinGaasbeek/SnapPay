<nav class="fixed top-0 left-0 right-0 z-50 bg-white/10 backdrop-blur-md">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <img
                        src="https://cdn.discordapp.com/attachments/1331273355118247936/1331277862338166794/Untitled_design_1.png?ex=679302e0&is=6791b160&hm=56d8433868cffa9c4c014d603ddee6048245ecbd4e65c469905c1f5b5f21224d&"
                        alt="SnapPay Logo"
                        class="h-16 w-auto"
                >
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="#features" class="text-white/90 hover:text-white transition-colors duration-300">Features</a>
                <a href="#how-it-works" class="text-white/90 hover:text-white transition-colors duration-300">Hoe het werkt</a>
                <a href="#unique-features" class="text-white/90 hover:text-white transition-colors duration-300">Unieke Functies</a>
                <a href="#contact" class="text-white/90 hover:text-white transition-colors duration-300">Contact</a>

                <?php if(auth()->guard()->guest()): ?>
                    <a href="<?php echo e(route('login')); ?>" class="text-white/90 hover:text-white transition-colors duration-300">Inloggen</a>
                    <a href="<?php echo e(route('register')); ?>" class="bg-white text-[#0A2463] px-6 py-2 rounded-full font-medium hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105">
                        Registreer Nu
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(route('dashboard')); ?>" class="block px-4 py-2 rounded-full text-base font-medium text-white border border-white hover:bg-white hover:text-[#0A2463] transition-all duration-300">
                        Dashboard
                    </a>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="bg-white text-[#0A2463] px-6 py-2 rounded-full font-medium hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105">
                            Uitloggen
                        </button>
                    </form>
                <?php endif; ?>
            </div>

            <!-- Mobile menu button -->
            <button
                    id="mobile-menu-button"
                    class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-white/10 focus:outline-none"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
            >
                <span class="sr-only">Open hoofdmenu</span>
                <svg id="menu-open-icon" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="menu-close-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2"
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation Menu -->
        <div
                id="mobile-menu"
                class="lg:hidden hidden"
        >
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white/10 backdrop-blur-md rounded-lg mt-2">
                <a href="#features" class="mobile-menu-item block px-3 py-2 rounded-md text-base font-medium text-white/90 hover:text-white hover:bg-white/10">Features</a>
                <a href="#how-it-works" class="mobile-menu-item block px-3 py-2 rounded-md text-base font-medium text-white/90 hover:text-white hover:bg-white/10">Hoe het werkt</a>
                <a href="#unique-features" class="mobile-menu-item block px-3 py-2 rounded-md text-base font-medium text-white/90 hover:text-white hover:bg-white/10">Unieke Functies</a>
                <a href="#contact" class="mobile-menu-item block px-3 py-2 rounded-md text-base font-medium text-white/90 hover:text-white hover:bg-white/10">Contact</a>

                <?php if(auth()->guard()->guest()): ?>
                    <a href="<?php echo e(route('login')); ?>" class="mobile-menu-item block px-4 py-2 rounded-full text-base font-medium text-white border border-white hover:bg-white hover:text-[#0A2463] transition-all duration-300">
                        Inloggen
                    </a>
                    <a href="<?php echo e(route('register')); ?>" class="mobile-menu-item block w-full text-center bg-white text-[#0A2463] px-4 py-2 rounded-full font-medium hover:bg-opacity-90 transition-all duration-300">
                        Registreer Nu
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(route('dashboard')); ?>" class="mobile-menu-item block px-4 py-2 rounded-full text-base font-medium text-white border border-white hover:bg-white hover:text-[#0A2463] transition-all duration-300">
                        Dashboard
                    </a>
                    <form method="POST" action="<?php echo e(route('logout')); ?>" id="logout-form">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="mobile-menu-item block w-full text-center bg-white text-[#0A2463] px-4 py-2 rounded-full font-medium hover:bg-opacity-90 transition-all duration-300 mt-4">
                            Uitloggen
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuOpenIcon = document.getElementById('menu-open-icon');
        const menuCloseIcon = document.getElementById('menu-close-icon');
        const mobileMenuItems = document.querySelectorAll('.mobile-menu-item');

        function toggleMenu() {
            mobileMenu.classList.toggle('hidden');
            menuOpenIcon.classList.toggle('hidden');
            menuCloseIcon.classList.toggle('hidden');

            const isExpanded = mobileMenuButton.getAttribute('aria-expanded') === 'true';
            mobileMenuButton.setAttribute('aria-expanded', !isExpanded);
        }

        function closeMenu() {
            mobileMenu.classList.add('hidden');
            menuOpenIcon.classList.remove('hidden');
            menuCloseIcon.classList.add('hidden');
            mobileMenuButton.setAttribute('aria-expanded', 'false');
        }

        mobileMenuButton.addEventListener('click', toggleMenu);

        mobileMenuItems.forEach(item => {
            item.addEventListener('click', closeMenu);
        });

        // Handle logout form submission
        const logoutForm = document.getElementById('logout-form');
        if (logoutForm) {
            logoutForm.addEventListener('submit', closeMenu);
        }
    });
</script>

<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPayApplication/resources/views/components/navigation.blade.php ENDPATH**/ ?>