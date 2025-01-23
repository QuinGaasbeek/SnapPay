import './bootstrap';
import { createApp, ref } from 'vue';
import HomePage from './components/HomePage.vue';
import Dashboard from './components/dashboard.vue';
import StatisticsGrid from './components/statistics-grid.vue';
import PaymentScheduleWidget from "./components/PaymentScheduleWidget.vue";
import PaymentHistory from "./components/PaymentHistoryWidget.vue";
import BankCard from "./components/BankCard.vue";
import LoanDetails from "./components/LoanDetails.vue";

const app = createApp();

app.component('homepage', HomePage);
app.component('dashboard', Dashboard);
app.component('statistics-grid', StatisticsGrid);
app.component('payment-schedule-widget', PaymentScheduleWidget);
app.component('payment-history-widget', PaymentHistory);
app.component('bank-card', BankCard);
app.component('loan-details', LoanDetails);

app.mount('#app');

