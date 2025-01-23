<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['status']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['status']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $statusConfig = [
        \App\Enums\LoanStatusses::ACCEPTED->value => [
            'bg' => 'bg-green-100',
            'text' => 'text-green-800',
            'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
            'description' => 'Deze lening is geaccepteerd en actief.'
        ],
        \App\Enums\LoanStatusses::PENDING->value => [
            'bg' => 'bg-blue-100',
            'text' => 'text-blue-800',
            'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
            'description' => 'Deze lening wacht op goedkeuring.'
        ],
        \App\Enums\LoanStatusses::OVERDUE->value => [
            'bg' => 'bg-red-100',
            'text' => 'text-red-800',
            'icon' => 'M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
            'description' => 'Deze lening is achterstallig.'
        ],
        \App\Enums\LoanStatusses::REPAID->value => [
            'bg' => 'bg-green-100',
            'text' => 'text-green-800',
            'icon' => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
            'description' => 'Deze lening is volledig afbetaald.'
        ],
        'default' => [
            'bg' => 'bg-yellow-100',
            'text' => 'text-yellow-800',
            'icon' => 'M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z',
            'description' => 'De status van deze lening is onbekend.'
        ]
    ];

    $config = $statusConfig[$status] ?? $statusConfig['default'];
    $uniqueId = 'loan-status-' . uniqid();
?>

<div id="<?php echo e($uniqueId); ?>" class="relative inline-block">
    <div class="flex items-center space-x-2 cursor-pointer <?php echo e($config['bg']); ?> <?php echo e($config['text']); ?> px-3 py-2 rounded-full transition-all duration-300 hover:shadow-md">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo e($config['icon']); ?>"></path>
        </svg>
        <span class="font-semibold"><?php echo e($status->label()); ?></span>
        <svg class="w-4 h-4 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </div>
    <div class="hidden absolute z-50 mt-2 w-64 rounded-md shadow-lg <?php echo e($config['bg']); ?> ring-1 ring-black ring-opacity-5">
        <div class="p-4">
            <p class="<?php echo e($config['text']); ?>"><?php echo e($config['description']); ?></p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('<?php echo e($uniqueId); ?>');
        const badge = container.querySelector('div');
        const dropdown = container.querySelector('div + div');
        const arrow = badge.querySelector('svg:last-child');

        let isOpen = false;

        badge.addEventListener('click', function(event) {
            event.stopPropagation();
            isOpen = !isOpen;
            toggleDropdown();
        });

        document.addEventListener('click', function(event) {
            if (isOpen && !container.contains(event.target)) {
                isOpen = false;
                toggleDropdown();
            }
        });

        function toggleDropdown() {
            if (isOpen) {
                dropdown.classList.remove('hidden');
                dropdown.classList.add('block');
                arrow.style.transform = 'rotate(180deg)';
            } else {
                dropdown.classList.add('hidden');
                dropdown.classList.remove('block');
                arrow.style.transform = 'rotate(0deg)';
            }
        }

        // Animations
        dropdown.addEventListener('transitionend', function() {
            if (!isOpen) {
                dropdown.classList.add('hidden');
            }
        });

        function animateDropdown(show) {
            dropdown.style.transition = 'opacity 200ms, transform 200ms';
            if (show) {
                dropdown.classList.remove('hidden');
                dropdown.style.opacity = '0';
                dropdown.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    dropdown.style.opacity = '1';
                    dropdown.style.transform = 'scale(1)';
                }, 10);
            } else {
                dropdown.style.opacity = '0';
                dropdown.style.transform = 'scale(0.95)';
            }
        }

        badge.addEventListener('click', function() {
            animateDropdown(isOpen);
        });
    });
</script>

<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPayApplication/resources/views/components/loan-status-bade.blade.php ENDPATH**/ ?>