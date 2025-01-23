<x-app-layout>
    <x-dashboard-navigation/>
    <x-mobile-dashboard-navigation/>
    <div class="min-h-screen bg-gradient-to-br from-[#0A2463] to-[#3E92CC] py-6 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Isometric 3D elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-white/10 rounded-3xl transform rotate-45 animate-float-slow"></div>
            <div class="absolute top-1/4 -right-20 w-60 h-60 bg-white/5 rounded-3xl transform -rotate-12 animate-float-slow" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/3 left-1/4 w-40 h-40 bg-white/5 rounded-3xl transform rotate-12 animate-float-slow" style="animation-delay: 1s;"></div>
        </div>

        <div class="md:mt-16 md:mb-0 mb-32 mt-0 max-w-7xl mx-auto relative z-10">
            <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center">
                <h1 class="text-3xl font-extrabold text-white mb-4 sm:mb-0">
                    Leningen Overzicht
                </h1>
                <a  href="{{ route('loans.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-[#3E92CC] hover:bg-[#0A2463] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#3E92CC] transition-colors duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
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
                            @forelse($myLoans as $loan)
                                <div class="loan-card bg-white/20 backdrop-blur-md rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:bg-white/30">
                                    <div class="p-4">
                                        <div class="flex flex-col md:flex-row justify-between items-start mb-2">
                                            <h3 class="text-lg font-semibold text-white">{{ $loan->title }}</h3>
                                            <div class="md:mt-0 mt-2">
                                                <x-loan-status-badge :status="$loan->status" />
                                            </div>
                                        </div>
                                        <p class="text-2xl font-bold text-white mb-2">€{{ number_format($loan->amount, 2, ',', '.') }}</p>
                                        <div class="flex justify-between text-sm text-white/80 mb-2">
                                            <span>{{ $loan->period_count }} {{ Str::plural($loan->period, $loan->period_count) }}</span>
                                            <span>{{ $loan->interest_rate }}% rente</span>
                                        </div>
                                        @if(isset($loan->borrower_name))
                                            <p class="text-sm text-white/80 mb-2">Aan: {{ $loan->borrower_name }}</p>
                                        @endif
                                        <div class="flex justify-between items-center mt-4">
                                            @if(!$loan->loaner_id)
                                            <a href="{{ route('loans.invite', $loan) }}" class="text-white bg-[#3E92CC] hover:bg-[#0A2463] transition-colors duration-200 flex items-center px-3 py-1 rounded-full">
                                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                                </svg>
                                                Uitnodigen
                                            </a>
                                            @endif
                                            <div class="flex space-x-2 ml-auto ">
                                                <a  href="{{ route('loans.show', $loan->id) }}" class="p-2 bg-[#3E92CC] text-white rounded-full hover:bg-[#0A2463] transition-colors duration-200">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </a>
                                                @if(!isset($loan->borrower_name))
                                                    <a class="p-2 bg-[#3E92CC] text-white rounded-full hover:bg-[#0A2463] transition-colors duration-200">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                        </svg>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="loan-details hidden mt-4 text-sm text-white/80">
                                            <p><strong>Startdatum:</strong> {{ \Carbon\Carbon::parse($loan->start_date)->format('d-m-Y') }}</p>
                                            <p><strong>Einddatum:</strong> {{ \Carbon\Carbon::parse($loan->end_date)->format('d-m-Y')}}</p>
                                            <p><strong>Beschrijving:</strong> {{ $loan->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center text-white">Je hebt nog geen leningen. Klik op 'Nieuwe Lening' om er een aan te maken.</p>
                            @endforelse
                        </div>
                        <div class="mt-4">
                            {{ $myLoans->links() }}
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
                            @forelse($givenLoans as $loan)
                                <div class="loan-card bg-white/20 backdrop-blur-md rounded-lg shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:bg-white/30">
                                    <div class="p-4">
                                        <div class="flex flex-col md:flex-row justify-between items-start mb-2">
                                            <h3 class="text-lg font-semibold text-white">{{ $loan->title }}</h3>
                                            <div class="md:mt-0 mt-2">
                                                <x-loan-status-badge :status="$loan->status" />
                                            </div>
                                        </div>
                                        <p class="text-2xl font-bold text-white mb-2">€{{ number_format($loan->amount, 2, ',', '.') }}</p>
                                        <div class="flex justify-between text-sm text-white/80 mb-2">
                                            <span>{{ $loan->period_count }} {{ Str::plural($loan->period, $loan->period_count) }}</span>
                                            <span>{{ $loan->interest_rate }}% rente</span>
                                        </div>
                                        @if(isset($loan->borrower_name))
                                            <p class="text-sm text-white/80 mb-2">Aan: {{ $loan->borrower_name }}</p>
                                        @endif
                                        <div class="flex justify-between items-center mt-4">
                                            <div class="flex space-x-2 ml-auto">
                                                <a href="{{ route('loans.show', $loan->id) }}" class="p-2 bg-[#3E92CC] text-white rounded-full hover:bg-[#0A2463] transition-colors duration-200">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                                    </svg>
                                                </a>
                                                @if(!isset($loan->borrower_name))
                                                    <a class="p-2 bg-[#3E92CC] text-white rounded-full hover:bg-[#0A2463] transition-colors duration-200">
                                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                        </svg>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="loan-details hidden mt-4 text-sm text-white/80">
                                            <p><strong>Startdatum:</strong> {{ \Carbon\Carbon::parse($loan->start_date)->format('d-m-Y') }}</p>
                                            <p><strong>Einddatum:</strong> {{ \Carbon\Carbon::parse($loan->end_date)->format('d-m-Y')}}</p>
                                            <p><strong>Beschrijving:</strong> {{ $loan->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="text-center text-white">Je hebt nog geen leningen verstrekt.</p>
                            @endforelse
                        </div>
                        <div class="mt-4">
                            {{ $givenLoans->links() }}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @push('scripts')
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
    @endpush
</x-app-layout>

