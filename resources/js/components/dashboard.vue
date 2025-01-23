<template>
    <div class="min-h-screen bg-gradient-to-br from-[#0A2463] to-[#3E92CC] text-white py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <!-- Isometrische 3D-elementen op de achtergrond -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-20 -left-20 w-80 h-80 bg-white/10 rounded-3xl transform rotate-45 animate-float-slow"></div>
            <div class="absolute top-1/4 -right-20 w-60 h-60 bg-white/5 rounded-3xl transform -rotate-12 animate-float-slow" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/3 left-1/4 w-40 h-40 bg-white/5 rounded-3xl transform rotate-12 animate-float-slow" style="animation-delay: 1s;"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <h1 class="text-4xl font-extrabold mb-8 text-center">Welkom terug, {{ user.full_name }}!</h1>

            <!-- Gebruikersinfo en snelle acties -->
            <div class="bg-white/10 backdrop-blur-md rounded-2xl shadow-xl p-6 mb-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div>
                      <bank-card
                          :iban="user.iban"
                          :name="`${user.first_name[0]}. ${user.last_name}`"
                      />
                    </div>
                    <div class="mt-4 md:mt-0 space-x-4">
                        <button class="bg-white text-[#0A2463] px-6 py-3 rounded-full font-medium hover:bg-opacity-90 transition-all duration-300">
                            Nieuwe Lening
                        </button>
                        <button class="bg-[#3E92CC] text-white px-6 py-3 rounded-full font-medium hover:bg-opacity-90 transition-all duration-300">
                            Start Spaarpotje
                        </button>
                    </div>
                </div>
            </div>

            <statistics-grid :stats="stats"></statistics-grid>

        </div>
    </div>
</template>

<script>
import StatisticsGrid from './statistics-grid.vue';

export default {
    name: 'Dashboard',
    components: {
        StatisticsGrid
    },
    props: {
        user: {
            type: Object,
            required: true
        },
        stats: {
            type: Array,
            required: true
        }
    }
}
</script>

<style scoped>
@keyframes float-slow {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    25% { transform: translate(10px, 10px) rotate(5deg); }
    50% { transform: translate(0, 20px) rotate(0deg); }
    75% { transform: translate(-10px, 10px) rotate(-5deg); }
}

.animate-float-slow {
    animation: float-slow 20s ease-in-out infinite;
}
</style>
