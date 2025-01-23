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

        <div class="md:mt-12 mt-0 max-w-2xl mx-auto relative z-10">
            <div class="bg-white/10 backdrop-blur-md rounded-3xl shadow-xl overflow-hidden">
                <div class="p-6 sm:p-10">
                    <h2 class="text-3xl font-bold text-white mb-6">Uitnodiging voor lening</h2>
                    <div class="bg-white/20 backdrop-blur-sm rounded-xl p-6 mb-6">
                        <h3 class="text-xl font-semibold text-white mb-2"><?php echo e($loan->title); ?></h3>
                        <p class="text-white/80">Bedrag: €<?php echo e(number_format($loan->amount, 2, ',', '.')); ?></p>
                        <p class="text-white/80">Looptijd: <?php echo e($loan->period_count); ?> <?php echo e(Str::plural($loan->period, $loan->period_count)); ?></p>
                    </div>

                    <p class="text-lg text-white/90 mb-6">Vul het e-mailadres in van de persoon die u wilt uitnodigen voor deze lening.</p>

                    <?php if(session('user_status')): ?>
                        <div class="mb-6 p-4 text-sm rounded-lg <?php echo e(session('user_status')['exists'] ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800'); ?>" role="alert">
                            <?php echo e(session('user_status')['message']); ?>

                        </div>
                    <?php endif; ?>

                    <form action="<?php echo e(session('user_status') ? route('loans.send-invite', $loan) : route('loans.check-user', $loan)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-white/90 mb-2">E-mailadres</label>
                            <input type="email" name="email" id="email" value="<?php echo e(session('user_status')['email'] ?? old('email')); ?>" class="w-full px-4 py-2 rounded-lg border border-white/30 bg-white/20 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/50" placeholder="naam@voorbeeld.com" required <?php echo e(session('user_status') ? 'readonly' : ''); ?>>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="mt-2 text-sm text-red-400"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="flex items-center justify-between">
                            <a href="<?php echo e(route('loans.show', $loan)); ?>" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-white/20 hover:bg-white/30 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white/50 transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                                </svg>
                                Terug
                            </a>
                            <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-[#0A2463] bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-colors duration-200">
                                <?php if(session('user_status')): ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                    </svg>
                                    Uitnodigen
                                <?php else: ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                    Controleren
                                <?php endif; ?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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

<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPayApplication/resources/views/loans/invite.blade.php ENDPATH**/ ?>