<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['loan']));

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

foreach (array_filter((['loan']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<dialog id="invite-modal" class="rounded-lg shadow-xl p-0 w-full max-w-md mx-auto">
    <div class="bg-white rounded-lg overflow-hidden">
        <div class="p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Uitnodigen voor lening: <?php echo e($loan->title); ?></h3>
            <form id="invite-form" method="dialog">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div id="message" class="mt-4 p-4 rounded hidden"></div>
                <div class="flex justify-end space-x-2 mt-4">
                    <button type="button" id="cancel-invite" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Annuleren
                    </button>
                    <button type="submit" id="check-user" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Controleer
                    </button>
                </div>
            </form>
        </div>
    </div>
</dialog>

<?php /**PATH /Users/quingaasbeek/PhpstormProjects/SnapPayApplication/resources/views/components/invite-modal.blade.php ENDPATH**/ ?>