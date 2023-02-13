import { createRouter, createWebHistory } from 'vue-router';

// Pages

import TopPage from '@/views/page/top.vue'
import AboutPage from '@/views/page/about.vue'
import ProfilePage from '@/views/page/profile.vue'

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
        {
            path: '/profile',
            name: 'profile',
            component: ProfilePage,
        },
    ],
});

export default router;