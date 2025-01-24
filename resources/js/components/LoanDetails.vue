<template>
  <div class="loan-details-widget bg-white/10 backdrop-blur-md rounded-2xl p-6 shadow-lg transition-all duration-300 hover:shadow-xl hover:bg-white/15">
    <h3 class="text-2xl font-bold text-white mb-6">Leningdetails</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="col-span-1 md:col-span-2">
        <div class="bg-white/20 rounded-xl p-4 space-y-4">
          <template v-if="loan.interest_rate > 0">
            <div class="flex items-center justify-between">
              <span class="text-white/80 text-lg">Oorspronkelijk bedrag</span>
              <span class="text-white text-2xl font-bold">{{ formatCurrency(loan.amount) }}</span>
            </div>
            <div class="h-px bg-white/10"></div>
            <div class="flex items-center justify-between">
              <span class="text-white/80 text-lg">Totaal bedrag (incl. rente)</span>
              <span class="text-white text-2xl font-bold">{{ formatCurrency(totalAmount) }}</span>
            </div>
          </template>
          <template v-else>
            <div class="flex items-center justify-between">
              <span class="text-white/80 text-lg">Totaal bedrag</span>
              <span class="text-white text-2xl font-bold">{{ formatCurrency(loan.amount) }}</span>
            </div>
          </template>
        </div>
      </div>
      <div v-for="(detail, key) in basicDetails" :key="key" class="detail-item bg-white/5 rounded-xl p-4 transition-all duration-300 hover:bg-white/10">
        <div class="flex items-center justify-between">
          <span class="text-white/70">{{ detail.label }}</span>
          <span class="text-white font-medium">{{ detail.value }}</span>
        </div>
      </div>
      <div class="col-span-1 md:col-span-2 bg-white/5 rounded-xl p-4">
        <div class="space-y-4">
          <div class="flex items-center justify-between">
            <span class="text-white/70">Startdatum</span>
            <span class="text-white font-medium">{{ formatDate(loan.start_date) }}</span>
          </div>
          <div class="h-px bg-white/10"></div>
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <span class="text-white/70">Einddatum</span>
              <span v-if="!loan.end_date" class="bg-white/20 text-white/60 text-xs px-2 py-1 rounded-full">
                Verwacht
              </span>
            </div>
            <span class="text-white font-medium">{{ endDateDisplay }}</span>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-6">
      <div class="bg-white/5 rounded-xl p-4">
        <h4 class="text-lg font-semibold text-white mb-2">Beschrijving</h4>
        <p class="text-white/80">{{ loan.description }}</p>
      </div>
    </div>
    <div class="mt-6 flex justify-between items-center">
      <button @click="toggleBorrower" class="bg-white/20 hover:bg-white/30 text-white px-4 py-2 rounded-full transition-all duration-300">
        {{ showBorrower ? 'Verberg lener' : 'Toon lener' }}
      </button>
    </div>
    <transition name="fade">
      <div v-if="showBorrower" class="mt-6">
        <h4 class="text-lg font-semibold text-white mb-2">Lenergegevens</h4>
        <div class="space-y-2">
          <div class="bg-white/5 rounded-lg p-3 flex justify-between items-center">
            <span class="text-white/80">Naam</span>
            <span class="text-white font-medium">{{ borrower.first_name }} {{ borrower.last_name }}</span>
          </div>
          <div class="bg-white/5 rounded-lg p-3 flex justify-between items-center">
            <span class="text-white/80">E-mail</span>
            <span class="text-white font-medium">{{ borrower.email }}</span>
          </div>
          <div class="bg-white/5 rounded-lg p-3 flex justify-between items-center">
            <span class="text-white/80">IBAN</span>
            <span class="text-white font-medium">{{ borrower.iban }}</span>
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
import { ref, computed } from 'vue';

export default {
  name: 'LoanDetailsWidget',
  props: {
    loan: {
      type: Object,
      required: true
    },
    borrower: {
      type: Object,
      required: true
    }
  },
  setup(props) {
    const showBorrower = ref(false);

    const formatCurrency = (value) => {
      return new Intl.NumberFormat('nl-NL', { style: 'currency', currency: 'EUR' }).format(value);
    };

    const formatDate = (dateString) => {
      return dateString
          ? new Date(dateString).toLocaleDateString('nl-NL', {
            day: '2-digit',
            month: '2-digit',
            year: 'numeric'
          })
          : 'Niet bepaald';
    };

    const capitalizeFirstLetter = (string) => {
      return string.charAt(0).toUpperCase() + string.slice(1);
    };

    // Bereken het totale bedrag inclusief rente
    const totalAmount = computed(() => {
      if (!props.loan.interest_rate || props.loan.interest_rate <= 0) return props.loan.amount;

      // Formule: Total = Loan Amount * (1 + Interest Rate / 100)
      const totalWithInterest = props.loan.amount * (1 + props.loan.interest_rate / 100);

      // Afronden naar 2 decimalen
      return Math.round(totalWithInterest * 100) / 100;
    });

    // Bereken het bedrag per termijn
    const amountPerPeriod = computed(() => {
      if (!props.loan.period_count || props.loan.period_count <= 0) return 'N/A';

      const perPeriodAmount = totalAmount.value / props.loan.period_count;

      // Afronden naar 2 decimalen
      return formatCurrency(Math.round(perPeriodAmount * 100) / 100);
    });

    const endDateDisplay = computed(() => {
      if (props.loan.end_date) {
        return formatDate(props.loan.end_date);
      }
      const startDate = new Date(props.loan.start_date);
      if (props.loan.period === 'months') {
        startDate.setMonth(startDate.getMonth() + props.loan.period_count);
      } else {
        startDate.setDate(startDate.getDate() + props.loan.period_count * 7);
      }
      return formatDate(startDate);
    });

    const basicDetails = computed(() => ({
      interestRate: {
        label: 'Rente',
        value: `${props.loan.interest_rate}%`
      },
      duration: {
        label: 'Looptijd',
        value: `${props.loan.period_count} ${
            props.loan.period === 'months' ? 'maanden' : 'weken'
        }`
      },
    }));

    const statusColor = computed(() => {
      const colors = {
        pending: 'text-yellow-400',
        active: 'text-green-400',
        completed: 'text-blue-400',
        defaulted: 'text-red-400'
      };
      return colors[props.loan.status] || 'text-gray-400';
    });

    const toggleBorrower = () => {
      showBorrower.value = !showBorrower.value;
    };

    return {
      showBorrower,
      formatCurrency,
      formatDate,
      capitalizeFirstLetter,
      totalAmount,
      amountPerPeriod,
      endDateDisplay,
      basicDetails,
      statusColor,
      toggleBorrower
    };
  }
};
</script>


<style scoped>
.loan-details-widget {
  max-width: 600px;
  margin: 0 auto;
}

.detail-item {
  transition: all 0.3s ease;
}

.detail-item:hover {
  transform: translateY(-2px);
}

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from, .fade-leave-to {
  opacity: 0;
}
</style>

