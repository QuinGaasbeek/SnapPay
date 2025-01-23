<x-app-layout>
    <div class="min-h-screen bg-gradient-to-br from-[#0A2463] to-[#3E92CC] py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Verbeterde achtergrond elementen -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-16 -left-16 w-64 h-64 bg-white opacity-10 rounded-full filter blur-3xl"></div>
            <div class="absolute top-1/3 -right-32 w-96 h-96 bg-white opacity-5 rounded-full filter blur-3xl"></div>
            <div class="absolute -bottom-24 left-1/4 w-72 h-72 bg-white opacity-10 rounded-full filter blur-3xl"></div>
        </div>

        <div class="max-w-5xl mx-auto relative z-10">
            <div class="bg-white/10 backdrop-blur-md rounded-3xl shadow-2xl overflow-hidden">
                <div class="p-8 sm:p-12">
                    <h2 class="text-4xl font-bold text-white mb-8 text-center">Word lid van SnapPay</h2>

                    <!-- Voortgangsindicator -->
                    <div class="mb-12 relative">
                        <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-white/20">
                            <div style="width:50%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-white"></div>
                        </div>
                        <div class="flex justify-between text-sm text-white/80">
                            <span>Account gegevens</span>
                            <span>Bevestiging</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <!-- Leningdetails sectie -->
                        <div class="space-y-6">
                            <h3 class="text-2xl font-semibold text-white mb-6">Leningdetails</h3>
                            <div class="bg-white/5 backdrop-blur-sm rounded-xl p-6 shadow-lg transition-all duration-300 hover:bg-white/10">
                                <h4 class="text-xl font-medium text-white mb-4">{{ $loan->title }}</h4>
                                <div class="space-y-2 text-white/90">
                                    <p class="flex justify-between">
                                        <span>Bedrag:</span>
                                        <span class="font-semibold">€{{ number_format($loan->amount, 2, ',', '.') }}</span>
                                    </p>
                                    <p class="flex justify-between">
                                        <span>Looptijd:</span>
                                        <span class="font-semibold">{{ $loan->period_count }} {{ Str::plural($loan->period, $loan->period_count) }}</span>
                                    </p>
                                </div>
                                <p class="mt-4 text-white/80 text-sm">{{ Str::limit($loan->description, 100) }}</p>
                            </div>
                            <p class="text-white/80 text-sm italic">Maak een account aan om alle details van de lening te bekijken en deel te nemen.</p>
                        </div>

                        <!-- Registratie formulier -->
                        <div>
                            <h3 class="text-2xl font-semibold text-white mb-6">Registratie</h3>
                            <form method="POST" action="{{ route('register.invite.create') }}" class="space-y-6">
                                @csrf
                                <input type="hidden" name="loan_id" value="{{ $loan->id }}">

                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label for="first_name" class="block text-sm font-medium text-white/90 mb-1">Voornaam</label>
                                        <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus class="w-full px-4 py-2 rounded-lg border border-white/30 bg-white/20 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/50 transition duration-200">
                                        @error('first_name')
                                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="last_name" class="block text-sm font-medium text-white/90 mb-1">Achternaam</label>
                                        <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required class="w-full px-4 py-2 rounded-lg border border-white/30 bg-white/20 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/50 transition duration-200">
                                        @error('last_name')
                                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-white/90 mb-1">E-mailadres</label>
                                    <input id="email" type="email" name="email" value="{{ $email }}" required readonly class="w-full px-4 py-2 rounded-lg border border-white/30 bg-white/20 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/50 transition duration-200">
                                    @error('email')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="iban" class="block text-sm font-medium text-white/90 mb-1">
                                        IBAN <span class="text-white/50 text-xs">(optioneel)</span>
                                    </label>
                                    <input id="iban" type="text" name="iban" value="{{ old('iban') }}" class="w-full px-4 py-2 rounded-lg border border-white/30 bg-white/20 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/50 transition duration-200" placeholder="NL00 BANK 0123 4567 89">
                                    <p class="mt-1 text-sm text-white/70">We gebruiken je IBAN alleen voor het verwerken van betalingen gerelateerd aan je leningen.</p>
                                    @error('iban')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="password" class="block text-sm font-medium text-white/90 mb-1">Wachtwoord</label>
                                    <input id="password" type="password" name="password" required class="w-full px-4 py-2 rounded-lg border border-white/30 bg-white/20 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/50 transition duration-200">
                                    @error('password')
                                    <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="password_confirmation" class="block text-sm font-medium text-white/90 mb-1">Bevestig wachtwoord</label>
                                    <input id="password_confirmation" type="password" name="password_confirmation" required class="w-full px-4 py-2 rounded-lg border border-white/30 bg-white/20 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/50 transition duration-200">
                                </div>

                                <div class="flex items-center">
                                    <input id="terms" type="checkbox" name="terms" required class="rounded border-white/30 text-[#3E92CC] focus:ring-[#3E92CC] bg-white/20">
                                    <label for="terms" class="ml-2 block text-sm text-white/90">
                                        Ik ga akkoord met de <a href="#" class="text-white hover:underline">voorwaarden</a>
                                    </label>
                                </div>
                                @error('terms')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                                @enderror

                                <div>
                                    <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-lg font-medium text-[#0A2463] bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#3E92CC] transition-colors duration-200">
                                        Registreren en lening bekijken
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <p class="text-white/80 text-center mt-8">
                        Heb je al een account?
                        <a href="{{ route('login') }}" class="font-medium text-white hover:underline transition duration-200">Log hier in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .optional-field {
        position: relative;
    }
    .optional-field::after {
        content: 'Optioneel';
        position: absolute;
        top: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.75rem;
        padding: 0.1rem 0.5rem;
        border-radius: 0.25rem;
    }
</style>

