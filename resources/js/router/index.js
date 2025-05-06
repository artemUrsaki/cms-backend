import { createRouter, createWebHistory } from 'vue-router';
import HomePage from '../Pages/HomePage.vue'; // cesta k tvojej HomePage

const routes = [
  {
    path: '/',
    name: 'Home',
    component: HomePage,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
