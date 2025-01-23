import './bootstrap';
import { createApp, ref } from 'vue';
import HomePage from './components/HomePage.vue';
import Dashboard from './components/dashboard.vue';
import StatisticsGrid from './components/statistics-grid.vue';

const app = createApp();

app.component('homepage', HomePage);
app.component('dashboard', Dashboard);
app.component('statistics-grid', StatisticsGrid);

app.mount('#app');

