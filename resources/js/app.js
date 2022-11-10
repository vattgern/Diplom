import './bootstrap';
import { createApp } from 'vue';
import MainComponent from "./components/layouts/MainComponent.vue";
import router from "./router";
import store from './store';

createApp(MainComponent)
    .use(router)
    .use(store)
    .mount('#app');
