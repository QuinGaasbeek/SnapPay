<x-app-layout>
    <x-dashboard-navigation/>
    <x-mobile-dashboard-navigation/>
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
                                {{ $loan->title }}
                            </h1>
                            <p class="md:block hidden mt-2 text-lg text-white/80">{{ $loan->description }}</p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <x-loan-status-badge :status="$loan->status" />
                            @if(!$loan->loaner)
                                <a
                                        href="{{ route('loans.invite', $loan) }}"
                                        class="bg-[#3E92CC] hover:bg-[#0A2463] text-white px-4 py-2 rounded-full transition-all duration-300 flex items-center space-x-2"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                    <span>Uitnodigen</span>
                                </a>
                            @endif
                        </div>
                    </div>


                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <loan-details :loan='@json($loan)' :borrower='@json($loan->loaner)'></loan-details>


                        <payment-schedule-widget :payment-schedule='@json($paymentSchedule)'></payment-schedule-widget>
                    </div>

                    <div class="mt-8">
                        @if($loan->$installments)
                        <payment-history-widget :payment-history='@json($installments)'></payment-history-widget>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Hier kunnen we JavaScript toevoegen voor eventuele interactiviteit
        </script>
    @endpush
</x-app-layout>

