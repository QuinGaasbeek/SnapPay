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
    <div id="app" class="min-h-screen bg-gradient-to-br from-[#0A2463] to-[#3E92CC] py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Isometric 3D elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-16 -left-16 w-64 h-64 bg-white opacity-10 transform rotate-45 skew-x-12 skew-y-12"></div>
            <div class="absolute top-1/3 -right-32 w-96 h-96 bg-white opacity-5 transform -rotate-12 skew-x-12 skew-y-12"></div>
            <div class="absolute -bottom-24 left-1/4 w-72 h-72 bg-white opacity-10 transform rotate-30 skew-x-12 skew-y-12"></div>
        </div>

        <div class="md:mt-12 mt-0 max-w-7xl mx-auto relative z-10">
            <div class="bg-white/10 backdrop-blur-md rounded-3xl shadow-xl overflow-hidden">
                <div class="p-6 sm:p-10">
                    <div class="mb-8 flex flex-col md:flex-row justify-between items-center">
                        <div class="text-center md:text-left mb-4 md:mb-0">
                            <h1 class="text-3xl font-bold text-white">
                                <?php echo e($loan->title); ?>

                            </h1>
                            <p class="md:block hidden mt-2 text-lg text-white/80"><?php echo e($loan->description); ?></p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <?php if (isset($component)) { $__componentOriginal103d910317eb47c35abee0f3e8856743 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal103d910317eb47c35abee0f3e8856743 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.loan-status-badge','data' => ['status' => $loan->status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('loan-status-badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($loan->status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal103d910317eb47c35abee0f3e8856743)): ?>
<?php $attributes = $__attributesOriginal103d910317eb47c35abee0f3e8856743; ?>
<?php unset($__attributesOriginal103d910317eb47c35abee0f3e8856743); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal103d910317eb47c35abee0f3e8856743)): ?>
<?php $component = $__componentOriginal103d910317eb47c35abee0f3e8856743; ?>
<?php unset($__componentOriginal103d910317eb47c35abee0f3e8856743); ?>
<?php endif; ?>
                            <?php if(!$loan->loaner): ?>
                                <a
                                        href="<?php echo e(route('loans.invite', $loan)); ?>"
                                        class="bg-[#3E92CC] hover:bg-[#0A2463] text-white px-4 py-2 rounded-full transition-all duration-300 flex items-center space-x-2"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                    <span>Uitnodigen</span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <loan-details :loan='<?php echo json_encode($loan, 15, 512) ?>' :borrower='<?php echo json_encode($loan->loaner, 15, 512) ?>'></loan-details>


                        <payment-schedule-widget :payment-schedule='<?php echo json_encode($paymentSchedule, 15, 512) ?>'></payment-schedule-widget>
                    </div>

                    <div class="mt-8">
                        <?php if($loan->$installments): ?>
                        <payment-history-widget :payment-history='<?php echo json_encode($installments, 15, 512) ?>'></payment-history-widget>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
        <script>
            // Hier kunnen we JavaScript toevoegen voor eventuele interactiviteit
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

<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPayApplication/resources/views/loans/show.blade.php ENDPATH**/ ?>