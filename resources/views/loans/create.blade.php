<x-app-layout>
    <x-dashboard-navigation/>
    <x-mobile-dashboard-navigation/>
    <div class="min-h-screen bg-gradient-to-br from-[#0A2463] to-[#3E92CC] py-12 px-4 sm:px-6 lg:px-8 flex items-center justify-center">
        <div class="w-full max-w-4xl bg-white/10 backdrop-filter backdrop-blur-lg rounded-3xl shadow-2xl overflow-hidden">
            <div class="p-8 sm:p-12">
                <h2 class="text-4xl font-bold text-white mb-8 text-center">Creëer Je SnapPay Lening</h2>

                <form id="loanForm" action="{{ route('loans.store') }}" method="POST" class="space-y-8">
                    @csrf
                    <div class="loan-creation-path relative">
                        <!-- Stap 1: Titel en Bedrag -->
                        <div class="step-container" data-step="1">
                            <div class="step-circle bg-[#3E92CC] text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="step-content">
                                <h3 class="text-xl font-semibold mb-4 text-white">Basisinformatie</h3>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label for="title" class="block text-sm font-medium text-white mb-1">Titel van de lening</label>
                                        <input type="text" id="title" name="title" required class="w-full px-4 py-2 rounded-full border-0 bg-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-[#3E92CC] focus:bg-white/30 transition duration-300">
                                    </div>
                                    <div>
                                        <label for="amount" class="block text-sm font-medium text-white mb-1">Leningbedrag (€)</label>
                                        <input type="number" id="amount" name="amount" required step="0.01" class="w-full px-4 py-2 rounded-full border-0 bg-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-[#3E92CC] focus:bg-white/30 transition duration-300">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stap 2: Looptijd -->
                        <div class="step-container" data-step="2">
                            <div class="step-circle bg-[#3E92CC] text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="step-content">
                                <h3 class="text-xl font-semibold mb-4 text-white">Looptijd</h3>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label for="period" class="block text-sm font-medium text-white mb-1">Periode</label>
                                        <select id="period" name="period" required class="w-full px-4 py-2 rounded-full border-0 bg-white/20 text-white focus:ring-2 focus:ring-[#3E92CC] focus:bg-white/30 transition duration-300">
                                            <option value="weeks">Weken</option>
                                            <option value="months">Maanden</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="period_count" class="block text-sm font-medium text-white mb-1">Aantal periodes</label>
                                        <input type="number" id="period_count" name="period_count" required class="w-full px-4 py-2 rounded-full border-0 bg-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-[#3E92CC] focus:bg-white/30 transition duration-300">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stap 3: Rente -->
                        <div class="step-container" data-step="3">
                            <div class="step-circle bg-[#3E92CC] text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="step-content">
                                <h3 class="text-xl font-semibold mb-4 text-white">Rente</h3>
                                <div>
                                    <label for="interest_rate" class="block text-sm font-medium text-white mb-1">Rentepercentage (%)</label>
                                    <input type="number" id="interest_rate" name="interest_rate" step="0.01" class="w-full px-4 py-2 rounded-full border-0 bg-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-[#3E92CC] focus:bg-white/30 transition duration-300">
                                </div>
                            </div>
                        </div>

                        <!-- Stap 4: Beschrijving -->
                        <div class="step-container" data-step="4">
                            <div class="step-circle bg-[#3E92CC] text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                                </svg>
                            </div>
                            <div class="step-content">
                                <h3 class="text-xl font-semibold mb-4 text-white">Beschrijving</h3>
                                <div>
                                    <label for="description" class="block text-sm font-medium text-white mb-1">Geef een korte beschrijving van de lening</label>
                                    <textarea id="description" name="description" rows="3" required class="w-full px-4 py-2 rounded-2xl border-0 bg-white/20 text-white placeholder-white/50 focus:ring-2 focus:ring-[#3E92CC] focus:bg-white/30 transition duration-300 resize-none"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-between mt-8 gap-4 pb-20 sm:pb-0">
                        <a href="{{ route('loans') }}" class="w-full sm:w-auto px-6 py-3 bg-white/10 rounded-full text-white hover:bg-white/20 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-[#0A2463] transition duration-300 text-center">
                            Annuleren
                        </a>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <button type="submit" name="action" value="store" class="w-full sm:w-auto px-6 py-3 bg-[#0A2463] text-white rounded-full hover:bg-[#061845] focus:outline-none focus:ring-2 focus:ring-[#0A2463] focus:ring-offset-2 focus:ring-offset-[#3E92CC] transition duration-300">
                                Aanmaken
                            </button>
                            <button type="submit" name="action" value="store_and_invite" class="w-full sm:w-auto px-6 py-3 bg-[#3E92CC] text-white rounded-full hover:bg-[#2D6E99] focus:outline-none focus:ring-2 focus:ring-[#3E92CC] focus:ring-offset-2 focus:ring-offset-[#0A2463] transition duration-300">
                                Aanmaken & Uitnodigen
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .loan-creation-path {
            position: relative;
        }
        .loan-creation-path::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 20px;
            width: 2px;
            background-color: rgba(255, 255, 255, 0.3);
        }
        .step-container {
            position: relative;
            padding-left: 60px;
            margin-bottom: 2rem;
        }
        .step-circle {
            position: absolute;
            left: 0;
            top: 0;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            box-shadow: 0 0 0 5px rgba(255, 255, 255, 0.1);
        }
        .step-content {
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 1rem;
            padding: 1.5rem;
            transition: all 0.3s ease;
        }
        .step-container:hover .step-content {
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
            background-color: rgba(255, 255, 255, 0.15);
        }
    </style>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('loanForm');
                const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
                const stepContainers = document.querySelectorAll('.step-container');

                inputs.forEach(input => {
                    input.addEventListener('blur', function() {
                        validateInput(this);
                    });
                });

                form.addEventListener('submit', function(event) {
                    let isValid = true;
                    inputs.forEach(input => {
                        if (!validateInput(input)) {
                            isValid = false;
                        }
                    });

                    if (!isValid) {
                        event.preventDefault();
                    }
                });

                function validateInput(input) {
                    const stepContainer = input.closest('.step-container');
                    if (!input.value.trim()) {
                        showError(input, 'Dit veld is verplicht');
                        stepContainer.classList.add('error');
                        return false;
                    } else {
                        removeError(input);
                        stepContainer.classList.remove('error');
                        return true;
                    }
                }

                function showError(input, message) {
                    removeError(input);
                    const errorElement = document.createElement('p');
                    errorElement.className = 'text-red-300 text-xs mt-1';
                    errorElement.textContent = message;
                    input.parentNode.appendChild(errorElement);
                    input.classList.add('border-red-500');
                }

                function removeError(input) {
                    const errorElement = input.parentNode.querySelector('.text-red-300');
                    if (errorElement) {
                        errorElement.remove();
                    }
                    input.classList.remove('border-red-500');
                }

                // Voeg animatie toe aan de stappen
                stepContainers.forEach((container, index) => {
                    container.style.opacity = '0';
                    container.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        container.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                        container.style.opacity = '1';
                        container.style.transform = 'translateY(0)';
                    }, 100 * index);
                });
            });
        </script>
    @endpush
</x-app-layout>

