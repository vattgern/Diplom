import {createRouter, createWebHistory} from "vue-router";
import WelcomeComponent from "./components/WelcomeComponent.vue";
import IndexComponent from "./components/IndexComponent.vue";
import RegistrationComponent from "./components/RegistrationComponent.vue";
import LoginComponent from "./components/LoginComponent.vue";
import CatalogComponent from "./components/layouts/Calalog/CatalogComponent.vue";
import FilmComponent from "./components/FilmComponent.vue";

export default createRouter({
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
        },
        {
            path: '/catalog',
            name: 'catalog',
            component: CatalogComponent
        },
        {
            path: '/film/:id',
            name: 'film',
            component: FilmComponent
        }
    ]
});
