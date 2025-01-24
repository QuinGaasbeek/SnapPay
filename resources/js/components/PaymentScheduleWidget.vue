<template>
  <div class="bg-white/20 backdrop-blur-md rounded-xl p-6 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/30">
    <h3 class="text-2xl font-semibold text-white mb-6">Betalingsschema</h3>
    <div class="mb-6">
      <div class="flex justify-between items-center">
        <div class="text-white">
          <div class="text-sm">Totaal betaald</div>
          <div class="text-2xl font-bold">€{{ formatAmount(totalPaid) }}</div>
        </div>
        <div class="text-white text-right">
          <div class="text-sm">Resterend bedrag</div>
          <div class="text-2xl font-bold">€{{ formatAmount(remainingAmount) }}</div>
        </div>
      </div>
      <div class="mt-2 h-2 bg-white/30 rounded-full overflow-hidden">
        <div class="h-full bg-green-400 rounded-full" :style="{ width: `${(totalPaid / totalAmount) * 100}%` }"></div>
      </div>
    </div>
    <div class="space-y-6">
      <template v-for="(group, groupIndex) in groupedPayments" :key="groupIndex">
        <div class="bg-white/10 rounded-xl p-4">
          <button @click="toggleGroup(groupIndex)" class="w-full flex justify-between items-center text-white mb-4">
            <span class="font-semibold">{{ getGroupTitle(group, groupIndex) }}</span>
            <svg :class="{'rotate-180': openGroups[groupIndex]}" class="w-5 h-5 transition-transform duration-200" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </button>
          <div v-show="openGroups[groupIndex]" class="space-y-4">
            <div v-for="(payment, index) in group" :key="payment.id" class="relative">
              <div class="flex items-center mb-2">
                <div class="w-10 h-10 rounded-full flex items-center justify-center mr-3 transition-all duration-300"
                     :class="getStatusClass(payment.status)">
                  <svg v-if="payment.status === 'Betaald'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  <svg v-else-if="payment.status === 'Open'" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                  <svg v-else class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                  </svg>
                </div>
                <div class="flex-grow">
                  <div class="text-sm font-medium text-white">{{ formatDate(payment.due_date) }}</div>
                  <div class="text-xs text-white/70">Termijn {{ getPaymentNumber(groupIndex, index) }}</div>
                  <div v-if="payment.interest" class="text-xs text-blue-300 mt-0.5">
                    Rente: €{{ formatAmount(payment.interest) }}
                  </div>
                </div>
                <div class="text-right">
                  <div class="text-sm font-medium text-white">€{{ formatAmount(payment.need_to_pay) }}</div>
                  <div class="text-xs" :class="getStatusTextClass(payment.status)">{{ payment.status }}</div>
                </div>
              </div>
              <div class="ml-11 h-2 bg-white/30 rounded-full overflow-hidden">
                <div class="h-full rounded-full transition-all duration-500"
                     :class="getProgressBarClass(payment.status)"
                     :style="{ width: `${(payment.amount / payment.need_to_pay) * 100}%` }"></div>
              </div>
              <div v-if="index < group.length - 1" class="absolute left-5 top-10 bottom-0 w-0.5 bg-white/30"></div>
            </div>
          </div>
        </div>
      </template>
    </div>
  </div>
</template>

<script>
import { ref, computed, onMounted } from 'vue'

export default {
  props: {
    paymentSchedule: {
      type: Array,
      required: true
    },
    // period: {
    //   type: String,
    //   required: true,
    //   validator: (value) => ['weeks', 'months'].includes(value)
    // }
  },
  setup(props) {
    const openGroups = ref({})

    const period = computed(() => {
      if (props.paymentSchedule.length > 0 && props.paymentSchedule[0].period) {
        return props.paymentSchedule[0].period;
      }
      return 'months'; // Default to months if not specified
    });

    const groupSize = computed(() => period.value === 'weeks' ? 4 : 6);

    const groupedPayments = computed(() => {
      const groups = []
      for (let i = 0; i < props.paymentSchedule.length; i += groupSize.value) {
        groups.push(props.paymentSchedule.slice(i, i + groupSize.value))
      }
      return groups
    })

    const totalAmount = computed(() => {
      return props.paymentSchedule.reduce((sum, payment) => sum + payment.need_to_pay, 0)
    })

    const totalPaid = computed(() => {
      return props.paymentSchedule.reduce((sum, payment) => sum + payment.amount, 0)
    })

    const remainingAmount = computed(() => {
      return totalAmount.value - totalPaid.value
    })

    const formatDate = (dateString) => {
      const date = new Date(dateString)
      return date.toLocaleDateString('nl-NL', { day: '2-digit', month: '2-digit', year: 'numeric' })
    }

    const formatAmount = (amount) => {
      return amount.toFixed(2).replace('.', ',')
    }

    const getStatusClass = (status) => {
      switch(status) {
        case 'Betaald':
          return 'bg-green-400 hover:bg-green-500'
        case 'Open':
          return 'bg-yellow-400 hover:bg-yellow-500'
        default:
          return 'bg-red-400 hover:bg-red-500'
      }
    }

    const getStatusTextClass = (status) => {
      switch(status) {
        case 'Betaald':
          return 'text-green-400'
        case 'Open':
          return 'text-yellow-400'
        default:
          return 'text-red-400'
      }
    }

    const getProgressBarClass = (status) => {
      switch(status) {
        case 'Betaald':
          return 'bg-green-400'
        case 'Open':
          return 'bg-yellow-400'
        default:
          return 'bg-red-400'
      }
    }

    const toggleGroup = (groupIndex) => {
      openGroups.value[groupIndex] = !openGroups.value[groupIndex]
    }

    const getGroupTitle = (group, groupIndex) => {
      const startDate = formatDate(group[0].due_date)
      const endDate = formatDate(group[group.length - 1].due_date)
      const startPayment = groupIndex * groupSize.value + 1
      const endPayment = Math.min((groupIndex + 1) * groupSize.value, props.paymentSchedule.length)
      return `Termijnen ${startPayment}-${endPayment} (${startDate} - ${endDate})`
    }

    const getPaymentNumber = (groupIndex, index) => {
      return groupIndex * groupSize.value + index + 1
    }

    onMounted(() => {
      // Open the first group by default
      openGroups.value[0] = true
      console.log('PaymentScheduleWidget mounted')
    })

    return {
      openGroups,
      groupedPayments,
      totalAmount,
      totalPaid,
      remainingAmount,
      formatDate,
      formatAmount,
      getStatusClass,
      getStatusTextClass,
      getProgressBarClass,
      toggleGroup,
      getGroupTitle,
      getPaymentNumber
    }
  }
}
</script>

