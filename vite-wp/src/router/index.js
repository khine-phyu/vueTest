import { createRouter, createWebHistory } from 'vue-router';

// Pages

import TopPage from '@/views/page/top.vue'
import AboutPage from '@/views/page/about.vue'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: TopPage,
        },
        {
            path: '/about',
            name: 'about',
            component: AboutPage,
        },
    ],
});

export default router;