<template>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <div v-for="(stat, index) in stats" :key="index"
             class="bg-white/10 backdrop-blur-md rounded-2xl p-6 shadow-xl hover:shadow-2xl transition-all duration-300">
            <h3 class="text-xl font-semibold mb-2">{{ stat.title }}</h3>
            <p class="text-3xl font-bold mb-1">{{ stat.value }}</p>
            <p class="text-sm opacity-80">{{ stat.description }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'statistics-grid',
    props: {
        stats: {
            type: Array,
            required: true
        }
    }
}
</script>
