import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';

// Import components

import App from './components/Header.vue';
  import PhotoList from './components/PhotoList.vue';
   import PhotoForm from './components/PhotoForm.vue';
// import Employee from './components/Employee.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: '/', component: PhotoList },
         { path: '/photo/create', component: PhotoForm },
        // { path: '/employee/:id', component: Employee },
          { path: '/photo/:id/edit', component: PhotoForm },
    ]
});
const app = createApp(App);
app.use(router);
app.mount('#app');
