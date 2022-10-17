import './bootstrap';
import { createApp } from 'vue';
import { createWebHistory,createRouter } from "vue-router";
// -------------------------------------------------
// Components
import MainComponent from "./components/layouts/MainComponent.vue";
import WelcomeComponent from './components/WelcomeComponent.vue';
import IndexComponent from "./components/IndexComponent.vue";
import RegistrationComponent from "./components/RegistrationComponent.vue";
import LoginComponent from "./components/LoginComponent.vue";

const router = createRouter({
   history: createWebHistory(),
   routes: [
       {
           path: '/',
           name: 'welcome',
           component: WelcomeComponent
       },
       {
           path: '/main',
           name: 'index',
           component: IndexComponent
       },
       {
           path: '/registration',
           name: 'registration',
           component: RegistrationComponent
       },
       {
           path: '/login',
           name: 'login',
           component: LoginComponent
       }
   ]
});
// router.beforeEach((to, from, next) => {
//     if (to.name !== 'welcome') {
//         next({ name: 'welcome' })
//     } else next()
// })
const app = createApp(MainComponent);
//app.component('example-component', WelcomeComponent);
// -------------------------------------------------
// -------------------------------------------------
app.use(router);
app.mount('#app');
