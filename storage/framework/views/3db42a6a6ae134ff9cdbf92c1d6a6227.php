<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

<div class="min-h-screen flex items-center justify-center relative overflow-hidden bg-gradient-to-br from-[#1a237e] via-[#1e3fb5] to-[#2962ff] px-4 sm:px-6">
    <!-- Enhanced Decorative Background Elements -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute inset-0 opacity-50 bg-[radial-gradient(circle_at_30%_20%,rgba(41,98,255,0.2),transparent_50%)]"></div>
        <div class="absolute top-1/4 -left-48 w-96 h-96 bg-[#4caf50]/30 rounded-full mix-blend-multiply filter blur-xl animate-blob"></div>
        <div class="absolute top-3/4 -right-48 w-96 h-96 bg-[#ff4081]/30 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 w-96 h-96 bg-[#2962ff]/30 rounded-full mix-blend-multiply filter blur-xl animate-blob animation-delay-4000"></div>

        <!-- Floating Elements -->
        <?php for($i = 0; $i < 5; $i++): ?>
            <div class="absolute bg-white/10 rounded-lg blur-sm animate-float"
                 style="top: <?php echo e(rand(0, 100)); ?>%; left: <?php echo e(rand(0, 100)); ?>%; width: <?php echo e(rand(20, 60)); ?>px; height: <?php echo e(rand(20, 60)); ?>px; animation-delay: <?php echo e(rand(0, 5)); ?>s;">
            </div>
        <?php endfor; ?>
    </div>

    <div class="w-full max-w-[480px] relative z-10">
        <div class="bg-white/95 backdrop-blur-xl rounded-3xl shadow-[0_20px_50px_rgba(8,_112,_184,_0.7)] overflow-hidden p-8">
            <div class="text-center mb-8 relative">
                <img src="https://cdn.discordapp.com/attachments/1331273355118247936/1331277862338166794/Untitled_design_1.png?ex=6791b160&is=67905fe0&hm=99896016ada111a54a1bc8142356eebe7dab960f4221c63b83113ecf17f1ef57&" alt="SnapPay Logo" class="h-32 mx-auto mb-6">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-[#1a237e] to-[#2962ff] bg-clip-text text-transparent">Word lid van SnapPay</h2>
                <p class="text-gray-600 mt-2">Vul je gegevens in om te beginnen</p>
            </div>

            <form method="POST" action="<?php echo e(route('register')); ?>" class="space-y-6">
                <?php echo csrf_field(); ?>

                <!-- First Name -->
                <div class="space-y-2">
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Voornaam</label>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1a237e] to-[#2962ff] rounded-xl blur transition duration-300 group-hover:blur-md opacity-10"></div>
                        <input
                            id="first_name"
                            name="first_name"
                            type="text"
                            required
                            class="relative block w-full px-4 py-3 bg-white border-0 rounded-xl text-gray-700 text-sm shadow-sm ring-1 ring-gray-200 transition-all duration-300 placeholder-gray-400 focus:ring-2 focus:ring-[#2962ff] group-hover:ring-[#1a237e]/50"
                            placeholder="John"
                            value="<?php echo e(old('first_name')); ?>"
                        />
                    </div>
                    <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Last Name -->
                <div class="space-y-2">
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Achternaam</label>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1a237e] to-[#2962ff] rounded-xl blur transition duration-300 group-hover:blur-md opacity-10"></div>
                        <input
                            id="last_name"
                            name="last_name"
                            type="text"
                            required
                            class="relative block w-full px-4 py-3 bg-white border-0 rounded-xl text-gray-700 text-sm shadow-sm ring-1 ring-gray-200 transition-all duration-300 placeholder-gray-400 focus:ring-2 focus:ring-[#2962ff] group-hover:ring-[#1a237e]/50"
                            placeholder="Doe"
                            value="<?php echo e(old('last_name')); ?>"
                        />
                    </div>
                    <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Email Address -->
                <div class="space-y-2">
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres</label>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1a237e] to-[#2962ff] rounded-xl blur transition duration-300 group-hover:blur-md opacity-10"></div>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            required
                            class="relative block w-full px-4 py-3 bg-white border-0 rounded-xl text-gray-700 text-sm shadow-sm ring-1 ring-gray-200 transition-all duration-300 placeholder-gray-400 focus:ring-2 focus:ring-[#2962ff] group-hover:ring-[#1a237e]/50"
                            placeholder="john@example.com"
                            value="<?php echo e(old('email')); ?>"
                        />
                    </div>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- IBAN -->
                <div class="space-y-2">
                    <label for="iban" class="block text-sm font-medium text-gray-700">IBAN</label>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1a237e] to-[#2962ff] rounded-xl blur transition duration-300 group-hover:blur-md opacity-10"></div>
                        <input
                            id="iban"
                            name="iban"
                            type="text"
                            required
                            class="relative block w-full px-4 py-3 bg-white border-0 rounded-xl text-gray-700 text-sm shadow-sm ring-1 ring-gray-200 transition-all duration-300 placeholder-gray-400 focus:ring-2 focus:ring-[#2962ff] group-hover:ring-[#1a237e]/50"
                            placeholder="NL91ABNA0417164300"
                            value="<?php echo e(old('iban')); ?>"
                        />
                    </div>
                    <?php $__errorArgs = ['iban'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Password -->
                <div class="space-y-2">
                    <label for="password" class="block text-sm font-medium text-gray-700">Wachtwoord</label>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1a237e] to-[#2962ff] rounded-xl blur transition duration-300 group-hover:blur-md opacity-10"></div>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            class="relative block w-full px-4 py-3 bg-white border-0 rounded-xl text-gray-700 text-sm shadow-sm ring-1 ring-gray-200 transition-all duration-300 placeholder-gray-400 focus:ring-2 focus:ring-[#2962ff] group-hover:ring-[#1a237e]/50"
                            placeholder="••••••••"
                        />
                    </div>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-2 text-sm text-red-600"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Confirm Password -->
                <div class="space-y-2">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Bevestig wachtwoord</label>
                    <div class="relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1a237e] to-[#2962ff] rounded-xl blur transition duration-300 group-hover:blur-md opacity-10"></div>
                        <input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            required
                            class="relative block w-full px-4 py-3 bg-white border-0 rounded-xl text-gray-700 text-sm shadow-sm ring-1 ring-gray-200 transition-all duration-300 placeholder-gray-400 focus:ring-2 focus:ring-[#2962ff] group-hover:ring-[#1a237e]/50"
                            placeholder="••••••••"
                        />
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" name="terms" class="form-checkbox h-5 w-5 text-[#2962ff]" required>
                        <span class="ml-2 text-sm text-gray-600">Ik ga akkoord met de <a href="#" class="text-[#2962ff] hover:underline">voorwaarden</a></span>
                    </label>
                </div>

                <div>
                    <button
                        type="submit"
                        class="relative w-full group"
                    >
                        <div class="absolute inset-0 bg-gradient-to-r from-[#1a237e] to-[#2962ff] rounded-xl blur transition duration-300 group-hover:blur-md"></div>
                        <div class="relative w-full px-4 py-3 bg-gradient-to-r from-[#1a237e] to-[#2962ff] text-white text-sm font-semibold rounded-xl shadow-lg shadow-blue-500/25 transition-all duration-300 group-hover:shadow-blue-500/40 group-hover:translate-y-[-1px]">
                            Registreren
                        </div>
                    </button>
                </div>
            </form>

            <div class="mt-8 text-center">
                <p class="text-sm text-gray-600">
                    Heb je al een account?
                    <a href="<?php echo e(route('login')); ?>" class="font-medium text-[#2962ff] hover:text-[#1a237e] transition-colors duration-300 ml-1">
                        Log hier in
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('styles'); ?>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        .animate-float {
            animation: float 15s ease-in-out infinite;
        }
        @keyframes blob {
            0%, 100% { transform: translate(0, 0) scale(1); }
            25% { transform: translate(20px, -50px) scale(1.1); }
            50% { transform: translate(-20px, 20px) scale(0.9); }
            75% { transform: translate(50px, 50px) scale(1.05); }
        }
        .animate-blob {
            animation: blob 20s ease-in-out infinite;
        }
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPay/resources/views/auth/register.blade.php ENDPATH**/ ?>