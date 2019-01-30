import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './views/App'
import Home from './views/Home'
import MenuComposition from './views/MenuComposition/MenuComposition.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Home,
            children: [
                {
                    path: 'menu-composition',
                    component: MenuComposition,
                    children: [
                        {
                            path: '/',
                            name: 'MenuComposition',
                        },
                    ],
                },
            ],
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
