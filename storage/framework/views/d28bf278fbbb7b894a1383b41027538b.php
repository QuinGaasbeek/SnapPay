<nav class="md:hidden fixed bottom-0 left-0 right-0 z-40">
    <div class="bg-white/5 backdrop-blur-md border-t border-white/10 shadow-lg">
        <div class="max-w-md mx-auto px-4">
            <div class="flex items-center justify-around py-2">
                <a href="<?php echo e(route('dashboard')); ?>"
                   class="flex flex-col items-center py-2 px-3 group">
                    <div class="p-2 rounded-xl <?php echo e(Request::routeIs('dashboard') ? 'bg-white/15' : ''); ?> group-hover:bg-white/10 transition-all duration-200 relative overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 text-white relative z-10"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <?php if(Request::routeIs('dashboard')): ?>
                            <div class="absolute inset-0 bg-white/5 blur-md"></div>
                        <?php endif; ?>
                    </div>
                    <span class="text-xs font-medium mt-1 text-white <?php echo e(Request::routeIs('dashboard') ? 'opacity-100' : 'opacity-70'); ?> group-hover:opacity-100">
                        Dashboard
                    </span>
                </a>

                <a
                   class="flex flex-col items-center py-2 px-3 group">
                    <div class="p-2 rounded-xl <?php echo e(Request::routeIs('savings') ? 'bg-white/15' : ''); ?> group-hover:bg-white/10 transition-all duration-200 relative overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 text-white relative z-10"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <?php if(Request::routeIs('savings')): ?>
                            <div class="absolute inset-0 bg-white/5 blur-md"></div>
                        <?php endif; ?>
                    </div>
                    <span class="text-xs font-medium mt-1 text-white <?php echo e(Request::routeIs('savings') ? 'opacity-100' : 'opacity-70'); ?> group-hover:opacity-100">
                        Potjes
                    </span>
                </a>

                <a href="<?php echo e(route('loans')); ?>"
                   class="flex flex-col items-center py-2 px-3 group">
                    <div class="p-2 rounded-xl <?php echo e(Request::routeIs('loans') ? 'bg-white/15' : ''); ?> group-hover:bg-white/10 transition-all duration-200 relative overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 text-white relative z-10"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <?php if(Request::routeIs('loans')): ?>
                            <div class="absolute inset-0 bg-white/5 blur-md"></div>
                        <?php endif; ?>
                    </div>
                    <span class="text-xs font-medium mt-1 text-white <?php echo e(Request::routeIs('loans') ? 'opacity-100' : 'opacity-70'); ?> group-hover:opacity-100">
                        Leningen
                    </span>
                </a>

                <!-- Uitloggen voor mobiel -->
                <form method="POST" action="<?php echo e(route('logout')); ?>" class="flex flex-col items-center py-2 px-3 group">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="p-2 rounded-xl group-hover:bg-white/10 transition-all duration-200 relative overflow-hidden">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-6 w-6 text-white relative z-10"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </button>
                    <span class="text-xs font-medium mt-1 text-white opacity-70 group-hover:opacity-100">
                        Uitloggen
                    </span>
                </form>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPayApplication/resources/views/components/mobile-dashboard-navigation.blade.php ENDPATH**/ ?>