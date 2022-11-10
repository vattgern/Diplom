import {createRouter, createWebHistory} from "vue-router";
import WelcomeComponent from "./components/WelcomeComponent";
import IndexComponent from "./components/IndexComponent";
import RegistrationComponent from "./components/RegistrationComponent";
import LoginComponent from "./components/LoginComponent";


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
        }
    ]
});
