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
    <div id="app" class="min-h-screen bg-gradient-to-br from-[#0A2463] to-[#3E92CC]">
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

        <!-- Page Content -->
        <main class="pt-16 pb-16 md:pb-0">
            <dashboard :user="<?php echo e(json_encode(auth()->user())); ?>" :stats="<?php echo e(json_encode($stats)); ?>"></dashboard>
        </main>
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
<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPay/resources/views/dashboard.blade.php ENDPATH**/ ?>