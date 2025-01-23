<template>
  <div class="bg-white/20 backdrop-blur-md rounded-xl p-6 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/30">
    <h3 class="text-2xl font-semibold text-white mb-6">Betalingsgeschiedenis</h3>
    <div class="space-y-4">
      <div v-for="(payment, index) in paymentHistory" :key="index"
           class="bg-white/10 rounded-lg p-4 transition-all duration-300 hover:bg-white/20">
        <div class="flex items-center justify-between">
          <div class="flex items-center space-x-4">
            <div class="w-12 h-12 bg-green-400 rounded-full flex items-center justify-center">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <div>
              <div class="text-white font-medium">{{ formatDate(payment.date) }}</div>
              <div class="text-white/70 text-sm">{{ payment.time }}</div>
            </div>
          </div>
          <div class="text-right">
            <div class="text-white font-bold text-lg">€{{ formatAmount(payment.amount) }}</div>
            <div class="text-white/70 text-sm">Betaling {{ index + 1 }}</div>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-6 flex justify-between items-center">
      <div class="text-white">
        <div class="text-sm">Totaal betaald</div>
        <div class="text-2xl font-bold">€{{ formatAmount(totalPaid) }}</div>
      </div>
      <button @click="showAllPayments = !showAllPayments"
              class="bg-white/20 hover:bg-white/30 text-white font-medium py-2 px-4 rounded-full transition-all duration-300">
        {{ showAllPayments ? 'Toon minder' : 'Toon alles' }}
      </button>
    </div>
  </div>
</template>

<script>
import { ref, computed } from 'vue'

export default {
  props: {
    paymentHistory: {
      type: Array,
      required: true
    }
  },
  setup(props) {
    const showAllPayments = ref(false)

    const visiblePayments = computed(() => {
      return showAllPayments.value ? props.paymentHistory : props.paymentHistory.slice(0, 3)
    })

    const totalPaid = computed(() => {
      return props.paymentHistory.reduce((sum, payment) => sum + payment.amount, 0)
    })

    const formatDate = (dateString) => {
      const date = new Date(dateString)
      return date.toLocaleDateString('nl-NL', { day: '2-digit', month: '2-digit', year: 'numeric' })
    }

    const formatAmount = (amount) => {
      return amount.toFixed(2).replace('.', ',')
    }

    return {
      showAllPayments,
      visiblePayments,
      totalPaid,
      formatDate,
      formatAmount
    }
  }
}
</script>

