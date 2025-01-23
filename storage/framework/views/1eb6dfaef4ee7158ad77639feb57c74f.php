<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginala1d343b5fa8b25e81a782432cf0087c4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala1d343b5fa8b25e81a782432cf0087c4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dashboard-navigation','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dashboard-navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala1d343b5fa8b25e81a782432cf0087c4)): ?>
<?php $attributes = $__attributesOriginala1d343b5fa8b25e81a782432cf0087c4; ?>
<?php unset($__attributesOriginala1d343b5fa8b25e81a782432cf0087c4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala1d343b5fa8b25e81a782432cf0087c4)): ?>
<?php $component = $__componentOriginala1d343b5fa8b25e81a782432cf0087c4; ?>
<?php unset($__componentOriginala1d343b5fa8b25e81a782432cf0087c4); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginald3c3158e944de6e6d54fcbb4a487160f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald3c3158e944de6e6d54fcbb4a487160f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.mobile-dashboard-navigation','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('mobile-dashboard-navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald3c3158e944de6e6d54fcbb4a487160f)): ?>
<?php $attributes = $__attributesOriginald3c3158e944de6e6d54fcbb4a487160f; ?>
<?php unset($__attributesOriginald3c3158e944de6e6d54fcbb4a487160f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald3c3158e944de6e6d54fcbb4a487160f)): ?>
<?php $component = $__componentOriginald3c3158e944de6e6d54fcbb4a487160f; ?>
<?php unset($__componentOriginald3c3158e944de6e6d54fcbb4a487160f); ?>
<?php endif; ?>
    <div class="min-h-screen bg-gradient-to-br from-[#0A2463] to-[#3E92CC] py-6 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Isometric 3D elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-white/10 rounded-3xl transform rotate-45 animate-float-slow"></div>
            <div class="absolute top-1/4 -right-20 w-60 h-60 bg-white/5 rounded-3xl transform -rotate-12 animate-float-slow" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/3 left-1/4 w-40 h-40 bg-white/5 rounded-3xl transform rotate-12 animate-float-slow" style="animation-delay: 1s;"></div>
        </div>

        <div class="md:mt-16 mt-0 max-w-7xl mx-auto relative z-10">
            <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center">
                <h1 class="text-3xl font-extrabold text-white mb-4 sm:mb-0">
                    Leningen Overzicht
                </h1>
                <a  href="<?php echo e(route('loans.create')); ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-[#3E92CC] hover:bg-[#0A2463] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#3E92CC] transition-colors duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Nieuwe Lening
                </a>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Mijn Leningen Sectie -->
                <section class="bg-white/10 backdrop-blur-md rounded-lg shadow-xl overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-white mb-4">Mijn Leningen</h2>
                        <div class="mb-4">
                            <input type="text" id="search-my-loans" class="w-full pl-10 pr-4 py-2 bg-white/20 border border-white/30 rounded-full text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent transition-colors duration-200" placeholder="Zoek in mijn leningen...">
                        </div>
                        <div class="space-y-4 max-h-[calc(100vh-300px)] overflow-y-auto pr-2">
                            <?php $__empty_1 = true; $__currentLoopData = $myLoans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="loan-card bg-white/20 backdrop-blur-md rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:bg-white/30">
                                    <div class="p-4">
                                        <div class="flex justify-between items-start mb-2">
                                            <h3 class="text-lg font-semibold text-white"><?php echo e($loan->title); ?></h3>
                                            <span class="px-2 py-1 text-xs font-semibold rounded-full
                                                <?php if($loan->status == \App\Enums\LoanStatusses::ACCEPTED->value): ?> bg-green-400 text-[#0A2463]
                                                <?php elseif($loan->status == \App\Enums\LoanStatusses::PENDING->value): ?> bg-blue-400 text-[#0A2463]
                                                <?php elseif($loan->status == \App\Enums\LoanStatusses::OVERDUE->value): ?> bg-red-400 text-[#0A2463]
                                                <?php elseif($loan->status == \App\Enums\LoanStatusses::REPAID->value): ?> bg-green-400 text-[#0A2463]
                                                <?php else: ?> bg-yellow-400 text-[#0A2463]
                                                <?php endif; ?>">
                                                <?php echo e($loan->status); ?>

                                            </span>
                                        </div>
                                        <p class="text-2xl font-bold text-white mb-2">€<?php echo e(number_format($loan->amount, 2, ',', '.')); ?></p>
                                        <div class="flex justify-between text-sm text-white/80 mb-2">
                                            <span><?php echo e($loan->period_count); ?> <?php echo e(Str::plural($loan->period, $loan->period_count)); ?></span>
                                            <span><?php echo e($loan->interest_rate); ?>% rente</span>
                                        </div>
                                        <?php if(isset($loan->borrower_name)): ?>
                                            <p class="text-sm text-white/80 mb-2">Aan: <?php echo e($loan->borrower_name); ?></p>
                                        <?php endif; ?>
                                        <div class="flex justify-between items-center mt-4">
                                            <?php if(!$loan->loaner_id): ?>
                                            <button class="text-white bg-[#3E92CC] hover:bg-[#0A2463] transition-colors duration-200 flex items-center px-3 py-1 rounded-full">
                                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                                </svg>
                                                Uitnodigen
                                            </button>
                                            <?php endif; ?>
                                            <div class="flex space-x-2 ml-auto ">
                                                <a  class="p-2 bg-[#3E92CC] text-white rounded-full hover:bg-[#0A2463] transition-colors duration-200">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </a>
                                                <?php if(!isset($loan->borrower_name)): ?>
                                                    <a class="p-2 bg-[#3E92CC] text-white rounded-full hover:bg-[#0A2463] transition-colors duration-200">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                        </svg>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="loan-details hidden mt-4 text-sm text-white/80">
                                            <p><strong>Startdatum:</strong> <?php echo e(\Carbon\Carbon::parse($loan->start_date)->format('d-m-Y')); ?></p>
                                            <p><strong>Einddatum:</strong> <?php echo e(\Carbon\Carbon::parse($loan->end_date)->format('d-m-Y')); ?></p>
                                            <p><strong>Beschrijving:</strong> <?php echo e($loan->description); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="text-center text-white">Je hebt nog geen leningen. Klik op 'Nieuwe Lening' om er een aan te maken.</p>
                            <?php endif; ?>
                        </div>
                        <div class="mt-4">
                            <?php echo e($myLoans->links()); ?>

                        </div>
                    </div>
                </section>

                <!-- Verstrekte Leningen Sectie -->
                <section class="bg-white/10 backdrop-blur-md rounded-lg shadow-xl overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-white mb-4">Verstrekte Leningen</h2>
                        <div class="mb-4">
                            <input type="text" id="search-given-loans" class="w-full pl-10 pr-4 py-2 bg-white/20 border border-white/30 rounded-full text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white focus:border-transparent transition-colors duration-200" placeholder="Zoek in verstrekte leningen...">
                        </div>
                        <div class="space-y-4 max-h-[calc(100vh-300px)] overflow-y-auto pr-2">
                            <?php $__empty_1 = true; $__currentLoopData = $givenLoans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <div class="loan-card bg-white/20 backdrop-blur-md rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:bg-white/30">
                                    <div class="p-4">
                                        <div class="flex justify-between items-start mb-2">
                                            <h3 class="text-lg font-semibold text-white"><?php echo e($loan->title); ?></h3>
                                            <span class="px-2 py-1 text-xs font-semibold rounded-full
                                                <?php if($loan->status == \App\Enums\LoanStatusses::ACCEPTED->value): ?> bg-green-400 text-[#0A2463]
                                                <?php elseif($loan->status == \App\Enums\LoanStatusses::PENDING->value): ?> bg-blue-400 text-[#0A2463]
                                                <?php elseif($loan->status == \App\Enums\LoanStatusses::OVERDUE->value): ?> bg-red-400 text-[#0A2463]
                                                <?php elseif($loan->status == \App\Enums\LoanStatusses::REPAID->value): ?> bg-green-400 text-[#0A2463]
                                                <?php else: ?> bg-yellow-400 text-[#0A2463]
                                                <?php endif; ?>">
                                                <?php echo e($loan->status); ?>

                                            </span>
                                        </div>
                                        <p class="text-2xl font-bold text-white mb-2">€<?php echo e(number_format($loan->amount, 2, ',', '.')); ?></p>
                                        <div class="flex justify-between text-sm text-white/80 mb-2">
                                            <span><?php echo e($loan->period_count); ?> <?php echo e(Str::plural($loan->period, $loan->period_count)); ?></span>
                                            <span><?php echo e($loan->interest_rate); ?>% rente</span>
                                        </div>
                                        <?php if(isset($loan->borrower_name)): ?>
                                            <p class="text-sm text-white/80 mb-2">Aan: <?php echo e($loan->borrower_name); ?></p>
                                        <?php endif; ?>
                                        <div class="flex justify-between items-center mt-4">
                                            <div class="flex space-x-2 ml-auto">
                                                <a  class="p-2 bg-[#3E92CC] text-white rounded-full hover:bg-[#0A2463] transition-colors duration-200">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </a>
                                                <?php if(!isset($loan->borrower_name)): ?>
                                                    <a class="p-2 bg-[#3E92CC] text-white rounded-full hover:bg-[#0A2463] transition-colors duration-200">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                        </svg>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="loan-details hidden mt-4 text-sm text-white/80">
                                            <p><strong>Startdatum:</strong> <?php echo e(\Carbon\Carbon::parse($loan->start_date)->format('d-m-Y')); ?></p>
                                            <p><strong>Einddatum:</strong> <?php echo e(\Carbon\Carbon::parse($loan->end_date)->format('d-m-Y')); ?></p>
                                            <p><strong>Beschrijving:</strong> <?php echo e($loan->description); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="text-center text-white">Je hebt nog geen leningen verstrekt.</p>
                            <?php endif; ?>
                        </div>
                        <div class="mt-4">
                            <?php echo e($givenLoans->links()); ?>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const searchMyLoans = document.getElementById('search-my-loans');
                const searchGivenLoans = document.getElementById('search-given-loans');
                const myLoanCards = document.querySelectorAll('section:first-of-type .loan-card');
                const givenLoanCards = document.querySelectorAll('section:last-of-type .loan-card');

                function filterLoans(searchInput, loanCards) {
                    const searchTerm = searchInput.value.toLowerCase();
                    loanCards.forEach(card => {
                        const text = card.textContent.toLowerCase();
                        card.style.display = text.includes(searchTerm) ? '' : 'none';
                    });
                }

                searchMyLoans.addEventListener('input', () => filterLoans(searchMyLoans, myLoanCards));
                searchGivenLoans.addEventListener('input', () => filterLoans(searchGivenLoans, givenLoanCards));
            });

            function toggleDetails(button) {
                const card = button.closest('.loan-card');
                const details = card.querySelector('.loan-details');
                const icon = button.querySelector('svg');

                if (details.classList.contains('hidden')) {
                    details.classList.remove('hidden');
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    details.classList.add('hidden');
                    icon.style.transform = 'rotate(0deg)';
                }
            }
        </script>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPayApplication/resources/views/loans/index.blade.php ENDPATH**/ ?>