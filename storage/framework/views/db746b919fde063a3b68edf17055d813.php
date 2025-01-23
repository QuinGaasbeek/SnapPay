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
    <div class="min-h-screen bg-gradient-to-br from-[#0A2463] to-[#3E92CC] py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Isometric 3D elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-16 -left-16 w-64 h-64 bg-white opacity-10 transform rotate-45 skew-x-12 skew-y-12"></div>
            <div class="absolute top-1/3 -right-32 w-96 h-96 bg-white opacity-5 transform -rotate-12 skew-x-12 skew-y-12"></div>
            <div class="absolute -bottom-24 left-1/4 w-72 h-72 bg-white opacity-10 transform rotate-30 skew-x-12 skew-y-12"></div>
        </div>
        <div class="md:mt-16 mt-0 max-w-6xl mx-auto relative z-10">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden transition-all duration-300 hover:shadow-3xl">
                <div class="flex flex-col lg:flex-row">
                    <!-- Left side: Form -->
                    <div class="w-full lg:w-2/3 p-8 lg:p-12">
                        <h2 class="text-4xl font-bold text-gray-900 mb-8">Nieuwe Lening</h2>

                        <form action="<?php echo e(route('loans.store')); ?>" method="POST" id="loanForm" class="space-y-8">
                            <?php echo csrf_field(); ?>
                            <div class="space-y-8">
                                <div class="relative">
                                    <input type="text" id="title" name="title" required class="peer w-full border-2 border-gray-300 text-gray-900 focus:outline-none focus:border-[#3E92CC] placeholder-transparent px-4 py-3 rounded-lg transition-all duration-300">
                                    <label for="title" class="absolute left-3 -top-2.5 bg-white px-1 text-gray-600 text-sm transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3.5 peer-focus:-top-2.5 peer-focus:text-gray-600 peer-focus:text-sm">Titel</label>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="relative">
                                        <input type="number" id="amount" name="amount" required step="0.01" class="peer w-full border-2 border-gray-300 text-gray-900 focus:outline-none focus:border-[#3E92CC] placeholder-transparent px-4 py-3 rounded-lg transition-all duration-300">
                                        <label for="amount" class="absolute left-3 -top-2.5 bg-white px-1 text-gray-600 text-sm transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3.5 peer-focus:-top-2.5 peer-focus:text-gray-600 peer-focus:text-sm">Bedrag (€)</label>
                                    </div>

                                    <div class="relative">
                                        <input type="number" id="interest_rate" name="interest_rate" step="0.01" class="peer w-full border-2 border-gray-300 text-gray-900 focus:outline-none focus:border-[#3E92CC] placeholder-transparent px-4 py-3 rounded-lg transition-all duration-300">
                                        <label for="interest_rate" class="absolute left-3 -top-2.5 bg-white px-1 text-gray-600 text-sm transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3.5 peer-focus:-top-2.5 peer-focus:text-gray-600 peer-focus:text-sm">Rente (%)</label>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="relative">
                                        <select id="period" name="period" required class="peer w-full border-2 border-gray-300 text-gray-900 focus:outline-none focus:border-[#3E92CC] bg-white px-4 py-3 rounded-lg transition-all duration-300">
                                            <option value="weeks">Weken</option>
                                            <option value="months">Maanden</option>
                                        </select>
                                        <label for="period" class="absolute left-3 -top-2.5 bg-white px-1 text-gray-600 text-sm transition-all duration-300">Periode</label>
                                    </div>

                                    <div class="relative">
                                        <input type="number" id="period_count" name="period_count" required class="peer w-full border-2 border-gray-300 text-gray-900 focus:outline-none focus:border-[#3E92CC] placeholder-transparent px-4 py-3 rounded-lg transition-all duration-300">
                                        <label for="period_count" class="absolute left-3 -top-2.5 bg-white px-1 text-gray-600 text-sm transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3.5 peer-focus:-top-2.5 peer-focus:text-gray-600 peer-focus:text-sm">Aantal periodes</label>
                                        <span id="period_label" class="absolute right-0 top-4 text-gray-500"></span>
                                    </div>
                                </div>

                                <div class="relative">
                                    <input type="email" id="loaner_email" name="loaner_email" required class="peer w-full border-2 border-gray-300 text-gray-900 focus:outline-none focus:border-[#3E92CC] placeholder-transparent px-4 py-3 rounded-lg transition-all duration-300">
                                    <label for="loaner_email" class="absolute left-3 -top-2.5 bg-white px-1 text-gray-600 text-sm transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3.5 peer-focus:-top-2.5 peer-focus:text-gray-600 peer-focus:text-sm">E-mail van de lener</label>
                                </div>

                                <div class="relative">
                                    <textarea id="description" name="description" rows="4" required class="peer w-full border-2 border-gray-300 text-gray-900 focus:outline-none focus:border-[#3E92CC] placeholder-transparent px-4 py-3 rounded-lg transition-all duration-300 resize-none"></textarea>
                                    <label for="description" class="absolute left-3 -top-2.5 bg-white px-1 text-gray-600 text-sm transition-all duration-300 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3.5 peer-focus:-top-2.5 peer-focus:text-gray-600 peer-focus:text-sm">Beschrijving</label>
                                </div>

                                <div class="flex flex-col sm:flex-row justify-end space-y-4 sm:space-y-0 sm:space-x-4 pt-6">
                                    <a href="<?php echo e(route('loans')); ?>" class="w-full text-center md:flex md:items-center sm:w-auto px-6 py-3 bg-gray-100 rounded-xl text-sm font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#3E92CC] transition-all duration-300 text-center">
                                        Annuleren
                                    </a>
                                    <button type="submit" class="w-full sm:w-auto px-8 py-4 bg-[#3E92CC] rounded-xl text-base font-semibold text-white hover:bg-[#0A2463] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#3E92CC] transition-all duration-300 transform hover:scale-105">
                                        Lening Aanmaken
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Right side: Image and Info -->
                    <div class="md:block hidden w-full lg:w-1/3 bg-gradient-to-br from-[#3E92CC] to-[#0A2463] p-8 lg:p-12 flex flex-col justify-between">
                        <div class="space-y-8 text-white">
                            <div class="flex items-center space-x-4 bg-white/10 p-4 rounded-xl backdrop-blur-md transition-all duration-300 hover:bg-white/20">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="font-semibold text-lg">Bedrag</h3>
                                    <p class="text-sm text-white/80">Voer het gewenste leningbedrag in</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4 bg-white/10 p-4 rounded-xl backdrop-blur-md transition-all duration-300 hover:bg-white/20">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h3 class="font-semibold text-lg">Looptijd</h3>
                                    <p class="text-sm text-white/80">Kies de gewenste periode</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4 bg-white/10 p-4 rounded-xl backdrop-blur-md transition-all duration-300 hover:bg-white/20">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <div>
                                    <h3 class="font-semibold text-lg">Lener</h3>
                                    <p class="text-sm text-white/80">Voer het e-mailadres van de lener in</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 overflow-hidden rounded-xl">
                            <img src="https://cdn.discordapp.com/attachments/1331273355118247936/1331638588059680788/Untitled_design_2.png?ex=67925894&is=67910714&hm=b9877da8f2062d97a3505a516a1cacc2158e8aa8d5774ba3aa60789fa4064de1&" alt="Loan illustration" class="w-full h-auto transform hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('loanForm');
                const periodSelect = document.getElementById('period');
                const periodLabel = document.getElementById('period_label');

                function updatePeriodLabel() {
                    periodLabel.textContent = periodSelect.value === 'weeks' ? 'weken' : 'maanden';
                }

                periodSelect.addEventListener('change', updatePeriodLabel);
                updatePeriodLabel();

                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
                    let isValid = true;

                    inputs.forEach(input => {
                        if (!input.value.trim()) {
                            isValid = false;
                            input.classList.add('border-red-500');

                            const existingError = input.parentElement.querySelector('.error-message');
                            if (existingError) existingError.remove();

                            const errorMessage = document.createElement('p');
                            errorMessage.className = 'error-message text-red-500 text-xs mt-1';
                            errorMessage.textContent = 'Dit veld is verplicht';
                            input.parentElement.appendChild(errorMessage);
                        }
                    });

                    if (isValid) {
                        form.submit();
                    }
                });

                form.addEventListener('input', function(event) {
                    const input = event.target;
                    if (input.classList.contains('border-red-500')) {
                        input.classList.remove('border-red-500');
                        const errorMessage = input.parentElement.querySelector('.error-message');
                        if (errorMessage) errorMessage.remove();
                    }
                });
            });
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

<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPay/resources/views/loans/create.blade.php ENDPATH**/ ?>