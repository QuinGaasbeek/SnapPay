<nav class="fixed top-0 left-0 right-0 z-50 bg-white/10 backdrop-blur-md">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <img src="https://cdn.discordapp.com/attachments/1331273355118247936/1331277862338166794/Untitled_design_1.png?ex=6791b160&is=67905fe0&hm=99896016ada111a54a1bc8142356eebe7dab960f4221c63b83113ecf17f1ef57&" alt="SnapPay Logo" class="h-16 w-auto">
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
                x-data="{ open: false }"
                @click="open = !open"
                class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-white/10 focus:outline-none"
                aria-controls="mobile-menu"
                aria-expanded="false"
                x-bind:aria-expanded="open.toString()"
            >
                <span class="sr-only">Open hoofdmenu</span>
                <svg x-show="!open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="open" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation Menu -->
        <div
            x-data="{ open: false }"
            x-show="open"
            x-transition:enter="transition duration-200 ease-out"
            x-transition:enter-start="transform -translate-y-4 opacity-0"
            x-transition:enter-end="transform translate-y-0 opacity-100"
            x-transition:leave="transition duration-150 ease-in"
            x-transition:leave-start="transform translate-y-0 opacity-100"
            x-transition:leave-end="transform -translate-y-4 opacity-0"
            class="lg:hidden"
            id="mobile-menu"
        >
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white/10 backdrop-blur-md rounded-lg mt-2">
                <a href="#features" class="block px-3 py-2 rounded-md text-base font-medium text-white/90 hover:text-white hover:bg-white/10">Features</a>
                <a href="#how-it-works" class="block px-3 py-2 rounded-md text-base font-medium text-white/90 hover:text-white hover:bg-white/10">Hoe het werkt</a>
                <a href="#unique-features" class="block px-3 py-2 rounded-md text-base font-medium text-white/90 hover:text-white hover:bg-white/10">Unieke Functies</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-white/90 hover:text-white hover:bg-white/10">Contact</a>

                <?php if(auth()->guard()->guest()): ?>
                    <a href="<?php echo e(route('login')); ?>" class="block px-4 py-2 rounded-full text-base font-medium text-white border border-white hover:bg-white hover:text-[#0A2463] transition-all duration-300">
                        Inloggen
                    </a>
                    <a href="<?php echo e(route('register')); ?>" class="block w-full text-center bg-white text-[#0A2463] px-4 py-2 rounded-full font-medium hover:bg-opacity-90 transition-all duration-300">
                        Registreer Nu
                    </a>
                <?php else: ?>
                    <a href="<?php echo e(route('dashboard')); ?>" class="block px-4 py-2 rounded-full text-base font-medium text-white border border-white hover:bg-white hover:text-[#0A2463] transition-all duration-300">
                        Dashboard
                    </a>
                    <form method="POST" action="<?php echo e(route('logout')); ?>">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="block w-full text-center bg-white text-[#0A2463] px-4 py-2 rounded-full font-medium hover:bg-opacity-90 transition-all duration-300 mt-4">
                            Uitloggen
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPay/resources/views/components/navigation.blade.php ENDPATH**/ ?>