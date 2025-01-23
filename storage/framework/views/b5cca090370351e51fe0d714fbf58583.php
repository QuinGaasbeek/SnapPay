<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

<?php $__env->startPush('styles'); ?>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(3deg); }
        }
        @keyframes float-reverse {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(-3deg); }
        }
        .animate-float {
            animation: float 8s ease-in-out infinite;
        }
        .animate-float-reverse {
            animation: float-reverse 9s ease-in-out infinite;
        }
        @media (max-width: 640px) {
            .animate-float, .animate-float-reverse {
                animation-duration: 6s;
            }
        }
    </style>
<?php $__env->stopPush(); ?>

<div class="min-h-screen flex items-center justify-center relative overflow-hidden bg-gradient-to-br from-[#1a237e] via-[#1e3fb5] to-[#2962ff] px-4 sm:px-6">
    <!-- Enhanced Decorative Background Elements -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 opacity-50 bg-[radial-gradient(circle_at_30%_20%,rgba(41,98,255,0.1),transparent_50%)]"></div>

        <!-- Floating Elements - Adjusted for mobile -->
        <div class="absolute top-[10%] left-[10%] w-12 h-12 sm:w-16 sm:h-16 bg-white/10 rounded-lg rotate-45 blur-sm animate-float" style="animation-delay: 0s;"></div>
        <div class="absolute top-[30%] right-[20%] w-16 h-16 sm:w-20 sm:h-20 bg-white/5 rounded-full blur-sm animate-float" style="animation-delay: 1.5s;"></div>
        <div class="absolute bottom-[20%] left-[15%] w-20 h-20 sm:w-24 sm:h-24 bg-white/10 rounded-lg rotate-12 blur-sm animate-float" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/4 right-[10%] w-24 h-24 sm:w-32 sm:h-32 bg-white/5 rounded-full blur-sm animate-float-reverse" style="animation-delay: 0.5s;"></div>
        <div class="absolute bottom-1/3 left-[5%] w-20 h-20 sm:w-28 sm:h-28 bg-white/10 rounded-lg -rotate-12 blur-sm animate-float" style="animation-delay: 1s;"></div>

        <!-- Small Decorative Dots - Hidden on smallest screens -->
        <div class="hidden sm:block absolute top-[15%] left-[40%] w-2 h-2 bg-white/20 rounded-full animate-pulse" style="animation-delay: 0s;"></div>
        <div class="hidden sm:block absolute top-[45%] right-[35%] w-2 h-2 bg-white/20 rounded-full animate-pulse" style="animation-delay: 0.5s;"></div>
        <div class="hidden sm:block absolute bottom-[25%] left-[30%] w-2 h-2 bg-white/20 rounded-full animate-pulse" style="animation-delay: 1s;"></div>

        <!-- Larger Gradient Blobs -->
        <div class="absolute -top-20 -left-20 w-64 h-64 sm:w-72 sm:h-72 bg-[#2962ff]/10 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -right-20 w-64 h-64 sm:w-72 sm:h-72 bg-[#1a237e]/10 rounded-full blur-3xl"></div>
    </div>

    <div class="w-full max-w-[420px] relative z-10">
        <div class="bg-white/95 backdrop-blur-xl rounded-2xl shadow-[0_20px_50px_rgba(8,_112,_184,_0.5)] overflow-hidden p-6 sm:p-8">
            <div class="text-center mb-6 sm:mb-8 relative">

                <img src="https://cdn.discordapp.com/attachments/1331273355118247936/1331277862338166794/Untitled_design_1.png?ex=679302e0&is=6791b160&hm=56d8433868cffa9c4c014d603ddee6048245ecbd4e65c469905c1f5b5f21224d&" alt="SnapPay Logo" class="h-12 sm:h-14 mx-auto mb-4 sm:mb-6">
                <h2 class="text-2xl sm:text-[1.75rem] font-bold bg-gradient-to-r from-[#1a237e] to-[#2962ff] bg-clip-text text-transparent">Welkom terug bij SnapPay</h2>
                <p class="text-gray-600 mt-2 text-sm sm:text-base">Log in om je leningen te beheren</p>
            </div>

            <?php if (isset($component)) { $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-session-status','data' => ['class' => 'mb-4','status' => session('status')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $attributes = $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $component = $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>

            <form method="POST" action="<?php echo e(route('login')); ?>" class="space-y-4 sm:space-y-6">
                <?php echo csrf_field(); ?>

                <!-- Email Address -->
                <div class="space-y-2">
                    <?php if (isset($component)) { $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'email','value' => __('Email'),'class' => 'text-sm font-medium text-gray-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Email')),'class' => 'text-sm font-medium text-gray-700']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $attributes = $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $component = $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1a237e] to-[#2962ff] rounded-xl blur transition duration-300 group-hover:blur-md opacity-10"></div>
                        <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'email','class' => 'relative block w-full px-3 sm:px-4 py-2 sm:py-3 bg-white border-0 rounded-xl text-gray-700 text-sm shadow-sm ring-1 ring-gray-200 transition-all duration-300 placeholder-gray-400 focus:ring-2 focus:ring-[#2962ff] group-hover:ring-[#1a237e]/50','type' => 'email','name' => 'email','value' => old('email'),'placeholder' => 'jouw@email.com','required' => true,'autofocus' => true,'autocomplete' => 'username']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'email','class' => 'relative block w-full px-3 sm:px-4 py-2 sm:py-3 bg-white border-0 rounded-xl text-gray-700 text-sm shadow-sm ring-1 ring-gray-200 transition-all duration-300 placeholder-gray-400 focus:ring-2 focus:ring-[#2962ff] group-hover:ring-[#1a237e]/50','type' => 'email','name' => 'email','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(old('email')),'placeholder' => 'jouw@email.com','required' => true,'autofocus' => true,'autocomplete' => 'username']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $attributes = $__attributesOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__attributesOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $component = $__componentOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__componentOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
                    </div>
                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('email'),'class' => 'mt-1 text-xs sm:text-sm text-red-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('email')),'class' => 'mt-1 text-xs sm:text-sm text-red-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <?php if (isset($component)) { $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-label','data' => ['for' => 'password','value' => __('Wachtwoord'),'class' => 'text-sm font-medium text-gray-700']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => 'password','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Wachtwoord')),'class' => 'text-sm font-medium text-gray-700']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $attributes = $__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__attributesOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581)): ?>
<?php $component = $__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581; ?>
<?php unset($__componentOriginale3da9d84bb64e4bc2eeebaafabfb2581); ?>
<?php endif; ?>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1a237e] to-[#2962ff] rounded-xl blur transition duration-300 group-hover:blur-md opacity-10"></div>
                        <?php if (isset($component)) { $__componentOriginal18c21970322f9e5c938bc954620c12bb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal18c21970322f9e5c938bc954620c12bb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.text-input','data' => ['id' => 'password','class' => 'relative block w-full px-3 sm:px-4 py-2 sm:py-3 bg-white border-0 rounded-xl text-gray-700 text-sm shadow-sm ring-1 ring-gray-200 transition-all duration-300 placeholder-gray-400 focus:ring-2 focus:ring-[#2962ff] group-hover:ring-[#1a237e]/50','type' => 'password','name' => 'password','placeholder' => '••••••••','required' => true,'autocomplete' => 'current-password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'password','class' => 'relative block w-full px-3 sm:px-4 py-2 sm:py-3 bg-white border-0 rounded-xl text-gray-700 text-sm shadow-sm ring-1 ring-gray-200 transition-all duration-300 placeholder-gray-400 focus:ring-2 focus:ring-[#2962ff] group-hover:ring-[#1a237e]/50','type' => 'password','name' => 'password','placeholder' => '••••••••','required' => true,'autocomplete' => 'current-password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $attributes = $__attributesOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__attributesOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal18c21970322f9e5c938bc954620c12bb)): ?>
<?php $component = $__componentOriginal18c21970322f9e5c938bc954620c12bb; ?>
<?php unset($__componentOriginal18c21970322f9e5c938bc954620c12bb); ?>
<?php endif; ?>
                    </div>
                    <?php if (isset($component)) { $__componentOriginalf94ed9c5393ef72725d159fe01139746 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf94ed9c5393ef72725d159fe01139746 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.input-error','data' => ['messages' => $errors->get('password'),'class' => 'mt-1 text-xs sm:text-sm text-red-500']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('input-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['messages' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($errors->get('password')),'class' => 'mt-1 text-xs sm:text-sm text-red-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $attributes = $__attributesOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__attributesOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf94ed9c5393ef72725d159fe01139746)): ?>
<?php $component = $__componentOriginalf94ed9c5393ef72725d159fe01139746; ?>
<?php unset($__componentOriginalf94ed9c5393ef72725d159fe01139746); ?>
<?php endif; ?>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between space-y-2 sm:space-y-0">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me"
                               type="checkbox"
                               class="rounded-md border-gray-300 text-[#2962ff] shadow-sm transition-colors duration-300 focus:border-[#2962ff] focus:ring focus:ring-[#2962ff]/20"
                               name="remember">
                        <span class="ml-2 text-xs sm:text-sm text-gray-600"><?php echo e(__('Onthoud mij')); ?></span>
                    </label>

                    <?php if(Route::has('password.request')): ?>
                        <a class="text-xs sm:text-sm text-[#2962ff] hover:text-[#1a237e] transition-colors duration-300"
                           href="<?php echo e(route('password.request')); ?>">
                            <?php echo e(__('Wachtwoord vergeten?')); ?>

                        </a>
                    <?php endif; ?>
                </div>

                <div>
                    <button type="submit"
                            class="relative w-full group">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1a237e] to-[#2962ff] rounded-xl blur transition duration-300 group-hover:blur-md"></div>
                        <div class="relative w-full px-4 py-2 sm:py-3 bg-gradient-to-r from-[#1a237e] to-[#2962ff] text-white text-sm font-semibold rounded-xl shadow-lg shadow-blue-500/25 transition-all duration-300 group-hover:shadow-blue-500/40 group-hover:translate-y-[-1px]">
                            <?php echo e(__('Inloggen')); ?>

                        </div>
                    </button>
                </div>
            </form>

            <div class="mt-6 sm:mt-8 text-center">
                <p class="text-xs sm:text-sm text-gray-600">
                    Nog geen account?
                    <a href="<?php echo e(route('register')); ?>"
                       class="font-medium text-[#2962ff] hover:text-[#1a237e] transition-colors duration-300 ml-1">
                        Registreer nu
                    </a>
                </p>
            </div>

        </div>
    </div>
</div>
<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPayApplication/resources/views/auth/login.blade.php ENDPATH**/ ?>