
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import 'es6-promise/auto';
import VueRouter from 'vue-router';
import Vuex from 'vuex';


Vue.use(VueRouter);
Vue.use(Vuex);

import App from './views/App';
import Home from './views/Home';
import Profile from './views/Profile';
import Login from './views/Login';
import Register from './views/Register';
import AdminDashboard from './views/AdminDashboard';

const router = new VueRouter({
    mode: 'history',
    linkActiveClass: "uk-active",
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/login',
            name: 'login',
            component: Login,
        },
        {
            path: '/register',
            name: 'register',
            component: Register,
        },
        {
            path: '/profile',
            name: 'profile',
            component: Profile,
        },
        {
            path: '/admindashboard',
            name: 'admindashboard',
            component: AdminDashboard,
        },
    ],
});

const store = new Vuex.Store({
    state: {
        user: false,
        csrf: false
    },
    mutations: {
        startup(state, payload) {
            state.user = payload.user;
            state.csrf = payload.csrf;
        }
    }
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {App},
    router,
    store
});
