import './bootstrap';
import { createApp } from 'vue';
import MainComponent from "./components/layouts/MainComponent.vue";
import router from "./router.js";
import store from './store.js';

createApp(MainComponent)
    .use(router)
    .use(store)
    .mount('#app');
